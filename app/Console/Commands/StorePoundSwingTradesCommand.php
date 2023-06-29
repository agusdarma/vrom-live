<?php

namespace App\Console\Commands;
use App\Models\SessionMyfxbook;
use Illuminate\Console\Command;
use App\Models\PoundSwingTrades;
use App\Models\SummaryPoundSwingTrades;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class StorePoundSwingTradesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store-pound-swing-trades-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command insert/store pound swing trades from myfxbook';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $controllerName = $this->getName(); 
        Log::info('[{controllerName}] scheduler starting  ',['controllerName' => $controllerName]);
        // Scheduler Get Data Trading
        try{
            // login untuk mendapatkan session            
            $sessionMyfxbooks = SessionMyfxbook::all();
            if($sessionMyfxbooks->isEmpty()){                
                $respSessionLogin = loginMyfxbook('agusdk2011@gmail.com','r4H4s14181014'); 
                // dd($respSessionLogin); 
                if($respSessionLogin != null){
                    $sessionMyfxbookDb = SessionMyfxbook::where('session', '=', $respSessionLogin)->first();
                    if($sessionMyfxbookDb == null){
                        $sessionMyfxbook = new SessionMyfxbook();
                        $sessionMyfxbook->session = $respSessionLogin;                    
                        $sessionMyfxbook->save();   
                    }else{
                        $sessionMyfxbookDb->session = $respSessionLogin;
                        $sessionMyfxbookDb->save();   
                    }
                } 
                 
            }
            $sessionMyfxbooks = SessionMyfxbook::all();
            $sessionToken = null;
            foreach ($sessionMyfxbooks as $sess) {
                $sessionToken = $sess->session;
            }
            if($sessionToken != null){        
                $listHistory = getHistoryById($sessionToken,'10254470');
                if($listHistory != null){
                    foreach ($listHistory as $history) {                               
                        $openTime = $history['openTime'];
                        $closeTime = $history['closeTime'];
                        $symbol = $history['symbol'];
                        $action = $history['action'];
                        $openPrice = $history['openPrice'];
                        $tpPrice = $history['tp'];
                        $slPrice = $history['sl'];
                        $pips = $history['pips'];                                
                        $comment = $history['comment'];                                
                        $pipsFloat = floatval($pips);
                        if($pipsFloat > 0){
                            $result = "TP";
                        }else{
                            $result = "SL";
                        }
                        if($action == 'Deposit'||$action == 'Withdrawal'){
                            continue;
                        }    
                            
                        $word = "POUNDS SWING MASTER";
                        $word2 = "GbpUsd"; 
                        if(strpos($comment, $word) == false){
                            if(strpos($comment, $word2) == false){
                                continue;
                            }                                    
                        }                                                                                               

                        $poundSwingTrade = PoundSwingTrades::where('open_time', '=', $openTime)
                        ->where('open_price', '=', $openPrice)->first();
                        if($poundSwingTrade == null){
                            Log::info('new data found, inserting to db');
                            $poundSwingTrade = new PoundSwingTrades();
                            $poundSwingTrade->open_time=$openTime;
                            $poundSwingTrade->close_time=$closeTime;
                            $poundSwingTrade->symbol=$symbol;
                            $poundSwingTrade->action=$action;
                            $poundSwingTrade->open_price=$openPrice;
                            $poundSwingTrade->tp_price=$tpPrice;
                            $poundSwingTrade->sl_price=$slPrice;
                            $poundSwingTrade->pips=$pips;
                            $poundSwingTrade->result=$result;
                            $poundSwingTrade->save();                            
                        }else{
                            // Log::info('duplicate data, skipped');
                        }                        
                    }
                }

            }
            
            SummaryPoundSwingTrades::where('name', '=', 'pound')->delete();    
            $summaryPoundSwingTrades = SummaryPoundSwingTrades::where('name', '=', 'pound')->first();
            if($summaryPoundSwingTrades == null){
                $summaryPoundSwingTrades = new SummaryPoundSwingTrades();
                $summaryPoundSwingTrades->name='pound';
                $summaryPoundSwingTrades->save();
            }

            // Calculate Total Trade
            $totalTrade = PoundSwingTrades::all()->count();
            // Log::info('totalTrade : {totalTrade}',['totalTrade' => $totalTrade]);
            $summaryPoundSwingTrades->total_trades = $totalTrade;
            // Calculate Probability
            $tpCount = PoundSwingTrades::where('result', '=', 'TP')->count();
            $probability = number_format((floatval($tpCount)/floatval($totalTrade)) * 100, 2) ;           
            // Log::info('probability : {probability}',['probability' => $probability]);
            $summaryPoundSwingTrades->probability = $probability;
            // Avg Risk Reward
            // di order supaya akurat untuk hitung consecutive profit dan loss
            $poundSwingTrades = PoundSwingTrades::orderBy('close_time')->get();     
            $countData = intval(0);
            $rr = floatval(0);
            foreach ($poundSwingTrades as $poundSwingTrade) {
                $countData = intval($countData+1);
                $action = $poundSwingTrade->action;
                // Log::info('action : {action}',['action' => $action]);
                if($action == 'Buy' ){
                    $tp_price = $poundSwingTrade->tp_price;    
                    $sl_price = $poundSwingTrade->sl_price;    
                    $open_price = $poundSwingTrade->open_price;    
                    $reward = $tp_price - $open_price;
                    $risk = $open_price - $sl_price;
                    $rrTemp = floatval($risk/$reward);
                    $rr = $rr + $rrTemp;
                }else if($action == 'Sell' ){
                    $tp_price = $poundSwingTrade->tp_price;    
                    $sl_price = $poundSwingTrade->sl_price;    
                    $open_price = $poundSwingTrade->open_price;
                    $reward = $open_price - $tp_price;
                    $risk = $sl_price - $open_price;
                    $rrTemp = floatval($risk/$reward);
                    $rr = $rr + $rrTemp;
                }
                
            }
            $rrReal = number_format(floatval($rr) / floatval($countData), 2);
            // Log::info('Avg Risk Reward : {rrReal}',['rrReal' => $rrReal]);
            $summaryPoundSwingTrades->risk_reward = $rrReal;
            // Avg Holding Period
            $countData = intval(0);
            $holdingPeriod = floatval(0);
            foreach ($poundSwingTrades as $poundSwingTrade){
                $countData = intval($countData+1);
                $open_time = $poundSwingTrade->open_time; 
                $close_time = $poundSwingTrade->close_time; 
                $startTime = Carbon::parse($open_time);
                $endTime = Carbon::parse($close_time);
                $totalDuration = $endTime->diffInMinutes($startTime);
                $holdingPeriod = intval($holdingPeriod) + intval($totalDuration);
            }            
            $holdingPeriod = number_format(intval($holdingPeriod)/ intval($countData),0);
            // Log::info('Avg Holding Period : {holdingPeriod} Minutes',['holdingPeriod' => $holdingPeriod]);
            $summaryPoundSwingTrades->holding_period = $holdingPeriod;
            // Total Pips
            $totalPips = floatval(0);
            foreach ($poundSwingTrades as $poundSwingTrade){
                $pips = $poundSwingTrade->pips; 
                $totalPips = number_format($totalPips + floatval($pips),2);
            }
            // Log::info('Total Pips : {totalPips}',['totalPips' => $totalPips]); 
        $summaryPoundSwingTrades->total_pips = $totalPips;
        // AVG PIPS / TRADE  
        $avgPipsTrade = number_format($totalPips / $countData,2);
        // Log::info('AVG Pips / Trade : {avgPipsTrade}',['avgPipsTrade' => $avgPipsTrade]);   
        $summaryPoundSwingTrades->avg_pips_trade = $avgPipsTrade;
        
        // AVG PIPS / Monthly
        $lastTrade = PoundSwingTrades::all()->last();
        $firstTrade = PoundSwingTrades::all()->first();
        $firstCloseTime = $firstTrade->close_time; 
        $lastCloseTime = $lastTrade->close_time; 
        $startTime = Carbon::parse($firstCloseTime);
        $endTime = Carbon::parse($lastCloseTime);
        $totalMonth = $endTime->diffInMonths($startTime);
        if($totalMonth == 0){
            $totalMonth = 1;
        }
        $avgPipsTradeMonthly = number_format($totalPips / $totalMonth,2);            
        // Log::info('AVG Pips / Monthly : {avgPipsTradeMonthly}',['avgPipsTradeMonthly' => $avgPipsTradeMonthly]);  
        $summaryPoundSwingTrades->avg_pips_month = $avgPipsTradeMonthly; 
        
        // AVG PIPS / Year
        $lastTrade = PoundSwingTrades::all()->last();
        $firstTrade = PoundSwingTrades::all()->first();
        $firstCloseTime = $firstTrade->close_time; 
        $lastCloseTime = $lastTrade->close_time; 
        $startTime = Carbon::parse($firstCloseTime);
        $endTime = Carbon::parse($lastCloseTime);
        $totalYear = $endTime->diffInYears($startTime);
        if($totalYear == 0){
            $totalYear = 1;
        }
        $avgPipsTradeYear = number_format($totalPips / $totalYear,2);
        // Log::info('AVG Pips / Yearly : {avgPipsTradeYear}',['avgPipsTradeYear' => $avgPipsTradeYear]); 
        $summaryPoundSwingTrades->avg_pips_year = $avgPipsTradeYear; 
        // $summaryPoundSwingTrades->save();

        // Consecutive Profit
        $consProfit = intval(0);
        
        foreach ($poundSwingTrades as $poundSwingTrade){                
            $result = $poundSwingTrade->result; 
            // Log::info('result : {result}',['result' => $result]);   
            if($result == 'TP'){
                $consProfit = $consProfit + 1;
                $profitExisting = $summaryPoundSwingTrades->consecutive_profit;                    
            }else {
                $consProfit = 0;
                $profitExisting = $summaryPoundSwingTrades->consecutive_profit;                    
            }    
            // Log::info('consProfit : {consProfit}',['consProfit' => $consProfit]);   
            // Log::info('profitExisting : {profitExisting}',['profitExisting' => $profitExisting]);   
            $profitExisting = $summaryPoundSwingTrades->consecutive_profit;
            if($profitExisting < $consProfit){
                // Log::info('save');   
                $summaryPoundSwingTrades->consecutive_profit = $consProfit;
                $summaryPoundSwingTrades->save();                            
            }
                                  
        } 
        // Consecutive Loss
        $consLoss = intval(0);
        foreach ($poundSwingTrades as $poundSwingTrade){
            $result = $poundSwingTrade->result; 
            // Log::info('result : {result}',['result' => $result]);
            if($result == 'SL'){
                $consLoss = $consLoss + 1;
                $lossExisting = $summaryPoundSwingTrades->consecutive_loss;                    
            }else {
                $consLoss = 0;
                $lossExisting = $summaryPoundSwingTrades->consecutive_loss;                    
            } 
            // Log::info('consLoss : {consLoss}',['consLoss' => $consLoss]);   
            // Log::info('lossExisting : {lossExisting}',['lossExisting' => $lossExisting]);
            $lossExisting = $summaryPoundSwingTrades->consecutive_loss;
            if($lossExisting < $consLoss){
                // Log::info('save');   
                $summaryPoundSwingTrades->consecutive_loss = $consLoss;
                $summaryPoundSwingTrades->save();                            
            }
        }
        // Update SummaryPoundSwingTrades
        $summaryPoundSwingTrades->save(); 
              
        }catch(\Exception $e) {                
            Log::error('Exception error get history : {message}  ',['message' => $e->getMessage()]);
        }
               

        Log::info('[{controllerName}] scheduler  ended  ',['controllerName' => $controllerName]);

    }
}

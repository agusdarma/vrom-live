<?php

namespace App\Console\Commands;

use GuzzleHttp\Psr7;
use App\Models\EuroTrades;
use App\Models\SessionMyfxbook;
use Illuminate\Console\Command;
use App\Models\SummaryEuroTrades;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon;

class StoreEuroTradesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store-euro-trades-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command insert/store euro trades from myfxbook';

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
                $listHistory = getHistoryById($sessionToken,'10224975');
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
                            
                        $word = "EURO SWING MASTER";
                        $word2 = "EurUsd"; 

                        if(stripos($comment, $word) !== false){
                            if(stripos($comment, $word2) !== false){                                
                                continue;
                            }
                        }
                                                                                                                     

                        $euroTrade = EuroTrades::where('open_time', '=', $openTime)
                        ->where('open_price', '=', $openPrice)->first();
                        if($euroTrade == null){
                            Log::info('new data found, inserting to db');
                            $euroTrade = new EuroTrades();
                            $euroTrade->open_time=$openTime;
                            $euroTrade->close_time=$closeTime;
                            $euroTrade->symbol=$symbol;
                            $euroTrade->action=$action;
                            $euroTrade->open_price=$openPrice;
                            $euroTrade->tp_price=$tpPrice;
                            $euroTrade->sl_price=$slPrice;
                            $euroTrade->pips=$pips;
                            $euroTrade->result=$result;
                            $euroTrade->save();                            
                        }else{
                            // Log::info('duplicate data, skipped');
                        }                        
                    }
                }

            }
                
                
                
        SummaryEuroTrades::where('name', '=', 'euro')->delete();    
        $summaryEuroTrades = SummaryEuroTrades::where('name', '=', 'euro')->first();
        if($summaryEuroTrades == null){
            $summaryEuroTrades = new SummaryEuroTrades();
            $summaryEuroTrades->name='euro';
            $summaryEuroTrades->save();
        }
                
        // Calculate Total Trade
        $totalTrade = EuroTrades::all()->count();
        // Log::info('totalTrade : {totalTrade}',['totalTrade' => $totalTrade]);
        $summaryEuroTrades->total_trades = $totalTrade;
        // Calculate Probability
        $tpCount = EuroTrades::where('result', '=', 'TP')->count();
        $probability = number_format((floatval($tpCount)/floatval($totalTrade)) * 100, 2) ;           
        // Log::info('probability : {probability}',['probability' => $probability]);
        $summaryEuroTrades->probability = $probability;
        // Avg Risk Reward
        // di order supaya akurat untuk hitung consecutive profit dan loss
        $euroTrades = EuroTrades::orderBy('close_time')->get();     
        $countData = intval(0);
        $rr = floatval(0);
        foreach ($euroTrades as $euroTrade) {
            $countData = intval($countData+1);
            $action = $euroTrade->action;
            // Log::info('action : {action}',['action' => $action]);
            if($action == 'Buy' ){
                $tp_price = $euroTrade->tp_price;    
                $sl_price = $euroTrade->sl_price;    
                $open_price = $euroTrade->open_price;    
                $reward = $tp_price - $open_price;
                $risk = $open_price - $sl_price;
                $rrTemp = floatval($risk/$reward);
                $rr = $rr + $rrTemp;
            }else if($action == 'Sell' ){
                $tp_price = $euroTrade->tp_price;    
                $sl_price = $euroTrade->sl_price;    
                $open_price = $euroTrade->open_price;
                $reward = $open_price - $tp_price;
                $risk = $sl_price - $open_price;
                $rrTemp = floatval($risk/$reward);
                $rr = $rr + $rrTemp;
            }
            
        }            
        $rrReal = number_format(floatval($rr) / floatval($countData), 2);
        // Log::info('Avg Risk Reward : {rrReal}',['rrReal' => $rrReal]);
        $summaryEuroTrades->risk_reward = $rrReal;
        // Avg Holding Period
        $countData = intval(0);
        $holdingPeriod = floatval(0);
        foreach ($euroTrades as $euroTrade){
            $countData = intval($countData+1);
            $open_time = $euroTrade->open_time; 
            $close_time = $euroTrade->close_time; 
            $startTime = Carbon::parse($open_time);
            $endTime = Carbon::parse($close_time);
            $totalDuration = $endTime->diffInMinutes($startTime);
            $holdingPeriod = intval($holdingPeriod) + intval($totalDuration);
        }            
        $holdingPeriod = number_format(intval($holdingPeriod)/ intval($countData),0);
        // Log::info('Avg Holding Period : {holdingPeriod} Minutes',['holdingPeriod' => $holdingPeriod]);
        $summaryEuroTrades->holding_period = $holdingPeriod;
        // Total Pips
        $totalPips = floatval(0);
        foreach ($euroTrades as $euroTrade){
            $pips = $euroTrade->pips; 
            $totalPips = number_format($totalPips + floatval($pips),2);
        }
        // Log::info('Total Pips : {totalPips}',['totalPips' => $totalPips]); 
        $summaryEuroTrades->total_pips = $totalPips;
        // AVG PIPS / TRADE  
        $avgPipsTrade = number_format($totalPips / $countData,2);
        // Log::info('AVG Pips / Trade : {avgPipsTrade}',['avgPipsTrade' => $avgPipsTrade]);   
        $summaryEuroTrades->avg_pips_trade = $avgPipsTrade;
        
        // AVG PIPS / Monthly
        $lastTrade = EuroTrades::all()->last();
        $firstTrade = EuroTrades::all()->first();
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
        $summaryEuroTrades->avg_pips_month = $avgPipsTradeMonthly; 
        
        // AVG PIPS / Year
        $lastTrade = EuroTrades::all()->last();
        $firstTrade = EuroTrades::all()->first();
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
        $summaryEuroTrades->avg_pips_year = $avgPipsTradeYear; 
        // $summaryEuroTrades->save();

        // Consecutive Profit
        $consProfit = intval(0);
        
        foreach ($euroTrades as $euroTrade){                
            $result = $euroTrade->result; 
            // Log::info('result : {result}',['result' => $result]);   
            if($result == 'TP'){
                $consProfit = $consProfit + 1;
                $profitExisting = $summaryEuroTrades->consecutive_profit;                    
            }else {
                $consProfit = 0;
                $profitExisting = $summaryEuroTrades->consecutive_profit;                    
            }    
            // Log::info('consProfit : {consProfit}',['consProfit' => $consProfit]);   
            // Log::info('profitExisting : {profitExisting}',['profitExisting' => $profitExisting]);   
            $profitExisting = $summaryEuroTrades->consecutive_profit;
            if($profitExisting < $consProfit){
                // Log::info('save');   
                $summaryEuroTrades->consecutive_profit = $consProfit;
                $summaryEuroTrades->save();                            
            }
                                  
        } 
        // Consecutive Loss
        $consLoss = intval(0);
        foreach ($euroTrades as $euroTrade){
            $result = $euroTrade->result; 
            // Log::info('result : {result}',['result' => $result]);
            if($result == 'SL'){
                $consLoss = $consLoss + 1;
                $lossExisting = $summaryEuroTrades->consecutive_loss;                    
            }else {
                $consLoss = 0;
                $lossExisting = $summaryEuroTrades->consecutive_loss;                    
            } 
            // Log::info('consLoss : {consLoss}',['consLoss' => $consLoss]);   
            // Log::info('lossExisting : {lossExisting}',['lossExisting' => $lossExisting]);
            $lossExisting = $summaryEuroTrades->consecutive_loss;
            if($lossExisting < $consLoss){
                // Log::info('save');   
                $summaryEuroTrades->consecutive_loss = $consLoss;
                $summaryEuroTrades->save();                            
            }
        }
        // Update SummaryEuroTrades
        $summaryEuroTrades->save(); 
              
        }catch(\Exception $e) {                
            Log::error('Exception error get history : {message}  ',['message' => $e->getMessage()]);
        }
               

        Log::info('[{controllerName}] scheduler  ended  ',['controllerName' => $controllerName]);
    }
}

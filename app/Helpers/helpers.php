<?php
  
use Carbon\Carbon;
use App\Models\SessionMyfxbook;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
  
/**
 * Write code on Method
 *
 * @return response()
 */
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }

  
/**
 * Write code on Method
 *
 * @return response()
 */

    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }

/**
 * Login Myfxbook with param session
 * return string
 *
 * @return response()
 */
    function logoutMyfxbook($session)
    {   $howManyLoop = 5;
        $counter = 1;                    
            while ($counter <= $howManyLoop) {
                Log::info('Try logout : {counter} with session : {session}  ',['counter' => $counter, 'session' => $session]);
                try{                                       
                    $response = Http::get('https://www.myfxbook.com/api/logout.json?', [
                        'session' => $session,
                    ]);  
                    if($response -> ok()){
                        $counter = 10;                                      
                        $body = $response->body(); 
                        $respSessionLogin = $response->json('session');
                        $respError = $response->json('error');
                        $respMessage = $response->json('message');
                        Log::info('Logout success');
                        if(!$respError){
                            Log::info('Message host : {message}',
                            ['message' => $respMessage]);
                        }else{
                            Log::info('Message host : {message}',
                            ['message' => $respMessage]);
                        }
                        
                    }else{
                        $counter++;
                    }
                    
                }catch(\Exception $e) {                
                    Log::error('Exception error logoutMyfxbook : {message}  ',['message' => $e->getMessage()]);
                    $counter++;
                }
            }                    
    }

    function loginMyfxbook($email,$password)
    {   $howManyLoop = 5;
        $counter = 1;                    
            while ($counter <= $howManyLoop) {
                Log::info('Try login : {counter} with email : {email} and password : {password}  ',
                ['counter' => $counter,
                 'email' => $email,
                 'password' => $password,
                ]);
                try{                                       
                    $response = Http::get('https://www.myfxbook.com/api/login.json?', [
                        'email' => $email,
                        'password' => $password,
                    ]);  
                    if($response -> ok()){
                        $counter = 10;                                      
                        $body = $response->body();                         
                        $respError = $response->json('error');
                        $respMessage = $response->json('message');
                        Log::info('Login success');
                        if(!$respError){                            
                            $respSessionLogin = $response->json('session');
                            Log::info('Session : {session} Message host : {message}',
                            ['message' => $respMessage,
                             'session' => $respSessionLogin
                            ]);
                            return $respSessionLogin;
                        }else{
                            Log::info('Message host : {message}',
                            ['message' => $respMessage]);
                            return null;
                        }
                        
                    }else{
                        $counter++;
                    }
                    
                }catch(\Exception $e) {                
                    Log::error('Exception error loginMyfxbook : {message}  ',['message' => $e->getMessage()]);
                    $counter++;
                }
            }                    
    }

    function getHistoryById($session,$id)
    {   $howManyLoop = 5;
        $counter = 1;                    
            while ($counter <= $howManyLoop) {
                Log::info('Try getHistoryById : {counter} with session : {session} and id : {id}  ',
                ['counter' => $counter,
                 'session' => $session,
                 'id' => $id,
                ]);
                try{                                       
                    $response = Http::get('https://www.myfxbook.com/api/get-history.json?', [
                        'session' => $session,
                        'id' => $id,
                    ]);  
                    if($response -> ok()){
                        $counter = 10;                                                              
                        $json = $response->json();                         
                        $respError = $json['error'];                        
                        $respMessage = $json['message'];
                        Log::info('getHistoryById success');
                        if(!$respError){                            
                            $listHistory = $json['history'];
                            Log::info('listHistory : {listHistory} Message host : {message}',
                            ['message' => $respMessage,
                             'listHistory' => $listHistory
                            ]);
                            return $listHistory;
                        }else{
                            Log::info('Message host : {message}',
                            ['message' => $respMessage]);
                            return null;
                        }
                        
                    }else{
                        $counter++;
                    }
                    
                }catch(\Exception $e) {                
                    Log::error('Exception error loginMyfxbook : {message}  ',['message' => $e->getMessage()]);
                    $counter++;
                }
            }                    
    }

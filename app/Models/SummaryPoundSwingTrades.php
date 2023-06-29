<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummaryPoundSwingTrades extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        
        'total_trades',        
        'probability',        
        'risk_reward',        
        'holding_period',        
        'total_pips',        
        'avg_pips_trade',        
        'avg_pips_month',        
        'avg_pips_year',        
        'consecutive_profit',        
        'consecutive_loss',                
    ];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('summary_euro_trades', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // name ea
            $table->string('total_trades')->nullable();
            $table->string('probability')->nullable();
            $table->string('risk_reward')->nullable();
            $table->string('holding_period')->nullable();
            $table->string('total_pips')->nullable();
            $table->string('avg_pips_trade')->nullable();
            $table->string('avg_pips_month')->nullable();
            $table->string('avg_pips_year')->nullable();
            $table->string('consecutive_profit')->nullable();
            $table->string('consecutive_loss')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summary_euro_trades');
    }
};

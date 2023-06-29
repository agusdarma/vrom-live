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
        Schema::create('pound_swing_trades', function (Blueprint $table) {
            $table->id();
            $table->string('open_time'); // waktu open trade
            $table->string('close_time'); // waktu close trade
            $table->string('symbol'); // Pair apa
            $table->string('action'); // Buy or Sell
            $table->double('open_price')->default(0); // harga open
            $table->double('tp_price')->default(0); // harga tp
            $table->double('sl_price')->default(0); // harga sl
            $table->double('pips')->default(0); // pips untung atau rugi
            $table->string('result');  // hasil akhir SL atau TP          
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pound_swing_trades');
    }
};

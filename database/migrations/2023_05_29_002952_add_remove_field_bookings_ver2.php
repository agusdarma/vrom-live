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
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('item_name')->after('name');
            $table->integer('rental_price')->after('item_name');
            $table->integer('rental_time')->after('rental_price'); // months
            $table->string('telegram_id')->after('no_hp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('item_name');
            $table->dropColumn('rental_price');
            $table->dropColumn('rental_time');
            $table->dropColumn('telegram_id');
        });
    }
};

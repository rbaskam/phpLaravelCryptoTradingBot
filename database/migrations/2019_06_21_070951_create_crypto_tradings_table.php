<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCryptoTradingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_tradings', function (Blueprint $table) {

            $table->increments('id');
        
            $table->string('ticker');
        
            $table->string('amount');
        
            $table->string('price');
        
            $table->string('old_price');
        
            $table->string('buy_sell');
        
            $table->integer('order_id');
        
            $table->string('status')->nullable();
        
            $table->integer('checks');
        
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crypto_tradings');
    }
}

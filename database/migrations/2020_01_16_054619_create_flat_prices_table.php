<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flat_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('house_no');
            $table->string('floor_no');
            $table->string('flat_no');
            $table->string('flat_price');
            $table->integer('status',0); 
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
        Schema::dropIfExists('flat_prices');
    }
}

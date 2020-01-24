<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flat_sizes', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('house_no');
           $table->string('floor_no');
           $table->string('flat_no');
           $table->string('flat_size');
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
        Schema::dropIfExists('flat_sizes');
    }
}

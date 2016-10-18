<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('property', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->float('price');
          $table->integer('bedrooms');
          $table->integer('bathrooms');
          $table->integer('storeys');
          $table->integer('garages');
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
        Schema::drop('property');
    }
}

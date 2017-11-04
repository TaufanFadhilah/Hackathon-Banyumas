<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('userId')->unsigned();
          $table->integer('advertisementId')->unsigned();
          $table->integer('price')->default(0)->unsigned();
          $table->text('note');
          $table->timestamps();
          $table->softDeletes();
          $table->foreign('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('advertisementId')->references('id')->on('advertisements')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}

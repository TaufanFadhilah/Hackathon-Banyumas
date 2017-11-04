<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bidId')->unsigned();
            $table->integer('advertisementId')->unsigned();
            $table->integer('status')->default(0)->comment('0 = publisher acc the bid, 1 = influencer start the task, 2 = influencer done task, 3 = admin acc influencer');
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('bidId')->references('id')->on('bids')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('transactions');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('userId')->unsigned();
          $table->string('title');
          $table->text('desc');
          $table->integer('price')->default(0);
          $table->tinyInteger('status')->default(0)->comment('0 = Open, 1 = On Going, 2 = Done');
          $table->date('dueDate');
          $table->timestamps();
          $table->SoftDeletes();
          $table->foreign('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('firstName');
          $table->string('lastName')->nullable();
          $table->integer('typeId')->default(1)->comment('0 = admin, 1 = user');
          $table->text('address');
          $table->string('phone')->unique();
          $table->string('photo')->default("avatar/avatar.png");
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn([
            'firstName', 'lastName', 'typeId', 'address', 'phone', 'photo', 'deleted_at'
          ]);
        });
    }
}

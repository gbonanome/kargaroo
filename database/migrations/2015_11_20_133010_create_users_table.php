<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('avatar', 255);
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('company', 255);
            $table->string('address', 512);
            $table->string('mail', 255);
            $table->string('phone', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
}

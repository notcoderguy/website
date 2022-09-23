<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique()->primary();
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->string('user_type')->enum(['admin', 'user'])->default('user');
            $table->string('github_token')->nullable();
            $table->string('github_refresh_token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

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
            $table->bigIncrements('id');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('address');
            $table->unsignedBigInteger('roleId');
            $table->foreign('roleId')->references('id')->on('roles')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();  
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
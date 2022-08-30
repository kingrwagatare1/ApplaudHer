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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('participantId');
            $table->string('projectName');
            $table->foreign('categoryId')->references('id')->on('categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('details');
            $table->foreign('participantId')->references('id')->on('participants')->cascadeOnUpdate()->cascadeOnDelete();
            $table->double('budget');
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
        Schema::dropIfExists('projects');
    }
};

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
        Schema::create('sponsor_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('projectReviewId');
            $table->unsignedBigInteger('sponsorId');
            $table->foreign('projectReviewId')->references('id')->on('project_reviews')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('sponsorId')->references('id')->on('sponsors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('reviews');
            $table->string('stars');
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
        Schema::dropIfExists('sponsor_reviews');
    }
};

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
        Schema::create('care_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('scientific');
            $table->string('country');
            $table->string('life_span');
            $table->string('adult_size');
            $table->string('diet');
            $table->string('distribution');
            $table->string('housing');
            $table->string('heating');
            $table->string('uvb');
            $table->string('breeding');
            $table->string('diet');
            $table->string('cleaning');
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
        Schema::dropIfExists('care_sheets');
    }
};

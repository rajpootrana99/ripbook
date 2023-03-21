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
        Schema::create('tearful_tributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('memorial_id');
            $table->string('title');
            $table->string('sub_title');
            $table->string('description');
            $table->string('country');
            $table->string('date');
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
        Schema::dropIfExists('tearful_tributes');
    }
};

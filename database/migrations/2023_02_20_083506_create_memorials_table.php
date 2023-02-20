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
        Schema::create('memorials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->longText('description');
            $table->string('address');
            $table->string('dob');
            $table->string('pob');
            $table->string('dod');
            $table->string('pod');
            $table->integer('age');
            $table->string('religion');
            $table->string('residence');
            $table->integer('visibility')->default(0);
            $table->string('feature_image')->nullable()->default('');
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
        Schema::dropIfExists('memorials');
    }
};

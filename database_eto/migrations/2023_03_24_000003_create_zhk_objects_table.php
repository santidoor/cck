<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('zhk_objects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('street');
            $table->string('coords');
            $table->text('gallery');
            $table->string('intro_title');
            $table->text('intro_text');
            $table->string('meta_title');
            $table->text('meta_discription');
            $table->string('intro_video');
            $table->string('aeroponarama');
            $table->boolean('popular');
            $table->string('genplan_day');
            $table->string('genplan_night');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('okrug_id');
            $table->unsignedBigInteger('klasses_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zhk_objects');
    }
};

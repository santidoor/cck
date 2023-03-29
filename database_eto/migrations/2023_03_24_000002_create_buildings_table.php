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
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('zhk_object_id');
            $table->unsignedBigInteger('buildings_status_id');
            $table->integer('liter_num');
            $table->integer('floors');
            $table->integer('ceiling_height');
            $table->integer('passenger_elevators');
            $table->integer('freight_elevators');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('key_date');
            $table->text('gallery');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};

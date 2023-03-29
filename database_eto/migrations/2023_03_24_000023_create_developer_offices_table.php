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
        Schema::create('developer_offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('adress');
            $table->string('phone');
            $table->string('email');
            $table->string('coords');
            $table->boolean('main_office');
            $table->unsignedBigInteger('city_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developer_offices');
    }
};

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
        Schema::create('payment_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('mini_text');
            $table->text('text');
            $table->string('img');
            $table->string('icon');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_forms');
    }
};

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
        Schema::create('zhk_object_specifications', function (
            Blueprint $table
        ) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('sub_title');
            $table->unsignedBigInteger('zhk_object_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zhk_object_specifications');
    }
};

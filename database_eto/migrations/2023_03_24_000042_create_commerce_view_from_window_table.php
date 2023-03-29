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
        Schema::create('commerce_view_from_window', function (
            Blueprint $table
        ) {
            $table->unsignedBigInteger('view_from_window_id');
            $table->unsignedBigInteger('commerce_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commerce_view_from_window');
    }
};

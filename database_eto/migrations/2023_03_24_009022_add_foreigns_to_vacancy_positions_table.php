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
        Schema::table('vacancy_positions', function (Blueprint $table) {
            $table
                ->foreign('vacancy_directions_id')
                ->references('id')
                ->on('vacancy_directions')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vacancy_positions', function (Blueprint $table) {
            $table->dropForeign(['vacancy_directions_id']);
        });
    }
};

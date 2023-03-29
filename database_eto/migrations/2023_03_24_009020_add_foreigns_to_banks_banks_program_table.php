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
        Schema::table('banks_banks_program', function (Blueprint $table) {
            $table
                ->foreign('banks_program_id')
                ->references('id')
                ->on('banks_programs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('banks_id')
                ->references('id')
                ->on('banks')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banks_banks_program', function (Blueprint $table) {
            $table->dropForeign(['banks_program_id']);
            $table->dropForeign(['banks_id']);
        });
    }
};

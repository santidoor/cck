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
        Schema::table('apartment_view_from_window', function (
            Blueprint $table
        ) {
            $table
                ->foreign('view_from_window_id')
                ->references('id')
                ->on('view_from_windows')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_id')
                ->references('id')
                ->on('apartments')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apartment_view_from_window', function (
            Blueprint $table
        ) {
            $table->dropForeign(['view_from_window_id']);
            $table->dropForeign(['apartment_id']);
        });
    }
};

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
        Schema::table('docs', function (Blueprint $table) {
            $table
                ->foreign('zhk_object_id')
                ->references('id')
                ->on('zhk_objects')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('docs_type_id')
                ->references('id')
                ->on('docs_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('docs', function (Blueprint $table) {
            $table->dropForeign(['zhk_object_id']);
            $table->dropForeign(['docs_type_id']);
        });
    }
};

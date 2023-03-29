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
        Schema::table('social_media_types', function (Blueprint $table) {
            $table
                ->foreign('social_media_id')
                ->references('id')
                ->on('social_medias')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('social_media_types', function (Blueprint $table) {
            $table->dropForeign(['social_media_id']);
        });
    }
};

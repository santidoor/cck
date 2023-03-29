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
        Schema::table('commerces', function (Blueprint $table) {
            $table
                ->foreign('buildings_id')
                ->references('id')
                ->on('buildings')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('zhk_object_id')
                ->references('id')
                ->on('zhk_objects')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('cardinal_directions_id')
                ->references('id')
                ->on('cardinal_directions')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_status_id')
                ->references('id')
                ->on('apartment_statuses')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('commerce_purpose_id')
                ->references('id')
                ->on('commerce_purposes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commerces', function (Blueprint $table) {
            $table->dropForeign(['buildings_id']);
            $table->dropForeign(['zhk_object_id']);
            $table->dropForeign(['cardinal_directions_id']);
            $table->dropForeign(['apartment_status_id']);
            $table->dropForeign(['commerce_purpose_id']);
        });
    }
};

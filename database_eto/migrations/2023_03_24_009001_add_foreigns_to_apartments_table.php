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
        Schema::table('apartments', function (Blueprint $table) {
            $table
                ->foreign('buildings_id')
                ->references('id')
                ->on('buildings')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_count_rooms_id')
                ->references('id')
                ->on('apartment_count_rooms')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_glazing_type_id')
                ->references('id')
                ->on('apartment_glazing_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_repair_type_id')
                ->references('id')
                ->on('apartment_repair_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_balcony_loggia_type_id')
                ->references('id')
                ->on('apartment_balcony_loggia_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('cardinal_directions_id')
                ->references('id')
                ->on('cardinal_directions')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_type_id')
                ->references('id')
                ->on('apartment_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('windows_overlook_id')
                ->references('id')
                ->on('windows_overlooks')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_status_id')
                ->references('id')
                ->on('apartment_statuses')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apartments', function (Blueprint $table) {
            $table->dropForeign(['buildings_id']);
            $table->dropForeign(['apartment_count_rooms_id']);
            $table->dropForeign(['apartment_glazing_type_id']);
            $table->dropForeign(['apartment_repair_type_id']);
            $table->dropForeign(['apartment_balcony_loggia_type_id']);
            $table->dropForeign(['cardinal_directions_id']);
            $table->dropForeign(['apartment_type_id']);
            $table->dropForeign(['windows_overlook_id']);
            $table->dropForeign(['apartment_status_id']);
        });
    }
};

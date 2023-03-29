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
        Schema::table('buildings_payment_forms', function (Blueprint $table) {
            $table
                ->foreign('payment_forms_id')
                ->references('id')
                ->on('payment_forms')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('buildings_id')
                ->references('id')
                ->on('buildings')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buildings_payment_forms', function (Blueprint $table) {
            $table->dropForeign(['payment_forms_id']);
            $table->dropForeign(['buildings_id']);
        });
    }
};

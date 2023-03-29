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
        Schema::create('apartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('buildings_id');
            $table->unsignedBigInteger('apartment_count_rooms_id');
            $table->unsignedBigInteger('apartment_glazing_type_id');
            $table->unsignedBigInteger('apartment_repair_type_id');
            $table->unsignedBigInteger('apartment_balcony_loggia_type_id');
            $table->unsignedBigInteger('cardinal_directions_id');
            $table->unsignedBigInteger('apartment_type_id');
            $table->unsignedBigInteger('windows_overlook_id');
            $table->unsignedBigInteger('apartment_status_id');
            $table->integer('floors');
            $table->string('doorway');
            $table->integer('apartment_number');
            $table->integer('total_area');
            $table->integer('kitchen_area');
            $table->integer('living_area');
            $table->integer('count_separate_su');
            $table->integer('count_joint_su');
            $table->integer('area_su');
            $table->integer('price');
            $table->integer('price_m2');
            $table->integer('price_action');
            $table->string('img_room');
            $table->string('img_floor');
            $table->string('img_furniture');
            $table->string('3d_tour');
            $table->string('3d_apartment');
            $table->boolean('dressing_room');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};

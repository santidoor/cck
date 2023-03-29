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
        Schema::create('commerces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('floor');
            $table->string('doorway');
            $table->integer('apartment_number');
            $table->integer('total_area');
            $table->decimal('price');
            $table->decimal('price_m2');
            $table->decimal('price_action');
            $table->string('img_room');
            $table->string('img_floor');
            $table->unsignedBigInteger('buildings_id');
            $table->unsignedBigInteger('zhk_object_id');
            $table->unsignedBigInteger('cardinal_directions_id');
            $table->unsignedBigInteger('apartment_status_id');
            $table->unsignedBigInteger('commerce_purpose_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commerces');
    }
};

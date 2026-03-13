<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('phone_brand');
            $table->string('phone_model');
            $table->string('phone_storage');
            $table->string('phone_ram');
            $table->decimal('phone_price', 10, 2);
            $table->string('phone_color');
            $table->decimal('phone_weight', 8, 2);
            $table->string('phone_dimensions');
            $table->text('phone_features')->nullable();
            $table->text('description')->nullable();
            $table->string('phone_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};

<?php

use App\Constants\IsActive;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedTinyInteger('no_of_rooms')->nullable();
            $table->string('address')->nullable();
            $table->string('city', 80)->nullable();
            $table->string('state', 80)->nullable();
            $table->string('image', 32)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('type');
            $table->boolean('is_active', [IsActive::ACTIVE, IsActive::INACTIVE])->default(IsActive::ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

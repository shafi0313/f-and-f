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
        Schema::create('residential_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->date('d_of_b');
            $table->string('vehicle', 10);
            $table->string('job_title');
            $table->string('company')->nullable();
            $table->string('department')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('income_cer');
            $table->string('pets', 10);
            $table->string('current_address');
            $table->string('current_address2');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('post')->nullable();
            $table->string('job_duration');
            $table->text('leaving')->nullable();
            $table->string('f_landlord_name')->nullable();
            $table->string('l_landlord_name')->nullable();
            $table->string('landlord_phone')->nullable();
            $table->string('evicted', 10);
            $table->string('crime', 10);
            $table->date('move_date');
            $table->date('security_date');
            $table->string('pay_method');
            $table->text('signature1');
            $table->string('signature1_date');
            $table->text('signature2')->nullable();
            $table->string('signature2_date')->nullable();
            $table->text('signature3')->nullable();
            $table->string('signature3_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residential_applications');
    }
};

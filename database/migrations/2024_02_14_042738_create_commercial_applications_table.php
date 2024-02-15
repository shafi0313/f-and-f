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
        Schema::create('commercial_applications', function (Blueprint $table) {
            $table->id();
            $table->string('property_type');
            $table->string('property_address');
            $table->string('property_address2')->nullable();
            $table->string('property_city')->nullable();
            $table->string('property_state')->nullable();
            $table->string('property_post')->nullable();
            $table->string('property_description')->nullable();
            $table->string('parking');
            $table->date('lease_start_date');
            $table->date('lease_end_date');
            $table->double('rental_amount');
            $table->string('payment_term');
            $table->string('pay_method');
            $table->double('security_amount');
            $table->string('taxes');
            $table->string('responsible');
            $table->string('utilities');
            $table->string('insurance');
            $table->string('furniture');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('post')->nullable();
            $table->string('tenant_first_name');
            $table->string('tenant_last_name');
            $table->string('tenant_phone');
            $table->string('tenant_email');
            $table->string('tenant_address');
            $table->string('tenant_address2')->nullable();
            $table->string('tenant_city')->nullable();
            $table->string('tenant_state')->nullable();
            $table->string('tenant_post')->nullable();
            $table->date('agreement_date');
            $table->string('guarantee_lease');
            $table->string('question');
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
        Schema::dropIfExists('commercial_applications');
    }
};

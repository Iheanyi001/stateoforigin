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
        Schema::create('request_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string("ref")->unique();
            $table->string("application_type")->nullable();
            $table->string("type")->nullable();
            $table->string("conversion_id")->nullable();
            $table->string("lga_cert_type")->nullable();
            $table->string("lga_cert_no")->unique()->nullable();
            $table->string("lga_cert")->nullable();
            $table->string("last_name")->nullable();
            $table->string("first_name")->nullable();
            $table->string("middle_name")->nullable();
            $table->string("dob")->nullable();
            $table->string("sex")->nullable();
            $table->string("lga")->nullable();
            $table->string("nationality")->nullable();
            $table->string("father_name")->nullable();
            $table->string("mother_name")->nullable();
            $table->string("compound")->nullable();
            $table->string("native_place")->nullable();
            $table->string("passport")->nullable();
            $table->string("nin")->nullable();
            $table->text("purpose")->nullable();
            $table->enum('payment_status', ['pending', 'success', 'failed'])->default('pending');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_models');
    }
};

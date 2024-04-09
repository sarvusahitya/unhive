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
        Schema::create('onboardingform', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_store')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('do_you_have_multiple_location')->nullable();
            $table->string('no_of_location')->nullable();
            $table->string('no_of_location_text')->nullable();
            $table->string('head_office_address')->nullable();
            $table->string('head_office_address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('owner_full_name')->nullable();
            $table->string('owner_mobile_no')->nullable();
            $table->string('owner_mobile_countrycode')->default('+91')->nullable();
            $table->string('owner_mobile_countrystr')->default('IN')->nullable();
            $table->string('owner_mobile_is_whatsapp')->nullable();
            $table->string('owner_mobile_whatsappnumber')->nullable();
            $table->string('owner_email')->nullable();
            $table->string('owner_date_of_birth')->nullable();
            $table->string('do_you_have_store_manager')->nullable();
            $table->string('store_manager_full_name')->nullable();
            $table->string('store_manager_mobile')->nullable();
            $table->string('store_manager_mobile_countrycode')->default('+91')->nullable();
            $table->string('store_manager_mobile_countrystr')->default('IN')->nullable();
            $table->string('pinlab_id')->nullable();
            $table->string('bajaj_finance_id')->nullable();
            $table->string('paytm')->nullable();
            $table->string('is_terms_verify')->nullable();
            $table->unsignedBigInteger('pan_media_id')->nullable();
            $table->unsignedBigInteger('gst_media_id')->nullable();
            $table->unsignedBigInteger('cancelled_media_id')->nullable();
            $table->unsignedBigInteger('adhar_media_id')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('status')->default('active');
        });
        Schema::table('onboardingform', function (Blueprint $table) {
            $table->foreign('pan_media_id')->references('id')->on('media');
            $table->foreign('gst_media_id')->references('id')->on('media');
            $table->foreign('cancelled_media_id')->references('id')->on('media');
            $table->foreign('adhar_media_id')->references('id')->on('media');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

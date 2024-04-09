<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OnboardingForm extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = "onboardingform";
    protected $fillable = [
        "name_of_store",
        "gst_number",
        "do_you_have_multiple_location",
        "no_of_location",
        "no_of_location_text",
        "head_office_address",
        "head_office_address2",
        "city",
        "state",
        "pincode",
        "owner_full_name",
        "owner_mobile_no",
        "owner_mobile_countrycode",
        "owner_mobile_countrystr",
        "owner_mobile_is_whatsapp",
        "owner_mobile_whatsappnumber",
        "owner_email",
        "owner_date_of_birth",
        "do_you_have_store_manager",
        "store_manager_full_name",
        "store_manager_mobile",
        "store_manager_mobile_countrycode",
        "store_manager_mobile_countrystr",
        "pinlab_id",
        "bajaj_finance_id",
        "paytm",
        "is_terms_verify",
        "pan_media_id",
        "gst_media_id",
        "cancelled_media_id",
        "adhar_media_id",
    ];
}

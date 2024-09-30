<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contacts extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = "contacts";
    protected $fillable = [
        'guid',
        "contact_name",
        "billing_city",
        "cf_sales_person_name",
        "cf_rtl_code",
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($onboardingForm) {
            // Check if the guid isn't already set
            if (empty($onboardingForm->guid)) {
                $onboardingForm->guid = Str::uuid()->toString();
            }
        });
    }
    public function products()
    {
        return $this->belongsToMany(Products::class, 'contact_product', 'contact_id', 'product_id')->withPivot('quantity')->withTimestamps();
    }
}

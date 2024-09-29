<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = "products";
    protected $fillable = [
        'guid',
        "category_name",
        "product_name",
        "brand_name",
        "product_sku",
        "product_hsn_or_sac",
        "product_quantity",
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
        // Default order for all queries on this model
        static::addGlobalScope('order', function ($query) {
            $query->orderBy('created_at', 'desc');
        });
    }
    public function contacts()
    {
        return $this->belongsToMany(Contacts::class)->withPivot('quantity')->withTimestamps();
    }
}

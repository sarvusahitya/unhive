<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ContactsProducts extends Model
{
    use HasFactory;

    protected $table = "contact_product";
    protected $fillable = [
        'quantity',
        "contact_id",
        "product_id",
    ];
    protected static function boot()
    {
        parent::boot();


        // Default order for all queries on this model
        static::addGlobalScope('order', function ($query) {
            $query->orderBy('created_at', 'desc');
        });
    }
}

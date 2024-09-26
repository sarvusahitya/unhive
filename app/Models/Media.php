<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Media extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = "media";
    protected $fillable = [
        'media_title',
        'media_mimetype',
        'filepath',
        'folder_name',
        'baseurl',
        'media_fullpath',
        'docuement_type'
    ];
}

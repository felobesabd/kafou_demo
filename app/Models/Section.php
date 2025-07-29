<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_key',
        'page_id',
        'page_name',
        'title',
        'text',
        'button',
        'order',
        'is_deleted',
        'is_image',
        'is_video',
    ];
}

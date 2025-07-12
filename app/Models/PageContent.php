<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\PageContentHelper;

class PageContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_page_id',
        'key',
        'value',
        'is_image',
        'is_video'
    ];

    public function categoryPage()
    {
        return $this->belongsTo(CategoryPage::class, 'cat_page_id');
    }

    protected static function booted()
    {
        // Clear cache whenever content is created, updated, or deleted
        static::created(function ($pageContent) {
            PageContentHelper::clearCache();
        });

        static::updated(function ($pageContent) {
            PageContentHelper::clearCache();
        });

        static::deleted(function ($pageContent) {
            PageContentHelper::clearCache();
        });
    }
}

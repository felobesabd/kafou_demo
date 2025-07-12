<?php

namespace App\Helpers;

use App\Models\PageContent;
use Illuminate\Support\Facades\Cache;

class PageContentHelper
{
    public static function getAllSettings()
    {
        return Cache::remember('page_content_settings', 300, function () {
            return PageContent::pluck('value', 'key')->toArray();
        });
    }

    public static function getSetting($key, $default = null)
    {
        $settings = self::getAllSettings();
        return $settings[$key] ?? $default;
    }

    public static function getSocialMediaLinks()
    {
        $settings = self::getAllSettings();

        return [
            'facebook'  => $settings['facebook_link'] ?? '#',
            'twitter'   => $settings['twitter_link'] ?? '#',
            'linkedin'  => $settings['linkedin_link'] ?? '#',
            'address'   => $settings['contact_address'] ?? '',
            'phone'     => $settings['contact_phone'] ?? '',
            'email'     => $settings['contact_email'] ?? '',
        ];
    }

    public static function clearCache()
    {
        Cache::forget('page_content_settings');
        Cache::forget('page_content_all_formatted');
        
        // Clear page-specific caches
        $pages = \App\Models\CategoryPage::pluck('id');
        foreach ($pages as $pageId) {
            Cache::forget("page_content_page_{$pageId}");
        }
    }

    public static function getPageSettings($pageId)
    {
        return Cache::remember("page_content_page_{$pageId}", 300, function () use ($pageId) {
            return PageContent::where('cat_page_id', $pageId)
                ->pluck('value', 'key')
                ->toArray();
        });
    }

    public static function getAllKeysAndValues()
    {
        return Cache::remember('page_content_all_formatted', 300, function () {
            return PageContent::with('categoryPage')
                ->get()
                ->map(function ($content) {
                    return [
                        'id' => $content->id,
                        'page_id' => $content->cat_page_id,
                        'page_name' => $content->categoryPage->name ?? 'Unknown',
                        'key' => $content->key,
                        'value' => $content->value,
                        'is_image' => $content->is_image,
                        'is_video' => $content->is_video,
                        'created_at' => $content->created_at,
                        'updated_at' => $content->updated_at,
                    ];
                })
                ->toArray();
        });
    }
}

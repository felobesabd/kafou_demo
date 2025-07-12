<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPage extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function pageContents()
    {
        return $this->hasMany(PageContent::class, 'cat_page_id');
    }
}

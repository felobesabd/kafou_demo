<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryPage;
use App\Models\PageContent;
use App\Models\User;
use Illuminate\Http\Request;

class PageContentsController extends Controller
{
    public function getAllKeysAndValue()
    {
        $settingsContent = PageContent::findOrfail(1);

        return view('admin.pages.index', compact('pages'));
    }
}

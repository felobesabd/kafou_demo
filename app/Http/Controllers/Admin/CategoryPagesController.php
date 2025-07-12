<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryPage;
use App\Models\PageContent;
use App\Models\User;
use App\Helpers\PageContentHelper;
use Illuminate\Http\Request;

class CategoryPagesController extends Controller
{
    public function getAllCategoryPages()
    {
        $pages = CategoryPage::paginate(10);

        return view('admin.pages.index', compact('pages'));
    }

    public function getAllKeysForPage($page_id)
    {
        $contents = PageContent::where('cat_page_id', $page_id)->paginate(10);

        return view('admin.pages.content', compact('contents'));
    }

    public function editKey($key_id)
    {
        $key = PageContent::where('id', $key_id)->first();
        return view('admin.pages.edit-key', compact('key'));
    }

    public function updateKey(Request $request, $key_id)
    {
        $request->validate([
            'value' => 'required|string|max:65535',
        ]);

        $key = PageContent::findOrFail($key_id);
        $key->update([
            'value' => $request->value,
        ]);

        // Clear cache after update
        PageContentHelper::clearCache();

        return redirect()->route('admin.contents.pages', $key->cat_page_id)
            ->with('success', 'Key updated successfully.');
    }

    public function viewAllContent()
    {
        $pages = CategoryPage::with('pageContents')->get();
        return view('admin.pages.all-content', compact('pages'));
    }
}

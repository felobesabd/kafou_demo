<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryPage;
use App\Models\PageContent;
use App\Models\Section;
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
        // dd($request);
        $key = PageContent::findOrFail($key_id);

        if ($key->is_image == 1) {
            $request->validate([
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            ]);

            // Start with existing images
            $imagePaths = [];
            $old = $key->value;
            $decoded = json_decode($old, true);
            if (is_array($decoded)) {
                $imagePaths = $decoded;
            } elseif (is_string($old) && !empty($old)) {
                $imagePaths = [$old];
            }

            // Process deletions if any
            if ($request->has('delete_images')) {
                $imagesToDelete = $request->input('delete_images');

                // Filter out images marked for deletion
                $imagePaths = array_filter($imagePaths, function($image) use ($imagesToDelete) {
                    // Handle both simple paths and array structures
                    $path = is_array($image) ? $image['path'] : $image;
                    return !in_array($path, $imagesToDelete);
                });

                // Reset array keys if needed
                $imagePaths = array_values($imagePaths);
            }

            // If new images are uploaded, append them
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('uploads/page_content', 'public');
                    $imagePaths[] = $path;
                }
            }
            $key->update([
                'value' => json_encode($imagePaths),
            ]);
        } else {
            $request->validate([
                'value' => 'required|string|max:65535',
            ]);
            $key->update([
                'value' => $request->value,
            ]);
        }

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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\CategoryPage;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::where('is_deleted', 0)
            ->where('showing_admin', 1)
            ->orderByRaw("CASE WHEN page_name = 'home' THEN 0 ELSE 1 END")
            ->orderBy('created_at')
            ->orderBy('order')
            ->paginate(10);

        return view('admin.sections.index', compact('sections'));
    }

    public function create()
    {
        $pages = CategoryPage::all();
        return view('admin.sections.create', compact('pages'));
    }

    public function store(Request $request)
    {
        //dd($request);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'button' => 'nullable|string|max:255',
            'order' => 'required|integer',
        ]);

        // $page = CategoryPage::findOrFail($validated['page_id']);
        // $validated['section_key'] = 'section_' . $validated['order'];
        // $validated['page_name'] = strtolower($page->name);
        Section::create($validated);
        return redirect()->route('admin.sections.index')->with('success', 'Section created successfully.');
    }

    public function edit(Section $section)
    {
        $pages = CategoryPage::all();
        return view('admin.sections.edit', compact('section', 'pages'));
    }

    public function update(Request $request, Section $section)
    {
        // dd($request);
        $validated = $request->validate([
            'title' => 'required|string',
            'text' => 'nullable|string',
            'button' => 'nullable|string',
            'order' => 'required|integer',
            'is_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'is_video' => 'nullable|mimes:mp4,mov,ogg,webm|max:20480',
        ]);

        // Handle featured image upload
        if ($request->hasFile('is_image')) {
            $image = $request->file('is_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $validated['is_image'] = 'storage/images/' . $imageName;
        }

        // Save video if uploaded
        if ($request->hasFile('is_video')) {
            $video = $request->file('is_video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->storeAs('public/videos', $videoName);
            $validated['is_video'] = 'storage/videos/' . $videoName;
        }

        $section->update($validated);
        return redirect()->route('admin.get.sections.by.page', $section->page_id)->with('success', 'Section updated successfully.');
    }

    public function destroy(Section $section)
    {
        $section->update([
            'is_deleted' => 1
        ]);
        return redirect()->route('admin.sections.index')->with('success', 'Section deleted successfully.');
    }

    public function getAllSectionsByPageId($page_id)
    {
        $sections = Section::where('page_id', $page_id)
            ->where('is_deleted', 0)
            ->where('showing_admin', 1)
            ->orderBy('order')
            ->paginate(10);

        return view('admin.sections.index', compact('sections'));
    }
}

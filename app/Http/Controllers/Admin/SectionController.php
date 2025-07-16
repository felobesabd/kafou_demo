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
        $sections = Section::where('is_deleted', '=', 0)->where('showing_admin', '=', 1)->orderBy('order')->paginate(10);
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'nullable|string',
            'button' => 'nullable|string|max:255',
            'order' => 'required|integer',
        ]);

        // $page = CategoryPage::findOrFail($validated['page_id']);
        // $validated['section_key'] = 'section_' . $validated['order'];
        // $validated['page_name'] = strtolower($page->name);

        $section->update($validated);
        return redirect()->route('admin.sections.index')->with('success', 'Section updated successfully.');
    }

    public function destroy(Section $section)
    {
        $section->update([
            'is_deleted' => 1
        ]);
        return redirect()->route('admin.sections.index')->with('success', 'Section deleted successfully.');
    }
}

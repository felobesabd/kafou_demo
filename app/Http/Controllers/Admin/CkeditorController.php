<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryPage;
use App\Models\PageContent;
use App\Models\User;
use App\Helpers\PageContentHelper;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function uploadImage(Request $request)
    {
        $funcNum = $request->input('CKEditorFuncNum');
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        if (!$request->hasFile('upload')) {
            $msg = 'No file uploaded';
            return response("<script>window.parent.CKEDITOR.tools.callFunction($funcNum, '', '$msg');</script>");
        }

        $file = $request->file('upload');
        $path = public_path('uploads/ckeditor');
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        $filename = uniqid() . '' . str_replace(' ', '', $file->getClientOriginalName());
        $file->move($path, $filename);

        $url = asset("uploads/ckeditor/{$filename}");
        $msg = 'Image uploaded successfully';

        return response("<script>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$msg');</script>");
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Page;

class PagebuilderController extends Controller
{

    public function index() {
        $user = Auth::user();
        $pages = Page::all();
        return view('admin.pageBuilder.index', compact('user', 'pages'));
    }

    public function create() {
        return view('admin.pageBuilder.create');
    }

    public function store(Request $request) {
        $page = new Page();
        $page->title = $request->input('title');
        $page->slug = $request->input('slug');
        $page->content = $request->input('gjs-html');
        $page->save();

        return response()->json(['status' => 'success']);
    }

    public function load(Request $request) {
        $page = Page::where('slug', $request->input('slug'))->first();
        if ($page) {
            return response()->json(['gjs-html' => $page->content]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Page not found'], 404);
        }
    }
}

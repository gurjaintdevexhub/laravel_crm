<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Page;

class DashboardController extends Controller
{
    public function index()
    {   
        
        $pages = Page::all();
        $user = Auth::user();
        return view('admin.dashboard', compact('user', 'pages'));
    }

    public function homepageshow()
    {
        // dd($id);
        $id = 18;
        // dd($id);
        $user = Auth::user(); // Get the currently authenticated user
        $pages = Page::all(); // Get all pages (assuming you need this for a dropdown or listing)
        $page = Page::findOrFail($id);

        // Retrieve all sections associated with the specified page ID
        $pagesections = Pagesection::where('page_id', $id)->get();
        // $pagesections = Pagesection::all();

        // If you only want to dump the pagesections for debugging, use the following line:
        // dd($pages);

        // Pass the necessary data to the view
        return view('welcome', compact('user', 'pages', 'page', 'pagesections'));
    }
}


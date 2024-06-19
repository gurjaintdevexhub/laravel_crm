<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Page;
use App\Models\Pagesection;

class HomeController extends Controller
{
    public function index()
    {
        // dd($id);
        $id = 18;
        $user = Auth::user();
        $pages = Page::where('active', 1)->get(); 
        // $pages = $pages->reject(function ($page) use ($id) {
        //     return $page->id === $id;
        // });
        $page = Page::findOrFail($id);
        $pagesections = Pagesection::where('page_id', $id)->get();
        // $pagesections = Pagesection::all();
        return view('welcome', compact('user', 'pages', 'page', 'pagesections'));
    }


    public function show($slug)
    {
        // dd($id);
        $user = Auth::user();
        $pages = Page::where('active', 1)->get(); 
        $page = Page::where('slug', $slug)->first();
        $id =  $page->id;
        // $page = Page::findOrFail($id);
        // $pagesections = Pagesection::where('page_id', $page->id)->get();
        $pagesections = Pagesection::where('page_id', $page->id)->where('status', 1)->get();
        // $pagesections = Pagesection::all();
        return view('welcome', compact('user', 'pages', 'page', 'pagesections','id'));
    }
}

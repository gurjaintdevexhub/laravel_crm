<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Page;
use App\Models\Pagesection;

class PagesectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $user = Auth::user();
        $pages = Page::all();
        $pagesections = Pagesection::all();
        return view('admin.pagesection.index', compact('user', 'pages', 'pagesections'));
    }

    public function addsection()
    {
        $user = Auth::user();
        $pages = Page::all();
        $pagesections = Pagesection::all();
        return view('admin.pagesection.addsection', compact('user', 'pages', 'pagesections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{
    // Decode JSON string to array for validation
    $formFields = json_decode($request->input('formFields'), true);

    $request->merge(['formFields' => $formFields]); // Merge decoded formFields back into the request

    $validatedData = $request->validate([
        'pageId' => 'required|exists:pages,id',
        'type' => 'required|string|max:255',
        'heading' => 'required|string|max:255',
        'content' => 'nullable|string',
        'status' => 'nullable|boolean',
        'background_image' => 'nullable|image|max:2048',
        'exampleColorInput' => 'nullable|string|max:7',
        'formFields' => 'nullable|array',
        'formFields.*.name' => 'required|string|max:255',
        'formFields.*.type' => 'required|string|in:text,email,number,checkbox',
    ]);

    $section = new Pagesection();
    $section->page_id = $validatedData['pageId'];
    $section->type = $validatedData['type'];
    $section->heading = $validatedData['heading'];
    $section->content = $validatedData['content'];
    $section->status = $request->has('status') ? true : false;
    if ($request->hasFile('background_image')) {
        $imagePath = $request->file('background_image')->store('images', 'public');
        $section->background_image = $imagePath;
    }
    $section->background_color = $validatedData['exampleColorInput'];
    $section->form_fields = isset($validatedData['formFields']) ? json_encode($validatedData['formFields']) : null; // Store the JSON string
    $section->save();
    
    return response()->json(['message' => 'Section added successfully!']);
}

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   public function show(string $id)
{
    $user = Auth::user();
    $pages = Page::all(); 
    $page = Page::findOrFail($id);
    $pagesections = Pagesection::where('page_id', $id)->where('status', 1)->get();
    //  $pagesections = Pagesection::all();
    //  $formFields = collect($pagesections)->pluck('form_fields')->flatten();
    return view('admin.pages.previewpage', compact('user', 'pages', 'page', 'pagesections'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::user();
        $pages = Page::all(); 
        $page = Page::findOrFail($id);
        $pagesections = Pagesection::where('page_id', $id)->get();
         // $pagesections = Pagesection::all();
        return view('admin.pagesection.editsection', compact('user', 'pages', 'page', 'pagesections'));
    }

       public function updateStatus(Request $request)
    {
        // dd($request->page_id);
        $section = Pagesection::findOrFail($request->pagesection_id);
        $status = $request->status == 'active' ? 1 : 0;
        $section->status = $status;
        $section->save();

        return response()->json(['message' => 'Status updated successfully!']);
    }

     public function updateheading(Request $request)
    {
        // dd($request->pagesection_id);
        $section = Pagesection::findOrFail($request->pagesection_id);
        $section->heading = $request->heading;
        $section->save();

        return response()->json(['message' => 'Heading updated successfully!']);
    }

    public function updateContent(Request $request)
    {
        // dd($request->pagesection_id);
        $section = Pagesection::findOrFail($request->pagesection_id);
        $section->content = $request->content;
        $section->save();

        return response()->json(['message' => 'Content updated successfully!']);
    }
    
    public function updateColor(Request $request)
    {
        // dd($request->pagesection_id);
        $section = Pagesection::findOrFail($request->pagesection_id);
        $section->background_color = $request->color;
        $section->save();

        return response()->json(['message' => 'Color updated successfully!']);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

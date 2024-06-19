<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Page;
use App\Models\FormSubmission;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $pages = Page::all();
        return view('admin.pages.index', compact('user', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'pageTitle' => 'required|string|max:255',
            'pageContent' => 'required|string',
            'pageSlug' => 'required|string|max:255|unique:pages,slug',
            'status' => 'sometimes|boolean'
        ]);
        $page = new Page();
        $page->title = $validatedData['pageTitle'];
        $page->content = $validatedData['pageContent'];
        $page->slug = $validatedData['pageSlug'];
        $page->active = $request->has('status') ? $request->input('status') : 0;
        $page->save();
        return response()->json(['message' => 'Page created successfully!']);
    }

    public function updateStatus(Request $request)
    {
        // dd($request->page_id);
        $page = Page::findOrFail($request->page_id);
        $status = $request->status == 'active' ? 1 : 0;
        $page->active = $status;
        $page->save();

        return response()->json(['message' => 'Status updated successfully!']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Fetch the page with the specified ID
        $page = Page::find($id);

        // Check if the page exists
        if (!$page) {
            return response()->json([
                'status' => 'error',
                'message' => 'Page not found.'
            ], 404);
        }

        // Return the page data as a JSON response
        return response()->json([
            'status' => 'success',
            'data' => $page
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $page = Page::findOrFail($id); // Find the page or fail with a 404 error

            // Update the page with the request data
            $page->title = $request->pageTitle;
            $page->content = $request->pageContent;
            $page->slug = $request->pageSlug;
            $page->active = $request->has('status') ? $request->status : 0;
            $page->save();
            return response()->json(['message' => 'Page updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return response()->json(['message' => 'Page Deleted successfully!']);
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'page_id' => 'required|exists:pages,id',
            'formFields' => 'required|array',
            'formFields.*.name' => 'required|string|max:255',
            'formFields.*.type' => 'required|string|in:text,email,number,checkbox',
            'formFields.*.value' => 'nullable|string|max:255',
        ]);

        $formData = [];
        foreach ($validatedData['formFields'] as $field) {
            $formData[] = [
                'name' => $field['name'],
                'type' => $field['type'],
                'value' => $field['value'] ?? '',
            ];
        }

        FormSubmission::create([
            'page_id' => $validatedData['page_id'],
            'form_data' => json_encode($formData),
        ]);

        return response()->json(['message' => 'Form submitted successfully!']);
    }
}

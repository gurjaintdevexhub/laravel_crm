<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PagebuilderController;
use App\Http\Controllers\Admin\PagesectionController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\EditorController;

// Admin dashboard route
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Additional admin routes can be added here

    // Pages Routes
    Route::get('/tabledata', [PageController::class, 'tabledata'])->name('tabledata');
    Route::get('/pages', [PageController::class, 'index'])->name('pages');
    Route::post('/pages', [PageController::class, 'create'])->name('createpage');
    Route::get('/pages/{page_id}', [PageController::class, 'edit'])->name('editpage');
    Route::put('/pages/{page_id}', [PageController::class, 'update'])->name('updatepage');
    Route::put('/pages', [PageController::class, 'updateStatus'])->name('pages.updateStatus');
    Route::delete('/pages/{page_id}', [PageController::class, 'destroy'])->name('deletepage');

    // Page Builder
    // Route::get('/pagebuilder', [PageController::class, 'pageBuilder'])->name('pageBuilder');
    Route::get('/pagebuilder', [PagebuilderController::class, 'index'])->name('pageBuilder.index');
    Route::get('/pagebuilder/create', [PagebuilderController::class, 'create'])->name('pageBuilder.create');
    Route::post('/save-page', [PagebuilderController::class, 'store'])->name('pageBuilder.store');
    Route::post('/load-page', [PagebuilderController::class, 'load'])->name('pageBuilder.load');



    // Page Sections Routes
    Route::get('/pagesection', [PagesectionController::class, 'index'])->name('pagesection');
    Route::get('/addsection', [PagesectionController::class, 'addsection'])->name('addsection');
    Route::post('/pagesection', [PagesectionController::class, 'create'])->name('createpagesection');
    Route::get('/pagesection/{page_id}', [PagesectionController::class, 'edit'])->name('editpagesection');
    Route::put('/pagesection/{page_id}/update-status', [PagesectionController::class, 'updateStatus'])->name('pagesection.updateStatus');
    Route::put('/pagesection/{page_id}/update-heading', [PagesectionController::class, 'updateheading'])->name('pagesection.updateheading');
    Route::put('/pagesection/{page_id}/update-content', [PagesectionController::class, 'updateContent'])->name('pagesection.updateContent');
      Route::put('/pagesection/{page_id}/update-color', [PagesectionController::class, 'updateColor'])->name('pagesection.updateColor');

    Route::get('/preview/{page_id}', [PagesectionController::class, 'show'])->name('previewpage');
    // Route::get('/preview/{page_id}', 'PreviewController@show')->name('previewpage');

    Route::post('/submit-form', [PageController::class, 'submitForm'])->name('submitForm');


        // Form Routes
        Route::get('/forms', [FormController::class, 'index'])->name('forms');


    // Editor
    Route::get('/editor', [EditorController::class, 'index'])->name('editor.index');



});


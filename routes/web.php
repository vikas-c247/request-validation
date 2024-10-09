<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;



// Home route - redirect to companies index
Route::get('/', function () {
    return redirect()->route('companies.index');
});

// Company Routes
Route::resource('companies', CompanyController::class);
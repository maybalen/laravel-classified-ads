<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Frontend\ListingController as FrontendListingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendListingController::class, 'welcome'])->name('welcome');

Route::get('/all-listings', [FrontendListingController::class, 'index'])->name('all-listings');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // auth()->user()->assignRole('admin');
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('listings', ListingController::class);

        Route::resource('categories', CategoryController::class);
        Route::get('categories/{category}/add-sub', [CategoryController::class, 'add_sub'])->name('add_sub');
        Route::post('categories/{category}/add-sub', [CategoryController::class, 'add_sub_store'])->name('add_sub.store');
        
        Route::resource('subcategories', SubCategoryController::class);
        Route::resource('childcategories',ChildCategoryController::class);

        Route::resource('countries',CountryController::class);
        Route::get('countries/{country}/add-state', [CountryController::class, 'add_state'])->name('add_state');
        Route::post('countries/{country}/add-state', [CountryController::class, 'add_state_store'])->name('add_state.store');

        Route::resource('states', StateController::class);
        Route::resource('cities', CityController::class);



    });

// Route::get('listings/create', [ListingController::class, 'create'])->name('listings.create');
// Route::post('listings/store', [ListingController::class, 'store'])->name('listings.store');
// Route::get('listings', [ListingController::class, 'index'])->middleware('auth')->name('listings.index');
// Route::post('listings/{id}/edit', [ListingController::class, 'edit'])->name('listings.edit');
// Route::post('listings/{id}/destroy', [ListingController::class, 'destroy'])->name('listings.destroy');
Route::resource('listings', ListingController::class)->middleware('auth');
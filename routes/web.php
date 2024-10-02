<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('editcrew.pages.index');
//});
//Route::get('/stories', function () {
//    return view('editcrew.pages.our-clients.stories');
//});

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/about-us', [PageController::class, 'about'])->name('page.about');
Route::get('/blog', [PageController::class, 'blog'])->name('page.blog');
Route::get('/pricing', [PageController::class, 'pricing'])->name('page.pricing');

Route::get('/case-studies', [PageController::class, 'case'])->name('page.case');
Route::get('/customer-stories', [PageController::class, 'stories'])->name('page.stories');

Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('page.privacy');
Route::get('/terms-conditions', [PageController::class, 'terms'])->name('page.terms');
Route::get('/observed-holidays', [PageController::class, 'holidays'])->name('page.holidays');
Route::get('/action/booking-meetings', [PageController::class, 'booking'])->name('page.action.booking');
Route::get('/action/careers', [PageController::class, 'careers'])->name('page.action.careers');
Route::get('/our-work', [PageController::class, 'ourWork'])->name('page.our-work');
Route::get('/scope', [PageController::class, 'scope'])->name('page.scope');
Route::get('/video-editing-services', [PageController::class, 'videoEditingServices'])->name('page.video-editing-services');

<?php

use App\Http\Controllers\BasicRoutesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubmenuController;
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

Route::GET('/', [BasicRoutesController::class, 'index'])->name('home');
Route::GET('/hiring-process', [BasicRoutesController::class, 'hiring'])->name('hiring');
Route::GET('/wellup-world/{id}', [BasicRoutesController::class, 'loadPage'])->name('loadPage');
Route::GET('/contact', [BasicRoutesController::class, 'contact'])->name('contact');
Route::GET('/faq', [BasicRoutesController::class, 'faq'])->name('faq');
Route::POST('/store-contact', [BasicRoutesController::class, 'contactStore'])->name('contact.store');
Route::GET('/eligibility-process', [BasicRoutesController::class, 'eligibility'])->name('eligibility');
Route::POST('/eligibility-store', [BasicRoutesController::class, 'eligibilityStore'])->name('eligibility.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::GET('/dashboard', [BasicRoutesController::class, 'dashboard'])->name('dashboard');

    Route::GET('/contacted-data', [BasicRoutesController::class, 'contactData'])->name('contactData');
    Route::GET('/eligibility-request', [BasicRoutesController::class, 'eligibilityRequests'])->name('eligibilityRequests');

    Route::GET('/menu-list', [MenuController::class, 'index'])->name('menulist');
    Route::GET('/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::POST('/menu-store', [MenuController::class, 'store'])->name('menu.store');
    Route::GET('/menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::PUT('/menu-update/{id}', [MenuController::class, 'update'])->name('menu.update');
    Route::DELETE('/menu-delete/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');

    Route::GET('/sub-menu-list', [SubmenuController::class, 'index'])->name('submenus');
    Route::GET('/sub-menu/create', [SubmenuController::class, 'create'])->name('submenu.create');
    Route::POST('/sub-menu-store', [SubmenuController::class, 'store'])->name('submenu.store');
    Route::GET('/sub-menu/{id}/edit', [SubmenuController::class, 'edit'])->name('submenu.edit');
    Route::PUT('/sub-menu-update/{id}', [SubmenuController::class, 'update'])->name('submenu.update');
    Route::DELETE('/sub-menu-delete/{id}', [SubmenuController::class, 'destroy'])->name('submenu.destroy');

    // Page routes
    Route::GET('/page-list', [PageController::class, 'index'])->name('pages');
    Route::GET('/page/create', [PageController::class, 'create'])->name('page.create');
    Route::POST('/page-store', [PageController::class, 'store'])->name('page.store');
    Route::GET('/page/{id}/edit', [PageController::class, 'edit'])->name('page.edit');
    Route::PUT('/page-update/{id}', [PageController::class, 'update'])->name('page.update');
    Route::DELETE('/page-delete/{id}', [PageController::class, 'destroy'])->name('page.destroy');
    Route::PUT('/page_status/{id}', [PageController::class, 'status'])->name('page.status');
    Route::GET('/single-page/{id}', [PageController::class, 'SPage'])->name('SPage');
    Route::GET('/page_all', [PageController::class, 'allPages'])->name('page.all');
    Route::GET('/archived_page', [PageController::class, 'allPagesArchive'])->name('page.allArchive');
});

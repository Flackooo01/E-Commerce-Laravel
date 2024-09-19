<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//adding the HomeController
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('main.landingpage');
// });


Route::get('/', [HomeController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/user_page', function () {
//     return view('userdashboard');
// })->middleware(['auth', 'verified'])->name('userpage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// route::get('userpage', [HomeController::class, 'user_page'])->middleware((['auth','user']));

//admin Category
route::get('view_category', [AdminController::class, 'view_category'])->middleware((['auth','admin']));



//regrouping Auth login Admin
Route::middleware(['auth', 'admin'])->group(function(){

    //if the auth is admin this is the index
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    // route::get('/admin/dashboard', [HomeController::class, 'admin']);

    //admin | adding category
    Route::get('/admin/product/category', [ProductController::class, 'category'])->name('admin/product/category');
    // Create
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin/product/create');

    //fetching all registered users
    Route::get('/admin/user/table', [UserController::class, 'all_users'])->name('admin/user/table');

    //edit data
    Route::get('/admin/user/table/edit/{id}', [UserController::class, 'edit'])->name('admin/user/table/edit');

    //update data
    Route::put('/admin/user/table/edit/{id}', [UserController::class, 'update'])->name('admin/user/table/update');

    // Save
    Route::post('/admin/product/save', [ProductController::class, 'save'])->name('admin/product/save');

});

//regrouping Auth login Userpage
Route::middleware(['auth', 'user'])->group(function(){

    //if the auth is user this is the index
    Route::get('/userpage', function () {
        return view('userdashboard');
    })->middleware(['auth', 'verified'])->name('/userpage');

    // route::get('/userpage', [HomeController::class, 'user_page']);
});




// <?php

// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;
// //adding the HomeController
// use App\Http\Controllers\HomeController;

// // Route::get('/', function () {
// //     return view('main.landingpage');
// // });


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/admin', [HomeController::class, 'admin']);

// Route::get('/admin', function () {
//     return view('admin/index');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/user', function () {
//     return view('main/after_login');
// })->middleware(['auth', 'verified'])->name('dashboard');

// route::get('admin', [HomeController::class, 'admin'])->middleware((['auth','admin']));
// route::get('user/after_login', [HomeController::class, 'after_login'])->middleware((['auth','user']));

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';



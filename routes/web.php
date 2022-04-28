<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [PostController::class,'index']);

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About",

//     ]);
// });

// Route::get('/posts',[PostController::class,'index']);

Route::get('/post/{post:slug}',[PostController::class, 'show']);



// Route::get('/category',function(){
//     return view('categories' ,[
//         'title'=> 'Post Category',
//         'categories'=> Category::all()
       
//     ]);

//     // return ['posts'=>$category->post];
// });

Route::get('/author/{author:username}',function(User $author){
    return view('posts' ,[
        'title'=> "Post by Author : $author->name ",
        'posts'=> $author->post->load('category','author'),
        'authors'=>User::all(),
        'categories'=>Category::all()

    
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('posts' ,[
        'title'=>  "Post by Category : $category->name",
        'posts'=> $category->post->load('author','category'),
        'authors'=>User::all(),
        'categories'=>Category::all()

    // return ['posts'=>$category->post];
    ]);
});

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth'); 
Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/posts/create/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');
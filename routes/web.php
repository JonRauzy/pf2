<?php

use App\Models\Blog;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectsController;

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

// Navigation
Route::get('/', function () {
    $projects = Project::all()->sortByDesc('id');
    return view('home', ['projects' => $projects]);
});

Route::get('/blog', [BlogController::class, 'showBlog']);

Route::get('/admin', function() {
    if(Auth::check()){
        $projects = Project::all();
        $blogs = Blog::all();
        return view('admin', ['name'=>Auth::user()->name, 'projects'=>$projects, 'blogs' => $blogs]);
    }else{
        return view('admin');
    }
})->name('admin');

// connection + registrer
Route::prefix('user')->name('user.')->group( function(){
    Route::get('/', [UserController::class, 'logout'])->name('logout');
    Route::post('/', [UserController::class, 'login'])->name('login');
    Route::post('/register', [UserController::class, 'newUser'])->name('register');
});

// project CRUD
Route::post('add-project', [ProjectsController::class, 'addProject']);
Route::get('/edit-project/{project}', function(Project $project){
    return view('edit-project', ['project'=>$project]);
});
Route::put('send-edited-project/{project}', [ProjectsController::class, 'editProject']);
Route::delete('delete-project/{project}', [ProjectsController::class, 'deleteProject']);

// Blog CRUD
Route::post('add-blog', [BlogController::class, 'addBlog']);
Route::get('edit-blog/{blog}', function(Blog $blog){
    return view('edit-blog', ['blog'=>$blog]);
});
Route::get('blog/{blog}', function(Blog $blog){
    return view('article', ['blog'=>$blog]);
});
Route::put('send-edited-blog/{blog}', [BlogController::class, 'editBlog']);
Route::delete('delete-blog/{blog}', [BlogController::class, 'deleteBlog']);
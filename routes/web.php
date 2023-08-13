<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    $projects = Project::all();
    return view('home', ['projects' => $projects]);
});

Route::get('/blog', function (){
    $blogs = Blog::all();
    return view('blog', ['blogs' => $blogs]);
});

Route::get('/admin', function() {
    if(Auth::check()){
        $projects = Project::all();
        return view('admin', ['name'=>Auth::user()->name, 'projects'=>$projects]);
    }else{
        return view('admin');
    }
});

Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/newuser', [UserController::class, 'newUser']);

Route::post('add-project', [ProjectsController::class, 'addProject']);
Route::get('edit-project/{project}', function(Project $project){
    return view('edit-project', ['project'=>$project]);
});
Route::put('send-edited-project/{project}', [ProjectsController::class, 'editProject']);
Route::delete('delete-project/{project}', [ProjectsController::class, 'deleteProject']);

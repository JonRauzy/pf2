<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function addBlog(Request $request){
        $data = $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image_url'=>'required',
        ]);

        Blog::create($data);
        return redirect('/admin')->with('success', 'Article de blog a bien été enregistré');
    }


    public function editBlog(Blog $blog, Request $request){
        $data = $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image_url'=>'required',
        ]);

        $blog -> update($data);
        return redirect('/admin')->with('success', "Le blog $blog->title a bien été mis à jour");
    }

    
    public function deleteBlog(Blog $blog, Request $request){
        $blog -> delete();
        return redirect('admin')->with('success', "Le blog a bien été supprimé ! ");
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    
    public function addBlog(Request $request){
        $request['slug'] = Str::slug($request['title'], '-');
        $data = $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image_url'=>'required',
        ]);
        
        $blog = Blog::create($data);
        return redirect('/admin')->with('success', "l'article $blog->title a bien été enregistré");
    }


    public function editBlog(Blog $blog, Request $request){
        $data = $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image_url'=>'required',
        ]);

        $blog -> update($data);
        return redirect('/admin')->with('success', "L'article $blog->title a bien été mis à jour");
    }

    
    public function deleteBlog(Blog $blog, Request $request){
        $blog -> delete();
        return redirect('admin')->with('success', "Le blog a bien été supprimé ! ");
    }

    public function showBlogs(){
        $blogs = Blog::all()->sortByDesc('id');
        $trends = Blog::trendingArticles();
        return view('blog', ['blogs'=> $blogs, 'trends'=> $trends ]);
    }

    public function getBlogBySlug(Blog $slug){
        if(Cookie::get($slug->id)){
            Cookie::set('$slug->id', '1', 60);
        }


        $slug -> viewCount();
        return view('article', ['blog'=>$slug]);
    }

}

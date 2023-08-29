<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'click', 'like', 'image_url'];

    public static function trendingArticles() {
        return DB::table('blogs')->orderByDesc('click')->limit(5)->get();
    }

    public function getRouteKeyName(){
        return 'slug'; 
    }
    
    public function viewCount(){
        $this-> click++;
        return $this->save();
    }
}

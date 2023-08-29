@extends('layouts.app')

@section('pageTitle', "Jon's blog")

@section('content')

@include('layouts.blog-head')

<button class="fixed top-5 left-5"><a href="/blog" class="border border-white bg-slate-300 px-4 py-2 rounded-md shadow-md opacity-80"><i class="fa-solid fa-arrow-left"></i></a></button>

<div class="w-11/12 md:w-3/4 m-auto bg-white px-2 md:px-24 pb-24 mb-12">
    <h3 class="text-2xl font-bold text-center py-12">{{ $blog->title }} : </h3>
    <img src="{{ $blog->image_url }}" class="w-full">
    <div class="even:bg-slate-200 md:px-3">
        <p>Views : {{ $blog->click }}</p>
        <p class="w-full font-thin text-justify md:pr-3 text-gray-600">{{ $blog->body }}</p>
        <p class="font-thin">{{ $blog->created_at}}</p>    
    </div>
</div>

@endsection
@extends('layouts.app')

@section('pageTitle', "Jon's blog")

@section('content')

<button class="fixed top-5 left-5 border border-white bg-slate-300 px-4 py-2 rounded-md shadow-md opacity-80"><a href="/blog"><i class="fa-solid fa-arrow-left"></i></a></button>

<div class="max-w-screen h-96 mb-12">
    <div class="w-full h-full bg-gradient-to-r from-red-400 to-red-200 flex justify-center items-center flex-col">
        <h2 class="text-4xl font-bold text-center mb-6">Jon's blog</h2>
        <p class="text-justify px-3 text-gray-600">Here's my biggest collection of unasked and uninformed opinions about stuff you shouldn't care about or certainly already knows how to do.</p>
        <p class="text-gray-600">Enjoy !</p>
    </div>
</div>

<div class="w-11/12 md:w-3/4 m-auto bg-white px-2 md:px-24 pb-24 mb-12">
    <h3 class="text-2xl font-bold text-center py-12">{{ $blog->title }} : </h3>
    <img src="{{ $blog->image_url }}" class="w-full">
    <div class="even:bg-slate-200 md:px-3">
        <p class="w-full font-thin text-justify md:pr-3 text-gray-600">{{ $blog->body }}</p>
        <p class="font-thin">{{ $blog->created_at}}</p>    
    </div>
</div>

@endsection
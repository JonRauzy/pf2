@extends('layouts.app')

@section('pageTitle', "Jon Rauzy - Blog")

@section('content')

<div class="max-w-screen h-96">
    <div class="w-full h-full bg-gradient-to-r from-red-400 to-red-200 flex justify-center items-center flex-col">
        <h2 class="text-4xl font-bold text-center mb-6">Jon's blog</h2>
        <p class="text-justify px-3 text-gray-600">Here's my biggest collection of unasked and uninformed opinions about stuff you shouldn't care about or certainly already knows how to do.</p>
        <p class="text-gray-600">Enjoy !</p>
    </div>
</div>

<div class="w-11/12 md:w-1/2 m-auto">
    <h3 class="text-2xl font-bold text-center py-12">Here's our latest articles : </h3>
    @foreach ($blogs as $blog)
    <div class="even:bg-slate-200 md:px-3 shadow-md">
        <a href="blog/{{ $blog->id }}" >
            <div class="grid grid-cols-3 mb-6">
                <div class="col-span-2">
                    <h3 class="text-lg md:text-2xl">{{ $blog->title }}</h3>
                    <p class="font-thin text-justify pr-2 text-gray-600">{{ Str::limit($blog->body, 100) }}</p>
                    <p class="font-thin hover:text-gray-500">Read more...</p>
                    <p class="font-thin">{{ $blog->created_at}}</p>
                </div>
                <img src="{{ $blog->image_url }}" class="w-full aspect-square object-cover md:h-48 md:aspect-auto">
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection
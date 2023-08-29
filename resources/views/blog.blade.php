@extends('layouts.app')

@section('pageTitle', "Jon Rauzy - Blog")

@section('content')

@include('layouts.blog-head')

<main class="max-w-screen flex flex-col-reverse lg:gap-8 lg:justify-center lg:flex-row">
    <section class="w-11/12 md:w-1/2 m-auto lg:m-0">
        <h3 class="text-2xl font-bold text-center pt-12 pb-6 lg:py-12">Here's our latest articles : </h3>
        @foreach ($blogs as $blog)
        <div class="even:bg-slate-200 odd:bg-slate-100 md:px-3">
            <a href="blog/{{ $blog->slug }}" >
                <div class="grid grid-cols-3 mb-3 md:mb-6">
                    <div class="col-span-2 px-2">
                        <h3 class="text-lg md:text-2xl">{{ $blog->title }}</h3>
                        <p class="font-thin text-justify pr-2 text-gray-600">{{ Str::limit($blog->body, 75) }}</p>
                        <p class="font-thin hover:text-gray-500">Read more...</p>
                        <p class="font-thin">{{ $blog->created_at}}</p>
                    </div>
                    <img src="{{ $blog->image_url }}" class="aspect-square object-cover h-48">
                </div>
            </a>
        </div>
        @endforeach
    </section>
    <section class="max-w-screen lg:w-1/6">
        <h3 class="text-2xl font-bold text-center py-6 lg:py-12">Trending articles : </h3>
        <div class="w-full flex flex-row gap-1 px-1 lg:gap-0 lg:flex-col bg-white">
        @foreach ($trends as $trend)
            <a href="blog/{{ $trend->slug }}" class="flex flex-col lg:block lg:mb-12 justify-between">
                <h3 class="text-sm md:text-lg text-center">{{ $trend->title }}</h3>
                <p class="text-xs font-thin text-center text-gray-600">Views : {{ $trend->click }} </p>
                <img src="{{ $trend->image_url }}" class="w-full aspect-video object-cover h-20 md:h-48 mb-6">
            </a> 
        @endforeach
        </div>
    </section>
</main>

@endsection
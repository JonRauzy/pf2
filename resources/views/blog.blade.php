@extends('layouts.app')

@section('pageTitle', "Jon Rauzy - Blog")

@section('content')

<div class="pt-6 mb-12 md:mb-24">
    <h2 class="text-3xl text-center">Blog</h2>
    <p class="text-justify px-3 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus exercitationem eum quam quasi nobis iusto modi eos laborum non dignissimos nemo, perferendis quidem dolorum pariatur sed, quas nisi natus eligendi.</p>
</div>
<div class="mx-6 md:w-1/2 md:m-auto">
    @foreach ($blogs as $blog)
    <div class="even:bg-slate-200 px-3 py-2 shadow-md">
        <a href="https://www.facebook.com" target="blank">
            <div class="grid grid-cols-3 mb-12">
                <div class="col-span-2">
                    <p class="font-thin">{{ $blog->created_at}}</p>
                    <h3 class="text-lg md:text-2xl">{{ $blog->title }}</h3>
                    <p class="font-thin text-justify pr-3 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <p class="font-thin hover:text-gray-500">Read more...</p>
                </div>
                <img src="{{ $blog->image_url }}" class="w-full aspect-square object-cover md:aspect-auto">
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection
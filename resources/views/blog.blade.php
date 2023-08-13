@extends('layouts.app')

@section('pageTitle', "Jon Rauzy - Blog")

@section('content')

<div class="text-center">
    <h2>Blog</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus exercitationem eum quam quasi nobis iusto modi eos laborum non dignissimos nemo, perferendis quidem dolorum pariatur sed, quas nisi natus eligendi.</p>
</div>
<div class="mx-12">
    @foreach ($blogs as $blog)
        <h3 class="text-2xl py-5">{{ $blog->title }}</h3>
        <p>{{ $blog->body }}</p>
        <img src="{{ $blog->image_url }}" alt="" class="w-1/2">
    @endforeach
</div>
@endsection
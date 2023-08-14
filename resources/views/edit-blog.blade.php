@extends('layouts.app')

@section('pageTitle', "Jon Rauzy - Edit Blog")

@section('content')

<h2>Edit Blog</h2>

<form action="/send-edited-blog/{{$blog->id}}" method="POST" class="flex flex-col">
    @csrf
    @method('PUT')
    <input type="text" name="title" id="title" value="{{ $blog->title }}">
    <input type="text" name="slug" id="title" value="{{ $blog->slug }}">
    <textarea name="body" id="body" class="border border-black h-60"> {{ $blog->body }} </textarea>
    <input type="text" name="image_url" id="title" value="{{ $blog->image_url }}">
    <button>Save</button>
</form>

@endsection
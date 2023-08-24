@extends('layouts.app')

@section('pageTitle', "Jon Rauzy - Edit Blog")

@section('content')

<h2 class="text-4xl font-bold text-center mb-6 pt-12">Edit Blog : {{ $blog->title }}</h2>
<div  class="w-8/12 m-auto place-content-center">
    <form action="/send-edited-blog/{{$blog->id}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 space-y-2">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="title" value="{{ $blog->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <input type="text" name="slug" id="title" value="{{ $blog->slug }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <textarea name="body" id="body" class="h-48 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> {{ $blog->body }} </textarea>
        <input type="text" name="image_url" id="title" value="{{ $blog->image_url }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <button class="bg-red-500 hover:bg-red-600 hover:cursor-pointer text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline">Save</button>
    </form>
</div>

@endsection


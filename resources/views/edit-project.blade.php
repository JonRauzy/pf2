@extends('layouts.app')

@section('pageTitle', "Jon Rauzy - Blog")

@section('content')

<h2>Edit Project</h2>

<form action="/send-edited-project/{{$project->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" id="title" value="{{ $project->title }}">
    <textarea name="body" id="body"> {{ $project->body }} </textarea>
    <input type="text" name="stack" id="title" value="{{ $project->stack }}">
    <input type="text" name="link_url" id="title" value="{{ $project->link_url }}">
    <input type="text" name="image_url" id="title" value="{{ $project->image_url }}">
    <button>Save</button>
</form>

@endsection
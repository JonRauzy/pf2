@extends('layouts.app')

@section('pageTitle', "Admin")

@section('content')

@if (session('success'))
    {{session('success')}}
@endif

@auth

<h2>Salut {{ $name }}</h2>

{{-- CRUD --}}

<form action="./add-project" method="POST" class="grid place-content-center mb-11">
    @csrf
    <div class="flex flex-col space-y-2">
        <input type="text" name="title" placeholder="titre du projet" class="border border-black m-2"> 
        <textarea name="body" placeholder="description" class="border border-black m-2"></textarea> 
        <input type="text" name="stack" placeholder="stack" class="border border-black m-2"> 
        <input type="text" name="link_url" placeholder="Url" class="border border-black m-2"> 
        <input type="text" name="image_url" placeholder="photo" class="border border-black m-2"> 
        <input type="submit" value="Enregistrer" class="border border-black m-2"> 
    </div>
</form>

@else
    {{-- connexion form --}}
    <form action="./login" method="POST" class="grid place-content-center mb-11">
        @csrf
        <div class="flex flex-col space-y-2">
            <input type="text" name="name" id="name" placeholder="name" class="border border-black">
            <input type="password" name="password" id="password" placeholder="password" class="border border-black">
            <input type="submit" value="Enter" class="border border-black">
        </div>
    </form>

@endauth

    {{-- A REFAIRE AVANT DE DEPLOYER --}}
    {{-- <form action="./newuser" method="POST" class="grid place-content-center">
        <h2>new</h2>
        @csrf
        <div class="flex flex-col space-y-2">
            <input type="text" name="name" id="name" placeholder="name" class="border border-black">
            <input type="password" name="password" id="password" placeholder="password" class="border border-black">
            <input type="email" name="email" id="email" placeholder="email" class="border border-black">
            <input type="submit" value="Enter" class="border border-black">
        </div>
    </form> --}}


@endsection
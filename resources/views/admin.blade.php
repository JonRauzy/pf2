@extends('layouts.app')

@section('pageTitle', "Admin")

@section('content')

    @if (session('success'))
        {{session('success')}}
    @endif

    @auth

    <h2>Salut {{ $name }}</h2>

    {{-- CRUD --}}
    <h2 class="m-12 text-center font-bold text-2xl">Projects</h2>
    <div  class="w-full max-w-xs m-auto place-content-center">
        <form action="./add-project" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="flex flex-col space-y-2">
                <input type="text" name="title" placeholder="titre du projet" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <textarea name="body" placeholder="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea> 
                <input type="text" name="stack" placeholder="stack" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="text" name="link_url" placeholder="Url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="text" name="image_url" placeholder="photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="submit" value="Enregistrer" class="bg-gray-500 hover:bg-gray-700 hover:cursor-pointer text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> 
            </div>
        </form>
    </div>


    <table class="border border-black m-2">
        <tr>
            <th class="border border-black m-2">Title</th>
            <th class="border border-black m-2">body</th>
            <th class="border border-black m-2">stack</th>
            <th class="border border-black m-2">link url</th>
            <th class="border border-black m-2">image url</th>
            <th class="border border-black m-2">Update</th>
            <th class="border border-black m-2">delete</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td class="border border-black m-2">{{ $project->title }}</td>
                <td class="border border-black m-2">{{ $project->body }}</td>
                <td class="border border-black m-2">{{ $project->stack }}</td>
                <td class="border border-black m-2">{{ $project->link_url }}</td>
                <td class="border border-black m-2">{{ $project->image_url }}</td>
                <td><button><a class="border border-black m-2" href="edit-project/{{ $project->id }}">Update</a></button></td>
                <td><form action="/delete-project/{{ $project->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>

    <hr>

    <h2 class="m-12 text-center font-bold text-2xl">Blog</h2>
    <div  class="w-full max-w-xs m-auto place-content-center">
        <form action="./add-blog" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="flex flex-col space-y-2">
                <input type="text" name="title" placeholder="titre du blog" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <textarea name="body" placeholder="texte du blog" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea> 
                <input type="text" name="image_url" placeholder="photo du blog" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="submit" value="Enregistrer" class="bg-gray-500 hover:bg-gray-700 hover:cursor-pointer text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> 
            </div>
        </form>
    </div>

    <table class="border border-black m-2">
        <tr>
            <th class="border border-black m-2">Title</th>
            <th class="border border-black m-2">Slug</th>
            <th class="border border-black m-2">Body</th>
            <th class="border border-black m-2">Image url</th>
            <th class="border border-black m-2">Update</th>
            <th class="border border-black m-2">Delete</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td class="border border-black m-2">{{ $blog->title }}</td>
                <td class="border border-black m-2">{{ $blog->slug }}</td>
                <td class="border border-black m-2">{{ $blog->body }}</td>
                <td class="border border-black m-2">{{ $blog->image_url }}</td>
                <td><button><a class="border border-black m-2" href="edit-blog/{{ $blog->id }}">Update</a></button></td>
                <td><form action="/delete-blog/{{ $blog->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>

    @else
        {{-- connexion form --}}
        <form action="{{ route('user.login') }}" method="POST" class="grid place-content-center mb-11">
            @csrf
            <div class="flex flex-col space-y-2">
                <input type="text" name="name" id="name" placeholder="name" class="border border-black">
                <input type="password" name="password" id="password" placeholder="password" class="border border-black">
                <input type="submit" value="Enter" class="border border-black">
            </div>
        </form>

    @endauth

        {{-- A REFAIRE AVANT DE DEPLOYER --}}
        {{-- <form action="{{ route('user.register') }}" method="POST" class="grid place-content-center">
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
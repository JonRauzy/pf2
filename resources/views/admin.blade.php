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
    <div  class="w-8/12 m-auto place-content-center">
        <form action="./add-project" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="flex flex-col space-y-2">
                <input type="text" name="title" placeholder="titre du projet" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <textarea name="body" placeholder="description" class="shadow appearance-none border rounded w-full py-2 h-48 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea> 
                <input type="text" name="stack" placeholder="stack" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="text" name="link_url" placeholder="Url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="text" name="source" placeholder="Source code url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="text" name="image_url" placeholder="photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="submit" value="Enregistrer" class="bg-red-500 hover:bg-red-600 hover:cursor-pointer text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> 
            </div>
        </form>
    </div>


    <table class="bg-white shadow-md m-9">
        <tr>
            <th class="">Title</th>
            <th class="">Body</th>
            <th class="">Stack</th>
            <th class="">Link url</th>
            <th class="">source code url</th>
            <th class="">Image url</th>
            <th class=""></th>
            <th class=""></th>
        </tr>
        @foreach ($projects as $project)
            <tr class="even:bg-gray-100 odd:bg-white">
                <td class="border border-black px-3">{{ $project->title }}</td>
                <td class="border border-black pl-3 w-72">{{ $project->body }}</td>
                <td class="border border-black px-3">
                @php
                    $stacks = explode('|||', $project->stack);
                @endphp
                    <ul>
                        @foreach ($stacks as $stack)
                            <li>{{ $stack }}</li>
                        @endforeach
                        <li></li>
                    </ul>
                </td>
                <td class="border border-black px-3">{{ $project->link_url }}</td>
                <td class="border border-black px-3">{{ $project->source }}</td>
                <td class="border border-black px-3">{{ $project->image_url }}</td>
                <td class="border border-black px-3" ><button><a href="edit-project/{{ $project->id }}">Update</a></button></td>
                <td class="border border-black px-3" ><form action="/delete-project/{{ $project->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>

    <hr>

    <h2 class="m-12 text-center font-bold text-2xl">Blog</h2>
    <div  class="w-3/4 m-auto place-content-center">
        <form action="./add-blog" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="flex flex-col space-y-2">
                <input type="text" name="title" placeholder="titre du blog" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <textarea name="body" placeholder="texte du blog" class="shadow appearance-none border rounded w-full h-48 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea> 
                <input type="text" name="image_url" placeholder="photo du blog" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                <input type="submit" value="Enregistrer" class="bg-red-500 hover:bg-red-600 hover:cursor-pointer text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> 
            </div>
        </form>
    </div>

    <table class="bg-white shadow-md m-9">
        <tr>
            <th class="">Title</th>
            <th class="">Slug</th>
            <th class="">Body</th>
            <th class="">Image url</th>
            <th class=""></th>
            <th class=""></th>
        </tr>
        @foreach ($blogs as $blog)
            <tr class="even:bg-gray-100 odd:bg-white">
                <td class="border border-black m-2 px-3">{{ $blog->title }}</td>
                <td class="border border-black m-2 px-3">{{ $blog->slug }}</td>
                <td class="border border-black m-2 pl-3">{{ $blog->body }}</td>
                <td class="border border-black m-2 px-3">{{ $blog->image_url }}</td>
                <td  class="border border-black px-3" ><button><a href="edit-blog/{{ $blog->id }}">Update</a></button></td>
                <td  class="border border-black px-3" ><form action="/delete-blog/{{ $blog->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>

    @else
        {{-- connexion form --}}
        <div  class="w-11/12 md:w-1/2 m-auto place-content-center mt-24">
            <form action="{{ route('user.login') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="flex flex-col space-y-2">
                    <input type="text" name="name" placeholder="Login name" class="shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                    <input type="password" name="password" placeholder="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                    <input type="submit" value="Login" class="bg-red-500 hover:bg-red-600 hover:cursor-pointer text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> 
                </div>
            </form>
        </div>

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
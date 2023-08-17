@extends('layouts.app')

{{-- Page Title --}}
@section('pageTitle', "Jon Rauzy - Home")


{{-- body --}}
@section('content')

{{-- HERO --}}
<div class="bg-gradient-to-r from-red-400  to-red-200 max-w-full text-center pt-6 mb-24">

    <div class="text-center">
        @if (session('success'))
            <h4 class="text-3xl">{{ session('success') }}</h4>
        @endif
    
        @if (session('unsuccess'))
            <h4 class="text-3xl">{{ session('unsuccess') }}</h4>
        @endif
    </div>
    
    <h1 class="text-4xl md:text-5xl font-bold text-center my-6 md:mb-12">Jon Rauzy - Web Developer Junior </h1>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <img class="w-10/12 m-auto mb-12 md:px-12:pt-12 shadow-lg" src="https://img.freepik.com/photos-gratuite/portrait-homme-blanc-isole_53876-40306.jpg?w=2000">
        <div class="flex flex-col place-content-center">
            <h3 class="text-5xl pb-6">Bringing quality code to your compagny</h3>
            <ul class="space-y-3 last:mb-12 text-xl">
                <li>Html</li>
                <li>CSS</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
                <li>Laravel</li>
                <li>And more...</li>
            </ul>
        </div>
    </div>
</div>

{{-- ABOUT --}}
<div class="mb-24">
    <h2 class="text-3xl font-bold text-center mb-6">About Me</h2>
    <p class="px-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta magnam quam blanditiis, id, quia ullam, molestiae vero non beatae reiciendis voluptate facilis. Dolor sapiente, qui minus fuga ullam suscipit error fugit tenetur, architecto soluta nam, tempore laborum saepe dolores quo. Dignissimos dolore omnis eaque ullam autem iure quia totam adipisci mollitia et, placeat similique culpa sint, corporis optio eum suscipit enim nisi quos voluptatem libero dolorem officiis neque recusandae! Quo ipsum dolore adipisci debitis quia velit perspiciatis possimus quibusdam sequi doloremque deleniti voluptate dolores temporibus, inventore at. Iusto, id corrupti, quam blanditiis molestiae odit libero omnis veniam, soluta repellat a.</p>
</div>

{{-- PROJECT --}}
<div class="mx-3 md:mx-12 mb-24">
    <h2 class="text-center text-3xl font-bold mb-6">Check out my latest projects</h2>
    @foreach ($projects as $project)
    <div class="mb-1 bg-slate-200 even:bg-slate-300 shadow-md">
        <h3 class="text-bold text-center p-12 text-2xl">{{$project['title']}}</h3>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="md:col-start-1:col-span-1 px-6 md:px-12">
                    <p class="mb-6 text-justify">{{$project['body']}}</p>
                    @php
                        $stacks = explode('|||', $project['stack'])
                    @endphp
                    <ul class="px-24 mb-6">
                        @foreach ($stacks as $stack)
                            <li>- {{$stack}}</li>    
                        @endforeach
                    </ul>
                    <a href="{{$project['link_url']}}" target="blank" class="text-center">Visit here : {{$project['link_url']}}</a>
                </div>
                <img src="{{$project['image_url']}}" class="md:col-start-2:col-span-1:row-start-1:row-end-5 m-auto pd-6 md:pb-12">
            </div>
    </div>
    @endforeach
</div>

{{-- CONTACT --}}
<div class="mb-24 w-11/12 md:w-1/2 m-auto">
    <h2 class="text-3xl font-bold text-center mb-6">Get in touch</h2>
    <form action="./contact" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="flex flex-col space-y-2">
            <input type="text" name="name" placeholder="Your name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
            <input type="text" name="email" placeholder="Your e-mail adress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
            <textarea name="message" placeholder="Your message..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea> 
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 hover:cursor-pointer text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send</button> 
        </div>
    </form>
</div>

@endsection 
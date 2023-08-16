@extends('layouts.app')

{{-- Page Title --}}
@section('pageTitle', "Jon Rauzy - Home")


{{-- body --}}
@section('content')

{{-- HERO --}}
<div class="bg-red-600 max-w-full text-center pt-12 mb-24">

    <div class="text-center">
        @if (session('success'))
            <h4 class="text-3xl">{{ session('success') }}</h4>
        @endif
    
        @if (session('unsuccess'))
            <h4 class="text-3xl">{{ session('unsuccess') }}</h4>
        @endif
    </div>
    
    <h1 class="text-3xl font-bold text-center">Jon Rauzy - Junior Web Developer</h1>
    <div class="grid grid-cols-2">
        <img src="https://yt3.googleusercontent.com/ytc/AOPolaTIysKiXg5baWK89JyRJfJL2YpjVOuaFMz60bKSNw=s900-c-k-c0x00ffffff-no-rj" class="w-10/12 px-12 pt-12">
        <div class="flex flex-col place-content-center">
            <h3 class="text-3xl pb-12">Bringing quality code to your compagny mofo</h3>
            <ul class="space-y-3">
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
<div class="mx-12 mb-24">
    <div class="text-center mb-3">
        <h2 class="text-3xl font-bold mb-6">Project : </h2>
        <p>Check out my latest projects : </p>
    </div>
    @foreach ($projects as $project)
    <div class="mb-1 bg-slate-100 even:bg-slate-300">
        <h3 class="text-bold text-center p-12 text-2xl">{{$project['title']}}</h3>
            <div class="grid grid-cols-2">
                <div class="col-start-1 col-span-1">
                    <p class="px-12 mb-6">{{$project['body']}}</p>
                    @php
                        $stacks = explode('|||', $project['stack'])
                    @endphp
                    <ul class="px-24">
                        @foreach ($stacks as $stack)
                            <li>- {{$stack}}</li>    
                        @endforeach
                    </ul>
                    <a href="{{$project['link_url']}}" target="blank" class="text-center m-12">Visit here : {{$project['link_url']}}</a>
                </div>
                <img src="{{$project['image_url']}}" alt="" class="col-start-2 col-span-1 even:w-full row-start-1 row-end-5 m-auto pb-12">
            </div>
    </div>
    @endforeach
</div>

{{-- CONTACT --}}
<div class="mb-24 w-1/2 m-auto">
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
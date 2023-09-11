@extends('layouts.app')

{{-- Page Title --}}
@section('pageTitle', "Jon Rauzy - Home")


{{-- body --}}
@section('content')

{{-- HERO --}}
<nav class="z-10 md:px-36 py-6 pl-3 fixed md:w-1/2 top-0 md:right-0 flex flex-row-reverse gap-8 md:bg-gradient-to-r from-transparent via-red-100 to-red-200 text-gray-800">
    <a href="#contact" class="block hover:text-black">Contact</a>
    <a href="#project" class="block hover:text-black">Projects</a>
    <a href="#about" class="block hover:text-black">About</a>
</nav>
<div class="bg-gradient-to-r from-red-400 to-red-200 max-w-full text-center pt-24">
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
        <img class="w-9/12 aspect-square object-cover m-auto mb-12 md:px-12:pt-12 shadow-lg" src="{{asset('asset/img/portrait.png')}}">
        <div class="flex flex-col place-content-center">
            <h3 class="text-3xl md:text-5xl pb-6">Bringing quality code to your compagny</h3>
            <ul class="space-y-3 last:mb-12 text-xl text-gray-600">
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
<section id="about" class="pt-24">

    <div class="md:px-12">
        <h2 class="text-3xl font-bold text-center mb-6">About Me</h2>
        <p class="px-12">Hello, I'm Jon! A french living in Brussel for the past 10 years. I just graduate as a Web Developper from the <a href="https://www.cf2m.be/home">CF2M school</a> and now looking for an internship. Our cursus was heavily focus on vanilla PHP and MySQL for the back-end as well as HTML, CSS and vanilla JS for the front-end. We also dipped our toes into Symfony and Node by the end of the year. On the side I got myself into Laravel during my summer break to code this very portfolio and I loved it. Now I'm eager to practice my new skills and to learn even more! Don't hesitate to <a href="#contact">contact me</a> if you're hiring or if you need any more informations about me and the work i can provide. I'll be happy to answer you! Have a great day and thanks for visiting my humble website!</p>
    </div>
</section>

{{-- PROJECT --}}
<div class="mx-3 md:mx-12 pt-24" id="project">
    <h2 class="text-center text-3xl font-bold lg:mb-6 mb-3">Check out my latest projects</h2>
    @foreach ($projects as $project)
    <div class="mb-1 bg-slate-200 even:bg-slate-300 shadow-md">
        <h3 class="bold text-center p-12 text-2xl font-bold">{{$project->title}}</h3>
        <div class="flex lg:flex-row flex-col-reverse relative">
            <div>
                <p class="mb-6 px-3 lg:px-12 text-justify text-gray-600">{{$project->body}}</p>
                @php
                    $stacks = explode('|||', $project->stack)
                @endphp
                <ul class="px-24 mb-36 text-gray-600">
                    @foreach ($stacks as $stack)
                        <li>- {{$stack}}</li>    
                    @endforeach
                </ul>
                <div class="grid grid-cols-2 grid-rows-1 absolute inset-x-0 bottom-0 lg:w-1/2 mt-24 lg:px-24 pb-6">
                    <div class="text-center col-start-1 col-span-1 row-start-1 row-span-1">
                        <p class="p-3 text-gray-600">Visit here :</p>
                        <a href="{{$project->link_url}}" target="blank"><i class="fa-solid fa-globe text-5xl text-gray-800 hover:text-black"></i></a>
                    </div>
                    <div class="text-center col-start-2 col-span-1 row-start-1 row-span-1"">
                        <p class="p-3 text-gray-600">Source code :</p>
                        <a href="{{$project->source}}" target="blank"><i class="fa-brands fa-github text-5xl text-gray-800 hover:text-black"></i></a>
                    </div>
                </div>
            </div>
            <img src="{{asset($project->image_url)}}" class="m-auto lg:w-1/2 w-full mb-3 lg:mb-6">
        </div>
    </div>
    @endforeach
</div>

{{-- CONTACT --}}
<div class="mb-24 w-11/12 md:w-1/2 m-auto pt-24" id="contact">
    <h2 class="text-3xl font-bold text-center mb-6">Get in touch</h2>
    <form action="./contact" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="flex flex-col space-y-2">
            <input type="text" name="name" placeholder="Your name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
            <input type="text" name="email" placeholder="Your e-mail adress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
            <textarea name="message" placeholder="Your message..." class="shadow appearance-none border rounded w-full h-48 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea> 
            <button type="submit" class="bg-red-500 hover:bg-red-600 hover:cursor-pointer text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send</button> 
        </div>
    </form>
</div>

@endsection 
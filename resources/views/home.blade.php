@extends('layouts.app')

{{-- Page Title --}}
@section('pageTitle', "Jon Rauzy - Home")


{{-- body --}}
@section('content')

<div class="text-center">
    @if (session('success'))
        <h4 class="text-3xl">{{ session('success') }}</h4>
    @endif

    @if (session('unsuccess'))
        <h4 class="text-3xl">{{ session('unsuccess') }}</h4>
    @endif
</div>
<div class="bg-red-600 h-fit w-screen text-center pt-12 ">
    <h1 class="text-3xl font-bold text-center">Jon Rauzy - web developper Jr</h1>
    <div class="grid grid-cols-2 space-x-11">
        <img src="https://yt3.googleusercontent.com/ytc/AOPolaTIysKiXg5baWK89JyRJfJL2YpjVOuaFMz60bKSNw=s900-c-k-c0x00ffffff-no-rj" alt="" class="w-1/3 px-12">
        <p class="p-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum amet culpa nesciunt sint nam harum, deleniti enim molestias? Similique quos numquam amet? Quis blanditiis quos, rerum repellendus accusantium non neque!</p>
    </div>
</div>

<div class="project m-12">
    @foreach ($projects as $project)
        <h3 class="text-bold text-xl">{{$project['title']}}</h3>
        <p>{{$project['body']}}</p>
        @php
            $stacks = explode('|||', $project['stack'])
        @endphp
        <ul>
            @foreach ($stacks as $stack)
                <li>{{$stack}}</li>    
            @endforeach
        </ul>
        <a href="{{$project['link_url']}}" target="blank">{{$project['link_url']}}</a>
        <img src="{{$project['image_url']}}" alt="" width='500px'>
    @endforeach
</div>

@endsection 
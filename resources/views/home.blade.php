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
    
    <h2>Salut !</h2>
    <p class="p-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum amet culpa nesciunt sint nam harum, deleniti enim molestias? Similique quos numquam amet? Quis blanditiis quos, rerum repellendus accusantium non neque!</p>
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
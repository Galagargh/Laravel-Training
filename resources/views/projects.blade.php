@extends('layout')


@section('content')
    @foreach($projects as $project)
        <article class="grid grid-cols-2 grid-rows-3 {{$project->color}} projects">

            <div class="flex flex-col projects-summ">
                <h1 class="text-white tablet:text-dh1">
                    <a href="/projects/{{$project->slug}}">
                        {{$project->title}}
                    </a>
                </h1>
                <div class="excerpt">
                    <p class="white">{{$project->excerpt}}</p>
                </div>
                <div class="button">
                    <a class="btn btn-primary btn-lg" href="/projects/{{$project->slug}}">View Project</a>
                </div>
            </div>

            <div class="flex projects-img">
                <img class="" src="/{!! $project->featuredImage !!}" alt="{{$project->title}}">
            </div>

        </article>
    @endforeach
@endsection




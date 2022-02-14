@extends('layout')

@section('banner')
    <h1>My Blog</h1>
@endsection

@section('content')
    @foreach($projects as $project)
        <article class="{{ $loop->even ? 'even' : '' }}">
            <h1>
                <a href="/posts/{{$project->id}}">
                    {{$project->title}}
                </a>
            </h1>
            <div>
                {{$project->excerpt}}
            </div>
        </article>
    @endforeach
@endsection




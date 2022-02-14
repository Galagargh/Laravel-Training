@extends('layout')

@section ('content')
    <article>
        <h1>{!! $project->title !!}</h1>

        <div>
            {!! $project->description !!}
        </div>

    </article>
    <a href="/">Go back</a>
@endsection




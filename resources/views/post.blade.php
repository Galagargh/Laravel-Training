@extends('layout')

@section ('content')
    <article>
        <h2>{!! $post->title !!}</h2>

        <div>
            {!! $post->body !!}
        </div>

    </article>
    <a href="/">Go back</a>
@endsection




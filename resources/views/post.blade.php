@extends('layout')

@section ('content')
    <article>
        <h2>{!! $post->title !!}</h2>

        <p>
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->body !!}
        </div>

    </article>
    <a href="/">Go back</a>
@endsection




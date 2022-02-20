@extends('layout')



@section('content')
    @foreach($projects as $project)

        <project-overview color="{{$project->color}}"
                          slug="{{$project->slug}}"
                          title="{{$project->title}}"
                          excerpt="{{$project->excerpt}}"
                          image="{{$project->featuredImage}}">
        </project-overview>

    @endforeach
@endsection




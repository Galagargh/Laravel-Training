@extends('layout')

@section('content')

    @php
        $highlighted = 0;
        $projectSpotlight = $projects[$highlighted];
    @endphp

        <project-overview @next-project="cycleNext"
                          @prev-project="cyclePrev"
                          v-model="$projectSpotlight"
                          id="{{$projectSpotlight->id}}"
                          color="{{$projectSpotlight->color}}"
                          slug="{{$projectSpotlight->slug}}"
                          title="{{$projectSpotlight->title}}"
                          excerpt="{{$projectSpotlight->excerpt}}"
                          image="{{$projectSpotlight->featuredImage}}">
        </project-overview>

@endsection




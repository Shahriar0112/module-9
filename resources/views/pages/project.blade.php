@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h1>Project</h1>
    @if(count($project) > 0)
        <ul>
            @foreach($project as $project)
                <li>
                    <h2>{{ $project->title }}</h2>
                    <p>{{ $project->description }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No projects available.</p>
    @endif
@endsection

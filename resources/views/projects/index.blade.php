@extends('projects.navbar')

@section('content')
    <div class='main'>
        <div class='container'>
            @if(Session::has('successUpdate'))
                <div class="alert alert-success">
                    {{ Session::get('successUpdate') }}
                </div>
            @elseif(Session::has('successDelete'))
                <div class="alert alert-success">
                    {{ Session::get('successDelete') }}
                </div>

            @endif
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-center'>My Projects</h1>
                    <h3>
                        @if(count($projects)>0)
                            <ul>
                                @foreach ($projects as $project)
                                    <li>
                                        <a href="/projects/{{ $project->id }}">{{ $project->ProjectTitle }}</a>
                                        <h6>Created At {{ $project -> created_at}}</h6>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <h2>No projects found</h2>
                        @endif
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection 
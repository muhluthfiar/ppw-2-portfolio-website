@extends('projects.navbar')

@section('content')
    <div class='main'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-center'>{{ $project->ProjectTitle }}</h1>
                    <h2 class='text-center'>Created At :{{ $project->created_at }}</h2>
                    <h3 >
                        <p>
                            {{ $project->ProjectDescription }}
                        </p>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection
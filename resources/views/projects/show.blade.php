@extends('projects.navbar')

@section('content')
    <div class='main'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-center'>{{ $project->ProjectTitle }}</h1>
                    <h2 class='text-center'>Created At :{{ $project->created_at }}</h2>
                    <img src="{{asset('storage/ProjectImages/'.$project->picture)}}">
                    <h3 >
                        <p>
                            {{ $project->ProjectDescription }}
                        </p>
                    </h3>
                    
                    <a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Edit</a>
                </div>
                <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                    @method('DELETE')
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$project->id}}">
                    <button type="submit" onClick="return confirm('Hapus portfolio?')" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
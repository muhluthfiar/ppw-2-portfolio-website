@extends('projects.navbar')

@section('content')
    <div class='main'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-center'>Edit Project</h1>
                    <h3 >
                        <form action={{route('projects.update', $project->id)}} method="POST">
                            @method('PUT')
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="ProjectTitle" placeholder="Enter Title" value="{{$project->ProjectTitle}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="ProjectDescription" rows="3" >{{$project->ProjectDescription}}</textarea>
                            </div>
                            <input type='hidden' name="id" value={{$project->id}}>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('projects.navbar')

@section('content')
    <div class='main'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-center'>Create Project</h1>
                    <h3 >
                        <form action={{route('projects.store')}} method="POST" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="ProjectTitle" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="ProjectDescription" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file custom-file-label" id="image" name="ProjectImage">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection
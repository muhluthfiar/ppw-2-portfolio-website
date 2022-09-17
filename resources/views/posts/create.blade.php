@extends('posts.navbar')

@section('content')
    <div class='main'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-center'>Create Post</h1>
                    <h3 >
                        <form action={{route('posts.store')}} method="POST">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection
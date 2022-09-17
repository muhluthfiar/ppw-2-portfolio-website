@extends('posts.navbar')

@section('content')
    <div class='main'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-center'>{{ $post->title }}</h1>
                    <h3 >
                        <p>
                            {{ $post->description }}
                        </p>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection
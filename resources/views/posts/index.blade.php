@extends('posts.navbar')

@section('content')
    <div class='main'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-center'>My Posts</h1>
                    <h3 >
                        <ul>
                            @foreach ($posts as $post)
                                <li>
                                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection 
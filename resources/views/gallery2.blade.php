@extends('layouts.app')

@section('content')
    <div class='allpictures'>
       @foreach($data['galleries']['0'] as $gallery)
           <div class='picture'>
               <a href="{{asset('storage/ProjectImages/'.$gallery['0']->picture)}}" data-lightbox="example-set" data-title="{{$gallery['0']->ProjectTitle}}">
                   <img src="{{asset('storage/ProjectImages/'.$gallery['0']->picture)}}" alt="" width="100%" height="100%"/>
               </a>
           </div>
        @endforeach
    </div>
@endsection
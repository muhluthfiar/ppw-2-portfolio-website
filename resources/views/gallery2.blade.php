@extends('layouts.app')

@section('content')
    <div class='allpictures'>
       {{ $data->galleries->0->0->ProjectTitle }}
    </div>
@endsection
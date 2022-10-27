@extends('layouts.navbar')

@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Kirim Email</h1>
                </div>
            </div>
            
            @if (session('status'))
            <div class="alert alert-primary" role="alert">
                {{ session('status') }}
            </div>
            @endif
        </div>

        <div class="container">
            <form action="{{route('post-email')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email-destination">Email Tujuan</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Tujuan">
                </div>
                <div class="form-group">
                    <label for="email-title">Judul Email</label>
                    <input type="text" class="form-control" id="email-title" name="name" placeholder="Masukkan Judul Email">
                </div>
                <div class="form-group">
                    <label for="email-body">Isi Email</label>
                    <textarea class="form-control" id="email-body" name="body" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Kirim Email</button>
                </div>
            </form>
        </div>
    </div>
@endsection
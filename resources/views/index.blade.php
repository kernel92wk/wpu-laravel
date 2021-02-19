@extends('layout/main')

@section('title', 'Fuad Efendy')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5>
        </div>
        
    </div>
</div>
@endsection
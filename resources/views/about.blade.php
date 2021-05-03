@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <button> <a href="{{route('home')}}"> Kembali</a></button>
            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                    <h1> About / Profile </h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card card-header">
            <div class="card card-title">DETAIL JURUSAN
                
            </div>
            <div class="card card-body">
                <p>ID : {{ $major->id }}</p>
                <p>Nama jrurusan :{{ $major->name }}</p>
                <p>Harga Estimasi: {{ $major->cost }}</p>
            </div>
            <div class="card card-footer">
                <button type="submit"  class="btn btn-secondary" > <a href="{{route('major.index')}}"> Kembali</a> </button>
            </div>
        </div>
    </div>    

@endsection
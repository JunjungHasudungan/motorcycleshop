@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">DETAIL DATA DOSEN</div>
        <div class="card-title">

        </div>
        <div class="card-body">
                <p>Nama : {{ $teacher->name }}</p>
                <p>Gender : {{ $teacher->gender }}</p>
                <p>Tanggal Lahir : {{ $teacher->birth_of_day }}</p>
                <p>Tempat Lahir : {{ $teacher->birth_of_pleace }}</p>
        </div>
        <div class="card card-footer">
                <button type="submit"  class="btn btn-secondary" > <a href="{{route('teacher.index')}}"> Kembali</a> </button>
            </div>
    </div>
@endsection
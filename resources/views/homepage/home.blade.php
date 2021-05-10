@extends('layouts.front')

@section('content')
    <div class="card mr-auto mt-10" style="width: 18rem;" id="card">
        <div class="card-body">
            <h1><small>Halaman Utama: </small></h1>
            
                @foreach ($categories as $item)
                    {{ $item->name }} <br>
                @endforeach
        </div>
    </div>
@endsection

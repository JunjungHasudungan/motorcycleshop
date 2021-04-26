@extends('layouts.admin')

@section('content')
    <h1>{{ $motor->name }}</h1>

    @foreach ($motor->capasities as $key => $item)
            <ul>
                <li>
                    {{ $item->capasity }}
                </li>
            </ul>
    @endforeach
@endsection
@extends('layouts.admin')

@section('content')

    <ul>
        <li>
            {{ $motor->name }} - {{ $motor->capasities->capasity }}
        </li>
    </ul>
@endsection
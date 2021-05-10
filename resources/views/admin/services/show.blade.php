@extends('layouts.user')

@section('content')
    <p>Nama jasa :  {{ $service->name }} </p> 
    <p>Username:  
    {{$service->users->name}} </p>
    {{--  @foreach ($service->users as $user)
            {{ $user->name }}
    @endforeach  --}}

    <p>Total harga:  {{ $service->price }} </p>
 @endsection
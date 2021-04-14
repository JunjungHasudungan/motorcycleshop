@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="card mt-2">
                        <div class="card-title mt-2 ml-2"> LIST SparePart </div>
                        <div class="card-body">
                                <a href="{{route('spare-parts.create')}}" class="btn btn-primary mb-2">Tambah</a>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Sparepart</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Kategory Motor</th>
                                        <th>Opsi</th>
                                    </tr>
                                    @foreach ($spareparts as $sparepart)
                                    <tr>
                                        <td>{{$loop->iteration}}</td> 
                                        <td>{{$sparepart->id_sparepart}}</td>
                                        <td> <a href="{{route('spare-parts.show', $sparepart->id)}}" >{{$sparepart->name}}</a></td>
                                        <td>{{$sparepart->price}}</td>
                                        <td>{{ $sparepart->motors->name }} | {{ $sparepart->motors->year }} |{{ $sparepart->motors->capacity }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
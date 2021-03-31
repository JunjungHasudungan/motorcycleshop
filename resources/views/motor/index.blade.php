@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="card mt-2">
                        <div class="card-title mt-2 ml-2"> LIST MOTOR </div>
                        <div class="card-body">
                                <a href="{{route('motor.create')}}" class="btn btn-primary mb-2">Tambah</a>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>{{ trans('cruds.motors.fields.no') }}</th>
                                        <th>{{ trans('cruds.motors.fields.name') }}</th>
                                        <th>{{ trans('cruds.motors.fields.year') }}</th>
                                        <th>{{ trans('cruds.motors.fields.type') }}</th>
                                        <th>{{ trans('cruds.motors.fields.capasity') }}</th>
                                        <th>{{ trans('cruds.motors.fields.option') }}</th>
                                    </tr>
                                    @foreach ($motors as $motor)
                                    <tr>
                                        <td>{{$loop->iteration}}</td> 
                                        <td><a href="{{route('motor.show', $motor->id)}}" class="btn btn-default">{{$motor->name}} </a> </td>
                                        <td>{{$motor->year}}</td>
                                        <td>{{$motor->type}}</td>
                                        <td>{{$motor->capasity}}</td>
                                        <td>
                                            <a href="#" class="btn btn-secondary">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card card-footer ">
                            {{ $motors->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="card mt-2">
                        <div class="card-title mt-2 ml-2">  </div>
                        <div class="card-body">
                                <a href="{{route('student.create')}}" class="btn btn-primary mb-2">{{ trans('global.create_new_report') }}</a>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>{{ trans('cruds.user.fields.no') }}</th>
                                        <th>{{ trans('cruds.user.fields.nim') }}</th>
                                        <th>{{ trans('cruds.user.fields.name') }}</th>
                                        <th>{{ trans('cruds.user.fields.period') }}</th>
                                        <th>{{ trans('cruds.user.fields.option') }}</th>
                                    </tr>
                                    @foreach ($students as $student)
                                        @foreach ($student->registrations as $registration)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $student['nim'] }}</td>
                                        <td><a href="{{route('student.show', $student->id )}}"> {{$student->name}}</a> </td>
                                        <td>
                                            {{$registration->period}}
                                        </td>   
                                        <td>
                                            <button class = "btn btn-sm btn-warning" type="button" >{{ trans('global.delete') }}</button>
                                            <button class = "btn btn-sm btn-secondary" type="button"><a href="{{route('student.edit', $student->id)}}"> {{ trans('global.edit') }} </a> </button>
                                        </td>
                                    </tr>
                                        @endforeach
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
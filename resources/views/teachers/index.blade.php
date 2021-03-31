@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="card mt-2">
                        <div class="card-title mt-2 ml-2">  </div>
                        <div class="card-body">
                            @can('teacher_create')
                                <a href="{{route('teacher.create')}}" class="btn btn-primary mb-2">{{ trans('global.create_new_report') }}</a>
                            @endcan
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>{{ trans('cruds.user.fields.no') }}</th>
                                        <th>{{ trans('cruds.user.fields.name') }}</th>
                                        <th>{{ trans('cruds.user.fields.option') }}</th>
                                    </tr>
                                    @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <a href="{{route('teacher.show', $teacher->slug)}}" > {{$teacher->name}}</a> </td>
                                        <td>
                                            <button class = "btn btn-sm btn-warning" type="button" >{{ trans('global.delete') }}</button>
                                            <button class = "btn btn-sm btn-secondary" type="button"><a href="{{route('teacher.edit', $teacher->id)}}"> {{ trans('global.edit') }} </a> </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                <div class="card card-footer">{{ $teachers->links() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
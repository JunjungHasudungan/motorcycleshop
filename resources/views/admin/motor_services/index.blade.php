@extends('layouts.admin')

@section('content')
{{-- @can('user_create') --}}
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-12">
            <a href="{{route('admin.jasa-motor-service.create')}}" class="btn btn-success">
                {{ trans('global.add') }} {{ trans('cruds.motor.title_singular') }}
            </a>
        </div>
    </div>
{{-- @endcan --}}

<div class="card">
    <div class="card-header">
        {{ trans('cruds.motor_services.title') }} {{ trans('global.list') }}
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-User ">
                <thead>
                    <tr>
                        <th width = "10">

                        </th>
                        <th>{{ trans('cruds.motor_services.fields.id') }}</th>
                        <th>{{ trans('cruds.motor_services.fields.name') }}</th>
                        <th>{{ trans('cruds.motor_services.fields.domisile') }}</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  @foreach ($motor_services as $key => $motor_service)  --}}
                        <tr data-entry-id = "">
                            <td></td>
                            <td>
                                 {{--  {{ $motor_service->id ?? '' }}   --}}
                            </td>
                            <td>
                                {{--  {{ $motor_service->name ?? '' }}  --}}
                            </td>
                            <td>
                                {{--  {{ $motor_service->email ?? '' }}  --}}
                            </td>
                            <td>
                                {{-- @can('user_show') --}}
                                    <a class="btn btn-xs btn-primary" href="#">
                                        {{ trans('global.view') }}
                                    </a>
                                {{-- @endcan --}}

                                {{-- @can('user_edit') --}}
                                    <a class="btn btn-xs btn-info" href="#">
                                        {{ trans('global.edit') }}
                                    </a>
                                {{-- @endcan --}}

                                {{-- @can('user_delete') --}}
                                    <form action="#" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                {{-- @endcan --}}

                            </td>
                        </tr>
                    {{--  @endforeach  --}}
                </tbody>
            </table>
        </div>
    </div>

{{--     <div class="card-footer">
        {{ $users->links() }}
    </div> --}}
</div>
@endsection
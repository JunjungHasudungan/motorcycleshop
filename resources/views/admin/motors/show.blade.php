@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.motors.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.motors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.motors.fields.id') }}
                        </th>
                        <td>
                            {{ $motor->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.motors.fields.name') }}
                        </th>
                        <td>
                            {{ $motor->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.motors.fields.type') }}
                        </th>
                        <td>
                            {{$motor->type ?? ''}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.motors.fields.created_at_year') }}
                        </th>
                        <td>
                            {{$motor->created_at_year}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.motors.fields.capasity_id') }}
                        </th>
                        <td>
                            {{ $motor->capasities->capasity ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.motors.fields.category_id') }}
                        </th>
                        <td>
                            {{ $motor->categoriesMotors->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
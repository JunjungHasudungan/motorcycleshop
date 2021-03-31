@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.role.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a href="{{route('user.index')}}" class="btn btn-default">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.role.fields.id') }}
                            </th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.user.fields.name') }}
                            </th>
                            <td>
                                {{ $user->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.user.fields.role') }}
                            </th>
                            <td>
                                @foreach ($user->roles as $key => $role)
                                    {{ $role->name }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biographies.fields.birthdayOfPlace') }}
                            </th>
                            <td>
                                {{ $user->biographies->birthdayOfPlace }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biographies.fields.birthdayOfDate') }}
                            </th>
                            <td>
                                {{ $user->biographies->birthdayOfDate }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biographies.fields.domicile') }}
                            </th>
                            <td>
                                {{ $user->biographies->domicile }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biographies.fields.gender') }}
                            </th>
                            <td>
                                {{ $user->biographies->gender }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
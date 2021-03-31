@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.user.title_student') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a  class="btn btn-secondary" href="{{route('student.index')}}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table-bordered table-striped table-sm">
                    <caption>{{ trans('cruds.user.fields.list') }} {{ trans('cruds.user.fields.student') }}</caption>
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.contract.fields.id') }}
                            </th>
                            <td>
                                {{ $student->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.user.fields.name') }}
                            </th>
                            <td>
                                {{ $student->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.user.fields.birth_of_day') }}
                            </th>
                            <td>
                                {{ $student->birthOfDay }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.user.fields.birth_of_place') }}
                            </th>
                            <td>
                                {{ $student->birthOfPlace }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.user.fields.gender') }}
                            </th>
                            <td>
                                {{ $student->gender }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.user.fields.total_point') }}
                            </th>
                            <td>
                                {{ $student->totalPoint }}
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

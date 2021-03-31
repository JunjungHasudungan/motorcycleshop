@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">{{ trans('global.create') }} {{ trans('cruds.user.fields.student') }}</div>
    <div class="card-body">
        <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data"></form>
            @csrf
            <div class="form-group">
                <label for="role_id">{{ trans('cruds.user.fields.roles') }}</label>
                <select class="form-control select2" name="role_id" id="role_id">
                    @foreach ($roles as $id => $role)
                        <option value = "{{$id}}" {{old('role_id' == $id ? 'selected' : '')}}>
                        {{ $role }}
                        </option>
                    @endforeach
                </select>
            </div>
    </div>
    </div>
@endsection
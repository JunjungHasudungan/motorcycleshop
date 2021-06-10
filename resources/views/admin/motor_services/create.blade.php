@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.motor_services.fields.loans') }}
        </div>
        <div class="card-body">
            <form action="{{route('admin.jasa-motor-service.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-4">
                        <label for="name" class = "required"> {{ trans('cruds.motor_services.fields.name') }} </label>
                        <input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                        value="{{old('name')}}" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="loan" class="required"> {{ trans('cruds') }}</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
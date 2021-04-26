@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }}
        </div>
        <div class="card-body">
            <form  method="POST" action="{{route('admin.motors.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.motors.title_singular') }}</label>
                </div>
            </form>
        </div>
    </div>

@endsection 
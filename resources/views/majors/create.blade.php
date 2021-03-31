@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card card-header">{{ trans('global.add') }} {{ trans('cruds.majors.title') }}</div> 
            <div class="card card-title"></div>
        <div class="card card-body">
            <form method="POST" action="{{route("major.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="required"> {{ trans('cruds.majors.fields.name') }}</label>
                    <input class="form-control {{$errors->has('name') ? 'is-invalid' : ''}} 
                    " type="text" name="name" value="{{old('name', '')}}" required>
                    @if ($errors->has('name'))
                            <div class="invalid-fedback">
                            {{ $errors->first('name') }}
                            </div>                        
                    @endif
                </div>
                <div class="form-group">
                    <label for="cost" class="required"> {{ trans('cruds.majors.fields.cost') }}</label>
                    <input class="form-control {{$errors->has('cost') ? 'is-invalid' : ''}} 
                    " type="text" name="cost" value="{{old('cost', '')}}" required>
                    @if ($errors->has('cost'))
                            <div class="invalid-fedback">
                            {{ $errors->first('cost') }}
                            </div>                        
                    @endif
                </div>
                <div class="card card-footer">
                    <button class="btn btn-primary" type="submit">
                        {{ trans('global.save') }}
                    </button>

                </div>
            </form>
        </div>
    </div>
@endsection
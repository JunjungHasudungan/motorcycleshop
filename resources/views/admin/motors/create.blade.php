@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }}
        </div>
        <div class="card-body">
            <form  method="POST" action="{{route('admin.motors.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="required" for="name">{{ trans('cruds.motor.fields.title') }}</label>
                        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" id="name" 
                        placeholder="Nama Motor.." 
                        value="{{old('name')}}" required>
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{$errors->first('name')}}
                            </div>                        
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="category_id"  class="required">{{ trans('cruds.motors.fields.categories') }}</label>
                        <select name="category_id" id="category_id" class="form-control select2 {{$errors->has('categories') ? 'is-invalid' : ''}}" required>
                            @foreach ($categories as $id => $category)
                                <option value="{{$id}}" {{ old('categories') == $id ? 'selected' : ''}}>{{$category}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="capasity_id" class ="required"> {{ trans('cruds.capasities.fields.title') }}</label>
                        <select name="capasity_id" id="capasity_id" class= "form-control select2 {{$errors->has('capasity_id') ? 'is-invalid' : ''}}" required>
                            @foreach ($capasities as $id => $capasity)
                                <option value="{{$id}}" {{ old('capasity_id') == $id ? 'selected' : ''}}>{{$capasity}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="type" class="required">{{ trans('cruds.motors.fields.type') }}</label>
                        <input type="text" name="type" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" id="type" 
                        value="{{old('type')}}" placeholder=" Tipe Motor.." required>
                        @if ($errors->has('type'))
                            <div class="invalid-feedback">
                                {{$errors->first('type')}}
                            </div>                            
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="created_at_year" class="required"> {{ trans('cruds.motors.fields.year') }}</label>
                        <input type="text" name="created_at_year" class="form-control {{$errors->has('created_at_year') ? 'is-invalid' : ''}}" id="created_at_year"
                        value="{{old('created_at_year')}}" placeholder="Tahun pembuatan motor.." required>
                        @if ($errors->has('created_at_year'))
                            <div class="invalid-feedback">
                                {{$errors->first('created_at_year')}}
                            </div>                            
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-info" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection 
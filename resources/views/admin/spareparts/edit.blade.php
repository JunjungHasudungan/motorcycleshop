@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.spareparts.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.spareparts.update", [$sparepart->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="required" for="id_sparepart">{{ trans('cruds.spareparts.fields.id_sparepart') }}</label>
                  <input type="text" name="id_sparepart" class="form-control {{$errors->has('id_sparepart') ? 'is-invalid' : ''}}" id="id_sparepart" value="{{old('id_sparepart', $sparepart->id_sparepart)}}" required>
                    @if($errors->has('id_sparepart'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_sparepart') }}
                    </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                  <label class="required" for="name">{{ trans('cruds.spareparts.fields.name') }}</label>
                  <input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" value="{{old('name', $sparepart->name)}}" required>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                        {{$errors->first('name')}}
                        </div>                        
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="required" for="price">{{ trans('cruds.spareparts.fields.price') }}</label>
                        <input type="text" name="price" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" id="price" value="{{old('price', $sparepart->price)}}" required>
                        @if ($errors->has('price'))
                        <div class="invalid-feedback">
                            {{$errors->first('price')}}
                        </div>
                        @endif
                </div>
                <div class="form-group col-md-4">
                    <label class="required" for="motors">{{ trans('cruds.spareparts.fields.motor_id') }}</label>
                    <select name="motors[]" class="form-control select2 {{$errors->has('motors') ? 'is-invalid' : ''}} " 
                    id="motors" multiple required>
                        @foreach ($motors as $id => $motors)
                            <option value="{{$id}}"{{(in_array($id, old('motors', [])) || $sparepart->motors->contains($id)) ? 'selected' : ''}}>
                                {{$motors}}
                            </option>                            
                        @endforeach
                </select>
                    @if($errors->has('motors'))
                        <div class="invalid-feedback">
                            {{ $errors->first('motors') }}
                        </div>
                    @endif
                </div>
                
                <div class="form-group col-md-2">
                    <label class="required" for="amount">{{ trans('cruds.spareparts.fields.amount') }}</label>
                    <input type="text" name="amount" class="form-control {{$errors->has('amount') ? 'is-invalid' : ''}}" id="amount" value="{{old('amount', $sparepart->amount)}}" required>
                        @if ($errors->has('amount'))
                            <div class="invalid-feedback">
                                {{$errors->first('amount')}}
                            </div>
                        @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
        </form>
    </div>
</div>



@endsection
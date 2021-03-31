@extends('layouts.master')

@section('content')
    
    <div class="content-wraper">
        <section class="container-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>  Teacher Add </h3>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Teacher add
                                </h3>
                            </div>
                            <form role="form" action="{{route('teacher.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">NAMA</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                                    @if ($errors->has('name'))
                                        <div class="text-danger">{{$errors->first('name')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group ml-2">
                                <input type="submit" type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
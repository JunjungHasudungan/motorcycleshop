@extends('layouts.master')

@section('content')
<div class="wrapper mt-2 ml-2">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h2>Tambah Data SparePart</h2>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        
            <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title"> SELECT MOTOR</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Motor </label>
                    <select class="form-control select2" style="width: 100%;" multiple required>
                      <option selected="selected" name ="motors[]" >--Pilih Motor---</option>
                        @foreach ($motors as $id => $motor)
                        <option value="{{$id}}">{{ $motor['name'] }} | {{ $motor['year'] }} | {{ $motor['capacity'] }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
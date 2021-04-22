@extends('layouts.front')

@section('content')

    <div class="content-wrapper">
        <section class="content">
            {{--  <div class="card">  --}}
                <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    
                    @foreach ($motors as $motor)
                        
                    <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                        <div class="card-header mb-2">
                        </div>
                        <!-- card-body -->
                        <div class="card-body pt-0">
                            <div class="row">
                            <!-- col -->
                                <div class="col-12 text-center">
                                <h2 class="lead">
                                    <b> {{$motor->name}} - </b>
                                    @foreach ($motor->capasities as $item)
                                        {{ $item->capasity }}
                                    @endforeach
                                </h2>

                                {{--  <img src="{{('gambar/User1.jpg')}}" alt="" class="img-circle img-fluid">  --}}
                            </div>  
                            
                            <div class="col-7">
                            </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mt-4">
                            <div class="btn btn-outline-info" >
                                <a href="{{route('admin.motor.show', $motor->id)}}" style="text-decoration:none">Rental</a>  
                            </div>
                            <div class="btn btn-secondary">
                                <a href="#" style="text-decoration:none">Test </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    
                    </div>
                    </div>
                </div>
            {{--  </div>  --}}
        </section>
    </div>
  <!-- /.content-wrapper -->
@endsection

@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.spareparts.title_singular') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a href="{{route('admin.spareparts.index')}}" class="btn btn-default">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                 ID
                            </th>
                            <td>{{ $sparepart->id }}</td>
                        </tr>
                        <tr>
                            <th>
                                Name
                            </th>
                            <td>
                                {{ $sparepart->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Khusus Motor:
                            </th>
                            <td>
                                 {{$sparepart->motors->name}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Harga:
                            </th>
                            <td>
                                 Rp.{{$sparepart->price}};
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
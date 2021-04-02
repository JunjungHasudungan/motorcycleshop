@extends('layouts.master')

@section('content')
@can('user_create')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('user.create')}}" class="btn btn-success">
                {{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-User ">
                <thead>
                    <tr>
                        <th width = "10">

                        </th>
                        <th>{{ trans('cruds.user.fields.id') }}</th>
                        <th>{{ trans('cruds.user.fields.name') }}</th>
                        <th>{{ trans('cruds.user.fields.email') }}</th>
                        <th>{{ trans('cruds.user.fields.roles') }}</th>
                        {{-- <th>&nbsp;</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr data-entry-id = "{{$user->id}}">
                            <td></td>
                            <td>
                                 {{ $user->id ?? '' }} 
                            </td>
                            <td>
                                <a href="{{route('user.show', $user->id)}}" class=" btn btn-default">
                                     {{ $user->name ?? '' }}
                                </a>
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                                @foreach ($user->roles as $key => $item)
                                    <span class="badge badge-info">{{ $item->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer">
        {{ $users->links() }}
    </div>
</div>
@endsection
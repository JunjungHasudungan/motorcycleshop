@extends('layouts.admin')

@section('content')
{{-- @can('user_create') --}}
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-12">
            <a href="{{route('admin.users.create')}}" class="btn btn-success">
                {{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}
            </a>
        </div>
    </div>
{{-- @endcan --}}

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
                        <th>&nbsp;</th>
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
                                <a href="{{route('admin.users.show', $user->id)}}" class=" btn btn-default">
                                     {{ $user->name ?? '' }}
                                </a>
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                                @foreach ($user->roles as $key => $role)
                                    <span class="badge badge-info">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{-- @can('user_show') --}}
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                {{-- @endcan --}}

                                {{-- @can('user_edit') --}}
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                {{-- @endcan --}}

                                {{-- @can('user_delete') --}}
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                {{-- @endcan --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

{{--     <div class="card-footer">
        {{ $users->links() }}
    </div> --}}
</div>
@endsection
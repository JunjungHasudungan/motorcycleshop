@extends('layouts.admin')
@section('content')

    <div class="row" style="margin-bottom: 10px;">
        @can('sparepart_create')
            <div class="col-lg-12">
                <a href="{{route('admin.spareparts.create')}}" class="btn btn-success">
                    {{ trans('global.add') }} {{ trans('cruds.spareparts.title_singular') }}
                </a>
            </div>
        @endcan
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.spareparts.title_singular') }} {{ trans('global.list') }}
    </div>

    
    <div class="card-body">
        <form action="{{ route('admin.spareparts.search') }}" method="get">
            <div class="input-group mb-3 col-md-3 float-right">
                <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{request()->search}}">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">Cari</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Role ">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.spareparts.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.spareparts.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.spareparts.fields.amount') }}
                        </th>
                        <th scope="col-md-6">
                            {{ trans('cruds.spareparts.fields.motor_for') }}
                        </th>
                        <th>
                            {{ trans('cruds.motors.fields.type') }}
                        </th>
                        <th>
                            {{ trans('cruds.spareparts.fields.price') }}
                        </th>
                        <th >
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($spareparts as $key => $sparepart)
                        {{--  @foreach ($sparepart->motors as $motor)  --}}
                            <tr data-entry-id="{{ $sparepart->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $sparepart->id ?? '' }} 
                                </td>
                                <td>
                                    {{ $sparepart->name ?? '' }}  
                                </td>
                                <td>
                                    {{$sparepart->amount}}
                                </td>
                                    <td>
                                        @foreach ($sparepart->motors as $key => $motor)
                                       <ul>
                                           <li>
                                               {{ $motor->name  }} - {{$motor->capasities->capasity}}
                                           </li>
                                       </ul>
                                        @endforeach
                                    </td>
                                    <td >
                                        @foreach ($sparepart->motors as $key => $motor)
                                        <ul>
                                            <li>
                                                {{ $motor->type  }} - {{$motor->created_at_year}}
                                            </li>
                                        </ul>
                                            
                                        @endforeach
                                    </td>  
                                <td>
                                    Rp.{{ $sparepart->price  ?? '' }}; 
                                </td>
                                <td>
                                    @can('role_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.spareparts.show', $sparepart->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                    @endcan
                                    
                                    @can('motor_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.spareparts.edit', $sparepart->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                    @endcan
                                    
                                    @can('motor_delete')
                                    <form action="{{ route('admin.spareparts.destroy', $sparepart->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                    @endcan
                                    
                                </td>
                            </tr>
                        {{--  @endforeach  --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('sparepart_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.spareparts.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Role:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
@extends('layouts.admin')
@section('content')

    <div class="row" style="margin-bottom: 10px;">
        @can('service_create')
            <div class="col-lg-12">
                <a href="#" class="btn btn-success">
                    {{ trans('global.add') }} {{ trans('cruds.services.title_singular') }}
                </a>
            </div>
        @endcan
    </div>

    
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.events.title_singular') }} {{ trans('global.list') }}
        </div>
        
        
        <div class="card-body">
            <div class="form-group">
                <a href="#" class="btn btn-default">
                    {{ trans('global.back') }}
                </a>
            </div>

            {{--     <form action="{{ route('admin.services.search') }}" method="get">
            <div class="input-group mb-3 col-md-3 float-right">
                <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{request()->search}}">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">Cari</button>
                </div>
            </div>
        </form> --}}
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Role ">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.events.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.events.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.events.fields.created_at') }}
                        </th>
                        <th >
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{--  @foreach($services as $key => $service)
                        <tr data-entry-id="{{ $service->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $service->id ?? '' }} 
                            </td>
                            <td>
                                {{ $service->id_service ?? ''}}
                            </td>
                            <td>
                                  {{ $service->name }}   --}}

{{--                                  @foreach ($service->motors as $motor)
                                   <ul>
                                       {{ $motor->name ?? '' }}  - {{ $motor->type }}
                                   </ul>
                                @endforeach  --}}
                            {{--  </td>
                            <td>
                                 {{ $service->price }}
                            </td>  --}}
                            {{--  <td>
                                @can('role_show')
                                    <a class="btn btn-xs btn-primary" href="# }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('motor_edit')
                                    <a class="btn btn-xs btn-info" href="#">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('motor_delete')
                                    <form action="#" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>  --}}
                        </tr>
                      {{--  @endforeach  --}}
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
    // url: "{{ route('admin.services.massDestroy') }}",
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
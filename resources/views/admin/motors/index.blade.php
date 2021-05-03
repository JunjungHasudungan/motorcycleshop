@extends('layouts.admin')
@section('content')

    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-12">
            <a href="{{route('admin.motors.create')}}" class="btn btn-success">
                {{ trans('global.add') }} {{ trans('cruds.motors.title_singular') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.motor.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Role ">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.motors.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.motors.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.motors.fields.categories') }}
                        </th>
                        <th >
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($motors as $key => $motor)
                        <tr data-entry-id="{{ $motor->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $motor->id ?? '' }} 
                            </td>
                            <td>
                                {{ $motor->name ?? '' }} - {{ $motor->capasities->capasity }} 
                            </td>
                            <td>
                                  {{--  {{ $category->title }}  --}}
                            </td>
                            <td>
                                @can('role_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.motors.show', $motor->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('motor_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.motors.edit', $motor->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('motor_delete')
                                    <form action="{{ route('admin.motors.destroy', $motor->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>
                        </tr>
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
@can('motor_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.motors.massDestroy') }}",
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
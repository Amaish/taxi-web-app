@if(has_access('drivers.view'))
    {!! single_btn(route('admin.drivers.view',$id)) !!}
@endif
@if(has_access('drivers.edit'))
    {!! edit_btn(route('admin.drivers.edit',$id)) !!}
@endif


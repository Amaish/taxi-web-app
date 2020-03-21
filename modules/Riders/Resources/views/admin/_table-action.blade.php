@if(has_access('riders.view'))
    {!! single_btn(route('admin.riders.view',$id)) !!}
@endif
{{--@if(has_access('riders.edit'))--}}
    {{--{!! edit_btn(route('admin.riders.edit',$id)) !!}--}}
{{--@endif--}}


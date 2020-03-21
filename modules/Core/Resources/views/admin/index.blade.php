@extends('core::admin.master')

@section('title', $title)

@section('page-css')
@stop

@section('page-js')
    <script>
        $(function() {
            $('#datatable').DataTable({
                processing: false,
                serverSide: true,
                ajax: '{{route('admin.'.$module.'.datatable')}}',
                columns: {!! json_encode(config($module.'.columns')) !!},
                drawCallback:function(){
                    $(".delete-me").click(function () {
                        if(confirm($(this).attr('data-confirm'))){
                            $.ajax({
                                url: $(this).attr('href'),
                                type: 'DELETE',
                                success: function(data){
                                    document.location.href = '{{route('admin.'.$module.'.index')}}';
                                },
                                data: {_token: '{{csrf_token()}}'}
                            })
                        }
                        return false;
                    });

                    $('.tooltips').tooltip();

                }
            });
        });
    </script>
@stop

@section('page-group-title')
    {{trans($module . '::global.group_name')}}
        <small>@Lang($module . '::global.group_description')</small>
@stop


@section('main')

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    @include('core::admin._porlet-title', ['module' => $module,'type'=>'create','caption'=>'index'])
                    @include($module . '::admin.index')
                </div>
            </div>
        </div>
    </div>
@stop

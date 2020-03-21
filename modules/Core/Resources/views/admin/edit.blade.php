@extends('core::admin.master')

@section('title', trans($module . '::global.edit').' - '.$model->present()->title)

@section('page-css')

@stop

@section('page-js')

@stop

@section('page-group-title')
    @Lang($module . '::global.group_name')
        <small>@Lang($module . '::global.group_description')</small>
@stop


@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    @include('core::admin._porlet-title', ['module' => $module,'type'=>'back','caption'=>'edit'])
                    @include($module . '::admin._form')
                </div>
            </div>
        </div>
    </div>
@stop
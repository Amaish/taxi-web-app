@extends('core::admin.master')

@section('page-css')

@stop

@section('page-js')

@stop

@section('page-group-title')
    Dashboard
    <small></small>
@stop

@section('page-breadcrumbs')
    <li>
        <a href="javascript:;">Dashbaord</a>
    </li>
@stop

@section('main')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-success">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-map-marker float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Completed Trips</h6>
                        <h4 class="mb-4">1,587</h4>
                        <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-info">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-car-connected float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Drivers</h6>
                        <h4 class="mb-4">$46,782</h4>
                        <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-warning">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-location float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Riders</h6>
                        <h4 class="mb-4">$15.9</h4>
                        <span class="badge badge-warning"> 0% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-danger">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-currency-ngn float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Payments</h6>
                        <h4 class="mb-4">1890</h4>
                        <span class="badge badge-info"> +89% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@extends('authentication::master')
@section('page-css')
    <style>
        #wrapper {
            background-color: #770D29;
        }

        html {
            background-color: #770D29;
        }

        p {
            line-height: 1.7;
            color: white;
        }
    </style>
@stop
@section('main')
    <div id="wrapper">
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin">
                            <img src="{!! asset('asset/images/logo.png') !!}" height="80" alt="logo">
                        </a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Sign in to continue</h4>
                        {{--<p class="text-muted text-center">Sign in to continue to taxiApp.</p>--}}
                        @if (session()->has('errors'))
                            <div class="alert alert-danger bg-danger text-white alert-dismissable">
                                <i class="fa fa-warning"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                {!! $errors->first('message') !!}
                            </div>
                        @endif
                        {!! form_start($form,['class'=>'form-horizontal m-t-30']) !!}
                        <div class="form-group">
                            <label for="username">Username</label>
                            {!! form_widget($form->email) !!}
                        </div>

                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            {!! form_widget($form->password) !!}
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-warning w-md waves-effect waves-light" type="submit">Log In
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                            </div>
                        </div>
                        {!! form_end($form,false) !!}
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>© {!! "Porte" !!} {!! date('Y') !!} </p>
            </div>

        </div>

    </div>
@stop
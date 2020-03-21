<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link rel="shortcut icon" href="{!! asset('asset/images/favicon.ico') !!}">
    <!-- App CSS -->
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
    <!-- Custom CSS -->
    @yield('page-css')
</head>
<body>
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
@include('core::admin._top')
<!-- Top Bar End -->
    @include('core::admin._sidebar')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="wrapper">
                <div class="container-fluid">
                @include('core::admin._breadcrumb')
                <!-- end row -->
                    @yield('main')
                </div> <!-- end container -->
            </div>
            <!-- end wrapper -->
        </div> <!-- content -->
        @include('core::admin._footer')
    </div>
</div>
<!-- END wrapper -->
<script src="{{asset('js/all.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        $('#form-validate').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            invalidHandler: function (event, validator) { //display error alert on form submit
                toastr.error('Please fix the highlighted errors before you submit the form');
            },
            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
            }
        });
        $('.mydatepicker, #datepicker').datepicker();
        $('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        @if(isset($errors) && $errors->all())
        toastr.warning('<h4>Please fix the errors below:</h4>{!! \HTML::ul($errors->all()) !!}')
        @endif

        @if (session()->has('flash_notification.message'))
        @if(session('flash_notification.level') == 'success')
        swal("Success", '{!! session('flash_notification.message') !!}', "success");
        @else
        toastr.error('{!! session('flash_notification.message') !!}');
        @endif
        @endif

    });
</script>
<script>
    $(document).ready(function () {
        $('.jsSelectAllInGroup').on('click', function (event) {
            event.preventDefault();
            $(this).closest('.permissionGroup').find('input[type=checkbox]').each(function () {
                this.checked = true;
            });
        });
        $('.jsDeselectAllInGroup').on('click', function (event) {
            event.preventDefault();
            $(this).closest('.permissionGroup').find('input[type=checkbox]').each(function (index, value) {
                $(this).prop('checked', false);
            });
        });
    });
</script>
@yield('page-js')

</body>
</html>
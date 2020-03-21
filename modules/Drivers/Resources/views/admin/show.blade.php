@extends('core::admin.master')

@section('page-js')
    <script> 
        $(function() {
            $('#datatable').DataTable();        
        });
    
    </script>

@stop

@section('main')

    <div class="row">
        <div class="col-md-4 col-lg-4 col-xl-3">

            <div class="card m-b-30">
                <img class="card-img-top img-fluid" src="{!! $model->image  or asset('asset/images/default.jpg') !!}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title font-20 mt-0">Driver Details</h4>
                    {{--<p class="card-text">Details of a registered driver.</p>--}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : {!! $model->name !!}</li>
                    <li class="list-group-item">Email: {!! $model->email !!}</li>
                    <li class="list-group-item">Phone: {!! $model->phone !!}</li>
                    <li class="list-group-item">City: {!! $model->city !!}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Disable Account</a>
                    <a href="#" class="card-link">Contact Driver</a>
                </div>
            </div>

        </div>

        <div class="col-md-8 col-lg-8">
            <div class="card m-b-20">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Trip</th>
                                <th>Status</th>
                                <th>Fare</th>
                                <th>Date</th>
                                <th>Rating</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Nairobi - Nakuru</td>
                                <td>Completed</td>
                                <td>KES 200</td>
                                <td>2018/04/25</td>
                                <td>*****</td>
                            </tr>
                            <tr>
                                <td>Blackrose Apartment - Junction Mall</td>
                                <td>Cancelled</td>
                                <td>0</td>
                                <td>2018/07/25</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Kilimani - Kileleshwa</td>
                                <td>Completed</td>
                                <td>KES 200</td>
                                <td>2018/04/25</td>
                                <td>*****</td>
                            </tr>
                            <tr>
                                <td>Junction Mall - Onix Club</td>
                                <td>Completed</td>
                                <td>KES 500</td>
                                <td>2018/07/25</td>
                                <td>***</td>
                            </tr> 
                            <tr>
                                <td>Junction Mall - Onix Club</td>
                                <td>Completed</td>
                                <td>KES 500</td>
                                <td>2011/07/25</td>
                                <td>***</td>
                            </tr>
                            <tr>
                                <td>Junction Mall - B Club</td>
                                <td>Completed</td>
                                <td>KES 700</td>
                                <td>2018/07/25</td>
                                <td>***</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

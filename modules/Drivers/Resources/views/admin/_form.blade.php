@section('page-breadcrumbs')
    <li>
        <a href="{{route('admin.drivers.index')}}">Drivers</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li>
        <a href="javascript:;">@if(!isset($id)) New $SINGULAR_STUDLY_NAME$ @else Edit $SINGULAR_STUDLY_NAME$ @endif</a>
    </li>
@stop
{!! form_start($form,['id'=>'form-validate']) !!}
@include('core::admin._buttons-form',['top'=>true])
<div class="form-body">
	<div class="row">
		<div class="col-md-6">
			{!! form_row($form->name) !!}
		</div>
        <div class="col-md-6">
           {!! form_row($form->phone) !!}
         </div>
        <div class="col-md-6">
           {!! form_row($form->email) !!}
         </div>
		 <div class="col-md-6">
           {!! form_row($form->address) !!}
         </div>
		 <div class="col-md-6">
           {!! form_row($form->city) !!}
         </div>		 
	</div>
    {!! form_rest($form) !!}
</div>
@include('core::admin._buttons-form')
{!! form_end($form,false) !!}

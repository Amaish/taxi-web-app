<div class="portlet-title">
    @include('core::admin._porlet-caption', ['module' => $module])
    <div class="pull-right">
        @if(isset($type))
            @include('core::admin._button-'.$type, ['module' => $module,'caption'=>$caption])
        @else
            @include('core::admin._button-create', ['module' => $module])
        @endif
    </div>
</div>
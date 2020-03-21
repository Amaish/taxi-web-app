<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            @if($module == 'Dashboard')
                <h4 class="page-title">{{trans($module)}}</h4>
                @else
                <h4 class="page-title">{{trans($module . '::global.group_name')}}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">{{trans($module . '::global.group_name')}}</a></li>
                    <li class="breadcrumb-item active">Blank page</li>
                </ol>

            @endif
        </div>
    </div>
</div>
<h4 class="mt-0 header-title">
    @if(isset($caption))
        @Lang($module . '::global.'.$caption)
    @else
        @Lang($module . '::global.index')
    @endif
</h4>
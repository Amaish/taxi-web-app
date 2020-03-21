<script src="@if(app()->environment('production')){{ asset(elixir('js/public/master.js')) }}@else{{ asset('js/public/master.js') }}@endif"></script>
<script src="{{asset('assets/public/js/app.js')}}"></script>
@yield('js')
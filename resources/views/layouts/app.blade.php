@include('include.top')

@if ($pages != "Sign Up")
@include('include.preloader')
@endif

@include('include.header')
@yield('content')

@auth
@include('include.izialert')
@endauth

@include('include.message')
@include('include.footer')
@include('include.footerjs')

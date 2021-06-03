@include('include.top')

@if ($pages != "Sign Up")
@include('include.preloader')
@endif

@include('include.licenceholders.header')

@yield('content')
@auth
@include('include.licenceholders.izialert')
@endauth

@include('include.licenceholders.message')
@include('include.licenceholders.footer')
@include('include.licenceholders.footerjs')



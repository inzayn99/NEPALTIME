@include('backend.layouts.header')
@include('backend.layouts.footer')
@include('backend.layouts.aside')
@include('backend.layouts.top-header')


@yield('header')
@yield('aside')
@yield('top-header')
@yield('content')
@yield('footer')

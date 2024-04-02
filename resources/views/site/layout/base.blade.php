<!doctype html>
<html lang="fa">
<head>
    @include("site.layout.partials.head")
    @yield('head')
</head>
<body>
@include("site.layout.partials.header")
@yield('content')
@include("site.layout.partials.footer")
@include("site.layout.partials.modal")
@include('site.layout.partials.footer_js')
@yield('footer')
</body>
</html>

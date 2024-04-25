<!doctype html>
<html lang="fa">
<head>
    @include("site.layout.partials.head")
    @yield('head')

</head>
<body>
@if(!str_contains(request()->route()->getName(),'auth'))
    @include("site.layout.partials.header")
@endif
@yield('content')
@if(!str_contains(request()->route()->getName(),'auth'))
    @include("site.layout.partials.footer")
@endif
@include("site.layout.partials.modal")
@include('site.layout.partials.footer_js')
@yield('footer')
<script>
    $(document).ready(function () {
        $('body').persiaNumber();
    });
</script>
</body>
</html>

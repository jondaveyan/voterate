<!DOCTYPE html>
<head>
    @include('includes.head')
</head>
<body>
<header id="header" class="">
    @include('layouts.header')
</header>
<section>
    @yield('body')
</section>
@include('layouts.footer')
@include('includes.foot')
</body>
</html>
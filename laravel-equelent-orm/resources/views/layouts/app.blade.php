<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title')</title>

    {{-- facation --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- css --}}

    @stack('before-styles')

    @include('includes.styles')
    
    @stack('after-styles')

 

</head>
<body>

    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    @stack('before-scripts')

    @include('includes.scripts')
    
    @stack('after-scripts')
    
</body>
</html>
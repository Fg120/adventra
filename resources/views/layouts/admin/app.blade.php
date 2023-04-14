<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Adventra</title>

    {{-- DEFAULT LINK --}}
    @include('includes.admin.link')

    {{-- ADDON LINK --}}
    @yield('link')

</head>

<body>

    {{-- HEADER --}}
    @include('includes.admin.header')

    {{-- CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    @include('includes.admin.footer')

    {{-- DEFAULT SCRIPT --}}
    @include('includes.admin.script')

    {{-- ADDON SCRIPT --}}
    @yield('script')

</body>

</html>

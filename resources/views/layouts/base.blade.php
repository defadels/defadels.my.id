<!DOCTYPE html>
    <html lang="en" @yield('html_attributes')>

<head>

    <meta charset="utf-8" />
    <title>Muhamamad Fadhil Adha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hi! I'm Fadhil, a proffesional Fullstack Web Developer." />
    <meta name="author" content="Muhammad Fadhil Adha" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">

    @yield('css')
    @vite(['resources/scss/style.scss'])

</head>

<body>

@yield('content')

<!-- Back to top -->
<a href="#" id="back-to-top" class="back-to-top rounded text-center align-items-center justify-content-center fs-5">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up icons"><polyline points="18 15 12 9 6 15"></polyline></svg>
</a>
<!-- Back to top -->

@yield('script')
@vite(['resources/js/app.js'])
@yield('script-bottom')

</body>
</html>

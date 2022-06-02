<html>

<head>
    <title>Mini Project</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/8f0eb73ee5.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/footers.css" rel="stylesheet">
    <link href="/css/headers.css" rel="stylesheet">
    <link href="/css/modals.css" rel="stylesheet">



    <script src="/js/function.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background: linear-gradient(180deg, rgba(250,198,198,1) 0%, rgba(245,54,54,1) 100%);
font-family:'Lato' !important;">
    <div class="card m-5 px-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('failed'))
            <div class="alert alert-warning alert-dismissible" role="alert">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
        @endif
        <div class="wrapper d-flex flex-column h-100">

            @include('header')
            <div class="card-header bg-white border-0">
                <h2>@yield('page title')</h2>
            </div>
            <div class="content-wrapper">

                @yield('content')
            </div>

            @include('footer')
        </div>
    </div>
</body>

</html>

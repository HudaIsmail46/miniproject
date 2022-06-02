<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Mini Project</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

    <!-- Custom styles for this template -->
    <link href="/css/footers.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/headers.css" rel="stylesheet">
    <script src="/js/function.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>


</head>


<body style="background: linear-gradient(180deg, rgba(250,198,198,1) 0%, rgba(245,54,54,1) 100%);
font-family:'Lato' !important;">
    <div class="col-lg-10 mx-auto my-auto">
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
            <div class="wrapper d-flex h-100 w-75">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>


</html>

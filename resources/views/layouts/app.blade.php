<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Laravel')</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    
    @stack('styles')
</head>

<body id="page-top">

    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                @include('layouts.partials.topbar')
                
                <div class="container-fluid">
                    @yield('content')
                </div>
            
            </div>
            
            @include('layouts.partials.footer')

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    
    @stack('scripts')

</body>

</html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{$title}}</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/fonts/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
    @yield('cssplugin')
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/main/bootstrap.bundle.min.js')}}"></script>
    @yield('jsplugin')
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    @yield('jsscript')
    <!-- /theme JS files -->
</head>

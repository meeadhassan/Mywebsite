<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title> Website </title>
    <link rel="stylesheet" href="/css/app">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
    <body>
    @include ('inc.navbar')
    <div class="container">

        @include ('inc.showcase')
        <div class="row">
            <div class="col-md-8 col-lg-8">
        @include ('inc.message')
    @yield('content')
            </div>
        <div class="col-md-8 col-lg-4">
   @include('inc.sidebar')
        </div>
        </div>
    </div>
    <footer id="footer" class="text-center">
        <p> Copy Right 2018 &copy; ZAD</p>
    </footer>
    </body>

</html>

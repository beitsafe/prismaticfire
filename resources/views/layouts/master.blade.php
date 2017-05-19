
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Prismatic Fire</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="publisher" content="" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">


    <!-- Social Media Metadata -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />



    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/Favicon.png')}}">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/theme-nearblack.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,600,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-roboto.css') }}" rel="stylesheet" type="text/css">
</head>

<body>


@include('site.partials.site-specific.nav')


<div class="main-container">



    @yield('main')





    @include('site.partials.site-specific.footer')


</div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/flickr.js') }}"></script>
<script src="{{ asset('js/flexslider.min.js') }}"></script>
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/masonry.min.js') }}"></script>
<script src="{{ asset('js/twitterfetcher.min.js') }}"></script>
<script src="{{ asset('js/spectragram.min.js') }}"></script>
<script src="{{ asset('js/ytplayer.min.js') }}"></script>
<script src="{{ asset('js/countdown.min.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        new WOW().init();

    });
</script>



</body>
</html>

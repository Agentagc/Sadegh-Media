<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
        content="Virtuo is a modern personal portfolio template for designers, developers, content writer, cleaner, programmer, fashion designer, model, Influencer and freelancers. Fully responsive, SEO-friendly, Bootstrap and easy to customize."
        name="description"
    />
    <link href="{{asset("assets/images/favicon.svg")}}" rel="shortcut icon" type="image/x-icon"/>
    <title>Sadegh Media</title>
    <!-- Bootstrap min css -->
    <link href="{{asset("assets/css/vendor/fontawesome.rtl.css")}}" rel="stylesheet"/>
    <link href="{{asset("assets/css/plugins/swiper.css")}}" rel="stylesheet"/>
    <link href="{{asset("assets/css/plugins/odometer.rtl.css")}}" rel="stylesheet"/>
    <link href="{{asset("assets/css/vendor/animate.min.css")}}" rel="stylesheet"/>
    <link href="{{asset("assets/css/vendor/bootstrap.min.rtl.css")}}" rel="stylesheet"/>
    <!-- custom css -->
    <link href="{{asset("assets/css/style.rtl.css")}}" rel="stylesheet"/>
</head>
<body class="personal-demo-left-fixed">
    @include("members.layouts.partials.header")

    @yield('member')

    @include("members.layouts.partials.footer")
    <script src="{{asset("assets/js/vendor/modernizer.js")}}"></script>
    <script src="{{asset("assets/js/vendor/jquery.js")}}"></script>
    <script src="{{asset("assets/js/vendor/jquery-ui.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/waypoints.min.js")}}"></script>
    <script src="{{asset("assets/js/plugins/odometer.js")}}"></script>
    <script src="{{asset("assets/js/vendor/appear.js")}}"></script>
    <script src="{{asset("assets/js/vendor/jquery-one-page-nav.js")}}"></script>
    <script src="{{asset("assets/js/vendor/tilt.js")}}"></script>
    <script src="{{asset("assets/js/plugins/swiper.js")}}"></script>
    <script src="{{asset("assets/js/plugins/gsap.js")}}"></script>
    <script src="{{asset("assets/js/plugins/splittext.js")}}"></script>
    <script src="{{asset("assets/js/plugins/scrolltigger.js")}}"></script>
    <script src="{{asset("assets/js/plugins/scrolltoplugins.js")}}"></script>
    <script src="{{asset("assets/js/plugins/smoothscroll.js")}}"></script>
    <script src="{{asset("assets/js/vendor/twinmax.js")}}"></script>
    <!-- bootstrap Js-->
    <script src="{{asset("assets/js/vendor/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/waw.js")}}"></script>
    <script src="{{asset("assets/js/vendor/intro-video.js")}}"></script>
    <script src="{{asset("assets/js/plugins/isotop.js")}}"></script>
    <script src="{{asset("assets/js/plugins/contact.form.js")}}"></script>
    <script src="{{asset("assets/js/vendor/backtop.js")}}"></script>
    <script src="{{asset("assets/js/plugins/text-type.js")}}"></script>
    <!-- custom Js -->
    <script src="{{asset("assets/js/main.js")}}"></script>
</body>
</html>

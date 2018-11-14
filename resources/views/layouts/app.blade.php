<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
    <!--<link rel="stylesheet" href="{{asset('css/custom.css')}}">-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <style> 
           
    </style>
    <title>{{config('app.name','LARAVEL_TEST_APP')}}</title>

    <script>
            $(document).ready( function() {
                $('#myCarousel').carousel({
                    interval:   4000
                });
                
                var clickEvent = false;
                $('#myCarousel').on('click', '.nav a', function() {
                        clickEvent = true;
                        $('.nav li').removeClass('active');
                        $(this).parent().addClass('active');		
                }).on('slid.bs.carousel', function(e) {
                    if(!clickEvent) {
                        var count = $('.nav').children().length -1;
                        var current = $('.nav li.active');
                        current.removeClass('active').next().addClass('active');
                        var id = parseInt(current.data('slide-to'));
                        if(count == id) {
                            $('.nav li').first().addClass('active');	
                        }
                    }
                    clickEvent = false;
                });
            });

            function openNav() {
                document.getElementById("mySidenav").style.width = "70%";
                // document.getElementById("flipkart-navbar").style.width = "50%";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.body.style.backgroundColor = "rgba(0,0,0,0)";
            }
    </script>
</head>
<body>
    @include('inc/navbar')
    <div class="container col-lg-12">
        @yield('content')
    </div>
</body>
</html>
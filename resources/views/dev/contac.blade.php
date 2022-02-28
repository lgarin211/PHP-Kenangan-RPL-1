@php
$kontak=$data['data2']['kontak'];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/assets/')}}/style.css">
    <link rel="stylesheet" href="{{url('/assets/')}}/css/responsive.css">
    <link rel="stylesheet" href="{{url('/assets/')}}/css/plugin.css">
    <link rel="stylesheet" href="{{url('/assets/')}}/css/font.css">

    <!-- document title -->
    <title>Rizal - Modern Photographer</title>
</head>

<body>
    <!-- MAIN WRAPPER START
            ============================================= -->
    <div class="main-wrapper clearfix">
        <!-- HEADER START
                ============================================= -->
		@include('dev/nav')
        <!-- HEADER END -->
        <!-- Content -->
        <div class="content">
            <div class="top-bar"></div>
            <div class="left-bar"></div>
            <div class="right-bar"></div>

            <div class="contact-block contact-block-2 clearfix">
                <div class="column column-3 title-wrap">
                    <h1 class="the-title">
                        {{$kontak['ct1']->value1}}
                    </h1>
                    <span class="divider-separator"></span>
                </div>
                <div class="column column-40 contact-img-wrap">
                    <img src="{{url('/FSP/'.$kontak['ct1']->value2)}}" alt="contact-img" class="contact-img">
                </div>
                <div class="column column-3 detail-wrap">
                    <div class="contact-detail">
                        <h3 class="the-title">Contact Detail</h3>
                        <p>
                            Whatapp: <a href="https://wa.me/{{$kontak['ct2']->value3}}">
                            	{{$kontak['ct2']->value3}}
                            </a>
                            <br>
                            Email: {{$kontak['ct2']->value2}}
                            <br>
                            instalgram : <a href="https://www.instagram.com/{{$kontak['ct2']->value4}}">{{$kontak['ct2']->value4}}</a>
                        </p>
                    </div>
                    <div class="address-detail">
                        <h3 class="the-title">Address</h3>
                        <p>
							{{$kontak['ct2']->value1}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Content -->
        <!-- Footer -->
        <footer id="footer">
            <div class="copyright">
                <p class="copyright-text">
					Powered by : <a href="https://latechno.my.id">Latechno</a>
            	</p>
            </div>
        </footer>
        <!-- end Footer -->
    </div>

    <!-- Footer Scripts
            ============================================= -->
    <!-- JavaScripts
        ============================================= -->
    <script src="{{url('/assets/')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{url('/assets/')}}/js/jquery.smartmenus.min.js"></script>
    <script src="{{url('/assets/')}}/js/aos.js"></script>
    <script src="{{url('/assets/')}}/js/swiper-bundle.min.js"></script>
    <script src="{{url('/assets/')}}/js/isotope.js"></script>
    <script src="{{url('/assets/')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{url('/assets/')}}/js/lightgallery-all.min.js"></script>
    <script src="{{url('/assets/')}}/js/main.js"></script>
</body>

</html>
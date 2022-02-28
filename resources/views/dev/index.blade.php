@php
$CoreIndex=$data['data2']['CoreIndex'];
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
    <title>XII RPL 1 2022 - Modern Photographer</title>
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
        <section class="content">
            <div class="top-bar"></div>
            <div class="left-bar"></div>
            <div class="right-bar"></div>
            <!-- Bg video block -->
            <div class="bg-video-block">
                <div class="bg-video-wrap">
                    <video class="video-bg" src="{{url('/FSP/video/'.$CoreIndex['gen1']->value2)}}" loop muted autoplay></video>
                    <div class="video-overlay"></div>
                    <div class="video-content">
                        <div class="container" data-aos="fade-up">
                            <div class="video-title">
                                <h1>{{$CoreIndex['gen1']->value1}}</h1>
                            </div>
                            <div class="signature-wrap">
                            <img src="{{url('/FSP/'.$CoreIndex['gen1']->value4)}}" alt="signature-img">
                                <h2 class="author-name">{{$CoreIndex['gen1']->value3}}</h2>
                            </div>
                            <div class="video-button">
                                <a href="{{url('/galery')}}" class="button style-1">albume</a>
                                <!-- <a href="{{url('/contac')}}" class="button style-2">hire us now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Bg video block -->
        </section>
        <!-- End Content -->
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
    <!-- MAIN WRAPPER END -->
    <!-- Footer Scripts
            ============================================= -->
    <!-- JavaScripts
        ============================================= -->
    <script src="{{url('/assets/')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{url('/assets/')}}/js/jquery.smartmenus.min.js"></script>
    <script src="{{url('/assets/')}}/js/aos.js"></script>
    <script src="{{url('/assets/')}}/js/swiper-bundle.min.js"></script>
    <script src="{{url('/assets/')}}/js/lightgallery-all.min.js"></script>
    <script src="{{url('/assets/')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{url('/assets/')}}/js/isotope.js"></script>
    <script src="{{url('/assets/')}}/js/main.js"></script>
</body>

</html>
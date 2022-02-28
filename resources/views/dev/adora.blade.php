
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
    <link rel="stylesheet" href="{{url('/assets/')}}/css/lightgallery.min.css">

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

            <div class="adora-contcept-block">
                <div id="adora-gallery" class="adora-gallery">
                    <div class="swiper-container adora-swiper">
                        <div class="swiper-wrapper">
                        	@foreach ($data['data3'] as $key => $value)
                        	<?php $list=$value['list'];
                        			$value=$value['data']; ?>
                            <div class="swiper-slide">
                                <div class="adora-slide-wrap">
                                    <div class="adora-title-wrap">
                                        <span class="icon-upload adora-button"></span>
                                        <h3 class="adora-title">{{$value->judul}}</h3>
                                        <p>{{$value->lokasi}} at {{$value->pembuatan}}</p>
                                    </div>
                                    <div class="gallery-album">
                                        <div class="img">
                                            <img src="{{url('/FSP/Admin/'.$value->img_headline)}}"
                                                alt="gallery-item" style="max-height: 400px;object-fit: cover;object-position: center;">
                                        </div>
                                    </div>
                                    <div class="item-wrap">
									@foreach ($list as $key2 => $value2)
                                        <div class="item" data-src="{{url('/FSP/Admin/'.$value2->img)}}">
                                            <img src="{{url('/FSP/Admin/'.$value2->img)}}" alt="{{$value2->body_judul}},{{$value2->deskripsi}}">
                                            <h3 class="item-title">
                                                {{$value2->body_judul}}
                                                <span class="item-desc">
                                                    {{$value2->deskripsi}}
                                                </span>
                                            </h3>
                                        </div>
                            		@endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-button-next">
                            <span class="icon-next"></span>
                        </div>
                        <div class="swiper-button-prev">
                            <span class="icon-next"></span>
                        </div>
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
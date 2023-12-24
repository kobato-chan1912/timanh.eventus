@extends("layouts.master")
@section("title") Tìm ảnh - Eventus Production @endsection
@section("description") Hệ thống tìm ảnh Eventus @endsection

@section("content")




    <!-- ==================== Start Slider ==================== -->

    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-2756px, 0px, 0px);">
                <div class="swiper-slide" data-swiper-slide-index="1" style="width: 689px;">
                    <div class="bg-img valign" data-background="/assets/img/bgm-2.jpg" data-overlay-dark="6"
                         data-swiper-parallax="516.75"
                         style="transform: translate3d(516.75px, 0px, 0px); background-image: url(&quot;img/slid/03.jpg&quot;); transition-duration: 0ms;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center mt-30"
                                         style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
{{--                                        <h1 class="color-font">Tìm ảnh Eventus</h1>--}}
{{--                                        <p style="font-size: 16pt">Hệ thống mang đến cho bạn những điều mới lạ và tuyệt vời nhất và chỉ có tại Eventus Production </p>--}}
                                        {{--                                    <a href="https://ui-themez.smartinnovates.net/items/vie/vie-light/#0"--}}
                                        {{--                                       class="butn bord curve mt-30">--}}
                                        {{--                                        --}}

                                        {{--                                    </a>--}}


                                            <select class="form-control mt-3" id="job_select">
                                                @foreach($jobs as $job)
                                                    <option value="{{$job->id}}">{{$job->timanh_title}}</option>
                                                @endforeach
                                            </select>

                                            <a class="butn bord curve mt-30" style="background-color: white;" onclick="loadImage()">
                                                <span style="color: black">Khám phá ngay</span>
                                            </a>





                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="social-icon text-white" style="margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
text-align: center;
">
                            Copyright © Eventus Production
                        </div>
                    </div>
                </div>
            </div>



            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </header>

    <!-- ==================== End Slider ==================== -->
@endsection

@section('page-js')
    <script>
        $( document ).ready(function() {
            // $(".swiper-slide-prev").remove()
            $("#job_select").remove()
            $(".swiper-slide-next").remove()
        });



        function loadImage()
        {
            let jobId = ($("#job_select").val())
            window.location.href = '/projects/' + jobId;
        }
    </script>
@endsection

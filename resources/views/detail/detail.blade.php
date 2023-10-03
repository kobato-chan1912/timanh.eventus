@extends("layouts.master")
@section("title")
    Thư viện ảnh - {{$job->timanh_title}}
@endsection
@section("description")
    Hệ thống tìm ảnh Eventus
@endsection
@section("page-css")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>

@endsection
@section("content")

    <!-- ==================== Start Header ==================== -->

    <section class="page-header proj-det bg-img parallaxie valign"
             data-background="@if($job->timanh_thumbnail !== null) {{env("STORAGE"). $job->timanh_thumbnail}} @else {{env("STORAGE"). "/images/bg-timanh.jpg"}} @endif"
             data-overlay-dark="4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-9">
                    <div class="cont">
                        <h6>Thư viện ảnh</h6>
                        <h2 class="color-font">{{$job->timanh_title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item mt-30">
                        <h6>NGÀY CHỤP</h6>
                        <p>{{\Carbon\Carbon::parse($job->job_date)->format('d/m/Y')}}</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item mt-30">
                        <h6>SỐ LƯỢNG </h6>
                        <p>{{count($photos)}} ảnh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Start Header ==================== -->



    <!-- ==================== Start Intro ==================== -->

    <section class="intro-section pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="htit">
                        <h4><span>  </span> Giới thiệu </h4>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 col-md-8">
                    <div class="text js-scroll__content">
                        <p class="extra-text">{{$job->timanh_description}}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Intro ==================== -->




    <div class="main-content">

        <!-- ==================== Start works ==================== -->

        <section class="works pb-10 pt-50">
            <div class="container">
                <div class="row pb-50">
                    <div class="mb-3 mx-auto">
                        <form action="/projects/{{$job->id}}/result" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" required class="custom-file-input" accept="image/*" name="file" id="inputGroupFile04" onchange="updateFileNameLabel(this)">
                                    <label class="custom-file-label" for="inputGroupFile04">Up khuôn mặt cần tìm</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Tìm kiếm ảnh</button>
                                </div>
                            </div>

                            @if(Session::has("message"))
                            <div class="alert alert-danger mt-10" role="alert">
                                {{Session::get("message")}}
                            </div>
                            @endif

                            @if(isset($success))
                                <div class="alert alert-success mt-10" role="alert">
                                    {{$success}}
                                </div>
                            @endif

                        </form>



                    </div>
                </div>
                <div class="row lg-space">
                    @foreach($photos as $key => $photo)
                        <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <a href="{{$photo->preview_url}}" id="gallery-{{$photo->id}}" data-fancybox="gallery"
                                   data-srcset="{{$photo->full_url}}">
                                    <div class="img" data-tooltip-tit="Click để xem" data-tooltip-sub="{{$photo->file_name}}">
                                        <img style="border-radius: 10px" src="{{$photo->preview_url}}" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if(!isset($usePaginate))
                {!! $photos->links() !!}
                @endif

            </div>
        </section>


        <!-- ==================== End works ==================== -->


        <!-- ==================== Start Footer ==================== -->

        <footer class="sub-bg" style="height: 20px">
            <div class="container">
                <div class="copy-right text-center">
                    <p>© {{\Carbon\Carbon::now()->year}} - Bản quyền thuộc về CÔNG TY TNHH EVENTUS VIỆT NAM - Giấy chứng nhận ĐKKD số 0107929531

                    </p>
                </div>
            </div>
        </footer>

        <!-- ==================== End Footer ==================== -->

    </div>

@endsection
@section('page-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script>
        $('.pagination a').unbind('click').on('click', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getPosts(page);


        });

        function scrollToGallery()
        {
            $('html, body').animate({
                scrollTop: $("#inputGroupFile04").offset().top
            }, 1000);
            // console.log(data)
        }


        function getPosts(page)
        {
            $.ajax({
                type: "GET",
                url: '?page='+ page
            })
                .success(function(data) {
                    $('body').html(data);
                    scrollToGallery()
                });
        }

        function updateFileNameLabel(input) {
            const label = input.nextElementSibling; // Get the label element

            if (input.files && input.files.length > 0) {
                // Set the label text to the selected file's name
                label.textContent = input.files[0].name;
            } else {
                // No file selected, reset the label text
                label.textContent = 'Up khuôn mặt cần tìm';
            }
        }




        $(document).ready(function () {




            $('[data-fancybox="gallery"]').fancybox({

                buttons: [
                    "zoom",
                    "slideShow",
                    "fullScreen",
                    "thumbs",
                    "close"
                ],
                thumbs: {
                    autoStart: true, // Disable auto-start for the thumbnail preview
                    hideOnClose: true // Hide the thumbnails when the gallery is closed
                }
            });

            @if(Route::currentRouteName()== "photos.result")
            scrollToGallery()
            @endif




        });
    </script>

@endsection

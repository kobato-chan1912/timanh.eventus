<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Metas -->

    <!-- Title  -->
    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/eventus-3.png">

    @include("layouts.css")
    @yield("page-css")

</head>

<body>
<div class="pace pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99"
         style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>


<!-- ==================== Start Loading ==================== -->

{{--<div class="loading">--}}
{{--    <span>E</span>--}}
{{--    <span>V</span>--}}
{{--    <span>E</span>--}}
{{--    <span>N</span>--}}
{{--    <span>T</span>--}}
{{--    <span>U</span>--}}
{{--    <span>S</span>--}}
{{--    <span>--}}
{{--        <img style="width: 180px" src="https://feedback.eventusproduction.com/assets/images/eventus-light.png" alt="">--}}
{{--    </span>--}}

{{--</div>--}}



{{--<div id="preloader">--}}
{{--</div>--}}

<!-- ==================== End Loading ==================== -->


<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->


<!-- ==================== Start cursor ==================== -->

<div class="mouse-cursor cursor-outer" style="visibility: visible; transform: translate(685px, 503px);"></div>
<div class="mouse-cursor cursor-inner" style="visibility: visible; transform: translate(685px, 503px);"></div>

<!-- ==================== End cursor ==================== -->

<!-- ==================== Main Core Will After This ==================== -->


<!-- ==================== Start Navbar ==================== -->

<nav class="navbar navbar-expand-lg change">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="/">
            <img src="/assets/img/logo-light.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"--}}
{{--                       href="https://ui-themez.smartinnovates.net/items/vie/vie-light/#" role="button"--}}
{{--                       aria-haspopup="true" aria-expanded="false">Home</a>--}}
{{--                    <div class="dropdown-menu">--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/index.html">Main Home</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/index2.html">Creative--}}
{{--                            Agency</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/index5.html">Digital--}}
{{--                            Agency</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/index4.html">Business One--}}
{{--                            Page</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/index3.html">Corporate--}}
{{--                            Business</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/index6.html">Modern Agency</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/index7.html">Freelancer</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/index8.html">Architecture</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link"--}}
{{--                       href="https://ui-themez.smartinnovates.net/items/vie/vie-light/about.html">About</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"--}}
{{--                       href="https://ui-themez.smartinnovates.net/items/vie/vie-light/#" role="button"--}}
{{--                       aria-haspopup="true" aria-expanded="false">Works</a>--}}
{{--                    <div class="dropdown-menu">--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/showcase.html">Showcase--}}
{{--                            Parallax</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/showcase4.html">Showcase--}}
{{--                            Carousel</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/showcase3.html">Showcase--}}
{{--                            Circle</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/works.html">Portfolio--}}
{{--                            Masonry</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/works2.html">Portfolio--}}
{{--                            Filtering</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/works3.html">Portfolio--}}
{{--                            Gallery</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"--}}
{{--                       href="https://ui-themez.smartinnovates.net/items/vie/vie-light/#" role="button"--}}
{{--                       aria-haspopup="true" aria-expanded="false">Blog</a>--}}
{{--                    <div class="dropdown-menu">--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/blog.html">Blog Standerd</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/blog-list.html">Blog List</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/blog-grid.html">Blog Grid</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="https://ui-themez.smartinnovates.net/items/vie/vie-light/blog-details.html">Blog--}}
{{--                            Details</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 8px" target="_blank" href="tel:0965389669">Contact us: 0383.17.18.19 </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ==================== End Navbar ==================== -->

@yield("content")



<!-- JS -->
@include("layouts.js")
@yield("page-js")

</body>
</html>

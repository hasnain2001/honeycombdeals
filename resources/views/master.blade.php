<?php
header("X-Robots-Tag: index, follow");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta and SEO tags -->
    <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="fo-verify" content="ceb298eb-128c-48ab-9e68-b45c90a37c2c" />
    <title>Honeycomb Deals - Best Deals and Discounts | Honeycomb Deals</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Find the best deals, discounts, and coupons on Honeycomb Deals. Save money on your favorite products from top brands.">
    <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">
    <meta name="author" content="John Doe">
    <meta name="robots" content="index, follow">

    <!-- Canonical and Sitemap -->
    <link rel="canonical" href="https://honeycombdeals.com">
    <link rel="sitemap" type="application/xml" href="sitemap.xml">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Verification Codes -->
    <meta name="partnerboostverifycode" content="32dc01246faccb7f5b3cad5016dd5033" />
    <meta name="impact-site-verification" value="de4ec733-7974-4b7d-a7aa-611819cb6e0f">
    <meta name="pct-site-verification" content="y03vub71r4uj611h31a1abl6ra1457w3qxrz6wzzvs3"/>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H7572N4HKL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-H7572N4HKL');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NJNM88GL');</script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJNM88GL" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-$purple" style="max-width: 100%; margin: auto;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('front/assets/images/logo-01.png') }}" width="200px" alt="Honeycombdeals Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="btn btn-$purple text-white" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-$purple text-white" href="{{ route('stores') }}">Stores</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-$purple text-white" href="{{ route('categories') }}">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-$purple text-white" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-$purple text-white" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>

                    <!-- Search Form -->
                    <form id="searchForm" action="{{ route('search') }}" method="GET" class="d-flex align-items-center col-10 mx-auto" style="max-width: 600px;">
                        <input type="text" id="searchInput" name="query" class="form-control me-2" placeholder="Search...">
                        <button class="btn btn-outline-primary text-white" type="submit">Search</button>
                    </form>

                    <!-- Social Icons -->
                    <div class="social-icons">
                        <a href="https://www.facebook.com/honeycombdeal/" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/honeycombdeals_official/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/honeycombdeals/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.pinterest.com/honeycombdeals_official/" target="_blank"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Slider -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/honeycombslider1.png')}}" class="d-block w-100" alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/honeycombslider2.png') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/wddddd (1).png') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/tiSsDA (1).png') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/sliderhoney (1).png') }}" class="d-block w-100" alt="..." loading="lazy">
            </div>
        </div>
        <button class="slider-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="slider-prev-icon" aria-hidden="true"><i class="fa-solid fa-circle-left"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="slider-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="slider-next-icon" aria-hidden="true"><i class="fa-solid fa-circle-right"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

{{-- Main Content Here --}}
@yield('main-content')
{{-- Main Content Here --}}
<x-alert/>

<script >



        // Handle clicks on coupon activation
        function countAndHandleClicks(couponId) {
            // Send AJAX request to update click count
            $.ajax({
                url: '{{ route('update.clicks') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    coupon_id: couponId
                },
                success: function(response) {
                    // Handle response if needed
                    console.log('Click count updated successfully.');
                },
                error: function(xhr) {
                    console.error('Failed to update click count:', xhr.responseText);
                }
            });

            // Handle showing the coupon code
            var couponLink = $('#getCode' + couponId);
            var couponCode = $('#codeIndex' + couponId);
            var copyBtn = $('#copyBtn' + couponId);

            couponLink.hide();
            couponCode.show();
            copyBtn.show();

            // Store the clicked state in local storage
            localStorage.setItem('couponClicked_' + couponId, true);
        }

        // Function to copy coupon code to clipboard
        function copyToClipboard(couponId) {
            var couponCode = $('#codeIndex' + couponId).text().trim();
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(couponCode).select();
            document.execCommand('copy');
            tempInput.remove();

            // Show copy confirmation message
            var copyConfirmation = $('#copyConfirmation' + couponId);
            copyConfirmation.fadeIn().delay(1000).fadeOut();
        }

        // Initialize autocomplete for search input
        $(document).ready(function() {
            $('#searchInput').autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: '{{ route('search') }}',
                        dataType: 'json',
                        data: {
                            query: request.term
                        },
                        success: function(data) {
                            response(data.stores);
                        }
                    });
                },
                minLength: 1 // Minimum characters before autocomplete starts
            });
        });

        // Toggle description visibility
        $(document).ready(function () {
            $('.toggle-description').on('click', function (e) {
                e.preventDefault();
                var shortDescription = $(this).siblings('.short-description');
                var fullDescription = $(this).siblings('.full-description');

                if (shortDescription.is(':visible')) {
                    shortDescription.hide();
                    fullDescription.show();
                    $(this).text('Show Less');
                } else {
                    shortDescription.show();
                    fullDescription.hide();
                    $(this).text('Show More');
                }
            });
        });
</script>
    <!-- Scripts -->
    <script src="{{ asset('front/assets/js/home.js') }}"></script>
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

<?php
header("X-Robots-Tag:index, follow");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 @if(isset($store) && is_object($store))
     <title>{!! $store->title !!}</title>
    <link rel="canonical" href="https://honeycombdeals.com/store/{{ Str::slug($store->name) }}">
        <meta name="description" content="{!! $store->meta_description !!}">

 <meta name="keywords" content="{!! $store->meta_keyword !!}">
   <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

@else
    <!-- Handle the case where $store is not valid -->
    <!-- You can display a default canonical URL or handle it in another appropriate way -->
    <link rel="canonical" href="https://www.honeycombdeals.com">
@endif


    <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">



    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link rel="stylesheet" href="{{ asset('front/assets/css/home.css')}}">

        <style>
            .container1{
                margin: 2%;


            }
            .name {
    background-image: url('{{ asset('images/back.jpg') }}');

    color: purple;
    background-size: cover;
    background-position: center;
    padding: 10px;
    margin-left: 2%;
    margin-right: 2%;
}

.coupon {
    position: relative;
    text-align: center;
}
.couponuse {
    top: 20%;
    position: relative;
    text-align: left;
}

.coupon .getcode {
    position: absolute;
    bottom: -15px;
    left: 0px;
    z-index: 1; /* Ensure the button is on top */
    color: #fff;
    background-color: #681668; /* Purple color */
    border: 1px solid #800080; /* Purple color */
    border-radius: 90px  30px; /* Border radius of 5px */
    padding: 10px 20px; /* Adjust padding to increase width */
    transition: background-color 0.3s, border-color 0.3s; /* Smooth transition */
text-align: center;
}
.used{
    top: 0%;
}
.codeindex{
    color: black;
}

        </style>

</head>
<body>

<!--<div class="top_header">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row align-items-center">-->
<!--            <div class="col-6 col-lg-4">-->

<!--            </div>-->
<!--            <div class="col-6 col-lg-8">-->
<!--                <div class="row align-items-center">-->
<!--                    <div class="col-12 col-lg-6">-->
<!--                        <div class="top_header_content text-center text-lg-start">-->
<!--                            <img src="{{ asset('front/assets/images/winter-sale.webp') }}" class="me-2" alt="">-->
<!--                            <span class="d-block d-lg-inline-block">Prices are Thawing</span>-->
<!--                            <a href="javascript:void(0);" class="flash_sale d-inline-block mt-2 mt-lg-0 ms-lg-2">-->
<!--                                Shop Deals Up to 70% Off-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


    <!-- Top Navbar Section -->


<header>

    <!-- Main Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-$purple" style="max-width: 100%; margin: auto;">
        <div class="container-fluid">

            <!-- Navbar Brand (Logo) -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('front/assets/images/logo-01.png') }}" width="200px" alt="Honeycombdeals Logo">
            </a>

            <!-- Navbar Toggler (for small screens) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-$purple text-white" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-$purple text-white" aria-current="page" href="{{ route('stores') }}">Stores</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-$purple text-white" aria-current="page" href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-$purple text-white" aria-current="page" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-$purple text-white" aria-current="page" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
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
<main>
    @if(session('success'))
    <div class="alert alert-light alert-dismissable">


        <b>{{ session('success') }}</b>
    </div>
@endif
    @if ($store)
    <div class="container1 py-5 name">
        <div class="content-wrapper">
            <h1 class="text-center">{{ $store->name }}</h1>
        </div>
    </div>


<div class="container1">
    <div class="row mt-5">

            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('uploads/store/' . $store->store_image) }}" width="100%" alt="{{ $store->name }}">
                        @if ($store->description)
                        <p class="store_detail_description">
                            <span class="short-description">{!! \Illuminate\Support\Str::words(strip_tags($store->description), 20, '...') !!}</span>
                            <span class="full-description" style="display: none;">{!! $store->description !!}</span>
                            @if (strlen(strip_tags($store->description)) > 200)
                                <a href="#" class=" text-danger toggle-description">Show More</a>
                            @endif
                        </p>
                        @endif
                        <a href="{{ $store->url }}" target="_blank" class="btn btn-dark text-white ">Visit Store</a>
                    </div>
                </div>
            </div>
        @endif
        <div class="col-12 col-lg-9">
            <div class="row mb-3">
                @php
                    $codeCount = 0;
                    $dealCount = 0;
                @endphp
                @foreach ($coupons as $coupon)
                <div class="col-12 col-lg-4 col-sm-12 mb-3">
                    <div class="card" style="height: 400px; max-height:400px;">
                        <div class="card-body d-flex flex-column">
                            <br>
                            <h5>{{ $coupon->name }}</h5>
                            <br>
                            @if ($coupon->description)
                                <p class="card-text font-italic">{!! $coupon->description !!}</p>
                            @endif
                            <div> <!-- This div pushes the button to the bottom -->
                                @if ($coupon->code)
                                @php $codeCount++; @endphp
                                <div class="d-grid gap-2">
                                    <div class="coupon">
                                        <a href="{{ $coupon->destination_url }}" target="_blank" class="getcode" id="getCode{{ $coupon->id }}" onclick="countAndHandleClicks('{{ $coupon->id }}')">Coupon Code</a>
                                        <br>
                                        <br>
                                        <div class="card">
                                            <span class="codeindex text-dark" style="display: none;" id="codeIndex{{ $coupon->id }}">{{ $coupon->code }}</span>
                                            <button class="btn btn-primary copy-btn" style="display: none;" id="copyBtn{{ $coupon->id }}" onclick="copyToClipboard('{{ $coupon->id }}')">Copy Code</button>
                                            <p class="text-success copy-confirmation" style="display: none;" id="copyConfirmation{{ $coupon->id }}">Code copied!</p>
                                        </div>
                                    </div>
                                    <form method="post" action="{{ route('update.clicks') }}" id="clickForm">
                                        @csrf
                                        <input type="hidden" name="coupon_id" id="coupon_id">

                                    <div class="couponuse">
                                        <p class="used" id="output_{{ $coupon->id }}"> Used By:{{ $coupon->clicks }} </p>
                                    </div>
                                </div>
                                @else
                                @php $dealCount++; @endphp
                                <div class="d-grid gap-2">
                                    <a href="{{ $coupon->destination_url }}" class="get" target="_blank" onclick="countClicks('{{ $coupon->id }}')">Get Deal</a>
                                    <p class="used" id="output_{{ $coupon->id }}">Used By: {{ $coupon->clicks }}</p>
                                </div>
                            </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


<div class="totals mt-3 d-none d-lg-block">
    <div class="p-3 border rounded" style="background-color: #f8f9fa;">
        <h4 class="mb-3" style="font-weight: bold;">Summary</h4>
        <p style="font-size: 1.2em; margin: 0;">
            <i class="fas fa-tag me-2"></i>Total Codes:
            <span class="badge bg-primary">{{ $codeCount }}</span>
        </p>
        <p style="font-size: 1.2em; margin: 0;">
            <i class="fas fa-shopping-cart me-2"></i>Total Deals:
            <span class="badge bg-success">{{ $dealCount }}</span>
        </p>
        @php
            $totalCount = $codeCount + $dealCount;
        @endphp
        <p style="font-size: 1.2em; margin: 0;">
          Total:
            <span class="badge bg-info">{{ $totalCount }}</span>
        </p>
    </div>
</div>

    </div>
</div>
  <!-- Totals Section, only visible on desktop -->
  <div class="container">
       <h2 class="text-center mb-4">Related Stores</h2>

  </div>

    <div class="container bg-light">

     <div class="carousel-inner bg-light">
       @foreach ($relatedStores->chunk(20000) as $chunk)
         <div class="carousel-item bg-light {{ $loop->first ? 'active' : '' }}">
           <div class="d-flex flex-row flex-nowrap overflow-auto">
  @foreach ($chunk as $relatedStore)
              <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                  <a href="{{ route('store_details', ['name' => Str::slug($relatedStore->name)]) }}">
                    <img src="{{ asset('uploads/store/' . $relatedStore->store_image) }}" alt="{{ $relatedStore->name }}" class="card-img-top img-fluid rounded-top">
                  </a>
                  <div class="card-body px-3 py-2">
                    <h5 class="card-title text-dark">{{ $relatedStore->name }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($relatedStore->description, 70) }}</p>
                    <a href="{{ route('store_details', ['name' => Str::slug($relatedStore->name)]) }}" class="get stretched-link text-decoration-none">Visit Store</a>
                  </div>
                </div>
              </div>
            @endforeach
           </div>
         </div>
       @endforeach
     </div>

   </div>
</div>

     <x-alert/>

       <script>
document.addEventListener("DOMContentLoaded", function() {
    // Check local storage and show coupon codes if already clicked
    @foreach ($coupons as $coupon)
        var couponId = '{{ $coupon->id }}';
        if (localStorage.getItem('couponClicked_' + couponId)) {
            var couponLink = $('#getCode' + couponId);
            var couponCode = $('#codeIndex' + couponId);
            var copyBtn = $('#copyBtn' + couponId);

            couponLink.hide();
            couponCode.show();
            copyBtn.show();
        }
    @endforeach
});

function countClicks(couponId) {
    document.getElementById('coupon_id').value = couponId;
    document.getElementById('clickForm').submit();
}

function countAndHandleClicks(couponId) {
    // Count the click
    document.getElementById('coupon_id').value = couponId;
    document.getElementById('clickForm').submit();

    // Handle coupon click to show coupon code
    var couponLink = $('#getCode' + couponId);
    var couponCode = $('#codeIndex' + couponId);
    var copyBtn = $('#copyBtn' + couponId);

    // Toggle visibility of link and coupon code span
    couponLink.hide();
    couponCode.show();
    copyBtn.show();

    // Store the clicked state in local storage
    localStorage.setItem('couponClicked_' + couponId, true);
}

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


$(document).ready(function() {
    $('#searchInput').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: '{{ route("search") }}',
                dataType: 'json',
                data: {
                    query: request.term
                },
                success: function(data) {
                    response(data.stores);
                }
            });
        },
        minLength:1 // Minimum characters before autocomplete starts
    });
});

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.toggle-description').forEach(function (toggle) {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    var shortDescription = toggle.parentNode.querySelector('.short-description');
                    var fullDescription = toggle.parentNode.querySelector('.full-description');

                    if (shortDescription.style.display === 'none') {
                        shortDescription.style.display = 'inline';
                        fullDescription.style.display = 'none';
                        toggle.textContent = 'Show More';
                    } else {
                        shortDescription.style.display = 'none';
                        fullDescription.style.display = 'inline';
                        toggle.textContent = 'Show Less';
                    }
                });
            });
        });

</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

 <!-- Include Owl Carousel CSS -->
 <!-- Include jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>




<!-- Include Owl Carousel JavaScript -->   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Initialize Owl Carousel -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

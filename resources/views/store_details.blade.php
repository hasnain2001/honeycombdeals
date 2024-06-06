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
<div class="container">
    <div class="row mt-5">
        @if ($store)
            <h1>{{ $store->name }}</h1>
            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('uploads/store/' . $store->store_image) }}" width="100%" alt="{{ $store->name }}">
                        @if ($store->description)
                            <p class=" store_detail_description ">{!! $store->description !!}</p>
                        @endif
                        <a href="{{ $store->url }}" target="_blank" class="visit_store_btn mb-3">Visit Store</a>
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
    <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">{{ $coupon->name }}</h5>
            @if ($coupon->description)
                <p class="card-text">{!! $coupon->description !!}</p>
            @endif
            @if ($coupon->code)
             @php $codeCount++; @endphp
                <a href="#" class="get" id="getCode{{ $coupon->id }}" onclick="openCouponInNewTab('{{ $coupon->destination_url }}', '{{ $coupon->id }}')">Code & Activate</a>
            @else
                                                        @php $dealCount++; @endphp
                <a href="{{ $coupon->destination_url }}" class="get" target="_blank">Get Deal</a>
            @endif
        </div>
    </div>
    
</div>


            <div class="modal fade" id="codeModal{{ $coupon->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $coupon->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel{{ $coupon->id }}">{{ $coupon->name }}</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3>{{ $coupon->code ? $coupon->code : "Code not found" }}</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
</div>


<div class="container">
    <h2 class="text-center mb-4">Related Stores</h2>
   
</div>
         
 <div class="container bg-light">

  <div class="carousel-inner bg-light">
    @foreach ($relatedStores->chunk(20) as $chunk)
      <div class="carousel-item bg-light {{ $loop->first ? 'active' : '' }}">
        <div class="d-flex flex-row flex-nowrap overflow-auto">
          @foreach ($chunk as $relatedStore)
            <div class="col-md-4 mb-3 flex-shrink-0 bg-light">
              <div class="card shadow-sm h-100 bg-light">
                <img class="cardimg card-img-top img-fluid" src="{{ asset('uploads/store/' . $relatedStore->store_image) }}" lt="{{ $relatedStore->name }}"  style="height:200px; width:450px;">
                <div class="card-body bg-light">
                  <h5 class="card-title">{{ $relatedStore->name }}</h5>
<p class="card-text">{{ Str::limit($relatedStore->description, 100) }}</p>                    
                  <div class="card-footer bg-white border-0 bg-light">
                    <small class="text-muted">Created at {{ $relatedStore->created_at }}</small>
                  </div>
                  <a href="{{ route('store_details', ['name' => Str::slug($relatedStore->name)]) }}" class="btn btn-dark stretched-link">Read More</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>

</div>
  
  <!-- Totals Section, only visible on desktop -->
            
    
    
     <x-alert/>
    
       <script>
        $(document).ready(function() {
  $('.your-slider-class').slick({
    dots: true, // Add navigation dots
    slidesToShow: 3, // Number of slides visible
    slidesToScroll: 1, // Number of slides to scroll per swipe
    autoplay: true, // Enable autoplay (optional)
    autoplaySpeed: 2000, // Autoplay speed in milliseconds (optional)
  });
});

        function openCouponInNewTab(url, couponId) {
            window.open(url, '_blank');
            var modal = new bootstrap.Modal(document.getElementById('codeModal' + couponId));
            modal.show();
        }
    </script>
    <script>
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
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

 <!-- Include Owl Carousel CSS -->
 <!-- Include jQuery library -->
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

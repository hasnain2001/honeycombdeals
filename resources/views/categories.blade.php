<?php
header("X-Robots-Tag:index, follow");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Honeycomb Deals - Best Deals and Discounts | Honeycomb Deals</title>
    <!-- Your custom meta tags go here -->
     <meta name="description" content="Find the best deals, discounts, and coupons on Honeycomb Deals. Save money on your favorite products from top brands.">

 <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

<link rel="canonical" href="https://honeycombdeals.com/categories">

    <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery and bootstrap -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}">



        <link rel="stylesheet" href="{{ asset('front/assets/css/home.css')}}">

        <style>
            .categoriees{
                text-decoration: none;
                color: black;
            }
            .categoriees:hover{
                text-decoration: none;
                color: black
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

    <!-- Top Navbar Section -->

            <!-- Search Form -->



</header>
<main>
    <div class="main_content">
      <div class="container">
        <div class="row mt-3">
          <h1 class="text-center display-4 mb-4">Our Categories</h1>
  
          <!-- Grid layout to show 2 categories per row on mobile, 2 on small screens, 3 on medium, and 4 on large screens -->
          <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach ($category as $category)
              <div class="col">
                <div class="card shadow-sm h-100 overflow-hidden">
                  <a href="{{ route('related_category', ['title' => Str::slug($category->title)]) }}">
                    @if ($category->category_image)
                      <img src="{{ asset('uploads/categories/' . $category->category_image) }}" class="card-img-top" alt="{{ $category->title }} Image" loading="lazy">
                    @else
                      <div class="d-flex align-items-center justify-content-center" style="height: 200px; background-color: #f8f9fa;">
                        <i class="fas fa-image fa-3x text-muted"></i>
                        <p class="ms-2 mb-0 text-muted">No image available</p>
                      </div>
                    @endif
                  </a>
                  <div class="card-body d-flex flex-column justify-content-between">
                    <a href="{{ route('related_category', ['title' => Str::slug($category->title)]) }}" class="categoriees">
                      <h5 class="card-title text-center">{{ $category->title }}</h5>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </main>
  

    <x-alert/>

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
<script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
</body>
</html>

<?php
header("X-Robots-Tag:index, follow");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">

 

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

@if(isset($blog) && is_object($blog))
   <!-- Your custom meta tags go here -->
   <title>{!! $blog->meta_title !!}</title>
    <link rel="canonical" href="https://honeycombdeals.com/blog/{{ Str::slug($blog->title) }}">
        <meta name="description" content="{!! $blog->meta_description !!}">

 <meta name="keywords" content="{!! $blog->meta_keyword !!}">
@else
    <!-- Handle the case where $store is not valid -->
    <!-- You can display a default canonical URL or handle it in another appropriate way -->
    <link rel="canonical" href="https://honeycombdeals.com">
@endif


  <!-- Bootstrap CSS -->
  <!-- Add Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Add Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('front/assets/css/blogdetail.css') }}">
  <!-- Custom CSS -->

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
<br>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 mb-4">
            <div class="blog-post card shadow rounded-lg border border-light">
                <img class="img-fluid" src="{{ asset($blog->category_image) }}" alt="Blog Image" style="width: 100%; height: auto;">
                <div class="card-body">
                    <h1 class="card-title text-3xl font-semibold text-gray-800 mb-4">{{ $blog->title }}</h1>
                    <p class="card-text text-gray-700 text-lg leading-relaxed">{!! $blog->content !!}</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 order-md-last">
            <aside class="sidebar p-3 bg-light">
                <h2 class="bold text-dark mb-3">Top Stores</h2>
                <div class="row gx-2 gy-2">
                    @foreach ($chunks as $store)
                        <div class="col-6 col-md-12 col-sm-6 col-lg-6">
                            <a href="{{ route('store_details', ['name' => Str::slug($store->name)]) }}" class="text-dark text-decoration-none d-flex flex-column p-2 align-items-center">
                                <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }}" class="mb-2 shadow" style="width: 100px; height: 100px; object-fit: cover;">
                                <p class="text-capitalize">{{ $store->name }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
</div>

  

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
        minLength: 1 // Minimum characters before autocomplete starts
    });
});
</script>

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</body>
</html>

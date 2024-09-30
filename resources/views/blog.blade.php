<?php
header("X-Robots-Tag:index, follow");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Honeycomb Deals Blog - Smart Shopping Tips & Tricks</title>

    <!-- Your custom meta tags go here -->
     <meta name="description" content="Find the best deals, discounts, and coupons on Honeycomb Deals. Save money on your favorite products from top brands.">

 <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

<link rel="canonical" href="https://honeycombdeals.com/blog">


   <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/blog.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .blog-image{
        width: 100%;
    }
</style>
</head>
<body>
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

<br><br>

<div class="container">
    <div class="row">
        <h1 class="text-center">Shopping Hacks & Savings Tips & Tricks</h1>
        <div class="col-lg-8 col-md-12">

            <!-- Blog posts -->
            <div class="row">
                @foreach ($blogs as $blog)
                @if ($blog->slug)
                <a href="{{ route('blog-details', ['slug' => Str::slug($blog->slug)]) }}" class="col-md-12 mb-4 text-decoration-none">
                    @else
                    <a href="javascript:;" class="btn btn-dark col-md-12 mb-4 text-decoration-none">no Slug</a>
                @endif
                        <div class="blog-post">
                            <img src="{{ asset($blog->category_image) }}" alt="Blog Post Image" class="img-fluid blog-image">
                            <div class="post-content">
                                <h2>{{ $blog->title }}</h2>
                                <!-- Add more fields as needed -->
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
             <div class="container bg-light mt-3">
                <div class="row mt-3 justify-content-end">
                    <div class="col-12">
                        {{ $blogs->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
            <aside class="sidebar p-3 bg-light">
                <!-- Sidebar Title -->
                <h2 class="bold text-dark mb-3">Top Stores</h2>
                <!-- Store Listings -->
                <div class="row gx-2 gy-2">
                    @foreach ($chunks as $store)
                    <div class="col-lg-6 col-md-4 col-sm-4 col-6">
                        <a href="{{ route('store_details', ['name' => Str::slug($store->name)]) }}" class="text-dark text-decoration-none d-flex flex-column p-2">
                            <!-- Store Image -->
                            <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }}" class="img-fluid mb-2 shadow" style="object-fit: cover;">
                            <!-- Store Name -->
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
 // Initialize autocomplete for search input
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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
</body>
</html>

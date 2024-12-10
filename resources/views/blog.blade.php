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
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/blog.css') }}">
  
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<x-navbar/>
<br>

<div class="container">
    <div class="row">
        <h1>Shopping Hacks & Savings Tips & Tricks</h1>
        <div class="col-md-8">
            
            <!-- Blog posts -->
            <div class="row">
                @foreach ($blogs as $blog)
                @if ($blog->slug)
           <a href="{{ route('blog-details', ['slug' => Str::slug($blog->slug)]) }}" class="col-md-12 mb-4">


                    @else
                    <a href="javascript:;" class="btn btn-darkcol-md-12 mb-4 text-decoration-none">no Slug</a>
                        @endif
                        <div class="blog-post">
                            <img src="{{ asset($blog->category_image) }}" alt="Blog Post Image" style="width: 1000px; height: 400px;">
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
              {{ $blogs->links('pagination::bootstrap-4') }} </div>
          </div>
        </div>

        </div>

     <div class="col-md-4">
      <aside class="sidebar p-3 bg-light">
        <!-- Sidebar Title -->
        <h2 class="bold text-dark mb-3">Top Stores</h2>
        <!-- Store Listings -->
        <div class="row gx-2 gy-2">
          @foreach ($chunks as $store)
            <div class="col-md-6 col-sm-4 col-6">
                @php

                $storeurl = $store->slug
                ? route('store_details', ['slug' => Str::slug($store->slug)])
                : '#';
                @endphp
              <a href="{{$storeurl}}" class="text-dark text-decoration-none d-flex flex-column p-2">
                <!-- Store Image -->
                <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }}" class="mb-2  shadow" style="width: 100px; height: 100px; object-fit: cover;">
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

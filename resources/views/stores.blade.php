<?php
header("X-Robots-Tag:index, follow");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Honeycomb Deals - Best Deals and Discounts | Stores</title>
    <!-- Your custom meta tags go here -->
     <meta name="description" content="Find the best deals, discounts, and coupons on Honeycomb Deals. Save money on your favorite products from top brands.">

 <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

<link rel="canonical" href="https://honeycombdeals.com/stores">

    <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS v5.3.2 -->
<link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="{{ asset('front/assets/css/home.css')}}">

    <!-- verification code  -->
    <meta name="impact-site-verification" value="de4ec733-7974-4b7d-a7aa-611819cb6e0f">




</head>
<body>

<main>
    <div class="main_content">
        <div class="container">
            <div class="row mt-3">
                <h1 class="text-center fx-bold display-9 mb-4">Our Stores</h1>
                <p class="h5 text-left text-muted mb-4">Total stores: <span class="fw-bold">{{ $stores->total() }}</span></p>

                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    @foreach ($stores as $store)
                    @php
                    $storeUrl = $store->slug
                        ? route('store_details', ['slug' => Str::slug($store->slug)])
                        : '#';
                @endphp
                        <div class="col">
                            <div class="card shadow-sm h-100 overvflow-hidden">
                                <a href="{{ $storeUrl }}" >
                                @if ($store->store_image)
                                    <img src="{{ asset('uploads/store/' . $store->store_image) }}" class="card-img-top" alt="{{ $store->name }} Image">
                                @else

                                        <div class="d-flex align-items-center justify-content-center" style="height: 200px; background-color: #f8f9fa;">
                                            <i class="fas fa-store fa-3x text-muted"></i>
                                            <p class="ms-2 mb-0 text-muted">No image available</p>
                                        </div>
                                    @endif


                                <div class="card-body d-flex flex-column justify-content-between">

                                        <h5 class="card-title text-left">{{ $store->name ?: "Title not found" }}</h5>

                                </div>


                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


          <div class="row mt-4">
            <div class="col">
              <div class="d-flex justify-content-center">
                {{ $stores->links('vendor.pagination.bootstrap-5') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


     <x-alert/>


<script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>






</body>
</html>

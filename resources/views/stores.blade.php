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

<link rel="canonical" href="https://honeycombdeals.com/stores">

    <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">


 
    <!-- Bootstrap CSS v5.3.2 -->

    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}">
    
    
    
    
    
       
</head>
<body>



<x-navbar/>
<main>
  <div class="main_content">
    <div class="container">
      <div class="row mt-3">
        <h1 class="text-center display-4"> Popular Stores</h1>
         <p class="h5 m-0">Total stores: <span class="fw-bold">{{ $stores->total() }}</span></p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          @foreach ($stores as $store)
            <div class="col">
              <div class="card shadow-sm h-100 overflow-hidden">
                @php

                $storeurl = $store->slug
                ? route('store_details', ['slug' => Str::slug($store->slug)])
                : '#';
                @endphp
                <a href="{{$storeurl }}">
              @if ($store->store_image)
    <img src="{{ asset('uploads/store/' . $store->store_image) }}" class="card-img-top" alt="{{ $store->name }} Image">
@else
    @if ($store->previous_image)
        <img src="{{ asset('uploads/store/' . $store->previous_image) }}" class="card-img-top" alt="{{ $store->name }} Image">
    @else
        <div class="d-flex align-items-center justify-content-center vh-100 bg-light text-muted">
            <i class="fas fa-store fa-3x"></i> <p class="ms-2">No image available</p>
        </div>
    @endif
@endif

                </a>
                <div class="card-body d-flex flex-column justify-content-between">
                  <a href="{{$storeurl }}" class="text-dark text-decoration-none stretched-link">
                    <h5 class="card-title">{{ $store->name ?: "Title not found" }}</h5>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="container bg-light mt-3">
          <div class="row mt-3 justify-content-end">
            <div class="col-12">
            
              {{ $stores->links('pagination::bootstrap-4') }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


     <x-alert/>
    
  


</body>
</html>

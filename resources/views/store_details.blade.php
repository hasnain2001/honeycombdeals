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
        <meta name="tag" content="{!! $store->meta_description !!}">


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
     <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}">
     <link rel="stylesheet" href="{{ asset('front/assets/css/storedetail.css') }}">

<style>
.content iframe,.content img,.content video{max-width:100%;height:auto;display:block}.card-store{height:auto;border:1px solid #000}.name{color:purple;background-size:cover;background-position:center;padding:10px;margin-left:2%;margin-right:2%;background-image:url("{{ asset('images/back.jpg') }}")}.content{margin:auto;padding:20px;max-width:100%;word-wrap:break-word;overflow:hidden}.content img{margin:10px 0}.content table{width:100%;border-collapse:collapse;overflow-x:auto;display:block}@media (max-width:768px){.content{padding:10px}}

</style>
</head>
<body>



    <x-navbar/>

  
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Home</a>
      </li>
      <li class="breadcrumb-item">
        @if($store->category)
        <a href="{{ route('related_category', ['title' => Str::slug($store->category)]) }}">
            {{ $store->category }}
        </a>
    @else
        <span>No Category</span>
    @endif
    
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('stores') }}">Stores</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        {{ $store->name }}
      </li>
    </ol>
  </nav>
  
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
    @php
    $codeCount = 0;
    $dealCount = 0;
@endphp

<div class="container1">
    <div class="row mt-5">

        <div class="col-12 col-lg-3 mb-3">
            <div class="card-store">
                <div class="card-body">
                    <img src="{{ asset('uploads/store/' . $store->store_image) }}" width="100%" alt="{{ $store->name }}">
                    <span>{{ $store->name }}</span>
                              <div class="rating-stars text-warning">
                                <i class="fas fa-star" data-rating="1"></i>
                                <i class="fas fa-star" data-rating="2"></i>
                                <i class="fas fa-star" data-rating="3"></i>
                                <i class="fas fa-star" data-rating="4"></i>
                                <i class="fas fa-star text-dark" data-rating="5"></i>
                            </div>
                            <span class="ending-date">
Created At: {{ \Carbon\Carbon::parse($store->created_at)->setTimezone('Asia/Karachi')->format('d M Y, h:i A') }}
</span>

                    @if ($store->description)
                    <p class="store_detail_description d-none d-md-block">
                        <span class="short-description">{!! \Illuminate\Support\Str::words(strip_tags($store->description), 20, '...') !!}</span>
                        <span class="full-description" style="display: none;">{!! $store->description !!}</span>
                        @if (strlen(strip_tags($store->description)) > 200)
                            <a href="#" class=" text-danger toggle-description">Show More</a>
                        @endif
                    </p>
                    @endif
           
                    {{-- <a href="{{ $store->url }}" target="_blank" class="btn btn-dark text-white ">Visit Website</a> --}}
                </div>
            </div>
        </div>
        @endif
        <div class="col-12 col-lg-9">
            <div class="row mb-3">
          
           @foreach ($coupons as $coupon)
           <div class="col-12 col-lg-4 col-sm-12 mb-3">
               <div class="card border-dark ">
                   <div class="card-body d-flex flex-column justify-content-between">
                       @php
                           $store = App\Models\Stores::where('name', $coupon->store)->first();
                       @endphp
                       <div class="d-flex justify-content-center align-items-center mb-3" style="height: 200px;">
                           @if ($store && $store->store_image)
                               <img src="{{ asset('uploads/store/' . $store->store_image) }}" alt="{{ $store->name }} Image" class="store-image" style="width: 100%; height: 100%; object-fit: cover;">
                           @else
                               <span class="no-image-placeholder d-flex align-items-center justify-content-center" style="width: 100px; height: 100px; background-color: #f0f0f0; color: #888; font-size: 14px;">No Image Available</span>
                           @endif
                       </div>

                       <div class="name-section mb-3">
                           <h5 class="text-left text-name">{{ $coupon->name }}</h5>
                       </div>

                       <div class="description-section mb-3">
                           @if ($coupon->description)
                               <p class="text-left text-description">{!! $coupon->description !!}</p>
                           @endif
                       </div>

                       <div class="ending-date-used-section ">
                           <span class="ending-date">Ending Date: {{ $coupon->ending_date }}</span>
                           <br>
                           <span class="used" id="output_{{ $coupon->id }}">Used By: {{ $coupon->clicks }}</span>
                       </div>

                       <div class="coupon-section ">
                           @if ($coupon->code)
                               @php $codeCount++; @endphp
                               <div class="d-grid gap-2 flex-grow-1 d-flex flex-column mt-3">
                                   <div class="coupon">
                                       <a href="{{ $coupon->destination_url }}" target="_blank" class="getcode" id="getCode{{ $coupon->id }}" onclick="countAndHandleClicks('{{ $coupon->id }}')">Activate Code</a>

                                       <div class="coupon-card d-flex flex-column flex-grow-3 mt-3">
                                           <span class="codeindex text-dark" style="display: none;" id="codeIndex{{ $coupon->id }}">{{ $coupon->code }}</span>
                                           <button class="btn btn-primary btn-sm copy-btn" style="display: none;" id="copyBtn{{ $coupon->id }}" onclick="copyToClipboard('{{ $coupon->id }}')">Copy Code</button>
                                           <p class="text-success copy-confirmation" style="display: none;" id="copyConfirmation{{ $coupon->id }}">Code copied!</p>

                                           <div class="mt-auto couponuse"></div>
                                       </div>
                                   </div>
                                   <form method="post" action="{{ route('update.clicks') }}" id="clickForm">
                                       @csrf
                                       <input type="hidden" name="coupon_id" id="coupon_id">
                                   </form>
                               </div>
                           @else
                               @php $dealCount++; @endphp
                               <div class="d-grid mt-3">
                                   <a href="{{ $coupon->destination_url }}" class="get" target="_blank" onclick="countAndHandleClicks('{{ $coupon->id }}')">Activate Deal</a>
                               </div>
                               <br>
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
  <h4 class="">Related Stores</h4>
  <div class="container bg-light ">
  
    <div class="carousel-inner bg-light">
      @foreach ($relatedStores as $relatedStore)
        <div class="carousel-item bg-light {{ $loop->first ? 'active' : '' }}">
          <div class="d-flex flex-row flex-nowrap overflow-auto custom-scrollbar">
    
              <div class="col-md-4 mb-3 mx-2" style="min-width: 250px;">
                <div class="card shadow-sm h-100">
                    @php

                    $storeurl = $relatedStore->slug
                    ? route('store_details', ['slug' => Str::slug($relatedStore->slug)])
                    : '#';
                    @endphp
                  <a href="{{$storeurl }}">">
                    <img src="{{ asset('uploads/store/' . $relatedStore->store_image) }}" alt="{{ $relatedStore->name }}" class="card-img-top img-fluid rounded-top">
                  </a>
                  <div class="card-body px-3 py-2">
                    <span class="card-title text-dark text-truncate">{{ $relatedStore->name }}</span>
                    <p class="card-text text-muted">{{ Str::limit($relatedStore->description, 70) }}</p>
                    <a href="{{$storeurl }}" class="btn btn-primary btn-sm stretched-link">Visit Store</a>
                  </div>
                </div>
              </div>
  
          </div>
        </div>
      @endforeach
    </div>
  </div>
  

<br>
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




</body>
</html>

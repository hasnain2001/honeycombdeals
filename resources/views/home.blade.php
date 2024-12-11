@extends('master')
@section('title')
    Home
@endsection
@section('main-content')


<style>

/* Main Heading Styles */
.heading-1 {
    font-size: 28px;
    font-family: 'Georgia', serif;
    text-align: center;
    color: #434a4b;
    margin-bottom: 20px;
    line-height: 1.4;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, color 0.3s ease;
}

/* Subheading Styles */
.heading-sub {
    font-size: 24px;
    font-family: 'Georgia', serif;
    text-align: center;
    color: #434a4b;
    margin-bottom: 20px;
    line-height: 1.4;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, color 0.3s ease;
}

/* Hover Effect for Headings */
.heading-1:hover,
.heading-sub:hover {
    transform: translateY(-3px);
    color: #000000;
}

/* Media Query for Responsiveness */
@media screen and (max-width: 786px) {
    .heading-1 {
        font-size: 18px;
    }
    .heading-sub {
        font-size: 16px;
    }
}

  
</style>


<br>

<div class="container">
    <div class="container">
        <h1 class="heading-1">Latest Discount Codes & Promo Codes From Popular Stores</h1>
    </div>
    <div id="storeCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            @foreach ($store->chunk(6) as $key => $chunk)
                <button
                    type="button"
                    data-bs-target="#storeCarousel"
                    data-bs-slide-to="{{ $key }}"
                    class=" bg-dark {{ $key === 0 ? 'active' : '' }}"
                    aria-current="{{ $key === 0 ? 'true' : '' }}"
                    aria-label="Slide {{ $key + 1 }}"
                ></button>
            @endforeach
        </div>
        <!-- Slides -->
        <div class="carousel-inner">
            @foreach ($store->chunk(6) as $key => $chunk)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach ($chunk as $storeItem)
                            <div class="col-6 col-sm-4 col-md-2">
                                @php
                                $storeurl = $storeItem->slug
                                ?  route('store_details', ['slug' => Str::slug($storeItem->slug)])
                                : '#';
                                @endphp
    
                                <a href="{{ $storeurl }}" class="text-dark text-decoration-none">
                                    <img
                                        class="img-fluid mb-2"
                                        src="{{ asset('uploads/store/' . $storeItem->store_image) }}"
                                        srcset="{{ asset('uploads/store/' . $storeItem->store_image) }} 1x, {{ asset('uploads/store/' . $storeItem->store_image_webp) }} 2x"
                                        alt="{{ $storeItem->name }}"
                                        loading="lazy"
                                        width="200" height="200"
                                    />
                                    <span class="fw-bold d-block text-center">{{ $storeItem->name }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Navigation Buttons -->
        <button class="store-prev" type="button" data-bs-target="#storeCarousel" data-bs-slide="prev">
            <span class="store-prev-icon" aria-hidden="true"><i class="fa-solid fa-circle-left"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
    
        <button class="store-next" type="button" data-bs-target="#storeCarousel" data-bs-slide="next">
            <span class="store-next-icon" aria-hidden="true"><i class="fa-solid fa-circle-right"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    


<br><br>
<div class="container mt-4">
    <h2 class="heading-sub mb-4">Today's Top Trending Coupons & Voucher Codes</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        @forelse ($topCoupons as $coupon)
            <div class="col">
                <div class="coupon-card shadow-lg border-0 rounded overflow-hidden h-100 transition-transform transform hover:scale-105">
                    <div class="card-body d-flex flex-column justify-content-between h-100">
                        <div class="mb-3">
                            <span class="card-title text-dark mb-4">{{ $coupon->name }}</span>
                            <br>
                            <span class="card-text text-dark mb-2">{{ $coupon->store }}</span>
                            <p class="card-text text-muted" style="font-style: italic;">{{ Str::limit($coupon->description, 70) }}</p>
                            <span class="used" id="output_{{ $coupon->id }}">Used By: {{ $coupon->clicks }}</span>
                        </div>
                        <div class="d-grid gap-2 mt-auto">
                            @if ($coupon->code)
                            <a href="{{ $coupon->destination_url }}" target="_blank" class="getcode" id="getCode{{ $coupon->id }}" onclick="countAndHandleClicks('{{ $coupon->id }}')">Activate Code</a>

                            <div class="coupon-card d-flex flex-column flex-grow-3 mt-3">
                                <span class="codeindex text-dark" style="display: none;" id="codeIndex{{ $coupon->id }}">{{ $coupon->code }}</span>
                                <button class="btn btn-primary btn-sm copy-btn" style="display: none;" id="copyBtn{{ $coupon->id }}" onclick="copyToClipboard('{{ $coupon->id }}')">Copy Code</button>
                                <p class="text-success copy-confirmation" style="display: none;" id="copyConfirmation{{ $coupon->id }}">Code copied!</p>

                                <div class="mt-auto couponuse"></div>
                            </div>
                            <form method="post" action="{{ route('update.clicks') }}" id="clickForm">
                                @csrf
                                <input type="hidden" name="coupon_id" id="coupon_id">
                            </form>
                            @else
                            <div class="d-grid mt-4">
                                <a href="{{ $coupon->destination_url }}" class="get" target="_blank" onclick="countAndHandleClicks('{{ $coupon->id }}')">Activate Deal</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        @empty
            <div class="col">
                <p class="text-center text-muted">No coupons available at the moment.</p>
            </div>
        @endforelse
    </div>
</div>

<div class="row mt-5" >
    <h3 class="heading-sub">Top Categories</h3>
    @foreach ($categories as $category)
        <div class="col-6 col-lg-2 col-md-4 col-sm-6 mb-4">
            <a href="{{ route('related_category', ['title' => Str::slug($category->title)]) }}" class="categoriees" style="text-decoration: none;">
                <div class="stores home_top_stores shadow p-3 text-center" style="height: 300px;">
                    @if ($category->category_image)
                        <img src="{{ asset('uploads/categories/' . $category->category_image) }}" class="card-img-top" alt="{{ $category->title }} Image" loading="lazy">
                    @else
                        <p>No image available</p>
                    @endif


                <span class="fw-bold d-block mt-2 text-dark">{{ $category->title }}</span>

                </div>
            </a>
        </div>
    @endforeach
</div>



<br><br><br>
<div class="col-12">
  <h4 class="heading-sub">Shopping Hacks & Savings Tips & Tricks</h4>
</div>
<div class="container bg-light">

    <div class="carousel-inner bg-light">
      @foreach ($blogs->chunk(2000) as $chunk)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <div class="d-flex flex-row flex-nowrap overflow-auto">
            @foreach ($chunk as $blog)
              <div class="col-md-4 mb-3 flex-shrink-0">
                <div class="card shadow-sm h-100">
                  <img class="cardimg card-img-top img-fluid" src="{{ asset($blog->category_image) }}" alt="Blog Post Image" style="height:200px; width:450px;">
                  <div class="card-body">
                    <span class="card-title">{{ $blog->title }}</span>
                    <p class="card-text">{{ $blog->excerpt }}</p>
                          @if ($blog->slug)
                    <a href="{{ route('blog-details', ['slug' => Str::slug($blog->slug)]) }}" class="btn btn-dark stretched-link">Read More</a>
                     @else
                    <a href="javascript:;" class="btn btn-dark stretched-link"> no slug</a>
                         @endif
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


@endsection

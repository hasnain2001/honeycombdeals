@extends('master')
@section('title')
    Home
@endsection
@section('main-content')






<br>
 
<div class="container"><h1 class="fw-bold home_ts_h2">Latest Discount Codes & Promo Codes From Popular Stores</h1></div>

<div class="container">
    <div id="storeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($store->chunk(6) as $key => $chunk)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach ($chunk as $storeItem)
                            <div class="col-md-2">
                                <a href="{{ route('store_details', ['name' => Str::slug($storeItem->name)]) }}" class="text-dark text-decoration-none">
                                    <img class="img-fluid mb-2" src="{{ asset('uploads/store/' . $storeItem->store_image) }}" alt="{{ $storeItem->name }}" />
                                    <span class="fw-bold d-block text-center">{{ $storeItem->name }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>



        <button class="store-prev" type="button" data-bs-target="#storeCarousel" data-bs-slide="prev">
          <span class="store-prev-icon" aria-hidden="true"><i class="fa-solid fa-circle-left"></i></span>
          <span class="visually-hidden">Previous</span>
        </button>
        
        <button class="store-next" type="button" data-bs-target="#storeCarousel" data-bs-slide="next">
          <span class="store-next-icon" aria-hidden="true"><i class="fa-solid fa-circle-right"></i></</span>
          <span class="visually-hidden">Next</span>
        </button>
        
    </div>
</div>





<br><br><div class="container"><h2 class="fw-bold home_ts_h2">Today's Top Trending Coupons & Voucher Codes</h2></div>

<div class="container mt-4">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse ($topCoupons as $coupon)
      <div class="col">
        <div class="coupon-card card shadow-sm border-0 rounded overflow-hidden" style="width: 280px;">  
          <div class="card-body d-flex flex-column justify-content-between h-100 bg-gradient-light">  
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="card-title text-dark mb-0">{{ $coupon->store }}</h5>
              <span class="badge bg-warning text-dark rounded-pill">{{ $coupon->discount_type }}</span>  
            </div>
            <h3 class="card-text text-dark font-weight-bold mb-2">{{ $coupon->title }}</h3>
          <p class="card-text text-dark" style="font-style: italic;">{{ Str::limit($coupon->description, 70) }}</p>


             @if ($coupon->code)
                                    <button type="button" class="get" data-bs-toggle="modal" data-bs-target="#codeModal{{ $coupon->id }}" onclick="openCouponInNewTab('{{ $coupon->destination_url }}', '{{ $coupon->id }}')">
                                        Get Code
                                    </button>
                                    @else
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
                                <button type="button" class="btn btn-dark" onclick="copyCoupon('{{ $coupon->code }}')">Copy</button>
                            </div>
                        </div>
                    </div>
                </div>
    @empty
    
      <!-- Handle case where there are no coupons -->
    @endforelse
  </div>
</div>






<div class="row mt-5" style="max-width: 95rem;">
    <h2 class="fw-bold home_ts_h2 text-center">Top Categories</h2>
    @foreach ($categories as $category)
        <div class="col-12 col-lg-2 col-md-4 col-sm-12 mb-4">
            <a href="{{ url('related_category/'. Str::slug($category->title)) }}" class="text-decoration-none">
                <div class="stores home_top_stores shadow p-3 text-center" style="height: 300px;">
                    @if ($category->category_image)
                        <img src="{{ asset('uploads/categories/' . $category->category_image) }}" alt="{{ $category->title }} Image" style="width: 150px; height: 150px; object-fit: cover;">
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
  <h2 class="fw-bold home_ts_h2 text-center">Shopping Hacks & Savings Tips & Tricks</h2>
</div>
<div class="container bg-light">
 
    <div class="carousel-inner bg-light">
      @foreach ($blogs->chunk(20) as $chunk)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <div class="d-flex flex-row flex-nowrap overflow-auto">
            @foreach ($chunk as $blog)
              <div class="col-md-4 mb-3 flex-shrink-0">
                <div class="card shadow-sm h-100">
                  <img class="cardimg card-img-top img-fluid" src="{{ asset($blog->category_image) }}" alt="Blog Post Image" style="height:200px; width:450px;">
                  <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ $blog->excerpt }}</p>
                    <a href="{{ route('blog-details', ['title' => Str::slug($blog->title)]) }}" class="btn btn-dark stretched-link">Read More</a>
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
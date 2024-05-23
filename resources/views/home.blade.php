@extends('master')
@section('title')
    Home
@endsection
@section('main-content')

        <style>
      
    .coupon-card {
        width: 100%; /* Set the width of the card */
    }

        .get {
    color: #fff;
    background-color: #800080; /* Purple color */
    border-color: #800080; /* Purple color */
    border-radius: 5px; /* Border radius of 5px */
    padding: 8px 20px; /* Adjust padding to increase width */
    transition: background-color 0.3s, border-color 0.3s; /* Smooth transition */
}

.get:hover {
    background-color: #fff; /* White background on hover */
    border-color: #800080; /* Purple border color on hover */
    color: #800080; /* Text color on hover */
}
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .image-list {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 20px;
            padding-bottom: 20px;
        }
        .image-list li {
            list-style: none;
        }
        .image-item-fluid {
            border-radius: 10px;
            transition: transform 0.2s ease-in-out;
        }
        .image-item-fluid:hover {
            transform: scale(1.1);
        }
        .fw-bold {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
   .carousel-control-prev, 
    .carousel-control-next {
        font-size: 1rem !important;
        width: 40px !important;
        height: 30px !important;
        line-height: 30px !important;
        background-color:transparent;
    }

  .coupon-card {
    border-radius: 10px; /* Rounded corners */
  }
</style>


<x-slider/>


<br>
 

<h1 class="fw-bold home_ts_h2">Latest Discount Codes & Promo Codes From Popular Stores</h1>
<div class="container">
    <div id="storeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($store->chunk(5) as $key => $chunk)
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
        <button class="carousel-control-prev" type="button" data-bs-target="#storeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#storeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>





<br><br>
<h2 class="fw-bold home_ts_h2">Today's Top Trending Coupons & Voucher Codes</h2>
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







    <div class="row mt-5">
        <h2 class="fw-bold home_ts_h2">Top Categories</h2>
        @foreach ($categories as $category)
            <div class="col-12 col-lg-2 col-md-4 col-sm-12 ">
           <a href="{{ url('related_category/'. Str::slug($category->meta_tag)) }}" class="text-decoration-none">


                  <div class="stores home_top_stores shadow p-3">
                     @if ($category->category_image)
                        <img  src="{{ asset('uploads/' . $category->category_image) }}" alt="{{ $category->title }} Image"  width="100%" height="150">
                    @else
                        <p>No image available</p>
                    @endif
                      <span class="fw-bold">{{ $category->title }}</span>
                  </div>
                </a>
            </div>
        @endforeach
    </div>


<br><br><br>

<h2 class="fw-bold home_ts_h2">Shopping Hacks & Savings Tips & Tricks</h2>
<div class="container bg-light">
 
 <br><br>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner bg-light">
        @foreach ($blogs->chunk(3) as $chunk)
            <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                <div class="container bg-light">
                    <div class="row">
                        @foreach ($chunk as $blog)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="img-fluid" src="{{ asset($blog->category_image) }}" alt="Blog Post Image">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                        <p class="card-text">{{ $blog->excerpt }}</p>
                                    <a href="{{ route('blog-details', ['title' => Str::slug($blog->title)]) }}" class="btn btn-dark">Read More </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>

<script>
    function copyCoupon(code) {
        navigator.clipboard.writeText(code)
            .then(() => {
                alert("Coupon code copied!");
            })
            .catch((error) => {
                console.error("Failed to copy: ", error);
            });
    }
    
    function openCouponInNewTab(url, couponId) {
        window.open(url, '_blank');
        var modal = new bootstrap.Modal(document.getElementById('codeModal' + couponId));
        modal.show();
        
        // Automatically close the modal after 5 seconds when hovered over
        setTimeout(function() {
            modal.hide();
        }, 3000); // 5000 milliseconds = 5 seconds
    }
</script>
  <script>
    function copyCoupon(code) {
        navigator.clipboard.writeText(code)
            .then(() => {
                alert("Coupon code copied!");
            })
            .catch((error) => {
                console.error("Failed to copy: ", error);
            });
    }
    
    function openCouponInNewTab(url, couponId) {
        window.open(url, '_blank');
        var modal = new bootstrap.Modal(document.getElementById('codeModal' + couponId));
        modal.show();
        
        // Automatically close the modal after 5 seconds when hovered over
        setTimeout(function() {
            modal.hide();
        }, 5000); // 5000 milliseconds = 5 seconds
    }
</script>

  
  <script src="{{ asset('front/assets/js/java.js') }}"></script>
@endsection
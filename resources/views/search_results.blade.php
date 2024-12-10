<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')Search| HCD</title>
 <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
     <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">

    
 
</style>
</head>

<body>
<x-navbar/>
<h3>Search Results</h3>
<div class="container">
  <div class="row mt-3">
    @if (isset($stores) && $stores->isEmpty())
      <div class="col-12 text-center">
        <h1>No stores found.</h1>
        <p class="lead">Try refining your search terms with more specific keywords.</p>
      </div>
    @else
      <div class="row gx-4 gy-4">
        @foreach ($stores as $store)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow rounded-lg border border-light">
             
              @if ($store->store_image)
                <img src="{{ asset('uploads/store/' . $store->store_image) }}" class="card-img-top img-fluid" alt="{{ $store->name }}" style="max-width: 100%; height: 150px; object-fit: cover;">
              @else
                <img src="{{ asset('front/assets/images/no-image-found.jpg') }}" class="card-img-top img-fluid" alt="No Image Found" style="max-width: 100%; height: 150px; object-fit: cover;">
              @endif
              
              <div class="card-body px-3 pb-2 d-flex flex-column justify-content-between">
                <h5 class="card-title text-truncate">{{ Str::limit($store->name, 30) }}</h5>
                {{-- Optional: Add a short store description --}}
                {{-- <p class="card-text text-muted">{{ Str::limit($store->description, 70) }}</p> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>


        
  
    <br>
    
     <x-alert/>


</body>

</html>

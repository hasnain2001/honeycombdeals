<?php
header("X-Robots-Tag:index, follow");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Privacy & policy | Honeycomb Deals</title>
    <!-- Your custom meta tags go here -->
     <meta name="description" content="Find the best deals, discounts, and coupons on Honeycomb Deals. Save money on your favorite products from top brands.">

 <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

<link rel="canonical" href="https://honeycombdeals.com/privacy">

  <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">
     <link rel="icon" href="{{ asset('front/assets/images/logo-01.png') }}"  type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <style>

     .navbar{
            background-color: rgb(87, 18, 124);
        }
        
        .form-container {
            max-width: 600px; /* Adjust max-width as needed */
            width: 100%;
        }
        .form-container form {
            display: flex;
            justify-content: center; /* Center contents horizontally */
            align-items: center;
        }
        .social-icons a {
            color: white; /* Change icon color as needed */
            margin-left: 10px; /* Adjust margin between icons as needed */
            font-size: 25px; /* Adjust icon size as needed */
        }
  </style>
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
<br>   <b   <br>   <br>
<div class="container py-5 bg-light rounded shadow">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h1 class="display-4 text-center mb-4">Honeycombdeals.com Privacy Policy</h1>

      <div class="row">
        <div class="col-md-6 order-md-2">  <h2 class="h3 mt-3">Key Points</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fas fa-info-circle me-2 text-primary"></i> <strong>Information We Collect:</strong> Personal data you provide, like names, emails, and phone numbers.
            </li>
            <li class="list-group-item">
              <i class="fas fa-shield-alt me-2 text-primary"></i> <strong>Sensitive Information:</strong> We do not process sensitive data.
            </li>
            <li class="list-group-item">
              <i class="fas fa-user-friends me-2 text-primary"></i> <strong>Third-Party Information:</strong> We do not receive information from third parties.
            </li>
          </ul>
        </div>
        <div class="col-md-6 order-md-1">
          <p class="text-muted"><strong>Last Updated:</strong> April 2024</p>
          <p>This Privacy Policy explains how Honeycombdeals.com collects, uses, and protects your personal information when you use our services. By using our services, you agree to the terms outlined in this policy. If you don't agree, please refrain from using Honeycombdeals.com.</p>
        </div>
      </div>

      <h2 class="h3 mt-5">How We Use Your Information</h2>
      <p>We process your information for various purposes, including account management, security, fulfilling legal obligations, and (with your consent) personalized experiences. We may share data in specific cases, like business transfers, but prioritize user privacy.</p>

      <div class="row">
        <div class="col-md-6">
          <h2 class="h3 mt-5">Your Privacy Rights</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fas fa-gavel me-2 text-primary"></i> Depending on your location, you have specific privacy rights under the law.
            </li>
            <li class="list-group-item">
              <i class="fas fa-sign-out-alt me-2 text-primary"></i> You can opt out of marketing communications and withdraw consent.
            </li>
            <li class="list-group-item">
              <i class="fas fa-user-edit me-2 text-primary"></i> You can review, update, or delete your account information.
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h2 class="h3 mt-5">Additional Information</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fas fa-cookie-bite me-2 text-primary"></i> We use cookies, and you can manage your preferences in your browser settings.
            </li>
            <li class="list-group-item">
              <i class="fas fa-ban me-2 text-primary"></i> We don't respond to Do-Not-Track signals due to lack of a standard.
            </li>
            <li class="list-group-item">
              <i class="fas fa-star-half-alt me-2 text-primary"></i> California residents have specific privacy rights under CCPA.
            </li>
            </div>  </div>  </div>  </div>  </div>  </div>
 <br>   <b   <br>   <br>
  <x-alert/>
  <!-- Bootstrap JS and jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

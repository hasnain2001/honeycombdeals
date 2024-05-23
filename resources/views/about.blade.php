<?php
header("X-Robots-Tag:index, follow");
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us| Honeycomb Deals</title>
    <!-- Your custom meta tags go here -->
     <meta name="description" content="Find the best deals, discounts, and coupons on Honeycomb Deals. Save money on your favorite products from top brands.">

 <meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

<link rel="canonical" href="https://honeycombdeals.com">

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
        .honeycombdeals-about {  /* Style the main section */
  background-color: #f5f5f5;  /* Light background color */
}

h1, h2 {  /* Style headings */
  font-weight: bold;
  color: #333;  /* Darker text color */
}

p {  /* Style paragraphs */
  line-height: 1.5;  /* Increase line spacing for readability */
}

.container {  /* Adjust container padding on smaller screens */
  padding: 2rem 1rem;
}

@media (min-width: 768px) {
  .container {  /* Increase container padding on larger screens */
    padding: 3rem 2rem;
  }
}
  </style>
</head>
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

<main>
<section class="about">
  <div class="container bg-light">
    <h1>About Us</h1>
  </div>
</section>

<section class="welcome-section container bg-light">
  <h2>Welcome to Honeycombdeals</h2>
  <p>Your ultimate destination for savvy shoppers seeking to unlock the secret to saving money while indulging in their favorite shopping sprees. We are more than just a website; we are your trusted companion in the world of discounts, deals, promo codes, bundle offers, comparisons, and invaluable money-saving tips.</p>
</section>

<section class="vision-section container bg-light">
  <h2>Our Vision</h2>
  <p>Honeycombdeals was born out of the desire to create a haven for frugal-minded individuals, a place where saving money is not just a hobby but a way of life. Our vision is to empower you to be a smart and informed shopper, giving you the tools and resources you need to enjoy a fulfilling shopping experience without breaking the bank.</p>
</section>

<section class="offer-section container bg-light">
  <h2>What We Offer</h2>
  <ul>
    <li><strong>Discount Codes:</strong> We curate and provide a wide range of discount codes from your favorite brands and retailers.</li>
    <li><strong>Deals and Promotions:</strong> Discover the latest and hottest deals on Honeycombdeals. Our dedicated team scours the internet to find the most enticing deals and promotions, ensuring you never miss out on a great opportunity to save.</li>
    <li><strong>Bundle Offers:</strong> Save even more by exploring our bundle offers, where we bring you the best product bundles designed to maximize your savings.</li>
    <li><strong>Product Comparisons:</strong> Making informed decisions is crucial when shopping. We offer detailed product comparisons to help you choose the best option that fits your needs and budget.</li>
    <li><strong>Money-Saving Blogs:</strong> Our blog section is filled with tips, tricks, and insightful articles on frugal living, budgeting, and money-saving strategies.</li>
  </ul>
</section>

<section class="why-choose-section container bg-light">
  <h2>Why Choose Honeycombdeals?</h2>
  <ul>
    <li><strong>Trustworthy Information:</strong> We pride ourselves on providing accurate and up-to-date information.</li>
    <li><strong>Diverse Range of Deals:</strong> No matter what you're searching for, we have an array of discounts and deals to cater to your diverse shopping preferences.</li>
    <li><strong>Community and Support:</strong> Our community of frugal-minded individuals is here to offer support and share their money-saving experiences.</li>
    <li><strong>Your Frugal Shopping Partner:</strong> Honeycombdeals is not just a website; we are your partner in the quest for frugal living.</li>
  </ul>
</section>

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

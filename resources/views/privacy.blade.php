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
  <x-navbar/>
<br>
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
 <br>    <br>
  <x-alert/>

</body>
</html>

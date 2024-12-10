<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>


  <link rel="sitemap" type="application/xml" href="sitemap.xml">
  <link rel="stylesheet" href="{{ asset('front/assets/css/home.css') }}">
  <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">
<style>
           body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .error-container {
            text-align: center;
            padding: 50px 20px;
        }
        .error-container h1 {
            font-size: 100px;
            font-weight: 700;
            color: #dc3545;
        }
        .error-container p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .btn-primary {
            background-color: #dc3545;
            border: none;
        }
        .btn-primary:hover {
            background-color: #c82333;
        }
        .deals-section {
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .deals-section h2 {
            margin-bottom: 20px;
        }
        .deal-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .deal-card h3 {
            margin: 0 0 10px;
        }
</style>
</head>
<body>

    <header>

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



     </header>
<br><br>

<div class="container py-4">
    <div class="error-container">
        <h1>404—Sorry!</h1>
        <p>Sorry! We can't seem to find that page. But since you're here, check out some of our best deals below.</p>
        <a href="{{url()->current()}}" class="get">Back to Homepage</a>
    </div>

</div>
 
     <x-alert/>
</body>
</html>

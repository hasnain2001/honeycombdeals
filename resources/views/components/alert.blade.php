<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>

    <style>
   footer{
    background-color: rgb(116, 31, 161);
            color: white;
            padding: 20px 0;
   }
        .footer-section a {
            color: white;
            text-decoration: none; /* Remove underline from links */
        }
/* 
        .footer-section a:hover {
            background-color: blue;
        }
         */
        .footer-made-by a {
            color: white;
            text-decoration: none; /* Remove underline from links */
        }
    </style>
</head>
<body>

<footer  >
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <a class="navbar-brand" href="/">
          <img src="{{ asset('front/assets/images/logo-footer.jpg') }}" width="150px" alt=""> <!-- Increased the width to 180px -->
        </a>
        <div class="footer-section" style="font-size: 14px; color: #fff;">
<a href="{{ route('about') }}"><h6>About Us</h6></a>

          <p>Welcome to Honeycombdeals! Discover deals, promo codes, comparisons, and money-saving insights for savvy shoppers.</p>
        </div>
      </div>
      <div class="col-md-4 d-none d-sm-block">
        <div class="footer-section" style="font-size: 14px; color: #fff;">
          <a href="{{ route('privacy') }}"><h6>Privacy Policy</h6></a>
          <a href="{{ route('term-and-condition') }}"><h6>Terms and Conditions</h6></a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="footer-section" style="font-size: 14px; color: #fff;">
          <a href="contact"><h6>Contact Us</h6></a>
          <ul>
            <li><a href="mailto:honeycombdeal@gmail.com" class="btn">honeycombdeal@gmail.com</a></li>
            <li><a href="mailto:contact@honeycombdeals.com" class="btn">contact@honeycombdeals.com</a></li>
          </ul>
    
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-auto text-center" style="border-top: 1px solid rgba(255, 255, 255, 0.2); padding: 10px 0;">
    <div class="row">
      <div class="col-md-12">
        <div class="alpha">
          <p style="font-size: 12px;"><a href="https://alphaisoft.com" target="blank" class=" btn text-white">Developed by Alpha Ai Solution</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
  $(document).ready(function() {
    $('#searchInput').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: '{{ route("search") }}',
                dataType: 'json',
                data: {
                    query: request.term
                },
                success: function(data) {
                    response(data.stores);
                }
            });
        },
        minLength:1 // Minimum characters before autocomplete starts
    });
});
</script>
<script src="{{asset('bootstrap-5.0.2/js/bootstrap.min.js')}}"></script>er
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>
</html>

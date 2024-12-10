<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Honeycomb Deals - Best Deals and Discounts |Contct Us</title>
<!-- Your custom meta tags go here -->
<meta name="description" content="Find the best deals, discounts, and coupons on Honeycomb Deals. Save money on your favorite products from top brands.">
<meta name="keywords" content="deals, discounts, coupons, savings, affiliate marketing">
<meta name="author" content="John Doe">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.honeycombdeals.com/contact">
<link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">

</head>

<body>
<x-navbar/>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6 contact_image">
            <img src="{{ asset('front/assets/images/contact.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 wrapper">
          @if(session('success'))
                    <div class="alert alert-success alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>{{ session('success') }}</b>
                    </div>
                @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form method="post" action="{{ route('contact') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    @error('name') <div class="text-danger">{{$message}}</div> @enderror
                    <i class='fas fa-user'></i>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    @error('email') <div class="text-danger">{{$message}}</div> @enderror
                    <i class='fas fa-envelope'></i>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="website" placeholder="Enter your website">
                    @error('website') <div class="text-danger">{{$message}}</div> @enderror
                    <i class='fas fa-globe'></i>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Write your message" name="message"></textarea>
                    @error('message') <div class="text-danger">{{$message}}</div> @enderror
                    <i class="material-icons">message</i>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                    <span></span>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
    <br>
    
     <x-alert/>
<script>

$('form').on('submit', function(event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
        url: '/contact',
        method: 'POST',
        data: formData,
        success: function(response) {
            // Handle success response
            console.log(response.message);
        },
        error: function(xhr, status, error) {
            // Handle error response
            var errors = xhr.responseJSON.errors;
            $.each(errors, function(key, value) {
                // Display error message for each field
                $('#' + key + '_error').text(value);
            });
        }
    });
});

</script>
  </body>

</html>

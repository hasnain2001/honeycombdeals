<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
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
    <x-navbar/>
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

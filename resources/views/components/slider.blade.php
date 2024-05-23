<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-control-prev,
        .carousel-control-next {
            width: 100px; /* Adjust the width of the buttons */
            height: 40px; /* Adjust the height of the buttons */
            font-size: 20px; /* Adjust the font size of the icons */
            background-color: black; /* Set the background color */
            border: none;
            border-radius: 10%; /* Make the buttons circular */
            bottom: 50px; /* Adjust the distance from the bottom */
            z-index: 3;
        }

        .carousel-control-prev {
            left: 10px; /* Adjust the distance from the left */
        }

        .carousel-control-next {
            right: 10px; /* Adjust the distance from the right */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            color: white; /* Set the color of the icons */
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.7); /* Set the hover background color */
        }

        .img-fluid {
            border-radius: 8%; /* Make the buttons circular */
        }
        
    
    .carousel-item {
        background-color: transparent;
    }
    </style>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>

    <div class="carousel-inner custom-carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('front/assets/images/CPjEFG.png')}}"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('front/assets/images/ZvPght.png')}}"  class="d-block w-100"   alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('front/assets/images/BGRMCa.png')}}"  class="d-block w-100"   alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('front/assets/images/tiSsDA.png')}}" class="d-block w-100"   alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('front/assets/images/slider.png')}}" class="d-block w-100"   alt="...">
        </div>
        
    </div>

    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

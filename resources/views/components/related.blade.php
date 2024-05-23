<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, CSS links, etc. -->
</head>
<body>
    <!-- Navbar, header, etc. -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container">
        <h1>Related Blogs</h1>
        <div class="row">
            @foreach ($relatedBlogs as $blog)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset($blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ $blog->excerpt }}</p>
                            <a href="{{ route('blog-details', ['title' => urlencode($blog->title)]) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


    <!-- Footer, scripts, etc. -->
</body>
</html>

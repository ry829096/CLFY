@extends('layout')

@section('title', $blog->title)
@section('styles')
<style>
    .blog-details {
    text-align: center; /* Center-align the content */
}

.blog-image-container {
    margin: 20px auto; /* Center the image */
    border: 1px solid #ccc; /* Add a border to the container */
    display: inline-block; /* Display the container as inline-block */
}

.blog-image {
    display: block; /* Ensure the image takes up full width of container */
    margin: 0 auto; /* Center the image within the container */
    max-width: 100%; /* Ensure the image does not exceed container width */
}

.blog-description {
    margin-top: 20px; /* Add space between image and text */
    text-align: justify; /* Justify the text */
    max-width: 800px; /* Set a maximum width for the text */
    margin-left: auto; /* Center the text */
    margin-right: auto; /* Center the text */
}
h2 {
    color: #564130;
    font-size: 24px; /* Adjust the font size as needed for readability */
    line-height: 1.5; /* Set the line height to improve readability */
    margin-bottom: 10px; /* Add some space below the heading */
}

/* Media query for smaller devices (e.g., mobile phones) */
@media (max-width: 768px) {
    h2 {
        font-size: 20px; /* Adjust font size for smaller screens */
    }
}

</style>
@endsection
@section('content')

<div class="blog-details">
    <h2>-------------------Blogs Section-----------------------</h2> <br>
    <div class="blog-header">
        <h2>{{ $blog->title }}</h2>
        <p><strong>Author:</strong> {{ $blog->author_name }}</p>
        <p><strong>Published Date:</strong> {{ \DateTime::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('M d, Y') }}</p>
    </div>
    <div class="blog-image-container">
        <img src="{{ asset($blog->image) }}" alt="Blog Image" class="blog-image">
    </div>
    <div class="blog-description">
    {!! $blog->description !!}
    </div>
</div>

@endsection

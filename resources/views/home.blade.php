@extends('layout')
@section('title', 'Home')

@section('content')

<div class="banner">
            <div class="banner-container">
                <div class="slideshow">
                    <img src="images/men.png" alt="Banner 1" class="banner-img">
                    <!-- <img src="images/user.png" alt="Banner 2" class="banner-img"> -->
                    <!-- <img src="images/clenfaylogo.png" alt="Banner 3" class="banner-img"> -->
                    <!-- Add more banner images as needed -->
                    <div class="banner-text">
                    <div class="category-1"> Luxury Skincare Meets<br>
                        Gender-Inclusive <br>
                        Beauty</div>
                        <div class="luxury-skincare-meets-gender-inclusive-beauty">
                            BROWSE OUR PRODUCTS
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="image-text-section">
            <div class="image-container1">
                <img src="images/face-cream-10.png" alt="Image Description" class="section-image">
            </div>
            <div class="text-container1">
                <h2 class="section-title"> Vitamin E Day Cream
                    <br />
                    with Grapeseeds</h2>
                <p class="section-text">    Locks in moisture for intense hydration, combats acne and reduces blemishes.
                </p>
                <?php
               $product = (object)[
                'id' => 7
            ];
                ?>
                <a href="{{ route('product.details', ['id' => $product->id]) }}" class="shop-now-button">Shop Now</a>
            </div>
        </section>
        
        <div class="frame-22">
            <div class="our-bestsellers">Our Bestsellers</div>
            <div class="product-row">
                <div class="product-item">
                    <img src="images/bestseller-1-body-butter-10.png" alt="COCOSHEA BODY BUTTER" class="product-image">
                    <div class="product-details">
                        <div class="product-name">COCOSHEA BODY BUTTER</div>
                        <div class="product-description">Calms skin and repairs moisture barrier for long-lasting hydration.</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="images/body-wash-bestseller0.png" alt="WITCH HAZEL BODY WASH" class="product-image">
                    <div class="product-details">
                        <div class="product-name">WITCH HAZEL BODY WASH</div>
                        <div class="product-description">The mild pH eases inflammation and soothes sensitive skin.</div>
                    </div>
                </div>
                <div class="product-item">
                    <img src="images/face-serum-bestseller0.png" alt="VITAMIN C FACE SERUM" class="product-image">
                    <div class="product-details">
                        <div class="product-name">VITAMIN C FACE SERUM</div>
                        <div class="product-description">Advanced formula which brightens skin tone and reduces ageing.</div>
                    </div>
                </div>
            </div>
        </div>
        <!--  
            -------------category products----
        -->
        @foreach($data as $key => $value)
                <div class="frame-22">
                    <div class="our-bestsellers">{{$category[$key]}}</div>
                    <div class="product-row">
                    @foreach($value as $details)
                        <div class="product-item">
                            <img src="{{$details->thumbnail_img}}" alt="COCOSHEA BODY BUTTER" class="product-image">
                            <div class="product-details">
                                <div class="product-name">{{$details->name}}</div>
                                <div class="product-description">{{$details->description}}</div>
                            </div>
                        </div>
                        @if($loop->iteration % 3 == 0) <!-- Check if the current iteration is a multiple of 3 -->
                        </div><div class="product-row"> <!-- Close current row and start a new one -->
                        @endif
                    @endforeach
                    </div> <!-- Close the last product row -->
                </div>
                @endforeach


         <!--  
            -------------category products----
        -->
        
        <div class="new-section">
            <div class="text-container">
                <div class="ionic-facial-steamer">Ionic Facial Steamer</div>
                <div class="spa-level-rejuvenation-at-home-produces-tiny-ionic-steam-particles-which-penetrate-the-skin-10-x-more-than-regular-steam">
                    Spa Level Rejuvenation at home. <br> <br>
                    Produces tiny ionic steam particles which <br>  penetrate the skin 10x more than regular  <br/>steam.
                </div>
                <div class="cta2">
                    <div class="rectangle-1"></div>
                    <div class="call-to-action2">SHOP NOW</div>
                </div>
            </div>
            <div class="image-container">
                <div class="frame-4">
                    <div class="rectangle-2"></div>
                    <img class="steamer-1" src="images/steamer-10.png" />
                </div>
            </div>
        </div>
    

        <div class="heading-container">
            <div class="heading-container">
                <h2>Our Blogs</h2>
            </div>
            
            <div class="card-container">
            @foreach($blogs as $blog)
            <div class="card">
                <a href="{{ route('blog.show', ['id' => $blog->id]) }}"> <!-- Update the anchor tag -->
                    <img src="{{ $blog->image }}" alt="Card Image" class="card-image">
                    <div class="card-content">
                        <h4 class="blog-title">{{ $blog->blog_title }}</h4> <!-- Update the blog title variable -->
                    </div>
                </a>
            </div>
            @endforeach
               
        
        
        <div class="info-box">
            <label for="email-input">Subscribe to our newsletter for regular updates about<br><span>Offers, Coupons & more</span></label>
            <form id="subscribe-form">
                <input type="email" id="email-input" placeholder="Enter your email address" required>
                <button type="submit" id="subscribe-btn">Subscribe</button>
            </form>
        </div>


@endsection

@section('js')

@endsection
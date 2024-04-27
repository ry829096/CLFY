@extends('layout')
@section('title', 'Product')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" style="height: 70vh; right: 40px;"> <!-- Increased height to 70% of viewport height -->
                <img src="{{asset('images/face-cream-10.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- Card content here -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3" style="height: 30vh; right: 40px;"> <!-- 15% of viewport height -->
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- Card content here -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3" style="height: 30vh; right: 40px;"> <!-- 15% of viewport height -->
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- Card content here -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" style="height: 30vh; right: 40px;"> <!-- 10% of viewport height -->
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- Card content here -->
                </div>
            </div>
        </div>
    </div>

    <div class="pro">
        <div class="col-md-12">
            <div class="contains">
                <div class="right-side">
                    <h1>Vitamin E Day Cream with Grapeseeds</h1>
                    <h5>skincare</h5>
                    <h4>Combats acne and reduces blemishes</h4>
                    <p>Unveil your skin's natural radiance with our Vitamin E Day Cream. Infused with hydrating hyaluronic acid and antioxidant-rich Grape Seed Oil, it restores suppleness and protects against aging. Rejuvenating vitamins tighten and firm for a radiant complexion.</p>
                    <h3>MRP Rs</h3>
                    <h6>Quantity</h6>
                    <div class="quantity-buttons">
                        <button class="upward-arrow">&#9650;</button>
                        <div class="box"></div>
                        <button class="downward-arrow">&#9660;</button>
                    </div>
                    <?php
               $product = (object)[
                'id' => 7
            ];
                ?>
                    <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="checkout-button">ADD TO CART</button>
                    </form>
                    <br/>
                    <br/>
                    <br/>
                    <h3>How does it help?</h3>
                    <li>Has a soothing and cooling effect on the skin.</li>
                    <li>Has a soothing and cooling effect on the skin.</li>
                    <li>Has a soothing and cooling effect on the skin.</li>
                    <li>Has a soothing and cooling effect on the skin.</li>
                    <br/>
                    <hr class="thin-line">
                    <br/>
                    <h3 style="color: #564130;">How to use</h3>
                    <div class="vertical-line">
                      <div class="dot start-dot">
                        <div class="step">Step 1</div>
                      </div> <!-- Start dot -->
                      <!-- Vertical line -->
                      <div class="line"></div>
                      <div class="dot center-dot">Step 2</div> <!-- Center dot -->
                      <div class="dot end-dot">Step 3</div> <!-- End dot -->
                  </div>
                </div>
            </div>
        </div>
    </div>
       
    </div>
    
    <div class=".review">
      <h2 style="margin-left: 70px;">Reviews </h2>
      <div class="rating" style="margin-left: 70px;">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>
    
    <div class="containers">
      <div class="cards">
        <h4>Name</h4>
        <h5>Date</h5>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        </p>
        <p>
          Fusce a ligula ac arcu hendrerit efficitur. 
        </p>
        <p>
          Proin auctor leo sit amet ex 
        </p>
      </div>
    
      <div class="cards">
        <h4>Name</h4>
        <h5>Date</h5>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adi
        </p>
        <p>
          Fusce a ligula ac arcu hendrerit efficitur. D
        </p>
        <p>
          Proin auctor leo sit amet ex ull nec a velit.
        </p>
      </div>
    
      <div class="cards">
        <h4>Name</h4>
        <h5>Date</h5>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adi
        </p>
        <p>
          Fusce a ligula ac arcu hendrerit eff
        </p>
        <p>
          Proin auctoiquet elementum nec a velit.
        </p>
      </div>
    
      <div class="cards">
        <h4>Name</h4>
        <h5>Date</h5>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consecteimentum velit tincidunt.
        </p>
        <p>
          Fusce a ligula ac arcu hendrerit efficitur. Duis 
        </p>
        <p>
          Proin auctor leo sit amet ex ullamcorper, necet elementum nec a velit.
        </p>
      </div>
    </div>
    
    <div class="containerss">
      <h1 style="color: #564130;">More For You</h1>
      <div class="cardss-slider">
        <div class="cardss">
          <img src="{{asset('images/bestseller-1-body-butter-10.png')}}" alt="Cardss 1">
          <h3>COCOSHEA BODY BUTTER</h3>
          <p>Calm skin and repairs moisture barrier for long lasting hydration.</p>
        </div>
        <div class="cardss">
          <img src="{{asset('images/body-wash-bestseller0.png')}}" alt="Cardss 2">
          <h3>WITCH HAZEL BODY WASH</h3>
          <p>The mild pH eases inflammation and soothes sensitive skin.</p>
        </div>
        <div class="cardss">
          <img src="{{asset('images/face-serum-bestseller0.png')}}" alt="Cardss 3">
          <h3>VITAMIN C FACE SERUM</h3>
          <p>Advanced formula which brightens skin tone and reduces ageing.</p>
        </div>
      </div>
    </div>
    @endsection

@section('js')

@endsection
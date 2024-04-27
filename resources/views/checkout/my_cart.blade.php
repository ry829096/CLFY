@extends('layout')
@section('title', 'Product')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/mycart.css')}}">

   
@endsection
@section('content')

<div class="contains">
        <div class="card" style="width: 600px;">
            <div class="card-body">
                <div class="left-side">
                    <img src="{{asset('images/beard-oil-10.png')}}" alt="Product Image" style="width: 400px;">
                </div>
                <!-- Additional content for the card -->
            </div>
        </div>
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
            <br>
            <form method="POST" action="{{ route('checkout.submit') }}">
                @csrf
               
                <button class="checkout-button" type="submit">Proceed to Checkout</button>
            </form>
        </div>
    </div>
    
    <div class="container">
        <h1 style="color: #564130;">More For You</h1>
        <div class="card-slider">
          <div class="card">
            <img src="{{asset('images/bestseller-1-body-butter-10.png')}}" alt="Card 1">
            <h2>COCOSHEA BODY BUTTER</h2>
            <p>Calm skin and repairs moisture barrier for long lasting hydration.</p>
          </div>
          <div class="card">
            <img src="{{asset('images/body-wash-bestseller0.png')}}" alt="Card 2">
            <h2>WITCH HAZEL BODY WASH</h2>
            <p>The mild pH eases inflammation and soothes sensitive skin.</p>
          </div>
          <div class="card">
            <img src="{{asset('images/face-serum-bestseller0.png')}}" alt="Card 3">
            <h2>VITAMIN C FACE SERUM</h2>
            <p>Advanced formula which brightens skin tone and reduces ageing.</p>
          </div>
        </div>
    </div>



@endsection

@section('js')

@endsection
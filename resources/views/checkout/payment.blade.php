@extends('layout')
@section('title', 'Product')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
  /* CSS for progress bar */
  .progress-line {
    display: flex;
    align-items: center;
  }
  
  .progress-dot {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #ccc;
    margin-right: 20px;
  }
  
  .progress-line-between {
    flex: 1;
    height: 3px;
    background-color: #ccc;
  }
  
  .progress-dot.active {
    background-color: #564130;
  }
  
  /* Other styles */
  .section {
    display: none;
  }
  
  .active {
    display: block;
  }
  </style>
   
@endsection
@section('content')



<h2 style="margin-left: 100px; color:#564130;">Order Summary</h2>
  

  <div class="container">
    <div class="left-cards">
      <!-- Placeholder for left card content -->
      <div class="left-card1">
       
        <div class="small-card" style="width: 150px; background-color: gray; height: 150px;"></div>
        <div class="small-card" style="width: 150px; height: 150px; background-color: gray;"></div>
         
        <div class="left-card1-text">
          <p><h4>Vitamin E Day Cream with </br>Grapeseeds</h4></p>
        
        <p>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price:Rs__</p>
        </br>
        <p><h4>Vitamin E Day Cream with </br>Grapeseeds</h4></p>
        
        <p>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price:Rs__</p>
        </div>
      </div>
     
      <div class="left-card2">
        <h4 style="color: #564130;">Sub Total &nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Rs___</h4>
        <h4 style="color: #564130;">Shipping </h4>
        <br />
        <h4 style="color: #564130;"><b>Total</b>&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Rs___</h4>
      </div>
      <div class="left-card3">
        <h6 style="color: #564130;">% Apply Coupons</h6>
      </div>
    </div>

    <div class="right-card">
      <div class="progress-line">
        <div class="progress-dot active"></div>
        <div class="progress-line-between"></div>
        <div class="progress-dot"></div>
        <div class="progress-line-between"></div>
        <div class="progress-dot"></div>
      </div>
    
      <div class="progress-text">
        <p>Contact</p>
        <p>Address</p>
        <p>Payment</p>
      </div>
    
      <div class="otp-sent" style="margin-left: 60px; margin-top: 30px;">
        Enter your Mobile Number
        <div class="enter-number" style="display: flex; justify-items: center; margin-top: 0px;margin-left: 100px">
          <input type="text" onkeypress="return /[0-9\.]/i.test(event.key)" maxlength="10" id="mobileNumber" style="width: 230px; font-size:18px; margin-left: -90px; height: 40px; border-radius: 12px; background-color: #d9d9d9;margin-top: 30px; ">
        </div>
        <div class="remember-me" style="margin-left: 100px; margin-top: 10px;">
          <input type="checkbox" id="rememberMe" style="margin-left: -90px;">
          <label for="rememberMe" style="color: #564130; font-size: small; margin-left: 10px;margin-top: 10px;">Send me order updates and offers</label>
        </div>
        <div class="continue-btn">
          <button onclick="showOTPCard()" style="background-color: #564130; padding-top: 5px; padding-bottom: 5px; padding-right: 10px; padding-left: 10px; border-radius: 5px; color: white; width: 130px; height: 50px; margin-top:-5px; margin-left: 50px;">GET OTP</button>
        </div>
      </div>
    
      <div class="otp-card" style="display: none;">
        <!-- <div class="otp-sent" style="margin-left: 120px;">OTP sent to
          <br>+91 845948584</div> -->
          <div class="enter-otp">Enter OTP</div>
          <div class="enter-number" style="display: flex; justify-items: center; margin-top: 15px;margin-left: 100px">
            <input type="text" id="otp1" style="width: 40px; margin-right: 5px; height: 40px; border-radius: 12px; background-color: #979c97; " maxlength="1" onkeyup="moveToNext(this, 'otp2')">
            <input type="text" id="otp2" style="width: 40px; margin-right: 5px; height: 40px; border-radius: 12px;background-color: #979c97;" maxlength="1" onkeyup="moveToNext(this, 'otp3')">
            <input type="text" id="otp3" style="width: 40px; margin-right: 5px; height: 40px; border-radius: 12px;background-color: #979c97;" maxlength="1" onkeyup="moveToNext(this, 'otp4')">
            <input type="text" id="otp4" style="width: 40px; margin-right: 5px; height: 40px; border-radius: 12px;background-color: #979c97;" maxlength="1">
          </div>
          
          <script>
            function moveToNext(input, nextFieldID) {
              if (input.value.length === input.maxLength) {
                document.getElementById(nextFieldID).focus();
              }
            }
          </script>
          
        <div class="continue-btn">
          <button onclick="showAddressCard()" style="background-color: #564130; padding-top: 5px; padding-bottom: 5px; padding-right: 10px; padding-left: 10px; border-radius: 5px; color: white; font-weight: bold; width: 100px; height: 50px; margin-top: 15px; margin-left: 8px;">Continue</button>
        </div>
      </div>
    
      <div class="address-card" style="display: none;">
        <div class="login-container">
          <form action="#">
            <div class="input-row">
              <input type="text" placeholder="First Name" required>
              <input type="text" placeholder="Last Name" required>
            </div>
    
            <input type="text" placeholder="Address" required style="width: 350px;">
    
            <div class="input-roww">
              <input type="text" placeholder="State" required>
              <input type="text" placeholder="City" required>
              <input type="text" placeholder="Pincode" required>
            </div>
    
            <input type="submit" value="CONTINUE TO PAYMENT">
          </form>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
<script>
    const progressDots = document.querySelectorAll('.progress-dot');
    const sections = document.querySelectorAll('.section');
    
    function showOTPCard() {
      // Validate mobile number here
      const mobileNumber = document.getElementById('mobileNumber').value;
      if (!mobileNumber || mobileNumber.length !== 10 || isNaN(mobileNumber)) {
        alert('Please enter a valid mobile number.');
        return;
      }
    
      // Update progress bar
      
      // Hide current section and show OTP card
      document.querySelector('.otp-sent').innerHTML = `OTP sent to <br>+91 ${mobileNumber}`;
      document.querySelector('.otp-card').style.display = 'block';
      document.querySelector('.otp-sent').style.display = 'block';
      document.querySelector('.otp-sent').style.marginLeft = '95px';
      document.querySelector('.otp-sent').style.marginTop = '0px';
      document.querySelector('.enter-otp').style.marginLeft = '120px';
      document.querySelector('.enter-number').style.marginLeft = '100px';
      document.querySelector('.continue-btn').style.marginLeft = '120px';
      document.querySelector('.otp-sent').style.marginTop = '15px';
      
    }
    
    function showAddressCard() {
      // Validate OTP here
      const otp1 = document.getElementById('otp1').value;
      const otp2 = document.getElementById('otp2').value;
      const otp3 = document.getElementById('otp3').value;
      const otp4 = document.getElementById('otp4').value;
      const otp = otp1 + otp2 + otp3 + otp4;
      if (!otp || otp.length !== 4 || isNaN(otp)) {
        alert('Please enter a valid OTP.');
        return;
      }
      
      // Update progress bar
      progressDots[1].classList.add('active');
      // progressDots[2].classList.add('active');
    
      // Hide OTP card and show address card
      document.querySelector('.otp-card').style.display = 'none';
      document.querySelector('.address-card').style.display = 'block';
      document.querySelector('.otp-sent').innerHTML = ''; // Remove the message

    }
    
    // You can add similar functions for further steps if needed
    </script>
@endsection
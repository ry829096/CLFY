
    @extends('sidebar')

    @section('title', 'Dashboard')


    @section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    * {
    font-family: "Poppins-Medium", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    position: relative; /* Add position relative */
}

/* Sidebar Styles */
.sidebar {
    background-color: white;
    color: black;
    padding: 20px;
    width: 200px;
    border: 2px solid #ccc;
    overflow: hidden;
}

.sidebar h2 {
    margin-top: 0;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar li {
    margin-bottom: 10px;
}

.sidebar a {
    text-decoration: none;
    color: black;
}       

.sidebar a:hover {
    color: #564130;
}

.sidebar ul li {
    padding-bottom: 5px;
    margin-bottom: 20px;
}

.sidebar ul li .dropdown {
    display: none;
    list-style: none;
    margin-left: 20px;
}

.sidebar ul li:hover .dropdown {
    display: block;
}

/* Content Styles */
.content {
    padding: 20px;
    flex-grow: 1; /* Allow content to grow to fill remaining space */
}

/* Cards Styles */
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    /* gap: 500px; */
    margin-bottom: 20px;
}

.card1,
.card2 {
    background-color: white;
    border: 1px solid #ccc;
    box-shadow: black;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    height: 80px;
    
    width: 100%; /* Adjust width to 100% */
}

.cardss {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.card3 {
    height: 600px;
    background-color: white;
    border-radius: 10px;
    border: 1px solid #ccc;
    padding: 20px;
    width: 650px; /* Adjust width to 100% */
    display: flex;
   
}


.column1 {
    flex: 1;
    margin-left: -150px;
    margin-top: 30px;
    padding-right: 20px;
    font-size: 15px;
   
}
.ion{
    
    width: 100px;
}
.ion span {
    white-space: nowrap;
    margin-top:8px ;
}
.ios{
    display: flex;
    gap: 10px;
}
.ios1{
    display: flex;
    gap: 10px;
}
.ios2{
    display: flex;
    gap: 10px;
}
.ios3{
    display: flex;
    gap: 10px;
}
.ios4{
    display: flex;
    gap: 10px;
}
.column2 {
    flex: 1;
    white-space: nowrap;
    margin-left: 210px;
    margin-top: 33px;
    padding-right: -40px;
   
}
.ions{
    margin-left: 20px;
    margin-top: 5px;
}
.column3 {
    flex: 1;
    margin-left: 110px;
    margin-top: 33px;
    padding-right: 20px;
   
}

.card4 {
    background-color: white;
    border-radius: 10px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    height: 300px;
    width: 330px;
    margin-left: 332px;
}
.column4{
    flex: 1;
    font-size: 15px;
    margin-left: 12px;

}
.ioss1{
    display:flex;
    gap: 10px;
}
.ioss2{
    display:flex;
    gap: 10px;
}
.column5{
    flex: 1;
    margin-top: 10px;
}
.io{
    display: flex;
    margin-top: 10px;
}

.card5 {
    margin-top: 320px; /* Adjust margin for spacing */
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 10px;
   margin-left: -6px;
    height: 280px;
    width: 340px /* Adjust width to 100% */
}
.column6{
   margin-left: 30px; 
   
}
.city1{
   display: flex;
    justify-items: center;
    gap: 190px;
}
.city2{
    display: flex;
     justify-items: center;
     gap: 190px;
 }
 .city3{
    display: flex;
     justify-items: center;
     gap: 190px;
 }
 .city4{
    display: flex;
     justify-items: center;
     gap: 190px;
 }
 .city5{
    display: flex;
     justify-items: center;
     gap: 190px;
     
 }


/* Responsive Styles */
@media screen and (max-width: 768px) {
    .cards{
        gap: 10px;
    }
    .card3 {
        height: auto; /* Change height to auto for smaller screens */
        width: auto;
    }
    .column1 {
        flex: 1;
        margin-left: -80px;
        margin-top: 30px;
        padding-right: 20px;  
    }
    .ion{
    width: 10px;
        
    }
    .ion span {
       
        margin-top:8px ;
        inline-size: 150px;
        white-space: normal;

        overflow-wrap: break-word;
    }
    .ios{
        display: flex;
        gap: 5px;
    }
    .ios1{
        display: flex;
        gap: 10px;
    }
    .ios2{
        display: flex;
        gap: 10px;
    }
    .ios3{
        display: flex;
        gap: 10px;
    }
    .ios4{
        display: flex;
        gap: 10px;
    }
    .column2 {
        flex: 1;
        white-space: nowrap;
        margin-left: 80px;
        margin-top: 33px; 
    }
    .column3 {
        flex: 1;
        margin-left: 60px;
        margin-top: 33px;
        padding-right: 20px;
       
    }
    

    .card4,
    .card5 {
        margin-left: 0; /* Reset margin-left for smaller screens */
        width: auto;
    }

    .card5 {
        margin-top: 20px; /* Adjust margin for spacing */
        width: auto;
    }
    .city1{
        display: flex;
         justify-items: center;
         gap: auto;
     }
     .city2{
         display: flex;
          justify-items: center;
          gap: auto;
      }
      .city3{
         display: flex;
          justify-items: center;
          gap: auto;
      }
      .city4{
         display: flex;
          justify-items: center;
          gap: auto;
      }
      .city5{
         display: flex;
          justify-items: center;
          gap: auto;
      }
     
}


/* Responsive Styles */
@media screen and (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        max-width: none;
    }
    
}

</style>
@endsection




@section('content')

<div class="container">
        
        <div class="content">
            <p>Welcome! Admin</p>
            <p>Here are your Insights</p>
            <div class="cards">
                <div class="card1" style="display: flex; align-items: center;">
                    <img src="./images/shoppingbag.png" alt="Order Image" style="height: 40px;">
                    <div style="margin-left: 30px;color: #564130;">
                      <p>Total Sales</p>
                    </br>
                        <h3>30,000</h3>
                        
                    </div>
                </div>
                <div class="card2" style="display: flex; align-items: center;margin-left: 10px; ">
                    <img src="./images/shoppingbag.png" alt="Order Image" style="height: 40px;">
                    <div style="margin-left: 30px; color: #564130;
                    ">
                        <p>Total Visitors</p>
                    </br>
                        <h3>34,000</h3>
                        
                    </div>
                </div>
            </div>
            <div class="cardss">
                <div class="card3">
                    <h3>Product Overview</h3>
                   
                        <div class="column1">
                            <h4>Name</h4>
                        </br>
                            <div class="ion">
                                <div class="ios">
                            <img src="./images/face-cream-10.png" alt="Product Image" style="height: 50px ;">
                           <span>Vitamin E Day Cream with Grapeseeds</span>
                        </div>
                        </br></br> 
                        <div class="ios1">
                            <img src="./images/face-cream-10.png" alt="Product Image" style="height: 50px ;">
                           <span>Vitamin E Day Cream with Grapeseeds</span>
                        </div> 
                        </br></br>
                        <div class="ios2">
                            <img src="./images/face-cream-10.png" alt="Product Image" style="height: 50px ;">
                           <span>Vitamin E Day Cream with Grapeseeds</span>
                        </div> 
                        </br></br>
                        <div class="ios3">
                            <img src="./images/face-cream-10.png" alt="Product Image" style="height: 50px ;">
                           <span>Vitamin E Day Cream with Grapeseeds</span>
                        </div> 
                        </br></br>
                        <div class="ios4">
                            <img src="./images/face-cream-10.png" alt="Product Image" style="height: 50px ;">
                           <span>Vitamin E Day Cream with Grapeseeds</span>
                        </div> 
                            </div>
                    </div>
                        <div class="column2">
                            <h4>Product ID</h4>
                        </br>
                         <div class="ions">
                            <p># 312</p>
                        </br></br></br></br>
                            <p># 312</p>
                        </br></br></br></br>
                            <p># 312</p>
                        </br></br></br></br>
                            <p># 312</p>
                        </br></br></br></br>
                            <p># 312</p>
                        </div>
                    </div>
                        <div class="column3">
                            <h4>Price</h4>
                        </br>
                            <p>Rs 312</p>
                    </br></br></br></br>
                            <p>Rs 312</p>
                        </br></br></br></br>
                            <p>Rs 312</p>
                        </br></br></br></br>
                            <p>Rs 312</p>
                        </br></br></br></br>
                            <p>Rs 312</p>
                        </br></br></br></br>
                        </div>
                    
                </div>
                
                <div class="card4">
                    <h3 style="margin-left: 12px;
                    margin-top: 10px;
                    margin-bottom: 10px;">Best Sellers</h3>
                    <div class="column4">
                        <h4>Name</h4>
                    </br>
                        <div class="ion">
                            <div class="ioss1">
                                <img src="./images/face-cream-10.png" alt="Product Image" style="height: 50px ;">
                               <span>Vitamin E Day Cream with Grapeseeds</span>
                            </div>
                    </br></br></br></br> 
                    <div class="ioss2">
                        <img src="./images/face-cream-10.png" alt="Product Image" style="height: 50px ;">
                       <span>Vitamin E Day Cream with Grapeseeds</span>
                    </div>
                    </br></br></br></br>
                   
                        </div>
                    </div>
                    <div class="column5">
                        <h4>Product ID</h4>
                    </br>
                     <div class="io">
                        <p># 312</p>
                    </br></br></br></br>
                        <p># 312</p>
                    </br></br></br></br>
                        <p># 312</p>
                     </div>
                   
                  
                </div>
                </div>
                <div class="card5" >
                    <h3 style="    margin-top: 10px;
                    margin-left: 10px; margin-bottom: 10px;;">Top Locations</h3>
                    
                    <div class="column6">
                        <h4>Cities</h4>
                    </br>
                     <div class="city1">
                        <p>Bangalore</p>
                        <p>82%</p>
                     </div>
                    </br>
                    <div class="city2">
                        <p>Mumbai</p>
                        <p>80%</p>
                    </div>
                    </br>
                    <div class="city3">
                        <p>Mumbai</p>
                        <p>80%</p>
                    </div>
                    </br>
                    <div class="city4">
                        <p>Mumbai</p>
                        <p>80%</p>
                    </div>
                    </br>
                    <div class="city5">
                        <p>Mumbai</p>
                        <p>80%</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
@endsection

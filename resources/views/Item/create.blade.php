@extends('sidebar')

@section('title', 'Dashboard')


@section('styles')
<style>
    
    * {
    font-family: "Poppins-Medium", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #564130;
}

.container {
    display: flex;
    flex-direction:row;
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
    height: 800px;
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
.big-card {
    background-color: white;
    color: black;
    padding: 20px;
    width: 500px; /* Adjust width according to sidebar width */
    border: 2px solid #ccc;
    margin-left: 0px; /* Adjust margin to create space between sidebar and big card */
    height: 730px; /* Adjust height as needed */
    margin-top: 70px;
    border-radius: 15px;
}

.big-card label {
    margin-bottom: 5px;
}

.big-card input[type="text"],
.big-card input[type="number"],
.big-card select {
    width: 100%;
    padding: 12px;
    margin-bottom: 10px;
    border: 1px solid gray;
    background-color: #ccc;
    border-radius: 5px;
}

.big-card input[type="checkbox"] {
    margin-right: 5px;
}

.big-card input[type="submit"] {
    padding: 15px;
    background-color: #564130;
    color: gray;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.big-card input[type="submit"]:hover {
    background-color: #564130;
}
.category-price-row {
    display: flex;
}

.category-field,
.price-field {
    flex: 1;
    margin-right: 10px;
}

.price-field {
    margin-right: 0;
}
.image-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 10px;
}

.image-card {
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
}

.image-card img {
    width: 100%;
    height: auto;
    display: block;
}

.image-card input[type="radio"] {
    display: none;
}

.image-card input[type="radio"]:checked + label {
    border: 2px solid #564130;
}

.image-card label {
    display: block;
    cursor: pointer;
    transition: border-color 0.3s ease;
}

.image-card:hover label {
    border: 2px solid #564130;
}
.center {
    display: flex;
    justify-content: flex-start; /* Align text to the left */
    align-items: center;
    margin-bottom: 20px;
    margin-top: -850px;
    margin-left: 150px; /* Adjust left margin */
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        max-width: none;
        height: auto;
    }
    .big-card {
        width: 100%; /* Take full width on smaller screens */
        margin-left: 0; /* No margin on smaller screens */
    }
}
</style>
@endsection
@section('content')
<div class="container">
    
    <div class="center">
        <h3 style="margin-top: 140px;">Add a Product</h3>
    </div>

    <div class="big-card">
        
        <!-- Content for the big card goes here -->
        <form action="{{route('Item.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="productName">Product Title</label><br>
            <input type="text" id="productName" name="productName"><br><br>

            <label for="productLabels">Labels</label><br>
            <input type="text" id="productLabels" name="productLabels"><br><br>

            <label for="description">Description</label><br>
            <input type="text" id="productLabels" name="description"><br><br>

            
            
            <div class="category-price-row">
                
                <div class="category-field">
                <input type="file" id="productImage" name="productImage[]" multiple><br><br>
                 </div>

                <div class="category-field">
                <label for="description">Quantity</label><br>
            <input type="text" id="productLabels" onkeypress="return /[0-9\.]/i.test(event.key)" min ="0" name="quantity"><br><br></div>
            </div>
            
            <div class="category-price-row">
            <div class="category-field">

            <label for="productTags">Tags:</label><br> 
            <input type="text" id="productTags" name="productTags"><br><br>
            </div>
            <div class="category-field">
                <label for="productCategory">Category:</label><br>
                <select id="productCategory" name="productCategory">
                <option value="">Select Category</option>

                    @foreach($category as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                    <!-- Add more options as needed -->
                </select><br><br>
            </div>
 
            </div>
            <div class="category-price-row">
                
                <div class="category-field">
                    <label for="productPrice">Actual Price:</label><br>
                    <input type="number" id="productPrice" name="actual_productPrice"><br><br>
                </div>
                <div class="category-field">
                    <label for="productPrice">Discounted Price:</label><br>
                    <input type="number" id="productPrice" name="discount_productPrice"><br><br>
                </div>
            </div>

            <input type="checkbox" id="rememberMe" name="rememberMe">
            <label for="rememberMe">Publish On Site</label><br><br>

            <input type="submit" value="Submit Item" style="color: white;">
        </form>
    </div>
    <div class="slider" id="slider">
        <div class="slides">
            <!-- Selected image will be displayed here -->
        </div>
    </div>
</div>

  @endsection
  @section('scripts')
<script>
    // Function to update the selected image in the slider
    function updateSlider(imageUrl) {
        const slide = document.createElement('div');
        slide.classList.add('slide');
        slide.innerHTML = `<img src="${imageUrl}" alt="Selected Image">`;
        document.querySelector('.slides').appendChild(slide);
        document.querySelectorAll('.slide').forEach(slide => {
            slide.style.display = 'none';
        });
        slide.style.display = 'block';
    }

    // Event listener for radio buttons
    document.querySelectorAll('input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', () => {
            const imageUrl = document.querySelector(`label[for="${radio.id}"] img`).src;
            updateSlider(imageUrl);
        });
    });

    // Event listener for form submission
    document.getElementById('productForm').addEventListener('submit', (event) => {
        event.preventDefault();
        // Handle form submission here
    });
</script>
@endsection
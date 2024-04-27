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

.navbar {
    background-color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.logo-img {
    height: 90px;
}

.nav-links {
    list-style-type: none;
    display: flex;
    margin: 0;
    padding: 0;
    margin-left: 850px;
}

.nav-links li {
    margin-right: 40px;
}

.nav-links li a {
    text-transform: uppercase;
    font-size: 16px;
    text-decoration: none;
    color: #000;
}

.user-icon img {
    height: 30px;
    margin-right: 20px;
}

.menu-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.menu-toggle span {
    display: block;
    width: 25px;
    height: 3px;
    background-color: #666;
    margin-bottom: 5px;
}

@media (max-width: 768px) {
    .navbar {
        flex-direction: row;
        justify-content: flex-start;
        padding: 10px;
    }

    .menu-toggle {
        display: flex;
    }

    .logo {
        margin-right: auto;
    }

    .signup-button {
        margin-right: -100px;
    }

    .user-icon {
        margin-left: auto;
    }

    .nav-links {
        display: none;
    }

    .nav-links.show {
        display: flex;
        flex-direction: column;
        margin-left: 0;
    }

    .sidebar-card {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        width: 200px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        z-index: 1000;
        height: auto;
    }

    .sidebar-card.show {
        display: block;
    }

    .sidebar-card .nav-links {
        list-style-type: none;
        padding: 0;
    }

    .sidebar-card .nav-links li {
        margin-bottom: 30px;
    }

    .sidebar-card .nav-links li a {
        text-decoration: none;
        color: #000;
        font-size: 16px;
    }
}

.container {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.sidebar {
    background-color: white;
    color: black;
    padding: 20px;
    width: 220px;
    border: 2px solid #ccc;
    overflow: hidden;
    height: 800px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-left: -120px;
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

.content {
    flex: 1;
    padding: 20px;
}

.heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.buttons {
    display: flex;
    margin-right: 50px;
}

.create-button {
    margin-left: 20px;
    background-color: #564130;
    color: white;
    height: 40px;
    width: 140px;
    border-radius: 15px;
    font-size: 15px;
}

.export-button {
    margin-left: 20px;
    background-color: white;
    height: 40px;
    width: 130px;
    border-radius: 15px;
}

.big-card {
    background-color: white;
    color: black;
    padding: 20px;
    width: 100%;
    border: 2px solid #ccc;
    border-radius: 15px;
    margin-top: 20px;
    position: relative;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    height: auto;
}

.search-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.search-bar input[type="text"] {
    flex: 2;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px;
    background-color: #ccc;
}

.search-bar button {
    background-color: white;
    color: gray;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

.last-added-button {
    margin-right: 0;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.category-button {
    background-color: #564130;
    color: gray;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    margin-right: 10px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: gray;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.button-row {
    display: flex;
    gap: 8px;
    margin-top: 10px;
}

.custom-btn {
    background-color: white !important;
    color: #000!important;
}

.card-img-top {
    border-radius: 10px;
    height: 200px;
    object-fit: cover;
    margin-top: 10px;
}

@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .content {
        width: 100%;
    }

    .big-card {
        width: auto;
    }

    .search-bar {
        flex-direction: column;
        margin-bottom: 10px;
    }

    .search-bar input[type="text"] {
        width: 50%;
        margin-right: 0;
        margin-bottom: 10px;
        display: flex;
    }

    .search-bar button {
        width: auto;
    }
}
@media (max-width: 576px) {
    .nav-links {
        display: none; /* Hide navigation links */
    }

    .nav-links.show {
        display: flex; /* Show navigation links when toggled */
        flex-direction: column;
        position: absolute;
        top: 50px;
        left: 0;
        right: 0;
        background-color: white;
        z-index: 999;
        border: 1px solid #ccc;
        padding: 10px;
    }

    .nav-links.show li {
        margin-bottom: 10px;
    }

    .nav-links.show li:last-child {
        margin-bottom: 0;
    }

    .nav-links.show li a {
        color: #000;
    }

    .menu-toggle {
        display: flex; /* Show hamburger menu */
    }

    .container {
        flex-direction: column; /* Stack elements vertically */
    }

    .sidebar {
        width: 100%; /* Full width on small screens */
        margin-left: 0; /* Remove margin */
        margin-bottom: 20px; /* Add space below */
    }

    .big-card {
        border-radius: 0; /* Remove border radius */
    }

    .search-bar {
        flex-direction: column; /* Stack search bar vertically */
        margin-bottom: 10px; /* Add space below */
    }

    .search-bar input[type="text"] {
        width: 100%; /* Full width */
        margin-right: 0; /* Remove margin */
    }

    .search-bar button {
        width: 100%; /* Full width */
    }
}

</style>
@endsection
@section('content')


@endsection
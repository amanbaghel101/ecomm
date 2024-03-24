<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }
        .bg-gradient-nav {
        background: linear-gradient(to right, lightgoldenrodyellow, pink);  Example: dark blue to dark green */
        color: #ffffff; /* Ensures text is white for readability */
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-gradient-nav">
        <div class="container-fluid">
            <div class="zoom">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="logo image" width="90" height="44" class="d-inline-block align-text-top">
            Shopping
            </a>
        </div>
        <div class="search">
			<form action="#">
				<input type="text" placeholder="Search Courses" name="search">
				<button>
					<i class="fa fa-search" style="font-size: 18px;"></i>
				</button>
			</form>
		</div>
        <div>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-link">Link</button>
        </div>
        </div>
    </nav>
    
    <div class="container">
    <div class="P">
        <p>Wedding Collection </p>
        <a href="/indexx">
        <button type="button" class="btn btn-primary">Visit All Collection</button></a>
        
    </div>
        <div class="box">
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="P">
        <p>Wedding Collection </p>
        <button type="button" class="btn btn-primary">Visit All Collection</button>
        </div>

        <div class="box">
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
            <div class="button-overlay">
                <img src="{{ asset('images/logo.png') }}" alt="nature-image">
                <button>Add To Cart</button>
            </div>
        </div>
        
    </div>



<script src="script.js"></script>
</body>
<script>
    const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');
const links = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
    //Toggle Nav
    navLinks.classList.toggle('nav-active');
    
    //Animate Links
    links.forEach((link, index) => {
        if (link.style.animation) {
            link.style.animation = '';
        } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
        }
    });
    
    //Burger Animation
    burger.classList.toggle('toggle');
});

import { Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });

</script>
</html>

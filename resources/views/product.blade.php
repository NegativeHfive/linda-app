<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $product->name }} Details</title>
    <link rel="stylesheet" href="{{asset('shop.css')}}">
</head>
<body>
    <div class="navbar">
        <h2>negative one</h2>

        <div class="navbarlinks">
            <div class="homelink">
                <ion-icon name="bed-outline"></ion-icon>
                <a href="{{url('/home')}}">Home</a>
            </div>
            <div class="aboutuslink">
                <ion-icon name="reader-outline"></ion-icon>
                <a href="{{url('/about')}}">About Us</a>
            </div>
            <div class="loginlink">
                <ion-icon name="person-outline"></ion-icon>
                <a href="{{url('/')}}">Log Out</a>
            </div>
        </div>
    </div>


    <div class="productView">
        <h1>{{ $product->name }}</h1>
    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="300">
    @endif
    <p>Description: {{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <a href="{{ url('/shop') }}">Back to Shop</a>
    </div>

    <div class="footer">
        <div class="iconsdiv">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-youtube"></ion-icon>
            <ion-icon name="logo-firefox"></ion-icon>
        </div>
        <p>
            Crafted with care for every shine. Join<br> our community and let your beauty inspire the world.<br> Stay connected for new collections, tips, and exclusive offers!<br>
        </p>
        <hr>
        <h4>&copy;2025 Godrine Manu </h4>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.155.0/build/three.min.js"></script>
    <script  src="{{asset("/js/app.js")}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>
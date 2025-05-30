<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('home.css')}}">
</head>
<body>
    
    <div class="navbar">
        <h2>negative one</h2>

        <div class="navbarlinks">
            <div class="homelink">
                <ion-icon name="bed-outline"></ion-icon>
                <a href="#">Home</a>
            </div>
            <div class="aboutuslink">
                <ion-icon name="reader-outline"></ion-icon>
                <a href="#">About Us</a>
            </div>
            <div class="loginlink">
                <ion-icon name="person-outline"></ion-icon>
                <a href="#">Log Out</a>
            </div>
        </div>
    </div>

    <div class="bodytext">
        <div class="textleft">
            <h1>Soft, <span>Glowly</span><br> Skin For<br> Days.</h1>
            <p>Our Products are suitable for a wide range of skin tones,
                types<br> and skin types.
            </p>
            <a href="#">Get Started</a>
        </div>

        <img class='blackWoman' src="{{asset('images/blackwoman.png')}}" alt="">
    </div>

    <div class="icons">

        <div class="iconslogo">
            <ion-icon name="cash"></ion-icon>
            <p>Affortable</p>
        </div>

        <div class="iconslogo">
            <ion-icon name="rose"></ion-icon>
            <p>Sustainable</p>
        </div>

        <div class="iconslogo">
            <ion-icon name="walk"></ion-icon>
            <p>All Skin Types</p>
        </div>

        <div class="iconslogo">
            <ion-icon name="wallet"></ion-icon>
            <p>Safe</p>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script  src="{{asset("/js/app.js")}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
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
            <a href="#">Our Shop</a>
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

    <div class="products">
        <h1>Soft Products</h1>

        <div class="productsAnim">

            <div class="polishes">
                <img class='polishesImg' src="{{asset('images/polishes.jpg')}}" alt="">
                <h3>Nail Polish</h3>
                <p>$ 130.30</p>
            </div>

            <div class="shinyGem">
                <img class="polishesImg" src="{{asset("images/shinyGem.jpg")}}" alt="">
                <h3>Shiny Gem Polish</h3>
                <p>$ 20.00</p>
            </div>

            <div class="diamondGem">
                <img class="polishesImg" src="{{asset("images/diamondGem.jpg")}}" alt="">
                <h3>Diamond Gem Polish</h3>
                <p>$ 120.00</p>
            </div>

            <div class="ancientGem">
                <img class="polishesImg" src="{{asset("images/ancientGem.jpg")}}" alt="">
                <h3>Ancient Nail Polish</h3>
                <p>$ 99.00</p>
            </div>
        </div>
    </div>

    <div class="ourPartners">
        <div class="partnerBody">
            <div class="partnerBodyText">
                <h1 class=''>Spring Collection</h1>
                <p class=''>Discover our vibrant Spring Collection, inspired<br> by blooming flowers and fresh beginnings. Enjoy new shades and gentle<br> formulas designed to make your nails shine all season long.</p>
                <a href="#">About Us</a>
            </div>
            <img class='partnerImage' src="{{asset ("images/treenail.png")}}" alt="">
        </div>
    </div>

    <div class="ourReviews">
        <h1>Read what our costumers say</h1>
        <div class="reviewsDiv">
            <div class="costumerreview">
                <h1>""</h1>
                <p>"I absolutely love these products! My nails have never looked better and the colors are gorgeous. I really highly recommend it!!"</p>
                <img src="{{asset("images/profileco.png")}}"alt="">
                <h3>Susan Mozambique</h3>
            </div>

            <div class="costumerreview">
                <h1>""</h1>
                <p>"These nail polishes are amazing! The colors last so long and my friends always compliment my nails. I’ll definitely buy again!"</p>
                <img src="{{asset("images/profileco.png")}}"alt="">
                <h3>Lisa Sandra Gonzalez</h3>
            </div>

            <div class="costumerreview">
                <h1>""</h1>
                <p>"Fast shipping and beautiful packaging! The polish goes on smoothly and lasts for days. I’m so happy with my lovely purchase!"</p>
                <img src="{{asset("images/profileco.png")}}"alt="">
                <h3>Yolando Barkoo</h3>
            </div>

        </div>
    </div>

    <div class="layer">
        <h1>OUR GOAL</h1>
    </div>

    <div class="geometryDiv">
        <div class="goemetrytext">
           <h2>What we want to achieve in 3035</h2>
           <p>
            By 3035, we aim to revolutionize nail care with 100% sustainable, cruelty-free products, empower communities through beauty education, and inspire confidence in every individual who uses our brand.<br><br>
            We are committed to reducing our environmental footprint, supporting local artisans, and continuously innovating to bring you the safest and most beautiful nail products. Our vision is to create a global community where beauty and sustainability go hand in hand, making a positive impact for generations to come.
            </p>
        </div>
        <div class="geometry"></div>
    </div>

    <div class="feminine">

        <div class="feminineText">
            <p>GET YOUR SHINE ON</p>
            <h1>Shining Feminine</h1>
            <p>Celebrate your unique beauty and confidence with every brush stroke. Our products are designed to let your inner light shine, empowering you to express your true, radiant self.</p><br><br>

            <h2>Elegance in Every Stroke</h2>
            <p>Experience the perfect blend of elegance and style with every application. Our formulas glide on smoothly, delivering a flawless finish that enhances your natural grace and sophistication.</p>
        </div>

        <img class='femininefoto' src="{{asset('images/prettywoman.png')}}" alt="">

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
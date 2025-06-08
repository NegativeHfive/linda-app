<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="{{asset('about.css')}}">
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


    <div class="information">

        <div class="leftlayer">
            <img src="{{asset('images/pfpanime.jpg')}}" alt="">
            <h1>Godrine Manu</h1>
            <hr>
            <h3>AMSTERDAM</h3>
            <h3>7741 DN</h3>
            <h3>+31789267671</h3>
            <h3>godrinesarf04@gmail.com</h3>
        </div>

        <div class="rightlayer">
            <h1>About me</h1>
            <h3>Junior Software Developer</h3>
            <p>
                I am currently studying Software Development. I like programming . I love to make website<br> templates and other stuff from code.I have a background in construction, where I worked with my hands. Now, I'm learning to code. It's like solving a puzzle, but with code. I really enjoy solving problems using computers. I'm still learning, but I'm eager to continue with programming
            </p><br>
            <h3>Education</h3>
            <p>2023 - Software Development Level 4</p>
            <p>2022 - Construction Level 1-2</p><br><br>

            <h3>Work</h3>
            <p>Shelf stacker - Albert Heijn</p><br><br>

            <h3>Skills</h3>
            <div class="iconsInfo">
                <ion-icon name="logo-javascript"></ion-icon>
                <ion-icon name="logo-html5"></ion-icon>
                <ion-icon name="logo-css3"></ion-icon>
                <ion-icon name="logo-docker"></ion-icon>
                <ion-icon name="logo-python"></ion-icon>
                <ion-icon name="logo-nodejs"></ion-icon>
            </div>



        </div>

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding A product</title>
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

    <h1>Add a Product</h1>

    <div class="divForm">

        <form action="{{url('/add')}}" method="POST" enctype="multipart/form-data">>
            @csrf
            <label for="name">Name</label><br>
            <input type="text" id='name' name='name' required><br><br>
            <label for="description">Description</label><br>
            <input type="text" id='description' name='description'><br><br>
            <label for="price">Price</label><br>
            <input type="number" id='price' name='price'><br><br>
            <label for="image"></label><br>
            <input type="file" id="image" name="image"><br><br>

            <button type="submit"> Add Product</button>
        </form>

    </div>

 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.155.0/build/three.min.js"></script>
    <script  src="{{asset("/js/app.js")}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
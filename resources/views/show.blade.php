<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
    <link rel="stylesheet" href="{{asset('login.css')}}">
</head>
<body>

    <div class="divForm">
        <form action="{{url('/register')}}" method="POST" class='form'>
            <h1>Sign Up</h1>
            @csrf
            <label for="username">Username:</label><br>
            <input type="text" id='username' name='username' required><br><br>
    
            <label for="password">Password:</label><br>
            <input type="password" id='password' name='password' required><br><br>
    
            <button type="submit" class="logIn">Sign Up</button><br><br>
            <a href="{{url('/')}}">Registered? Click Here</a>
    
        </form>
    </div>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.155.0/build/three.min.js"></script>
    <script  src="{{asset("/js/app.js")}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
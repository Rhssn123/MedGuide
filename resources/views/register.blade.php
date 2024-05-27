<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website MedGuide</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="/bootstrap/css/style3.css">

</head>

<body>
    
<!-- header section starts -->

<header class="header">

    <a href="{{ url('/') }}" class="logo">
        <img src="/bootstrap/images/logo.png" alt="">
    </a>

    <!--<nav class="navbar">
        <a href="{{ url('/') }}" class="front">Home</a>
        <a href="{{ url('/') }}" class="front">About</a>
        <a href="{{ url('/') }}" class="front">Products</a>        
        <a href="{{ url('/') }}" class="front">Contact</a>
        <a href="{{ url('/') }}" class="front">Blogs</a>
        <div class="login-container">
            <a href="{{ url('/login') }}" class="login">LOGIN</a>
        </div>     
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-map-marker-alt header-icon" id="location-btn">  Jl. Mulyorejo Tengah No.36  </div>   
        <div class="fas fa-bars" id="menu-btn"></div>           
    </div>

    <div class="location-address" id="location-address"></div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search" ></label>
    </div>-->
</header>


<section class="home" id="home">
    <div class="content">
        <div class="row">
                    <div class="text-center">
                        <h1 class="fw-bold">Register</h1>
                    </div>
                        <div class="text-left", style="box-align: ">
                            <form action="{{ url('/halUser')}}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label class="form-label" for="">Pengguna</label>
                                    <input class="form-control" value="{{ old('pengguna')}}" type="text" name="pengguna" id="" >
                                    <span class="text-danger">
                                        @error('pengguna')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Alamat</label>
                                    <input class="form-control" value="{{ old('alamat')}}" type="text" name="alamat" id="" >
                                    <span class="text-danger">
                                        @error('alamat')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Telp</label>
                                    <input class="form-control" value="{{ old('telp')}}" type="text" name="telp" id="" required>
                                    <span class="text-danger">
                                        @error('telp')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Jenis Kelamin</label>
                                    <select class="form-control" value="{{ old('jenis-kelamin')}}" name="jeniskelamin" id="" required>
                                        <option value="I">L</option>
                                        <option value="P">P</option>
                                    </select>
                                    <span>
                                        @error('jeniskelamin')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Email</label>
                                    <input class="form-control" value="{{ old('email')}}" type="text" name="email" id="" required>
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Password</label>
                                    <input class="form-control" value="{{ old('password')}}" type="password" name="password" id="" required>
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>  
            </div>    
        </div>
    </div>
</section>

</body>
</html>
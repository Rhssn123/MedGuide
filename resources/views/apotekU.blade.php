<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="/bootstrap/css/styleAdminUser.css">
    
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img src="/bootstrap/images/logo.png" alt="">
                        <span class="litle">MedGuide</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/dashU')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="litle">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/saveU')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </span>
                        <span class="litle">Save Medicine</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/apotekU')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="location-outline"></ion-icon>
                        </span>
                        <span class="litle">Nearest Pharmacy</span>
                    </a>
                </li> 
                <li>                  
                    <a href="{{ url('/signoutU')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="litle">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <img src="/bootstrap/images/profile-admin.jpg" alt="">
                </div>
            </div>

            <div class="dashboard-content">
                <h2>Apotek Terdekat</h2>
                <div class="pharmacy-container">
                    <div class="pharmacy-item">
                        <img src="/bootstrap/images/pharmacy1.jpg" alt="Pharmacy 1">
                        <h3>Apotek K24 Jojoran</h3>
                        <p>Address  : Jl. Raya Menur No.14</p>
                        <p>Phone    : (031) 99445611</p>
                    </div>
                    <div class="pharmacy-item">
                        <img src="/bootstrap/images/pharmacy2.jpg" alt="Pharmacy 2">
                        <h3>Apotek Aaliya Farma</h3>
                        <p>Address  : Jl. Gebang Lor No.65A</p>
                        <p>Phone    : (031) 5944008</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

<script src="/bootstrap/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
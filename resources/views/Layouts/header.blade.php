<html>

<head>
    <title>Book Store | MegaOne</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />

    <!--owl Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="bi bi-caret-up-fill"></span></button>

<header>
    <nav class="navbar navbar-expand-lg navbar-light" id="mynav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{URL::asset('images/logo.png')}}" width="90px" height="57px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto " id="mymenu">
                    <li class="nav-item mx-3 ">
                        <a class="nav-link active" aria-current="page" href="{{url('/home')}}"><strong>HOME</strong></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" aria-current="page" href="{{url('/about')}}"><strong>ABOUT US</strong></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" aria-current="page" href="{{url('/cart')}}"><strong>MY CART</strong></a>
                    </li>
                    <!-- <li class="nav-item mx-3 dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>BOOKS</strong>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>

                    <li class="nav-item mx-3 dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>E-BOOKS</strong>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>

                    <li class="nav-item mx-3 dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>PAGES</strong>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li> -->
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/contact')}}"><strong>CONTACT</strong></a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="#"><span class="bi-search" style="font-size:20px;"></span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{url('/cart')}}"><strong><span class="bi-cart" style="font-size:20px;;"></span></strong></a>
                    </li>
                    <!-- <li class="nav-item mr-3">
                      <a class="nav-link" href="#"><strong><span class="bi-list" style="font-size:20px;;"></span></strong></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>

</body>
</html>

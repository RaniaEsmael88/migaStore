@include('Layouts.header')

<!--carousel section-->
<section>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{URL::asset('images/Book1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>the words will be written here</h3>
                    <p class="caption-desc">
                        Lorem ipsum dolor sit amet, consectetur, eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                    </p>
                    <button type="button" class="btn btn-dark"> Click here</button>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{URL::asset('images/Book2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>the words will be written here</h3>
                    <p class="caption-desc">
                        Lorem ipsum dolor sit amet, consectetur, eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                    </p>
                    <button type="button" class="btn btn-dark"> Click here</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{URL::asset('images/Book3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>the words will be written here</h3>
                    <p class="caption-desc">
                        Lorem ipsum dolor sit amet, consectetur, eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                    </p>
                    <button type="button" class="btn btn-dark"> Click here</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!--buttons section-->
<section>
    <div class="container">
        <div class="content">
            <div style="margin-top:50px;"></div>
            <div class="row g-4">
                <div class=" col-xl-3 col-md-6 col-12" >
                    <div class="div-btn margin-auto">
                        <div class="row row-m-p">
                            <div class="col-2 col-m-p">
                                <span class="bi-truck" style="font-size:35px;"></span>
                            </div>
                            <div class="col-8">
                                <h6 style="font-size:15px;"> Free Shipping Items</h6>
                                <p><small>order over 500$</small></p>
                            </div>
                        </div>
                        <!--<button type="button" class="btn btn-outline-success" style="width:250px;height:100px"> <span class="bi-truck" style="font-size:40px;"></span> Free Shipping Items<br> <small>order over 500$</small></button>-->
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12" >
                    <div class="div-btn margin-auto">
                        <div class="row row-m-p">
                            <div class="col-2 col-m-p">
                                <span class="bi-recycle" style="font-size:35px;"></span>
                            </div>
                            <div class="col-8">
                                <h6 style="font-size:15px;"> Money Back Guarentee</h6>
                                <p><small>100% Money Back</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12" >
                    <div class="div-btn margin-auto">
                        <div class="row row-m-p">
                            <div class="col-2 col-m-p">
                                <span class="bi-piggy-bank" style="font-size:35px;"></span>
                            </div>
                            <div class="col-8">
                                <h6 style="font-size:15px;"> Cash On Delivery</h6>
                                <p><small>100% Money Back</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12 " >
                    <div class="div-btn margin-auto">
                        <div class="row row-m-p">
                            <div class="col-2 col-m-p">
                                <span class="bi-hand-thumbs-up" style="font-size:35px;"></span>
                            </div>
                            <div class="col-8">
                                <h6 style="font-size:15px;"> Help & Support</h6>
                                <p><small>call us on +0112237734</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--popular product-->
<section>
    <div >
        <div style="margin-top: 50px;"></div>
        <div class="container">
            <div class="popular-product">
                <h2>Our Popular Product</h2>
                <p style="padding:10px 0px;">Aenean imperdiet. Etiam ultricies nisi vel augue men tuhi spectrum alle me.</p>
                <ul class="ul-style">
                    <li><a href="#" class="btn-style">All</a></li>
                    <li><a href="#" class="btn-style">Classic</a></li>
                    <li><a href="#" class="btn-style">Fantasy</a></li>
                    <li><a href="#" class="btn-style">Historical Fiction</a></li>
                </ul>

                <div class="div-sliders">
                    <div class="row">

                        <div class="col-xl-4 col-md-6 col-s-12">
                            <div class="slider-item">
                                <div id="carouselExampleFade1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">

                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img class="img-fluid" src="{{URL::asset('images/s-book-2.jpg')}}" class="img-fluid">
                                        </div>
                                        <div class="carousel-item">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html">
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img class="img-fluid" src="{{URL::asset('images/s-book-2-1.jpg')}}">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden" >Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>
                            <div class="booktitle-price">
                                <a href="#" class="booktitle-price">The Last Stand</a>
                                <p>$550.00</p>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-s-12">
                            <div class="slider-item">
                                <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-3.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" data-toggle="lightbox" data-gallery="example-gallery">
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-3-1.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="booktitle-price">
                                <a href="#" class="booktitle-price">The Last Stand</a>
                                <p>$550.00</p>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-s-12">
                            <div class="slider-item">
                                <div id="carouselExampleFade3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-1.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-1-1.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="booktitle-price">
                                <a href="#" class="booktitle-price">The Last Stand</a>
                                <p>$550.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-s-12">
                            <div class="slider-item">
                                <div id="carouselExampleFade4" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-4.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-4-1.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade4" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade4" data-bs-slide="next">
                                        <span class="carousel-control-next-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="booktitle-price">
                                <a href="#" class="booktitle-price">The Last Stand</a>
                                <p>$550.00</p>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-s-12">
                            <div class="slider-item">
                                <div id="carouselExampleFade5" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-5.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-5-1.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade5" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade5" data-bs-slide="next">
                                        <span class="carousel-control-next-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="booktitle-price">
                                <a href="#" class="booktitle-price">The Last Stand</a>
                                <p>$550.00</p>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-s-12">
                            <div class="slider-item">
                                <div id="carouselExampleFade6" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-6.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <div class="center-design">
                                                <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                                    <span class="bi bi-cart-fill cart-icon-style"></span>
                                                </a>
                                            </div>
                                            <img src="{{URL::asset('images/s-book-6-1.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade6" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade6" data-bs-slide="next">
                                        <span class="carousel-control-next-icon icon-style" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="booktitle-price">
                                <a href="#" class="booktitle-price">The Last Stand</a>
                                <p>$550.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--about section-->
<section class="last-sec">
    <div class="container-fluid">
        <div class="img-content " >
            <div class="last-sec-item div-size">
                <h3>The words will be written</h3>
                <p class="caption-desc">
                    Lorem ipsum dolor sit amet, consectetur, eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation
                </p>
                <a href="file:///C:/Users/D11/Desktop/MG/AboutUs.html"><button type="button" class="btn btn-dark"> About Us</button></a>
            </div>

        </div>
    </div>
</section>

<!--Owl Slider-->
<div class="container" style="margin-top:100px;">
    <h2 style="margin-bottom: 15px;">Published Books</h2>
    <div class="row">
        <div class="col-12 m-auto">
            <div class="owl-carousel owl-theme">
                <div class="item mb-3">
                    <div class="card border-0 shadow">
                        <div class="center-design">
                            <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                <span class="bi bi-cart-fill cart-icon-style"></span>
                            </a>
                        </div>
                        <img src="{{URL::asset('images/os-l1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h6>Life With Money</h6>
                                <h6><small>$850.00</small></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card border-0 shadow">
                        <div class="center-design">
                            <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                <span class="bi bi-cart-fill cart-icon-style"></span>
                            </a>
                        </div>
                        <img src="{{URL::asset('images/os-l10.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h6>Life Is Elsewhere</h6>
                                <h6><small>$950.00</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 shadow">
                        <div class="center-design">
                            <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                <span class="bi bi-cart-fill cart-icon-style"></span>
                            </a>
                        </div>
                        <img src="{{URL::asset('images/os-l11.jpg')}}" alt="" class="card-img-top">                      <div class="card-body">
                            <div class="card-title text-center">
                                <h6>The Road</h6>
                                <h6><small>$550.00</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 shadow">
                        <div class="center-design">
                            <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                <span class="bi bi-cart-fill cart-icon-style"></span>
                            </a>
                        </div>
                        <img src="{{URL::asset('images/os-l12.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h6>Love In The Time</h6>
                                <h6><small>$750.00</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 shadow">
                        <div class="center-design">
                            <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                <span class="bi bi-cart-fill cart-icon-style"></span>
                            </a>
                        </div>
                        <img src="{{URL::asset('images/os-l13.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h6>The Joke</h6>
                                <h6><small>$850.00</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 shadow">
                        <div class="center-design">
                            <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                <span class="bi bi-cart-fill cart-icon-style"></span>
                            </a>
                        </div>
                        <img src="{{URL::asset('images/os-l8.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h6>Never Let Me Go </h6>
                                <h6><small>$650.00</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 shadow">
                        <div class="center-design">
                            <a href="file:///C:/Users/D11/Desktop/MG/ShopCartPage.html" >
                                <span class="bi bi-cart-fill cart-icon-style"></span>
                            </a>
                        </div>
                        <img src="{{URL::asset('images/os-l9.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h6>The Last World</h6>
                                <h6><small>$680.00</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('Layouts.footer')


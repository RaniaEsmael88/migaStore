<html>
<head>
</head>
<body>

<!--footer section-->
<footer class="footer-mycode">
    <div class="container">
        <div class="row fot">
            <div class="col-md-6 pr-md-5 AbouUs">
                <a href="#" class="footer-site-logo d-block mb-4">
                    <h3>About Us</h3>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quasi perferendis ratione perspiciatis
                    accusantium.</p>
                <p class="footer-btn"><a href="{{url('/contact')}}" class="btn btn-outline-light">Contact Us</a></p>
            </div>

            <div class="col-md-6">
                <h4>Information</h4>
                <ul class="list-unstyled nav-links">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="{{url('/about')}}">About Us</a></li>
                    <li><a href="{{url('/cart')}}">My Cart</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
                <ul class="social list-unstyled">
                    <h4> Social Media</h4>
                    <li><a href="#"><span class="bi bi-facebook"></span></a></li>
                    <li><a href="#"><span class="bi bi-twitter"></span></a></li>
                    <li><a href="#"><span class="bi bi-instagram"></span></a></li>
                    <li><a href="#"><span class="bi-linkedin"></span></a></li>
                </ul>
            </div>
            <!-- <div class="col-md">
              <h4>Account Info</h4>
              <ul class="list-unstyled nav-links">
                <li><a href="#">Clients</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Journal</a></li>
              </ul>
            </div>
            <div class="col-md">
              <h4>Our Portfolio</h4>
              <ul class="list-unstyled nav-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Partners</a></li>
              </ul>
            </div> -->

        </div>
        <div class="row ">
            <div class="col-12 text-center hide-item">
                <div class="copyright mt-5 pt-5 copyright-space">
                    <p><small> 2019-2020 © All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<script src="{{URL::asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
</body>

</html>

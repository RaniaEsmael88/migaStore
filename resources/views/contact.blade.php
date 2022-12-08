@include('Layouts.header')

<section>
    <div class="map-size container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.7675773229025!2d-71.45429469999999!3d43.004228399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e24f3ffa099db5%3A0x12ff1e3e948eff5e!2s201%20Oak%20St%20%2327%2C%20Manchester%2C%20NH%2003104%2C%20USA!5e0!3m2!1sen!2seg!4v1668085751073!5m2!1sen!2seg" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<section class="top-space">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 col-12">
                <div>
                    <p>
                    <h6 id="contact-us">CONTACT US</h6>
                    <h4 style="font-weight:600;margin:20px 0px">Get In Touch</h4>
                    <p style="font-size: 18px;">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h5 style="font-weight:600; font-size: 19px;margin:20px 0px"> United States</h5>
                        <ul class="ul-contact-style">
                            <li><i class="bi bi-phone"><span>+(34) 609 33 17 54</span></i></li>
                            <li><i class="bi bi-envelope"><span>email@website.com</span></i></li>
                            <li><i class="bi bi-geo-alt-fill"><span>201 Oak Street 27 Manchester, USA</span></i></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-12">
                        <h5 style="font-weight:600;font-size: 19px;margin:20px 0px"> Australia</h5>
                        <ul class="ul-contact-style">
                            <li><i class="bi bi-phone"><span>+(34) 609 33 17 54</span></i></li>
                            <li><i class="bi bi-envelope"><span>email@website.com</span></i></li>
                            <li><i class="bi bi-geo-alt-fill"><span>201 Oak Street 27 Manchester, USA</span></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12"><!-- form-->

                <div class="div-contact-form-style">
                    <h4 style="font-weight: 600 ;">Leave Message</h4>
                    <form action="/action_page.php">
                        <div class="row">
                            <div class="col-6 mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="First Name" name="email">
                            </div>
                            <div class="col-6 mb-3 mt-3">
                                <input type="password" class="form-control" id="pwd" placeholder="Last Name" name="pswd">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-6 mb-3 mt-3">
                                <input type="password" class="form-control" id="pwd" placeholder="Subject" name="pswd">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3 mt-3">
                                <textarea  rows="8" cols="50" class="form-control" id="textarea" >Message</textarea>
                            </div>
                        </div>


                        <button type="submit" class="btn submit-btn-style">SUBMIT</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
</section>

@include('Layouts.footer')

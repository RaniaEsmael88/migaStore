@include('Layouts.header')
<!--banner section-->

<section>
    <div class="container-fluid">
        <div class="banner">

        </div>
    </div>
</section>

<!-- Check out Section-->
<section>
    <div class="container top-space">
        <div class="get-Ready-title">
            <h1> Get Ready For Checkout? </h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident consectetur adipisicing elit quam reiciendis voluptatum?</p>
        </div>
        <!--table-->
        <div >
            <table class="cart">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-3">
                                <a href="#" class="link-book-pic"><img src="{{URL::asset('images/s-book-1-1.jpg')}}" width="70px" height="70px"></a>
                            </div>
                            <div class="col-9 div-cart-shop" style=" text-align: left;">
                                <a href="#" class="shop-cart-title"> LOVE DOES </a>
                                <p class="shop-cart-p">We offer the most complete in the country</p>
                            </div>
                        </div>
                    </td>
                    <td><p class="td-font">$130.00</p></td>
                    <td>
                        <input type="number" class="cart-form" >
                    </td>
                    <td><p class="td-font">$136.00</p></td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-3">
                                <a href="#" class="link-book-pic"><img src="{{URL::asset('images/s-book-2-1.jpg')}}" width="70px" height="70px"></a>
                            </div>
                            <div class="col-9 div-cart-shop"  style="text-align: left;" >
                                <a href="#" class="shop-cart-title"> LOVE DOES </a>
                                <p class="shop-cart-p">We offer the most complete in the country</p>
                            </div>
                        </div>
                    </td>
                    <td><p class="td-font">$130.00</p></td>
                    <td>
                        <input type="number" class="cart-form" >
                    </td>
                    <td><p class="td-font">$136.00</p></td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-3">
                                <a href="#"class="link-book-pic"><img src="{{URL::asset('images/s-book-3-1.jpg')}}" width="70px" height="70px"></a>
                            </div>
                            <div class="col-9 div-cart-shop"  style="text-align: left;" >
                                <a href="#" class="shop-cart-title"> LOVE DOES </a>
                                <p class="shop-cart-p">We offer the most complete in the country</p>
                            </div>
                        </div>
                    </td>
                    <td><p class="td-font">$130.00</p></td>
                    <td>
                        <input type="number" class="cart-form" >
                    </td>
                    <td><p class="td-font">$136.00</p></td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td style="text-align: left;">
                        <button class="btn submit-btn-style">UPDATE</button>
                        <button class="btn submit-btn-style-2">CHECK OUT</button>
                    </td>
                </tr>
            </table>
        </div>

        <div class="top-space">
            <div class="row">
                <div class="col-6">
                    <div class="cart-div-box-style">

                    </div>
                </div>
                <div class="col-6">
                    <div class="cart-div-box-style">

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('Layouts.footer')

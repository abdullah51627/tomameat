




@extends('front.layout.app')

@section("content")




    <!-- banner section start start-->
    <div class="inner-slider-wrapper float_left">
        <div class="container">
            <div class="inner-caption">
                <h4>Checkout</h4>
                <img src="{{asset('front/images/title.png')}}" alt="img">
            </div>
            <ol class="breadcrumb sicon">
                <li><a href="">Home</a></li>
                <li class="active">Checkout</li>
            </ol>
            <img class="meat" src="{{asset('front/images/title-bottom.png')}}" alt="img">
        </div>
    </div>
    <!-- banner section start end-->

    <div class="inner-page-main-wrapper float_left ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">

                    <div class="side-accordian">
                        <div class="accordions" id="secondAccordion">
                            <form method="POST" action="{{route('checkout')}}" id="orderForm">
                            @csrf

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button"  aria-expanded="true" aria-controls="collapseFour">
                                            Checkout Method
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                                         data-bs-parent="#secondAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="new_customer">
                                                        <h3>New Customer</h3>

                                                            <p>
                                                                <input type="radio" id="test1" name="which_auth" value="reg"  class="which-auth" checked>
                                                                <label for="test1">Register Account</label>
                                                            </p>
                                                            <p>
                                                                <input type="radio" id="test2" name="which_auth" value="log" class="which-auth" >
                                                                <label for="test2">Stayc As Guest</label>
                                                            </p>

                                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                                            majority havesuffered alteration in.</p>
                                                        <a class="submit_btn guest-signup-button" href="#" >Continue</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="login_form">
                                                        <h3>Log In</h3>


                                                            <div class="mb-3 row">
                                                                <div class="col-12">
                                                                    <label>Email</label>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="email" placeholder="enter here">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <div class="col-12">
                                                                    <label>Password</label>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="password" placeholder="enter here">
                                                                    <a href="#">Forgot Password!</a>
                                                                </div>
                                                            </div>

                                                        <a class="submit_btn" href="#">Login Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"  aria-expanded="false" aria-controls="collapseFive">
                                            Billing Information
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                         data-bs-parent="#secondAccordion">
                                        <div class="accordion-body">
                                            <div class="billing_info">


                                                    <div class="mb-3 row">
                                                        <div class="col-md-6 col-12">
                                                            <label>First Name*</label>
                                                            <input type="text" name="first_name" class="form-control" placeholder="Enter here">
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <label>Last Name*</label>
                                                            <input type="text" name="last_name" class="form-control" placeholder="Enter here">
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <div class="mb-3 row">
                                                        <div class="col-md-6 col-12">
                                                            <label>Email*</label>
                                                            <input type="email" name="email" class="form-control" placeholder="Enter here">
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <label>Phone No.*</label>
                                                            <input type="text" name="phone" class="form-control" placeholder="Enter here">
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <div class="mb-3 row">
{{--                                                        <div class="col-md-6 col-12">--}}
{{--                                                            <label>Company Name*</label>--}}
{{--                                                            <input type="text" class="form-control" placeholder="Enter here">--}}
{{--                                                        </div>--}}
                                                        <div class="col-md-6 col-12">
                                                            <label>Address*</label>
                                                            <input type="text" name="address" class="form-control" placeholder="Enter here">
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <div class="mb-3 row">
                                                        <div class="col-md-6 col-12">
                                                            <label>Select your Country*</label>
                                                            <input type="text" name="country" class="form-control" placeholder="Enter here">
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <label>City*</label>
                                                            <input type="text" name="city" class="form-control" placeholder="Enter here">
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <div class="mb-3 row">
                                                        <div class="col-md-6 col-12">
                                                            <label>State*</label>
                                                            <input type="text" name="state" class="form-control" placeholder="Enter here">
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <label>Zip Code*</label>
                                                            <input type="text" name="zip" class="form-control" placeholder="Enter here">
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <div class="fmb-3 row">
                                                        <div class="col-md-12 col-12">
                                                            <input type="checkbox" id="scales" name="scales" checked>
                                                            <label for="scales">Ship to Same Address As Billing</label>
                                                        </div>
                                                    </div>

                                                <a class="submit_btn continuetopayment" href="#">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" aria-expanded="false" aria-controls="collapseSix">
                                            Payment Method
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                         data-bs-parent="#secondAccordion">
                                        <div class="accordion-body">
                                            <div class="payment_method">



                                                    <p>
                                                        <input type="radio" id="test5" name="radio-group" checked>
                                                        <label for="test5">Cash On Delivery
                                                            <span class="small-text">pay when your order arrives. Easy, secure, and hassle-free shopping awaits!</span>
                                                        </label>
                                                    </p>



                                                <div class="payment_card">
                                                    <img class="img-fluid" src="{{asset('front/images/payment_card.png')}}" alt="card">
                                                    <a class="submit_btn submitForm" href="#">Place Order</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="side-bar-strip">
                        <h4>Your Order</h4>
                        <img src="{{asset('front/images/side-title.png')}}" alt="img">
                        <div class="order_details">

                            @foreach($items as $item)
                                <p> {{$item->name}} ({{$item->quantity}} * {{$item->price}}) <span> {{$item->price}} PKR</span> </p>
                            @endforeach
                            <h3>Order Total <span>{{\Cart::getTotal()}} PKR</span></h3>
                        </div>
                        <a class="custom-btn" href="javascript:;">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section start -->



@endsection

@section("script")
<script>
function increaseValue(button, limit) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if (isNaN(value)) value = 0;
    if (limit && value >= limit) return;
    numberInput.innerHTML = value + 1;
}


function decreaseValue(button) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if (isNaN(value)) value = 0;
    if (value < 1) return;
    numberInput.innerHTML = value - 1;
}
$(".continuetopayment").click(function(){
    $("#collapseSix").collapse('show');
})
$(".guest-signup-button").click(function(){
    const auth = $('.which-auth:checked').val();
    if(auth === "reg"){
        window.open("{{route('register')}}")
    }else if(auth === 'log'){
        // $("#collapseFour").collapse('hide');
        $("#collapseFive").collapse('show');
    }

})
$(".submitForm").click(function(){
    console.log("submiti9ng");
    $("#orderForm").submit();
})

$('#orderForm').validate({ // initialize the plugin
    rules: {
        first_name: {
            required: true,
            email: true
        },
        last_name: {
            required: true,
            minlength: 5
        }
    }
});
</script>

@endsection

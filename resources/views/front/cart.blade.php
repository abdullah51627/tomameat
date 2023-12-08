




@extends('front.layout.app')

@section("content")



    <!-- banner section start start-->
    <div class="inner-slider-wrapper float_left">
        <div class="container">
            <div class="inner-caption">
                <h4>Shopping Cart</h4>
                <img src="images/title.png" alt="img">
            </div>
            <ol class="breadcrumb sicon">
                <li><a href="">Home</a></li>
                <li><a href="">Page</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
            <img class="meat" src="{{asset('front/images/cart/title-bottom.png')}}" alt="img">
        </div>
    </div>
    <!-- banner section start end-->

    <div class="shopping-cart-main-wrapper float_left ptb-100">
        <div class="container">
            @foreach ($cartItems as $item)

                <div class="cart-strip-main-wrapper">
                    <div class="cart-item">
                        <div class="cart-item-img">
                            <img src="images/cart1.jpg" alt="logo" />
                            <h5>{{ $item->quantity }}x {{ $item->name }}</h5>
                        </div>
                    </div>
                    <div class="cart-item">
{{--                        <p>01 Kg</p>--}}
                    </div>
                    <div class="cart-item">
                        <div class="quantity-field">
                            <button class="value-button decrease-button" onclick="decreaseValue(this)" title="Azalt">-</button>
                            <div class="number">{{ $item->quantity }}</div>
                            <button class="value-button increase-button" onclick="increaseValue(this, 5)" title="Arrtır">+
                            </button>
                        </div>
                    </div>
                    <div class="cart-item">
                        <h4>${{ $item->price }}PKR</h4>
                    </div>
                    <div class="cart-item">
{{--                        <span>X</span>--}}
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button class="px-4 py-2 text-white bg-red-600">x</button>
                        </form>
                    </div>
                </div>
            @endforeach



        </div>
    </div>


    @if(!\Cart::isEmpty())
    <div class="shopping-details-wrapper float_left">
        <div class="container">
            <div class="row shoping-box">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="terms">
                        <form>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I have read and agreed to the Terms &
                                    Conditions.</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="shipping-account-wrapper">
                        <p>Total of product pricing </p>
                        <span>{{\Cart::getSubTotal()}}PKR</span>
                    </div>
{{--                    <div class="shipping-account-wrapper">--}}
{{--                        <p>Estimated Shipping Charges </p>--}}
{{--                        <span>$0.00</span>--}}
{{--                    </div>--}}
                    <div class="shipping-account-wrapper mt-4">
                        <p>Total </p>
                        <h5>{{\Cart::getTotal()}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    <div class="cart-btn-wrapper float_left">
        <div class="container">
            <div class="cart-btn">
                <a class="out-line" href="product.html">Continue to shop</a>
                <a class="custom-btn" href="checkout.html">Proceed to Payment</a>
            </div>
        </div>
    </div>






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
    </script>

@endsection

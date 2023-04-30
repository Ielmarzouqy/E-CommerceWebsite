
  <script src="https://cdn.tailwindcss.com"></script>

    <!-- breadcrumb -->
    <div class="container px-4 py-4 flex items-center gap-3">
        <a href="../index.html" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Checkout</p>
    </div>
   
    <form action="{{route('shipping')}}" method="post">
        @csrf
            <div class="container grid grid-cols-12 sm:grid-cols-4 lg:grid-cols-12  items-start pb-16 pt-4 gap-6">

                <div class="col-span-8 border border-gray-200 p-4 rounded">
                    <h3 class="text-lg font-medium capitalize mb-4">Checkout</h3>
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="first-name" class="text-gray-600">First Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" name="first_name" id="first-name" class=" border border-indigo-600 input-box">
                            </div>
                            <div>
                                <label for="last-name" class="text-gray-600">Last Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" name="last_name" id="last-name" class="  border border-indigo-600 input-box">
                            </div>
                        </div>
                    
                        <div>
                      
                      
                        <div>
                            <label for="phone" class="text-gray-600">Phone number</label>
                            <input type="text" name="phone_number" id="phone" class=" border border-indigo-600 input-box">
                        </div>
                        <div>
                            <label for="email" class="text-gray-600">Email address</label>
                            <input type="email" name="email" id="email" class=" border border-indigo-600 input-box">
                        </div>
                     
                        <div>
                            <label for="city" class="text-gray-600">City</label>
                            <input type="text" name="city_name" id="city_name" class=" border border-indigo-600 input-box">
                        </div>
                        <div>
                            <label for="address" class="text-gray-600">Address</label>
                            <input type="text" name="adress" id="adress" class=" border border-indigo-600 input-box">
                        </div>
                        <div>
                            <label for="email" class="text-gray-600">Cade Postal</label>
                            <input type="number" name="postal_code" id="email" class=" border border-indigo-600 input-box">
                        </div>

                        {{-- =========================>amount --}}
                        <div>
                            <label for="email" class="text-gray-600">total_price</label>
                            <input type="number" name="total_price" id="email" value="{{ $totalPrice }}" disabled class=" border border-indigo-600 input-box">
                        </div>
                        <div>
                            <label for="email" class="text-gray-600">number</label>
                            <input type="number" name="number" id="email" class=" border border-indigo-600 input-box">
                        </div>
                        <div>
                            <label for="email" class="text-gray-600">exp_month</label>
                            <input type="number" name="exp_month" id="email" class=" border border-indigo-600 input-box">
                        </div>
                        <div>
                            <label for="email" class="text-gray-600">exp_year	</label>
                            <input type="number" name="exp_year" id="email" class=" border border-indigo-600 input-box">
                        </div>
                        <div>
                            <label for="email" class="text-gray-600">cvc</label>
                            <input type="number" name="cvc" id="email" class=" border border-indigo-600 input-box">
                        </div>
                      
                    </div>

                </div>

                <div class="col-span-4 border border-gray-200 p-4 rounded">
                    <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">order summary</h4>
                    <div class="space-y-2">
                   
                    <button type="submit" class="block w-full py-3 px-4 text-center text-white bg-blue-500  border border-indigo-600 rounded-md hover:bg-transparent hover:text-blue-500 transition font-medium">
                        order
                    </button>
                </div>
            </div>

        </form>
        <!DOCTYPE html>
<html>
<head>
    <title> payment</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
</head>
<body>
    
{{-- <div class="container">
    
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                        <h3 class="panel-title" >Payment Details</h3>
                </div>
                <div class="panel-body">
    
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
    
                    <form 
                            role="form" 
                            action="stripePay" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' name="name" type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' value="4242424242424242" name="number" class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' value="321" name="cvc" placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' name="month" value="04" placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' name="year" value="2028" placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>amount</label> <input
                                    class='form-control card-expiry-year' name="amount" value="" placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>user id</label> <input
                                    class='form-control card-expiry-year' name="user_id" value="" placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ({{ $totalPrice }}$))</button>
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>        
        </div>
    </div>
        
</div>
     --}}
</body>
    
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
  

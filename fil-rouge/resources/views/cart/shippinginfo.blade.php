{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Ecommerce Tailwind</title>

    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../assets/css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>
    --}}
  <script src="https://cdn.tailwindcss.com"></script>

    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
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
    </div>

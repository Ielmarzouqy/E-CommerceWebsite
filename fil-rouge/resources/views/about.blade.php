<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Example</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-200">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                {{-- <a href="#" class="font-bold text-xl text-gray-800">My Site</a> --}}
                <img src="./asset/images/logov.png" class="w-40 logo"  alt="">
                <ul class="flex">
                    <li><a href="#" class="block text-gray-800 hover:text-blue-500 px-4">Home</a></li>
                    <li><a href="#" class="block text-gray-800 hover:text-blue-500 px-4">Products</a></li>
                    <li><a href="#" class="block text-gray-800 hover:text-blue-500 px-4">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class=" py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-white">Welcome to My Site</h1>
            <p class="text-lg text-gray-400 mt-4">Welcome to our MinArt e-commerce website dedicated to the sale of handicraft products to help women who work from home! We are a social enterprise dedicated to supporting women in rural areas by providing them with economic opportunities and valuing their handicrafts..</p>
            <a href="{{url('shop')}}" class="inline-block rounded bg-fuchsia-500 hover:bg-fuchsia-700 text-white font-semibold px-4 py-2 mt-8">our shop</a>
        </div>
    </header>

    <section class="bg-white py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Our Products</h2>
            <div class="flex flex-wrap -mx-4">
                <img src="./asset/images/ab1.png" class="absolute block w-500 brightness-50 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 "  alt="">

                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-800">Product 1</h3>
                        <p class="text-gray-600 mt-4">When browsing our site, you will find a wide selection of high-quality handmade handicraft products created by talented women. We offer a variety of products ranging from traditional fabrics and clothing to jewelry, pottery, and decorative items.</p>
                        <a href="#" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold px-4 py-2 mt-4">Buy Now</a>
                    </div>
                </div>
                {{-- <img src="./asset/images/ab2.png" class="w-50 logo "  alt=""> --}}

                {{-- <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">

                    <div class="  bg-gray-100 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-800">Product 2</h3>
                        <p class="text-gray-600 mt-4">We are proud to support women artisans by providing them with a platform to sell their products and improve their quality of life. We hope you enjoy your shopping experience on our site and come back soon to discover amazing new handmade products!
                        </p>
                        <a href="#" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold px-4 py-2 mt-4">jgj</a>
                    </div>
                </div>
                <img src="./asset/images/ab3.png" class="w-50  logo "  alt="">

                <div class="w-full centered md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-800">Product 2</h3>
                        <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel justo pharetra, blandit nulla vel, dapibus quam.</p>
                        <a href="#" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold px-4 py-2 mt-4">hjghj</a>
                    </div>
                </div> --}}
            </div>
        </div>

<style> 
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

</style>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <img src="./asset/images/logovv.png" alt=""> --}}
    <title  >  minart</title>

    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../assets/css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/rippleui@1.11.0/dist/css/styles.css"
/>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="py-4 shadow-sm bg-white">
        <div class=" flex items-center justify-between">
            <a href="{{url('/')}}">
                <img src="../asset/images/logov3.png" alt="Logo" class="w-32">
            </a>

            <div class="w-full max-w-xl relative flex">
                <span class="absolute left-4 top-3 text-lg text-gray-400">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="text" name="search" id="search"
                    class="w-full border border-violet-400 border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none"
                    placeholder="search">
                <button
                    class="bg-[#EDE9FE] hover:bg-[#927cf6] border border-violet-400 text-fuchsia-900 px-8 rounded-r-md  hover:text-fuchsia-200 transition">Search</button>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-heart"></i>
                    </div>

                    <div class="font-semibold text-black rounded-md p-2 focus:rounded-sm hover:text-fuchsia-400"><a href="{{route('addtocart')}}">
                        Wishlist <sup class="bg-blue-600 rounded-full py-1 text-white px-2">2</sup></a></div>
                 
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="font-semibold text-black rounded-md p-2 focus:rounded-sm hover:text-fuchsia-400"> <a href="{{route('checkout')}}">Cart <sup class="bg-blue-600 rounded-full py-1 text-white px-2">2</sup></a> </div>
                 
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="font-semibold text-black rounded-md p-2 focus:rounded-sm hover:text-fuchsia-400">Account</div>
                </a>
            </div>
        </div>
    </header>
    @yield ('detail')
    @yield('wishlist')
    @yield('checkout')
    @yield('shop')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</section> 

<script>
  $(document).ready(function() {
    $('#search').on('keyup', function() {
      var value = $(this).val().toLowerCase();
      $('#shop .cardd').filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
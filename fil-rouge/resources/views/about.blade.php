
    
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patrick+Hand">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      /* font-family: 'Patrick Hand', cursive; */
      font-family: 'Dancing Script', cursive;
    }
    .dv{
        position: relative;
  text-align: center;
  color: white;
    }
    .image {
  position: absolute;
  /* /* top: 50%; */
  /* left: 10%;  */
  /* transform: translate(-50%, -50%); */
}
  
  </style>
  </head>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<body>
  <nav class="bg-white ">
    <div class="container mx-auto flex justify-between items-center">
      <a href="/" class="  text-2xl font-bold text-amber-700">Our Site Name</a>
      <ul class="flex">
        <li class="ml-6"><a href="/" class="text-lg text-amber-700 hover:text-white">Home</a></li>
        <li class="ml-6"><a href="/about.html" class="text-lg text-amber-700">About</a></li>
        <li class="ml-6"><a href="/contact.html" class="text-lg text-amber-700 hover:text-white">Contact</a></li>
      </ul>
    </div>
  </nav>
  <header class="bg-orange-200 py-24">
    <div class="container mx-auto">
        
      <h1 class="font-effect-neon  animate-text text-4xl font-bold text-start text-amber-700 ">MinArt</h1>
      <div class="flex items-center">
      <p class=" animate-text text-lg text-amber-700 w-48 leading-relaxed mb-8"> Lovers and dreamers</p>

        <div class=" shadow-lg bg-orange-500 p-2 rounded-md w-full sm:w-1/2 md:w-1/3 px-4 mx-auto mb-8">
          <img src="./asset/images/cov4.png" alt="Image 1" class="w-50 h-auto  rounded-lg ">
        </div>
        

      </div>
    </div>
    
      </header>
      <section class="bg-white py-24">
        <div class="container ">
          <h2 class=" animate-text text-4xl font-bold text-center text-amber-700 mb-8">Meet Our Team</h2>
          <div class="flex  justify-center">
            <div class="w-full flex gap-16 sm:w-1/2   mb-8">

              <div class=" flex rounded-lg overflow-hidden shadow-md">
                <img src="f2.jpeg" alt="Team Member 1" class="w-full ">
               
              </div>
              <div class="text-center text-amber-700 block gap-4 space-beteen">
                <h1>first let me say:</h1><br><br>
                <h5 class="text-amber-800 bg-orange-200">CONGRATULATION</h5><br><br>
              <p class=" ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsa consectetur voluptas provident nesciunt, labore saepe. Quod, modi sit aliquid debitis dolorem ipsa nisi commodi iure, ab ipsam laudantium id!</p>
  
              </div>
             
            </div>
          </div>
        </div>
      </section>
    
        <section>
<div class="">
    <div class="">
        <div class="dv">
            <img class=" image absulout brightness-50" src="f3.jpeg" alt="">
            <p class="">text</p>
        </div>
    </div>
</div>
        </section>

      <footer class="bg-gray-800 py-4">
        <div class="container mx-auto text-center text-gray-400">
          <p>&copy; 2023 Our Site Name. All rights reserved.</p>
        </div>
      </footer>
      <script>
        // Get all the text elements that you want to animate
        const textElements = document.querySelectorAll('.animate-text');
      
        // Add a scroll event listener to the window
        window.addEventListener('scroll', () => {
          // Loop through each text element
          textElements.forEach((element) => {
            // If the text element is in the viewport, add the animation class
            if (isInViewport(element)) {
              element.classList.add('animate_animated', 'animate_fadeInUp');
            }
          });
        });
      
        // Function to check if an element is in the viewport
        function isInViewport(element) {
          const rect = element.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }
      </script>
    </body>
    </html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patrick+Hand">
  <style>
    body {
      font-family: 'Patrick Hand', cursive;
    }
    .dv{
        position: relative;
  text-align: center;
  color: white;
    }
    .image {
  position: absolute;
  /* /* top: 50%; */
  /* left: 10%;  */
  /* transform: translate(-50%, -50%); */
}
  
  </style>
  </head>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>
<body>
  <nav class="bg-white ">
    <div class="container mx-auto flex justify-between items-center">
      <a href="/" class="  text-2xl font-bold text-amber-700">Our Site Name</a>
      <ul class="flex">
        <li class="ml-6"><a href="/" class="text-lg text-amber-700 hover:text-white">Home</a></li>
        <li class="ml-6"><a href="/about.html" class="text-lg text-amber-700">About</a></li>
        <li class="ml-6"><a href="/contact.html" class="text-lg text-amber-700 hover:text-white">Contact</a></li>
      </ul>
    </div>
  </nav>
  <header class="bg-orange-200 py-24">
    <div class="container mx-auto">
        
      <h1 class="font-effect-neon  animate-text text-4xl font-bold text-start text-amber-700 ">MinArt</h1>
      <div class="flex items-center">
      <p class=" animate-text text-lg text-amber-700 w-48 leading-relaxed mb-8"> Lovers and dreamers</p>

        <div class=" shadow-lg bg-orange-500 p-2 rounded-md w-full sm:w-1/2 md:w-1/3 px-4 mx-auto mb-8">
          <img src="f.jpeg" alt="Image 1" class="w-50 h-auto  rounded-lg ">
        </div>
        

      </div>
    </div>
    
      </header>
      <section class="bg-white py-24">
        <div class="container ">
          <h2 class=" animate-text text-4xl font-bold text-center text-amber-700 mb-8">Meet Our Team</h2>
          <div class="flex  justify-center">
            <div class="w-full flex gap-16 sm:w-1/2   mb-8">

              <div class=" flex rounded-lg overflow-hidden shadow-md">
                <img src="f2.jpeg" alt="Team Member 1" class="w-full ">
               
              </div>
              <div class="text-center text-amber-700 block gap-4 space-beteen">
                <h1>first let me say:</h1><br><br>
                <h5 class="text-amber-800 bg-orange-200">CONGRATULATION</h5><br><br>
              <p class=" ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsa consectetur voluptas provident nesciunt, labore saepe. Quod, modi sit aliquid debitis dolorem ipsa nisi commodi iure, ab ipsam laudantium id!</p>
  
              </div>
             
            </div>
          </div>
        </div>
      </section>
    
        <section>
<div class="">
    <div class="">
        <div class="dv">
            <img class=" image absulout brightness-50" src="f3.jpeg" alt="">
            <p class="">text</p>
        </div>
    </div>
</div>
        </section>

      <footer class="bg-gray-800 py-4">
        <div class="container mx-auto text-center text-gray-400">
          <p>&copy; 2023 Our Site Name. All rights reserved.</p>
        </div>
      </footer>
      <script>
        // Get all the text elements that you want to animate
        const textElements = document.querySelectorAll('.animate-text');
      
        // Add a scroll event listener to the window
        window.addEventListener('scroll', () => {
          // Loop through each text element
          textElements.forEach((element) => {
            // If the text element is in the viewport, add the animation class
            if (isInViewport(element)) {
              element.classList.add('animate_animated', 'animate_fadeInUp');
            }
          });
        });
      
        // Function to check if an element is in the viewport
        function isInViewport(element) {
          const rect = element.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }
      </script>
    </body>
    </html> --}}
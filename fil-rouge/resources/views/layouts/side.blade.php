
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../../css/app.css">

    <link
   rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/rippleui@1.11.0/dist/css/styles.css"
/>

<script src="https://cdn.tailwindcss.com"></script>

    <div class="flex flex-row  sm:gap-10">
        <div class="sm:w-full  sm:max-w-[18rem]">
            <input type="checkbox" id="sidebar-mobile-fixed" class="sidebar-state hidden" />
            <label for="sidebar-mobile-fixed" class="sidebar-overlay"></label>
            <aside class="sidebar bg-violet-300 sidebar-fixed-left sidebar-mobile h-full justify-start max-sm:fixed max-sm:-translate-x-full">
                <section class="sidebar-title items-center p-4">
                    
                    <img src="../asset/images/logov.png" class="h-20 mx-16 w-24" alt="">
                    
                </section>
                <section class="sidebar-content">
                    <nav class="menu rounded-md">
                        <section class="menu-section px-4">
                            <ul class="menu-items">
                                <li class="menu-item">
                                    <a href="{{url('/statistic')}}" class="flex gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>
                                    <span>Analytics</span>
                                </a>
                                </li>
    
                                <li class="menu-item ">
                                    <a href="" class="flex gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="opacity-75" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                                        <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                                    </svg>
                                    <span>Order Management</span>
                                </a>
                                </li>
                                <li class="menu-item">
                                    <a href="" class="flex gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span>Customer Management</span>
                                </a>
                                </li>
                                <li>
                                    <input type="checkbox" id="menu-1" class="menu-toggle hidden" />
                                    <label class="menu-item justify-between" for="menu-1">
                                        <div class="flex gap-2">
                                           
                                            <svg xmlns="http://www.w3.org/2000/svg" class="opacity-75" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 10l5 -6l5 6"></path>
                                                <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                                <path d="M12 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            </svg>
                                            <span>Product Management</span>
                                        </div>
    
                                        <span class="menu-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </label>
    
                                    <div class="menu-item-collapse">
                                        <div class="min-h-0">
                                            <label class="menu-item  ml-6"> <a href="{{route('products.create')}}"> Add Product </a></label>
                                            <label class="menu-item ml-6"> <a href="{{route('products.index')}}">List Products</a></label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <input type="checkbox" id="menu-3" class="menu-toggle hidden" />
                                    <label class="menu-item justify-between" for="menu-3">
                                        <div class="flex gap-2">
                                     
                                            <svg xmlns="http://www.w3.org/2000/svg" class="opacity-75" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                                <path d="M9 7l4 0"></path>
                                                <path d="M9 11l4 0"></path>
                                            </svg>
                                            <span>Categories Management</span>
                                    
                                        </div>
    
                                        <span class="menu-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </label>
    
                                    <div class="menu-item-collapse">
                                        <div class="min-h-0">
                                            <label class="menu-item  ml-6"> <a href="{{url('/add-category')}}"> Add Category </a></label>
                                            <label class="menu-item ml-6"> <a href="{{route('category.index')}}">List Categories</a> </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <input type="checkbox" id="menu-4" class="menu-toggle hidden" />
                                    <label class="menu-item justify-between" for="menu-4">
                                        <div class="flex gap-2">
                                     
                                            <svg xmlns="http://www.w3.org/2000/svg" class="opacity-75" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                                <path d="M9 7l4 0"></path>
                                                <path d="M9 11l4 0"></path>
                                            </svg>
                                            <span>Sub_Categories Management</span>
                                    
                                        </div>
    
                                        <span class="menu-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </label>
    
                                    <div class="menu-item-collapse">
                                        <div class="min-h-0">
                                            <label class="menu-item  ml-6"> <a href="{{route('subcategories.create')}}"> Add Sub_Category </a></label>
                                            <label class="menu-item ml-6"> <a href="{{route('subcategories.index')}}">List Sub_Categories</a> </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <div class="divider my-0"></div>
                        <section class="menu-section px-4">
                            <span class="menu-title">Settings</span>
                            <ul class="menu-items">
                                <li class="menu-item">
                                    <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="opacity-75" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 21l18 0"></path>
                                        <path d="M3 10l18 0"></path>
                                        <path d="M5 6l7 -3l7 3"></path>
                                        <path d="M4 10l0 11"></path>
                                        <path d="M20 10l0 11"></path>
                                        <path d="M8 14l0 3"></path>
                                        <path d="M12 14l0 3"></path>
                                        <path d="M16 14l0 3"></path>
                                    </svg>
                                    Payments
                                </a>
                                </li>
                               
                            </ul>
                        </section>
                    </nav>
                </section>
                {{-- <section class="sidebar-footer justify-end bg-gray-2 pt-2">
                    <div class="divider my-0">
                    </div>
                </section> --}}
            </aside>
        </div>
        <div class="flex w-full flex-col ">
            <div class="w-fit">
                <div class="navbar navbar-sticky">
                    <div class="navbar-start">
                        <label for="sidebar-mobile-fixed" class=" sm:hidden"> <img src="https://img.icons8.com/nolan/64/xbox-menu.png"/></label>

                    </div>
                 
                </div>
            </div>
            {{-- @yield ('detail') --}}
         {{-- *****content**** --}}
         @yield('dash')

        </div>
    </div>
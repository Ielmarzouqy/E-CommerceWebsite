{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">--}}
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link
   rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/rippleui@1.11.0/dist/css/styles.css"
/>

<!-- And -->
<script src="https://cdn.tailwindcss.com"></script>

{{-- <button class="btn btn-primary">Hello World!</button>
    <title>Document</title>
</head>
<body> --}}
    



    <div class="flex flex-row  sm:gap-10">
        <div class="sm:w-full  sm:max-w-[18rem]">
            <input type="checkbox" id="sidebar-mobile-fixed" class="sidebar-state" />
            <label for="sidebar-mobile-fixed" class="sidebar-overlay"></label>
            <aside class="sidebar bg-violet-300 sidebar-fixed-left sidebar-mobile h-full justify-start max-sm:fixed max-sm:-translate-x-full">
                <section class="sidebar-title items-center p-4">
                    
                    <img src="../assets/images/logom.png" class="h-20 mx-16 w-24" alt="">
                    
                </section>
                <section class="sidebar-content">
                    <nav class="menu rounded-md">
                        <section class="menu-section px-4">
                            <ul class="menu-items">
                                <li class="menu-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>
                                    <span>Analytics</span>
                                </li>
    
                                <li class="menu-item menu-active">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="opacity-75" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                                        <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                                    </svg>
                                    <span>Order Management</span>
                                </li>
                                <li class="menu-item">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span>Customer Management</span>
                                </li>
                                <li>
                                    <input type="checkbox" id="menu-1" class="menu-toggle" />
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
                                            <label class="menu-item  ml-6">Add Product</label>
                                            <label class="menu-item ml-6">List Products</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <input type="checkbox" id="menu-3" class="menu-toggle" />
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
                                            <label class="menu-item  ml-6">Add Category</label>
                                            <label class="menu-item ml-6">List Categories</label>
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
                                </li>
                               
                            </ul>
                        </section>
                    </nav>
                </section>
                <section class="sidebar-footer justify-end bg-gray-2 pt-2">
                    <div class="divider my-0">

                        

                    </div>
                    <!-- <div class="dropdown z-50 flex h-fit w-full cursor-pointer hover:bg-gray-4">

                       

                        <label class="whites mx-2 flex h-fit w-full cursor-pointer p-0 hover:bg-gray-4" tabindex="0">
                            <div class="flex flex-row gap-4 p-4">
                                <div class="avatar-square avatar avatar-md">
                                    <img src="https://i.pravatar.cc/150?img=30" alt="avatar" />
                                </div>
    
                                <div class="flex flex-col">
                                    <span>Sandra Marx</span>
                                </div>
                            </div>
                        </label>
                        <div class="dropdown-menu-right-top dropdown-menu ml-2">
                            <a class="dropdown-item text-sm">Profile</a>
                            <a tabindex="-1" class="dropdown-item text-sm">Account settings</a>
                            <a tabindex="-1" class="dropdown-item text-sm">Change email</a>
                            <a tabindex="-1" class="dropdown-item text-sm">Subscriptions</a>
                            <a tabindex="-1" class="dropdown-item text-sm">Change password</a>
                            <a tabindex="-1" class="dropdown-item text-sm">Refer a friend</a>
                            <a tabindex="-1" class="dropdown-item text-sm">Settings</a>
                        </div>
                    </div> -->
                </section>
            </aside>
        </div>
        <div class="flex w-full flex-col p-4">
            <div class="w-fit">
                <div class="navbar navbar-sticky">
                    <div class="navbar-start">
                        <!-- <a class="navbar-item">Ripple UI</a> -->
                <label for="sidebar-mobile-fixed" class=" sm:hidden"> <img src="https://img.icons8.com/nolan/64/xbox-menu.png"/></label>

                    </div>
                    <div class="navbar-end">
                        <a class="navbar-item">Home</a>
                    </div>
                </div>
            </div>
           <!-- ******content***** -->
            <!-- <div class="my-4 grid grid-cols-2 gap-4"> -->
                <!-- <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
    
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
                <div class="flex h-40 w-full items-center justify-center border-2 border-dashed border-border bg-gray-1">+</div>
            </div> -->
            {{-- <div class="flex w-full overflow-x-auto">
                <table class=" my-16 table-hover table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Where</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Amount</th>
                            <th>Amount</th>
                            <th>Amount</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>3</th>
                            <td>Brice Swyre</td>
                            <td>Brice Swyre</td>
                            <td>Brice Swyre</td>
                           
                            
                            <td>Remkhuihhd</td>
                            <td>Rio_çu_çu_çed</td>
                            <td>Rihihuç_ed</td>
                            <td class="flex gap-2">
                                <button class=" w-24 h-8  btn btn-warning">
                                <svg  class="w-40 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 18.414062 2 C 18.158062 2 17.902031 2.0979687 17.707031 2.2929688 L 15.707031 4.2929688 L 14.292969 5.7070312 L 3 17 L 3 21 L 7 21 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.926094 2.0979687 18.670063 2 18.414062 2 z M 18.414062 4.4140625 L 19.585938 5.5859375 L 18.292969 6.8789062 L 17.121094 5.7070312 L 18.414062 4.4140625 z M 15.707031 7.1210938 L 16.878906 8.2929688 L 6.171875 19 L 5 19 L 5 17.828125 L 15.707031 7.1210938 z"/></svg>

                                    edit
                                </button>
                                
                                <button class=" w-32 h-8 btn btn-error">
                                    <svg class="w-40 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                        <path d="M 15 4 C 14.476563 4 13.941406 4.183594 13.5625 4.5625 C 13.183594 4.941406 13 5.476563 13 6 L 13 7 L 7 7 L 7 9 L 8 9 L 8 25 C 8 26.644531 9.355469 28 11 28 L 23 28 C 24.644531 28 26 26.644531 26 25 L 26 9 L 27 9 L 27 7 L 21 7 L 21 6 C 21 5.476563 20.816406 4.941406 20.4375 4.5625 C 20.058594 4.183594 19.523438 4 19 4 Z M 15 6 L 19 6 L 19 7 L 15 7 Z M 10 9 L 24 9 L 24 25 C 24 25.554688 23.554688 26 23 26 L 11 26 C 10.445313 26 10 25.554688 10 25 Z M 12 12 L 12 23 L 14 23 L 14 12 Z M 16 12 L 16 23 L 18 23 L 18 12 Z M 20 12 L 20 23 L 22 23 L 22 12 Z"/></svg>
                                    
                                    delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Brice Swyre</td>
                            <td>Tax Accountant</td>
                            <td>Brice Swyre</td>
                            <td>Brice Swyre</td>
                          
                            <td>Rio_çu_çu_çed</td>
                            <td>Rihihuç_ed</td>
                            <td class="flex gap-2">
                                <button class="  w-24 h-8  btn btn-warning">
                                <svg class="w-40 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 18.414062 2 C 18.158062 2 17.902031 2.0979687 17.707031 2.2929688 L 15.707031 4.2929688 L 14.292969 5.7070312 L 3 17 L 3 21 L 7 21 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.926094 2.0979687 18.670063 2 18.414062 2 z M 18.414062 4.4140625 L 19.585938 5.5859375 L 18.292969 6.8789062 L 17.121094 5.7070312 L 18.414062 4.4140625 z M 15.707031 7.1210938 L 16.878906 8.2929688 L 6.171875 19 L 5 19 L 5 17.828125 L 15.707031 7.1210938 z"/></svg>

                                    edit
                                </button>
                                
                                <button class=" w-32 h-8  btn btn-error">
                                    <svg class="w-40 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                        <path d="M 15 4 C 14.476563 4 13.941406 4.183594 13.5625 4.5625 C 13.183594 4.941406 13 5.476563 13 6 L 13 7 L 7 7 L 7 9 L 8 9 L 8 25 C 8 26.644531 9.355469 28 11 28 L 23 28 C 24.644531 28 26 26.644531 26 25 L 26 9 L 27 9 L 27 7 L 21 7 L 21 6 C 21 5.476563 20.816406 4.941406 20.4375 4.5625 C 20.058594 4.183594 19.523438 4 19 4 Z M 15 6 L 19 6 L 19 7 L 15 7 Z M 10 9 L 24 9 L 24 25 C 24 25.554688 23.554688 26 23 26 L 11 26 C 10.445313 26 10 25.554688 10 25 Z M 12 12 L 12 23 L 14 23 L 14 12 Z M 16 12 L 16 23 L 18 23 L 18 12 Z M 20 12 L 20 23 L 22 23 L 22 12 Z"/></svg>
                                    
                                    delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Brice Swyre</td>
                            <td>Brice Swyre</td>
                            <td>Brice Swyre</td>
                            
                            <td  class="text-emerald-200">Remkhuihhd</td>
                            <td>Rio_çu_çu_çed</td>
                            <td>Rihihuç_ed</td>
                            <td class="flex gap-2">
                                <button class=" w-24 h-8  btn btn-warning">
                                <svg class="w-40 h-4" xmlns="http://www.w3.org/2000/svg" class="stroke-bleu-100 stroke-1" viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 18.414062 2 C 18.158062 2 17.902031 2.0979687 17.707031 2.2929688 L 15.707031 4.2929688 L 14.292969 5.7070312 L 3 17 L 3 21 L 7 21 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.926094 2.0979687 18.670063 2 18.414062 2 z M 18.414062 4.4140625 L 19.585938 5.5859375 L 18.292969 6.8789062 L 17.121094 5.7070312 L 18.414062 4.4140625 z M 15.707031 7.1210938 L 16.878906 8.2929688 L 6.171875 19 L 5 19 L 5 17.828125 L 15.707031 7.1210938 z"/></svg>

                                    edit
                                </button>
                                
                                <button class=" w-32 h-8  btn btn-error">
                                    <svg class="w-40 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                        <path d="M 15 4 C 14.476563 4 13.941406 4.183594 13.5625 4.5625 C 13.183594 4.941406 13 5.476563 13 6 L 13 7 L 7 7 L 7 9 L 8 9 L 8 25 C 8 26.644531 9.355469 28 11 28 L 23 28 C 24.644531 28 26 26.644531 26 25 L 26 9 L 27 9 L 27 7 L 21 7 L 21 6 C 21 5.476563 20.816406 4.941406 20.4375 4.5625 C 20.058594 4.183594 19.523438 4 19 4 Z M 15 6 L 19 6 L 19 7 L 15 7 Z M 10 9 L 24 9 L 24 25 C 24 25.554688 23.554688 26 23 26 L 11 26 C 10.445313 26 10 25.554688 10 25 Z M 12 12 L 12 23 L 14 23 L 14 12 Z M 16 12 L 16 23 L 18 23 L 18 12 Z M 20 12 L 20 23 L 22 23 L 22 12 Z"/></svg>
                                    
                                    delete
                                </button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div> --}}
            <!-- ***** end content******* -->
        </div>
    </div>
{{-- </body>
</html> --}}
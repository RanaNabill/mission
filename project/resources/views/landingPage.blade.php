<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Landing Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Kufi Arabic', sans-serif;

        }
    </style>

</head>

<body>
    <section class="relative bg-cover bg-center" style="position: relative;">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80); opacity: 0.5;">
        </div>

        <nav class="bg-white border-gray-200 dark:bg-white-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4" dir="auto">


                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="mx-auto">

                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:border-gray-700" style="margin-top: 10%" dir="rtl">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                style="margin-right:-90%">الأخبار </a>
                        </li>
                        <li>
                            <div class="relative group">
                                <button type="button"
                                    class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent focus:outline-none focus:ring focus:border-blue-300">
                                    <span style="color:#d5a419">الأعمال الأثرية</span>
                                    <svg class="w-4 h-4 fill-current absolute top-3 right-3 md:static md:h-2 md:w-2 md:mx-1 md:top-auto md:right-auto md:bottom-auto md:left-auto md:fill-current md:ml-0 md:mr-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12l-5-5h10l-5 5z" />
                                    </svg>
                                </button>
                                <ul
                                    class="absolute z-50 hidden py-2 mt-1 border border-gray-100 rounded-lg shadow-lg md:group-hover:block  dark:bg-gray-50 dark:border-gray-700 dark:text-gray-400 ">
                                    <li> <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600">المعارض
                                            الدائمة</a> </li>
                                    <li> <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">المعارض
                                            الزائرة</a> </li>
                                    <li> <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">التحف
                                            الأثرية</a> </li>
                                    <li> <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">الترميم
                                            والحفاظ
                                            على التراث الثقافي</a> </li>
                                </ul>

                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">وسائط</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-700 md:p-0 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">تواصل
                                معنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <hr class="my-100 h-0.5 border-t-0 bg-black opacity-100 dark:opacity-50"
            style="margin-right:7%; margin-left:7%; " />

        {{-- <div
            class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div> --}}

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
            dir="rtl">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold sm:text-5xl">

                    <span class="dark:text-white" style="margin-right:5%;line-height:120% ">
                     <span style="margin-right: -5%">أهلا بكم في</span><br>
                      <span style="color:#d5a419">حفائر</span><br>
                        المجلس الأعلى <br>للآثار</span>
                </h1>



                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#" onclick="scrollToSlider(event)"
                        class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">ابدأ</a>
                </div>
            </div>
        </div>
    </section>
    <div class="relative flex py-5 items-center" style="margin-top: 5%">
        <div class="flex-grow border-t border-gray-400" style="margin-left:20%" ></div>
        <span class="flex-shrink mx-4 text-gray-400">أخر الأخبار</span>
        <div class="flex-grow border-t border-gray-400"style="margin-right: 20%"></div>
    </div>


    <div x-data="{ activeSlide: 0, timer: null }" x-init="timer = setInterval(() => {
        activeSlide = activeSlide === 4 ? 0 : activeSlide + 1;
    }, 5000); // set interval to 5 seconds (5000 milliseconds)
    $watch('activeSlide', () => {
        clearInterval(timer);
        timer = setInterval(() => {
            activeSlide = activeSlide === 4 ? 0 : activeSlide + 1;
        }, 5000); // set interval to 5 seconds (5000 milliseconds)
    });" id="default-carousel" class="relative w-full"
        data-carousel="slide"
        style="background-image: url('{{ asset('img/lotus.png') }}'); background-position: left; background-repeat: no-repeat; ">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div x-show.transition="activeSlide === 0" class="absolute inset-0" data-carousel-item>
                <!-- Image with rounded corners -->

                <img src="{{ asset('img/pic1.png') }}" class="h-96 w-7/12 mx-auto  rounded-lg" alt="...">
                <div class=" absolute bottom-0 left-0 right-0 px-4 py-2 opacity-100 text-right"
                    style="bottom: 1cm; right: 11cm;">
                    <h1 class="text-xl text-gray-300 font-bold mb-6">
                        2032/4/22
                    </h1>
                    <h1 class="text-3xl text-black font-bold mb-8 ml-80 ">
                        افتتاح سبيل أحمد أفندي سليم وقبة الخلفاء العباسيين بالقاهرة بعد انتهاء التطوير
                    </h1>
                    <p class="mt-3 text-sm text-black mb-7">
                        <a href="#"
                            class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">اقرأ
                            المزيد</a>
                    </p>
                </div>

            </div>
            <!-- Item 2 -->
            <div x-show.transition="activeSlide === 1" class="absolute inset-0" data-carousel-item>
                <img src="{{ asset('img/pic2.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div x-show.transition="activeSlide === 2" class="absolute inset-0" data-carousel-item>
                <img src="{{ asset('img/pic3.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div x-show.transition="activeSlide === 3" class="absolute inset-0" data-carousel-item>
                <img src="{{ asset('img/pic4.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div x-show.transition="activeSlide === 4" class="absolute inset-0" data-carousel-item>
                <img src="{{ asset('img/pic5.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button @click="activeSlide = 0" type="button" class="w-3 h-3 rounded-full" aria-current="true"
                aria-label="Slide 1"></button>
            <button @click="activeSlide = 1" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 2"></button>
            <button @click="activeSlide = 2" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 3"></button>
            <button @click="activeSlide = 3" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 4"></button>
            <button @click="activeSlide = 4" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 5"></button>
        </div>
        <!-- Slider controls -->
        <button @click="activeSlide = activeSlide === 0 ? 4 : activeSlide - 1" type="button"
            class="absolute top-1/2 left-0 z-30 flex items-center justify-center w-12 h-12 bg-white bg-opacity-50 rounded-full cursor-pointer group focus:outline-none transform -translate-y-1/2"
            data-carousel-prev>
            <!-- Previous button content -->
            <svg class="w-6 h-6 text-gray-800 group-hover:text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414l4 4a1 1 0 001.414-1.414L10.414 10l2.293-2.293a1 1 0 000-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <button @click="activeSlide = activeSlide === 4 ? 0 : activeSlide + 1" type="button"
            class="absolute top-1/2 right-0 z-30 flex items-center justify-center w-12 h-12 bg-white bg-opacity-50 rounded-full cursor-pointer group focus:outline-none transform -translate-y-1/2"
            data-carousel-next>
            <!-- Next button content -->
            <svg class="w-6 h-6 text-gray-800 group-hover:text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 001.414 0l4-4a1 1 0 000-1.414l-4-4a1 1 0 00-1.414 1.414L9.586 10 7.293 12.293a1 1 0 000 1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div class="my-100 h-0.5 border-t-2 border-yellow-500" style="margin-top:10%; margin-right:10%; margin-left:10%; margin-bottom:5%""> </div>

        <section class="bg-white" style=" margin-right: 7%; margin-left:7%;">

          <!-- start of map image -->
             <div class="container px-6 py-10 mx-auto">
             <div class="mt-9 lg:-mx-6 lg:flex lg:items-center" style="margin-top:-15%">
                 <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96" style="margin-left:10%; width: 40%; height:40%;" src="{{ asset('img/Map.png') }}"alt="">
         <!-- End of map image -->
         <!-- start of statement اكتشف خريطة اشهر مواقع حفائر المجلس الاعلي للاثار -->

         <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8" dir="rtl">
           <div class="relative flex items-center justify-center lg:justify-start lg:w-1/20">
             <img src="{{ asset('img/ain.png') }}" alt="ain image" width="600" height="400">
             <div class="absolute inset-0 flex flex-col items-center justify-center " >
               <h1 class="text-3xl font-extrabold sm:text-5xl" dir="rtl"style="font-size:250%; line-height:120%" >
                 <span><span style="color:#d5a419">أكتشف</span> خريطة<br>أشهر مواقع <span style="color:#d5a419">حفائر</span><br>المجلس الأعلى<br>للآثار!</span>
               </h1>
               <a class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75 mt-8" href="/download">
                 <span class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent">
                   اكتشف المزيد
                 </span>
               </a>
             </div>
           </div>
         </div>
          <!-- start of statement اكتشف خريطة اشهر مواقع حفائر المجلس الاعلي للاثار -->
                 </div>
             </div>
         </section>

          <div class="my-100 h-0.5 border-t-2 border-yellow-500" style="margin-top:-13%;margin-right:10%; margin-left:10%;""> </div>
         <div>
             <p class="text-center text-3xl font-extrabold sm:text-4xl" style="margin-top: 5%;">
                 <span>القطع <span style="color:#d5a419">المميزة</span>
                 </span>
             </p>
         </div>


         <div class="grid grid-cols-5 gap-4" dir="rtl" style="margin-top: 5%">
             <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
               <div class="flex items-center justify-center h-56">
                 <a href="#">
                   <img class="rounded-t-lg" src="{{ asset('img/panehsy.png') }}" alt="" />
                 </a>
               </div>
               <div class="p-5" dir="rtl">
                 <a href="#">
                   <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">تابوت بانحسي</h5>
                 </a>
                 <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">لوريم ابجد هوز اي وات سو </p>
                 <a class="inline-flex items-center gap-2 rounded border px-4 py-2 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500" href="/download">
                     <span class="text-sm font-medium"> اعرف المزيد </span>
                     <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                     </svg>
                   </a>
               </div>
             </div>

             <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
               <div class="flex items-center justify-center h-56">
                 <a href="#">
                   <img class="rounded-t-lg" src="{{ asset('img/tut.png') }}" alt="" />
                 </a>
               </div>
               <div class="p-5" dir="rtl">
                 <a href="#">
                   <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">توت عنخ آمون</h5>
                 </a>
                 <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">لوريم ابجد هوز اي وات سو </p>
                 <a class="inline-flex items-center gap-2 rounded border px-4 py-2 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500" href="/download">
                     <span class="text-sm font-medium"> اعرف المزيد </span>
                     <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                     </svg>
                   </a>
               </div>
             </div>

             <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
               <div class="flex items-center justify-center h-56">
                 <a href="#">
                   <img class="rounded-t-lg" src="{{ asset('img/panehsy.png') }}" alt="" />
                 </a>
               </div>
               <div class="p-5" dir="rtl">
                 <a href="#">
                   <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">تابوت بانحسي</h5>
                 </a>
                 <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">لوريم ابجد هوز اي وات سو </p>
                 <a class="inline-flex items-center gap-2 rounded border px-4 py-2 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500" href="/download">
                     <span class="text-sm font-medium"> اعرف المزيد </span>
                     <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                     </svg>
                   </a>
               </div>
             </div>

             <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
               <div class="flex items-center justify-center h-56">
                 <a href="#">
                   <img class="rounded-t-lg" src="{{ asset('img/panehsy.png') }}" alt="" />
                 </a>
               </div>
               <div class="p-5" dir="rtl">
                 <a href="#">
                   <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">تابوت بانحسي</h5>
                 </a>
                 <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">لوريم ابجد هوز اي وات سو </p>
                 <a class="inline-flex items-center gap-2 rounded border px-4 py-2 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500" href="/download">
                     <span class="text-sm font-medium"> اعرف المزيد </span>
                     <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                     </svg>
                   </a>
               </div>
             </div>

             <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
               <div class="flex items-center justify-center h-56">
                 <a href="#">
                   <img class="rounded-t-lg" src="{{ asset('img/panehsy.png') }}" alt="" />
                 </a>
               </div>
               <div class="p-5" dir="rtl">
                 <a href="#">
                   <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">تابوت بانحسي</h5>
                 </a>
                 <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">لوريم ابجد هوز اي وات سو </p>
                 <a class="inline-flex items-center gap-2 rounded border px-4 py-2 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500" href="/download">
                     <span class="text-sm font-medium"> اعرف المزيد </span>
                     <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                     </svg>
                   </a>
               </div>
             </div>
         </div>
               <div class="my-100 h-0.5 border-t-2 border-yellow-500" style="margin-top:10%; margin-right:10%; margin-left:10%; margin-bottom:5%""> </div>

               <figure class="relative" style="margin-left: 30%; margin-top:5%"">
                 <img src="{{ asset('img/key.png') }}" alt="key image">
                 <figcaption class="absolute inset-0 flex items-center justify-center">
                   <div class="text-center"style="margin-right: 40%; margin-bottom:20%" >
                     <p class="text-3xl sm:text-4xl font-extrabold" >
                       <span>كن دائم الاطلاع على أخر <br><span style="color:#d5a419">إصدارتنا العلمية</span></span>
                     </p>
                     <div class="flex items-center justify-center h-screen">
                      <div class="slider-container" >
                        <div x-data="{ activeSlide: 0 }">
                          <!-- Carousel wrapper -->
                          <div class="relative h-96 overflow-hidden rounded-lg mx-auto" style="width: 80%">
                            <!-- Item 1 -->
                            <div x-show.transition="activeSlide === 0" class="absolute inset-0 w-1/3 inline-block" data-carousel-item>
                              <!-- Image with rounded corners -->
                              <img src="{{ asset('img/pic1.png') }}" class="h-96 w-full rounded-lg" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div x-show.transition="activeSlide === 1" class="absolute inset-0 w-1/3 inline-block" data-carousel-item>
                              <img src="{{ asset('img/pic1.png') }}" class="h-96 w-full rounded-lg" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div x-show.transition="activeSlide === 2" class="absolute inset-0 w-1/3 inline-block" data-carousel-item>
                              <img src="{{ asset('img/pic1.png') }}" class="h-96 w-full rounded-lg" alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div x-show.transition="activeSlide === 3" class="absolute inset-0 w-1/3 inline-block" data-carousel-item>
                              <img src="{{ asset('img/tut.png') }}" class="h-96 w-full rounded-lg" alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div x-show.transition="activeSlide === 4" class="absolute inset-0 w-1/3 inline-block" data-carousel-item>
                              <img src="{{ asset('img/pic1.png') }}" class="h-96 w-full rounded-lg" alt="...">
                            </div>
                          </div>
                          <!-- Slider indicators -->
                          <div class="absolute z-30 flex space-x-2 bottom-0 left-1/2 transform -translate-x-1/2 mb-2">
                            <button x-on:click="activeSlide = 0" class="h-2 w-2 rounded-full bg-gray-400 focus:outline-none focus:bg-gray-600"></button>
                            <button x-on:click="activeSlide = 1" class="h-2 w-2 rounded-full bg-gray-400 focus:outline-none focus:bg-gray-600"></button>
                            <button x-on:click="activeSlide = 2" class="h-2 w-2 rounded-full bg-gray-400 focus:outline-none focus:bg-gray-600"></button>
                            <button x-on:click="activeSlide = 3" class="h-2 w-2 rounded-full bg-gray-400 focus:outline-none focus:bg-gray-600"></button>
                            <button x-on:click="activeSlide = 4" class="h-2 w-2 rounded-full bg-gray-400 focus:outline-none focus:bg-gray-600"></button>
                          </div>
                          <!-- Previous/next buttons -->
                          <button x-on:click="activeSlide = (activeSlide - 1 + 5) % 5" class="absolute z-30 left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full px-4 py-2 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                            </svg>
                          </button>
                          <button x-on:click="activeSlide = (activeSlide + 1) % 5" class="absolute z-30 right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full px-4 py-2 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                 </figcaption>

               </figure>
 <!--The sixth slider -->
               <div class="my-100 h-0.5 border-t-2 border-yellow-500" style="margin-top:10%; margin-right:10%; margin-left:10%; margin-bottom:5%""> </div>

               <section class="bg-white">
                 <div class="container px-6 py-10 mx-auto" dir="rtl">


                     <div class="mt-8 lg:-mx-6 lg:flex lg:items-center" style="margin-right: 10%; margin-top:-5%">
                         <img src="{{ asset('img/magls.png') }}">

                         <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">


                             <a href="#" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white">
                                 All the features you want to know
                             </a>

                             <div class="text-center"style="margin-left: 10%; margin-top:10%">
                               <p class="text-3xl sm:text-4xl font-extrabold" >
                                 <span>هل تريد معرفة المزيد؟<br>لا تتردد في
                                   <span style="color:#d5a419">التواصل</span>
                                   معنا </span>

                               </p>
                               <a class="inline-block rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:outline-none focus:ring active:text-opacity-75 mt-8" href="/download">
                                 <span class="block rounded-full bg-white px-8 py-3 text-sm font-medium hover:bg-transparent">
                                   تواصل معنا
                                 </span>
                               </a>
                             </div>

                         </div>
                     </div>
                 </div>
             </section>
              <!-- The footer -->
             <div class="my-100 h-0.5 border-t-2 border-black" style="margin-top:10%; margin-right:10%; margin-left:10%; margin-bottom:5%""> </div>

             <section style="margin-top:-5%">
               <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                 <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
                   <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4" style="margin-left:20%; " >
                     <!--community column in the footer -->
                    <div>
                       <p class="font-extrabold tracking-wide text-black">Community</p>
                       <ul class="mt-2 space-y-2">
                         <li>
                           <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Featured artists</a>
                         </li>
                         <li>
                           <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">The portal</a>
                         </li>
                         <li>
                           <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Live events</a>
                         </li>
                       </ul>
                     </div>
                      <!--company column in the footer -->
                     <div>
                       <p class="font-extrabold tracking-wide text-black">Company</p>
                       <ul class="mt-2 space-y-2">
                         <li>
                           <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">About us</a>
                         </li>
                         <li>
                           <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Conyacy us</a>
                         </li>
                         <li>
                           <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">History</a>
                         </li>

                       </ul>
                     </div>

                   </div>
                    <!--The sentence of حفائر المجلس الاعلى للاثار in the footer -->
                   <div class="text-right">
                     <div class="text-3xl font-extrabold sm:text-4xl" style="margin-right:5%">
                       <p>
                         <span><span style="color:#d5a419">حفائر </span><br> المجلس <br>الأعلى للآثار  </span>
                       </p>
                     </div>
                   </div>
                   </div>
                 </div>
                  <!--Copy Right -->
                 <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row" style="margin-right:13%; margin-left:13%">
                   <p class="text-sm  text-gray-500">
                     ©جميع الحقوق محفوظة 2023
                   </p>
                    <!--Icons in the footer -->
                   <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                     <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                       <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                         <path
                           d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                         ></path>
                       </svg>
                     </a>
                     <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                       <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                         <circle cx="15" cy="15" r="4"></circle>
                         <path
                           d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                         ></path>
                       </svg>
                     </a>
                     <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                       <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                         <path
                           d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                         ></path>
                       </svg>
                     </a>
                   </div>
                 </div>
               </div>

<!-- Start of Javascript Code -->
         <script>
             function scrollToSlider(event) {
                 event.preventDefault(); // Prevent the default link behavior
                 const slider = document.getElementById('slider');
                 slider.scrollIntoView({
                     behavior: 'smooth'
                 });
             }
         </script>
         <script>
             document.addEventListener('keydown', (event) => {
                 const carousel = document.getElementById('slider');
                 const xData = carousel.__x.$data;

                 switch (event.key) {
                     case 'ArrowLeft':
                         xData.activeSlide = xData.activeSlide === 0 ? 4 : xData.activeSlide - 1;
                         break;
                     case 'ArrowRight':
                         xData.activeSlide = xData.activeSlide === 4 ? 0 : xData.activeSlide + 1;
                         break;
                 }
             });
         </script>
         <script>
          function scrollToSlider(event) {
              event.preventDefault(); // Prevent the default link behavior
              const slider = document.getElementById('default-carousel');
              slider.scrollIntoView({
                  behavior: 'smooth'
              });
          }
      </script>
      <script>
          document.addEventListener('keydown', (event) => {
              const carousel = document.getElementById('default-carousel');
              const xData = carousel.__x.$data;

              switch (event.key) {
                  case 'ArrowLeft':
                      xData.activeSlide = xData.activeSlide === 0 ? 4 : xData.activeSlide - 1;
                      break;
                  case 'ArrowRight':
                      xData.activeSlide = xData.activeSlide === 4 ? 0 : xData.activeSlide + 1;
                      break;
              }
          });
      </script>
<!-- End of Javascript Code -->
</body>

</html>



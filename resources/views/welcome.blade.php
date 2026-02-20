<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSB Eye Hospital</title>

    {{-- Tailwind via Vite --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
    <style>
        /* Ensures smooth parallax scrolling on compatible browsers */
        .parallax-footer {
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Mobile adjustment: parallax can be taxing on mobile CPUs, 
           so we often disable 'fixed' for smoother scrolling on small screens */
        @media (max-width: 768px) {
            .parallax-footer {
                background-attachment: scroll;
            }
        }
    </style>
</head>

<body class="text-gray-800">

    <header
        class="hidden lg:block fixed top-0 w-full z-[999] bg-[#D8A96A] shadow-md font-['Lato',_sans-serif] bg-[#D8A96A]">
        <div class="max-w-7xl mx-auto px-4 h-[70px] flex items-center justify-between">

            <div class="flex-shrink-0">
                <a href="#hero-1" class="flex items-center gap-4">
                    <img src="{{ asset('pictures/osb_eye_hospital_logo.png') }}"
                        class="w-[85px] h-[80px] object-contain" alt="header-logo">

                    <div class="flex flex-col justify-center border-l border-gray-300 pl-4">
                        <span class="text-[20px] font-bold text-gray-800 leading-tight">
                            ওএসবি চক্ষু হাসপাতাল
                        </span>
                        <span class="text-[12px] text-stone-900 font-medium">
                            OSB Eye Hospital
                        </span>
                    </div>
                </a>
            </div>



            <nav class="hidden lg:block">

                <ul class="flex items-center space-x-1">



                    <li class="group relative">

                        <a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-stone-900 flex items-center group-hover:text-cyan-600 transition-colors">

                            Home <span class="ml-2 border-t-4 border-x-4 border-x-transparent border-t-gray-400"></span>

                        </a>

                        <ul class="absolute top-[70px] left-0 w-48 bg-[#BF8142] border border-gray-100 shadow-xl
           opacity-0 invisible translate-y-4 scale-95
           group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 group-hover:scale-100
           transition-all duration-300 ease-out">

                            <li>
                                <a href="demo-2.html"
                                    class="block px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:pl-6 transition-all">
                                    Home Concept #2
                                </a>
                            </li>

                            <li class="group/submenu relative">
                                <a href="#"
                                    class="flex items-center justify-between px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:pl-6 transition-all">
                                    <span>More Options</span>
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>

                                <ul class="absolute top-0 left-full w-48 bg-[#BF8142] border border-gray-100 shadow-xl
                   opacity-0 invisible translate-x-4
                   group-hover/submenu:opacity-100 group-hover/submenu:visible group-hover/submenu:translate-x-0
                   transition-all duration-300 ease-out">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:pl-6 transition-all">Sub
                                            Item A</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:pl-6 transition-all">Sub
                                            Item B</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="demo-3.html"
                                    class="block px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:pl-6 transition-all">
                                    Home Concept #3
                                </a>
                            </li>
                        </ul>

                    </li>


                    <li class="group static">

                        <a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-stone-900 flex items-center group-hover:text-cyan-600 transition-colors">

                            Pages <span
                                class="ml-2 border-t-4 border-x-4 border-x-transparent border-t-gray-400"></span>

                        </a>

                        <div class="absolute top-[70px] left-0 w-full bg-[#BF8142] border-t border-gray-100 shadow-2xl
         opacity-0 invisible
         translate-y-6 scale-95
         group-hover:opacity-100 group-hover:visible
         group-hover:translate-y-0 group-hover:scale-100
         transition-all duration-400 ease-out px-8 py-10">

                            <div class="max-w-7xl mx-auto grid grid-cols-4 gap-8">

                                <div>

                                    <h3 class="text-lg font-bold text-black mb-4">Standard Pages:</h3>

                                    <ul class="space-y-1">

                                        <li><a href="about-us.html"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">About

                                                Us Page</a></li>

                                        <li><a href="who-we-are.html"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Who

                                                We Are</a></li>

                                    </ul>

                                </div>

                                <div>

                                    <h3 class="text-lg font-bold text-black mb-4">Medical Pages:</h3>

                                    <ul class="space-y-1">

                                        <li><a href="all-departments.html"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Our

                                                Departments</a></li>

                                        <li><a href="all-doctors.html"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Meet

                                                the Doctors</a></li>

                                    </ul>

                                </div>

                                <div>

                                    <h3 class="text-lg font-bold text-black mb-4">Special Pages:</h3>

                                    <ul class="space-y-1">

                                        <li><a href="appointment.html"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Make

                                                an Appointment</a></li>

                                    </ul>

                                </div>

                                <div>

                                    <h3 class="text-lg font-bold text-black mb-4">Auxiliary Pages:</h3>

                                    <ul class="space-y-1">

                                        <li><a href="blog-listing.html"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Blog

                                                Listing</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </li>



                    <li class="group static">
                        <a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-stone-900 flex items-center group-hover:text-cyan-600 transition-colors">
                            Mega Menu
                            <span class="ml-2 border-t-4 border-x-4 border-x-transparent border-t-gray-400"></span>
                        </a>

                        <div class="absolute top-[70px] left-0 w-full bg-[#BF8142] border-t border-gray-100 shadow-2xl
         opacity-0 invisible
         translate-y-6 scale-95
         group-hover:opacity-100 group-hover:visible
         group-hover:translate-y-0 group-hover:scale-100
         transition-all duration-400 ease-out px-8 py-10">

                            <div class="max-w-7xl mx-auto flex flex-wrap lg:flex-nowrap gap-8">

                                <div class="w-1/4">
                                    <h3 class="text-lg font-bold text-black mb-4">Quick Links:</h3>
                                    <ul class="space-y-1">
                                        <li><a href="#"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Online
                                                Patients Portal</a></li>
                                        <li><a href="#"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Insurance
                                                Info</a></li>
                                        <li><a href="#"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Medical
                                                Services</a></li>
                                        <li><a href="#"
                                                class="block py-2 text-[15px] text-black border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Find
                                                a Doctor</a></li>
                                    </ul>
                                </div>

                                <div class="w-5/12">
                                    <h3 class="text-lg font-bold text-black mb-4">Featured News:</h3>
                                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80"
                                        class="w-full rounded h-48 object-cover" alt="Medical News Featured">
                                    <h5 class="mt-4 text-md font-bold text-black hover:underline cursor-pointer">
                                        5 Benefits of integrative medicine
                                    </h5>
                                    <p class="text-xs text-black mt-2 leading-relaxed">
                                        Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus
                                        feugiat dolor.
                                    </p>
                                </div>

                                <div class="w-1/3">
                                    <h3 class="text-lg font-bold text-black mb-4">Latest News:</h3>

                                    <div class="space-y-4 max-h-[400px] overflow-y-auto pr-4 custom-news-scrollbar">

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1504813184591-01572f98c85f?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-black hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    Etiam sapien risus ante auctor tempus...
                                                </a>
                                                <p class="text-xs text-black-400 mt-1">43 Comments</p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-black hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    Maecenas vel elit at purus lacinia...
                                                </a>
                                                <p class="text-xs text-black-400 mt-1">12 Comments</p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-black hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    New advancements in Cardiology 2024...
                                                </a>
                                                <p class="text-xs text-black-400 mt-1">18 Comments</p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-black hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    Understanding the future of Telehealth...
                                                </a>
                                                <p class="text-xs text-black-400 mt-1">25 Comments</p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-black hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    Global Health Summit highlights...
                                                </a>
                                                <p class="text-xs text-black-400 mt-1">9 Comments</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <style>
                        /* Custom Scrollbar Styles */
                        .custom-news-scrollbar::-webkit-scrollbar {
                            width: 4px;
                        }

                        .custom-news-scrollbar::-webkit-scrollbar-track {
                            background: #f3f4f6;
                            border-radius: 10px;
                        }

                        .custom-news-scrollbar::-webkit-scrollbar-thumb {
                            background: #0891b2;
                            /* Matches Cyan-600 */
                            border-radius: 10px;
                        }

                        .custom-news-scrollbar::-webkit-scrollbar-thumb:hover {
                            background: #0e7490;
                        }
                    </style>



                    <li><a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-stone-900 hover:text-cyan-600 transition-colors">Simple

                            Link</a></li>



                    <li class="pl-4">

                        <a href="appointment.html"
                            class="bg-cyan-600 text-stone-900 px-5 py-2.5 rounded text-[14.5px] font-medium hover:bg-cyan-700 transition-colors">

                            Make an Appointment

                        </a>

                    </li>

                </ul>

            </nav>

        </div>
    </header>

    <header class="block lg:hidden fixed top-0 w-full z-[999] bg-white shadow-md font-['Lato',_sans-serif]">
        <div class="max-w-7xl mx-auto px-4 h-[70px] flex items-center justify-between">

            <div class="flex-shrink-0">
                <a href="#hero-1">
                    <img src="images/logo-grey.png" class="w-[150px] h-auto" alt="logo">
                </a>
            </div>

            <label for="menu-toggle" class="cursor-pointer p-2 text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </label>

            <input type="checkbox" id="menu-toggle" class="hidden peer">

            <div
                class="fixed inset-0 bg-black/50 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible transition-all">
            </div>

            <nav
                class="fixed top-0 left-0 h-full w-[300px] bg-white shadow-2xl -translate-x-full peer-checked:translate-x-0 transition-transform duration-300 z-[1000] overflow-y-auto">
                <div class="flex justify-end p-4">
                    <label for="menu-toggle" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </label>
                </div>

                <ul class="flex flex-col">
                    <li class="border-b border-gray-100">
                        <a href="#"
                            class="px-5 py-4 text-[15px] font-medium text-gray-700 flex justify-between items-center">Home</a>
                    </li>
                    <li class="border-b border-gray-100">
                        <a href="#" class="px-5 py-4 text-[15px] font-medium text-gray-700">Pages</a>
                    </li>
                    <li class="p-5">
                        <a href="appointment.html"
                            class="block text-center bg-cyan-600 text-black px-6 py-3 rounded font-medium">
                            Make an Appointment
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>






    <div x-data="{ 
        activeSlide: 1, 
        slides: [
            { 
                id: 1, 
                title: '', 
                desc: '', 
                img: '{{ asset('pictures/osb_slider_image_one.png') }}'
            },
            { 
                id: 2, 
                title: '', 
                desc: '', 
                img: '{{ asset('pictures/osb_slider_image_two.jpg') }}'
            },
            { 
                id: 3, 
                title: 'QUANTUM OPS', 
                desc: 'Sub-atomic data processing.', 
                img: '{{ asset('pictures/osb_slider_image_three.jpeg') }}'
            }
        ],
        timer: null,
        startTimer() {
            this.stopTimer(); // Clear existing timer first
            this.timer = setInterval(() => {
                this.next();
            }, 8000);
        },
        stopTimer() {
            if (this.timer) {
                clearInterval(this.timer);
                this.timer = null;
            }
        },
        next() {
            this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1;
            this.startTimer(); // reset timer on manual navigation
        },
        prev() {
            this.activeSlide = this.activeSlide === 1 ? this.slides.length : this.activeSlide - 1;
            this.startTimer(); // reset timer on manual navigation
        }
    }" x-init="startTimer()" @mouseenter="stopTimer()" @mouseleave="startTimer()"
        class="relative h-dvh min-h-[600px] w-full overflow-hidden bg-black group">

        <!-- Slides -->
        <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" x-transition:enter="transition ease-in-out duration-[3000ms]"
                x-transition:enter-start="opacity-0 scale-110" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in-out duration-[3000ms]"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-105"
                class="absolute inset-0">
                <img :src="slide.img" class="absolute inset-0 w-full h-full object-cover brightness-[0.8]"
                    :alt="slide.title || 'Slide image'">

                <div class="relative h-full flex items-center px-12 md:px-24 lg:px-32">
                    <div class="max-w-xl lg:max-w-2xl">
                        <h2 class="text-white text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black italic tracking-tighter leading-none mb-4 md:mb-6"
                            x-show="activeSlide === slide.id"
                            x-transition:enter="transition duration-[3000ms] delay-500"
                            x-transition:enter-start="opacity-0 translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0" x-text="slide.title"></h2>
                        <p class="text-blue-400 text-lg md:text-xl lg:text-2xl font-bold uppercase tracking-widest"
                            x-show="activeSlide === slide.id"
                            x-transition:enter="transition duration-[3000ms] delay-800"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-text="slide.desc"></p>
                    </div>
                </div>
            </div>
        </template>

        <!-- Navigation Buttons -->
        <div class="absolute inset-0 flex items-center justify-between px-6 md:px-10 lg:px-16 z-30 pointer-events-none">
            <button @click="prev()"
                class="pointer-events-auto p-4 md:p-6 rounded-full border border-black/20 bg-black/50 hover:bg-white text-white hover:text-black transition-all duration-500 backdrop-blur-lg shadow-lg">
                <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button @click="next()"
                class="pointer-events-auto p-4 md:p-6 rounded-full border border-black/20 bg-black/50 hover:bg-white text-white hover:text-black transition-all duration-500 backdrop-blur-lg shadow-lg">
                <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Pagination Dots -->
        <div class="absolute bottom-8 md:bottom-12 left-1/2 -translate-x-1/2 flex space-x-4 z-30">
            <template x-for="slide in slides" :key="slide.id">
                <button @click="activeSlide = slide.id; startTimer();"
                    class="h-1.5 md:h-2 transition-all duration-1000 rounded-full"
                    :class="activeSlide === slide.id ? 'w-16 md:w-20 bg-white' : 'w-4 md:w-6 bg-white/30'"></button>
            </template>
        </div>

    </div>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>





    <section id="doctors-1" class="py-24 bg-[#FAEBD7]">
        <div class="container w-4/5 mx-auto px-4">

            <!-- SECTION TITLE -->
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold text-stone mb-5">Hospital Management Committee</h3>
                <p class="text-stone px-10 md:px-48">
                    Our Management Committee brings together seasoned healthcare leaders dedicated to strategic
                    excellence. By integrating clinical expertise with robust administrative oversight, we ensure our
                    facility remains at the forefront of modern medicine.
                </p>
            </div>

            <div class="flex flex-wrap -mx-4">

                <!-- DOCTOR #1 -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div class="relative overflow-hidden h-80">
                        <img src="{{ asset('pictures/doctorOne.jpg') }}" alt="doctor-foto"
                            class="w-full h-full object-cover transform scale-110 hover:scale-100 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-[#00a3c8]/85 opacity-0 hover:opacity-100 transition-opacity duration-400 flex items-center justify-center">
                            <a href="doctor-1.html"
                                class="bg-white text-black px-4 py-2 rounded opacity-100 transform translate-y-0 transition-all duration-400">
                                View More Info
                            </a>
                        </div>
                    </div>
                    <div class="pt-4">
                        <h5 class="text-lg font-bold text-stone mb-1">Prof. Md. Shahabuddin</h5>
                        <span class="text-[#00a3c8] block mb-2">Convener</span>
                        <p class="text-gray-600 text-sm">
                            Welcome to the website of Opthalmological Society Of Bangladesh (OSB) which was developed by
                            the Ophthalmologists of Bangladesh in 1972. The aim of the society is to work for the
                            betterment of Ophthalmologists of Bangladesh as well as to work for the betterment of
                            Ophthalmology in Bangladesh.</p>
                        <p class="text-gray-600 text-sm">
                            বাংলাদেশের প্রায় ৮ লক্ষ মানুষ অন্ধত্বের শিকার এবং প্রতি বছর প্রায় ২ লক্ষ মানুষ নতুন করে অন্ধ
                            হচ্ছে। আমরা ২০৩০ সালের মধ্যে সবার চোখের দৃষ্টি ফিরিয়ে দিতে অঙ্গীকারবদ্ধ। বাংলাদেশের সকল
                            চক্ষু চিকিৎসকগণ দেশের সকলের চক্ষু চিকিৎসা সেবা নিশ্চিত করতে বদ্ধপরিকর।
                        </p>
                    </div>
                </div>

                <!-- DOCTOR #2 -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div class="relative overflow-hidden h-80">
                        <img src="{{ asset('pictures/doctorTwo.jpg') }}" alt="doctor-foto"
                            class="w-full h-full object-cover transform scale-110 hover:scale-100 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-[#00a3c8]/85 opacity-0 hover:opacity-100 transition-opacity duration-400 flex items-center justify-center">
                            <a href="doctor-2.html"
                                class="bg-white text-black px-4 py-2 rounded opacity-100 transform translate-y-0 transition-all duration-400">
                                View More Info
                            </a>
                        </div>
                    </div>
                    <div class="pt-4">
                        <h5 class="text-lg font-bold text-stone mb-1">Prof. Md. Zinnu Rain (Newton)</h5>
                        <span class="text-[#00a3c8] block mb-2">Member Secretary</span>
                        <p class="text-gray-600 text-sm">
                            At the very beginning, I respectfully remember those who, out of love for their country,
                            sacrificed their lives in 1971 to bring us the red sun of independence — giving the nation
                            the red and green flag of freedom. I also remember with deep respect my honorable teachers
                            and ophthalmologists who have departed from us forever.</p>
                        <p class="text-gray-600 text-sm">
                            দেশের বিভিন্ন হাসপাতাল এবং মেডিকেল কলেজগুলোতে শূন্যপদ পূরণ, Post Graduate ছাত্রের সংখ্যা
                            বৃদ্ধি, গবেষণার ক্ষেত্রে অনুদান, প্রতিটি মেডিকেল কলেজ এবং ইনস্টিটিউট অফথালমোলজী
                            সাব-স্পেশালিটি পদ সৃষ্টিসহ চিকিৎসক নিয়োগের জন্য সরকারের নিকট আবেদন জানাচ্ছি।
                        </p>
                    </div>
                </div>

                <!-- DOCTOR #3 -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div class="relative overflow-hidden h-80">
                        <img src="{{ asset('pictures/doctorThree.jpg') }}" alt="doctor-foto"
                            class="w-full h-full object-cover transform scale-110 hover:scale-100 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-[#00a3c8]/85 opacity-0 hover:opacity-100 transition-opacity duration-400 flex items-center justify-center">
                            <a href="doctor-3.html"
                                class="bg-white text-black px-4 py-2 rounded opacity-100 transform translate-y-0 transition-all duration-400">
                                View More Info
                            </a>
                        </div>
                    </div>
                    <div class="pt-4">
                        <h5 class="text-lg font-bold text-stone mb-1">Dr Syeed Mehbub Ul Kadir</h5>
                        <span class="text-[#00a3c8] block mb-2">Consultant Orbit, Aesthetic & Ocluplastic
                            Surgeon.</span>
                        <p class="text-gray-600 text-sm">
                            At the very beginning, I respectfully remember those who, out of love for their country,
                            sacrificed their lives in 1971 to bring us the red sun of independence — giving the nation
                            the red and green flag of freedom. I also remember with deep respect my honorable teachers
                            and ophthalmologists who have departed from us forever.</p>
                        <p class="text-gray-600 text-sm">
                            দেশের বিভিন্ন হাসপাতাল এবং মেডিকেল কলেজগুলোতে শূন্যপদ পূরণ, Post Graduate ছাত্রের সংখ্যা
                            বৃদ্ধি, গবেষণার ক্ষেত্রে অনুদান, প্রতিটি মেডিকেল কলেজ এবং ইনস্টিটিউট অফথালমোলজী
                            সাব-স্পেশালিটি পদ সৃষ্টিসহ চিকিৎসক নিয়োগের জন্য সরকারের নিকট আবেদন জানাচ্ছি।
                        </p>
                    </div>
                </div>

            </div>

            <!-- ALL DOCTORS BUTTON -->
            <div class="text-center mt-12">
                <a href="all-doctors.html"
                    class="bg-[#00a3c8] hover:bg-[#0e8eab] text-white font-semibold px-6 py-3 rounded transition-colors duration-300">
                    Meet All Doctors
                </a>
            </div>

        </div>
    </section>






    <section id="info-8" class="relative py-24 text-stone-900 bg-[#FAEBD7]">

        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center">

                <!-- Content -->
                <div class="w-full md:w-7/12 lg:w-5/12">
                    <div class="bg-[#BF8142] p-8 md:p-12 md:pr-16 rounded-lg relative
    z-10
    transform translate-y-[141px] md:translate-y-0 md:translate-x-[85px]
    wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Title -->
                        <h4 class="text-2xl md:text-3xl font-bold mb-4">Consultation Charges</h4>

                        <!-- Short Description -->
                        <p class="mb-6 text-base leading-relaxed">
                            Our consultation fees are structured to ensure accessible and quality care for every
                            patient.
                            Please see the details below.
                        </p>

                        <!-- Table -->
                        <table class="w-full mb-6 text-sm sm:text-base">
                            <tbody>
                                <tr class="border-b border-dashed border-black/60 font-semibold text-lg">
                                    <td>Regular Consultation (Fast Track)</td>
                                    <td class="px-2">—</td>
                                    <td class="text-right">৳ 500</td>
                                </tr>
                                <tr class="border-b border-dashed border-black/60 font-semibold text-lg">
                                    <td>Follow-up Visit</td>
                                    <td class="px-2">—</td>
                                    <td class="text-right">৳ 300</td>
                                </tr>
                                <tr class="border-b border-dashed border-black/60 font-semibold text-lg">
                                    <td>Sub-specialty Consultation</td>
                                    <td class="px-2">—</td>
                                    <td class="text-right">৳ 500</td>
                                </tr>
                                <tr class="font-semibold text-lg">
                                    <td>Referred Sub-specialty Visit</td>
                                    <td class="px-2">—</td>
                                    <td class="text-right">৳ 300</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Optional Note -->
                        <p class="text-sm opacity-90">
                            * Fees may vary depending on medical requirements.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Image -->
        <div class="absolute top-0 left-0 w-full h-64 sm:h-80 md:top-0 md:left-2/5 md:w-3/5 md:h-full bg-cover bg-center"
            style="background-image: url('{{ asset('pictures/timetable_image.jpg') }}');">
        </div>
    </section>









    <!-- Include Alpine.js for modal functionality -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <section class="py-24 bg-[#FAEBD7]" x-data="{ open: false, activeImage: '' }">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-red-600 uppercase font-medium border-l-4 border-red-600 pl-3">Our Photo Gallery</span>
                <h2 class="text-4xl font-bold mt-4">We are Dedicated to <strong>Helping Our Patients</strong></h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

                <div class="relative group overflow-hidden rounded-lg cursor-pointer"
                    @click="activeImage='https://visioneyebd.org/storage/files/Gallery/1739260930WhatsAppImage2025-02-10at231941042fa774.jpg'; open = true">
                    <img src="https://visioneyebd.org/storage/files/Gallery/1739260930WhatsAppImage2025-02-10at231941042fa774.jpg"
                        alt="Patient"
                        class="w-full h-64 object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="px-4 py-2 bg-red-600 text-white font-semibold rounded shadow-lg">View</span>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-lg cursor-pointer"
                    @click="activeImage='https://visioneyebd.org/storage/files/Gallery/1739261048WhatsAppImage2025-02-10at2319390b76b8e0.jpg'; open = true">
                    <img src="https://visioneyebd.org/storage/files/Gallery/1739261048WhatsAppImage2025-02-10at2319390b76b8e0.jpg"
                        alt="Patient"
                        class="w-full h-64 object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="px-4 py-2 bg-red-600 text-white font-semibold rounded shadow-lg">View</span>
                    </div>
                </div>

            </div>

            <div x-show="open" x-transition.opacity
                class="fixed inset-0 bg-black/90 flex items-center justify-center z-[9999] p-4"
                @keydown.escape.window="open = false" style="display: none;">
                <div class="relative max-w-5xl w-full flex justify-center" @click.outside="open = false">
                    <img :src="activeImage" class="max-h-[90vh] w-auto rounded-lg shadow-2xl border-4 border-black/10">
                    <button @click="open = false"
                        class="absolute -top-10 right-0 text-white text-4xl hover:text-red-500 transition-colors">&times;</button>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="https://visioneyebd.org/gallery"
                    class="text-red-600 underline font-medium hover:text-red-700">View All Gallery</a>
            </div>
        </div>
    </section>


    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Opnix Eye Care Services
                </h2>
            </div>

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- CARD 1 -->
                <div class="group transition-all duration-300 hover:-translate-y-2">

                    <img src="pictures/retina.jpg" class="rounded-xl w-full">

                    <!-- Small Gold Card -->
                    <div
                        class="relative bg-[#D8A96A] text-white rounded-xl shadow-xl p-6 -mt-10 mx-4 overflow-hidden transition-all duration-300">

                        <!-- Animated Corners -->
                        <div
                            class="absolute top-0 left-0 w-6 h-6 border-t-4 border-l-4 border-cyan-600 rounded-tl-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>

                        <div
                            class="absolute top-0 right-0 w-6 h-6 border-t-4 border-r-4 border-cyan-600 rounded-tr-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>

                        <div
                            class="absolute bottom-0 right-0 w-6 h-6 border-b-4 border-r-4 border-cyan-600 rounded-br-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>

                        <div
                            class="absolute bottom-0 left-0 w-6 h-6 border-b-4 border-l-4 border-cyan-600 rounded-bl-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>

                        <!-- Icon -->
                        <div
                            class="relative z-10 w-14 h-14 bg-white text-[#D8A96A] rounded-lg flex items-center justify-center mb-4 shadow-md">
                            👁️
                        </div>

                        <h3 class="relative z-10 text-xl font-semibold mb-2">
                            Retina Repair
                        </h3>

                        <p class="relative z-10 text-sm text-white/90 mb-3">
                            Advanced retinal treatment solutions for vision restoration.
                        </p>

                        <a href="#" class="relative z-10 font-medium underline">
                            More Details +
                        </a>

                    </div>
                </div>


                <!-- CARD 2 -->
                <div class="group transition-all duration-300 hover:-translate-y-2">

                    <img src="pictures/glaucoma.jpg" class="rounded-xl w-full">

                    <div
                        class="relative bg-[#D8A96A] text-white rounded-xl shadow-xl p-6 -mt-10 mx-4 overflow-hidden transition-all duration-300">

                        <div
                            class="absolute top-0 left-0 w-6 h-6 border-t-4 border-l-4 border-cyan-600 rounded-tl-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>
                        <div
                            class="absolute top-0 right-0 w-6 h-6 border-t-4 border-r-4 border-cyan-600 rounded-tr-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-6 h-6 border-b-4 border-r-4 border-cyan-600 rounded-br-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-6 h-6 border-b-4 border-l-4 border-cyan-600 rounded-bl-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>

                        <div
                            class="relative z-10 w-14 h-14 bg-white text-[#D8A96A] rounded-lg flex items-center justify-center mb-4 shadow-md">
                            🛡️
                        </div>

                        <h3 class="relative z-10 text-xl font-semibold mb-2">
                            Glaucoma & Cornea
                        </h3>

                        <p class="relative z-10 text-sm text-white/90 mb-3">
                            Complete glaucoma care and corneal disease management.
                        </p>

                        <a href="#" class="relative z-10 font-medium underline">
                            More Details +
                        </a>

                    </div>
                </div>


                <!-- CARD 3 -->
                <div class="group transition-all duration-300 hover:-translate-y-2">

                    <img src="pictures/pedia.jpg" class="rounded-xl w-full">

                    <div
                        class="relative bg-[#D8A96A] text-white rounded-xl shadow-xl p-6 -mt-10 mx-4 overflow-hidden transition-all duration-300">

                        <div
                            class="absolute top-0 left-0 w-6 h-6 border-t-4 border-l-4 border-cyan-600 rounded-tl-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>
                        <div
                            class="absolute top-0 right-0 w-6 h-6 border-t-4 border-r-4 border-cyan-600 rounded-tr-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-6 h-6 border-b-4 border-r-4 border-cyan-600 rounded-br-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-6 h-6 border-b-4 border-l-4 border-cyan-600 rounded-bl-xl transition-all duration-300 group-hover:w-14 group-hover:h-14">
                        </div>

                        <div
                            class="relative z-10 w-14 h-14 bg-white text-[#D8A96A] rounded-lg flex items-center justify-center mb-4 shadow-md">
                            ✨
                        </div>

                        <h3 class="relative z-10 text-xl font-semibold mb-2">
                            Laser Surgery
                        </h3>

                        <p class="relative z-10 text-sm text-white/90 mb-3">
                            Safe and advanced laser procedures for clear vision.
                        </p>

                        <a href="#" class="relative z-10 font-medium underline">
                            More Details +
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>



    {{-- Footer --}}
    <footer class="parallax-footer relative bg-[#D8A96A] text-black"
        style="background-image: linear-gradient(rgba(216, 169, 106, 0.85), rgba(216, 169, 106, 0.9)), url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=2000');">

        <div class="max-w-7xl mx-auto px-6 py-20">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-4">

                <div>
                    <img src="images/logo-black.svg" alt="Logo" class="mb-6 w-44">
                    <p class="text-black/80 text-sm mb-6">
                        ClinicMaster Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam
                    </p>

                    <div
                        class="flex items-center gap-4 bg-white/50 backdrop-blur-sm text-black p-4 rounded-xl shadow-md border border-black/10">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_Reference_icon.svg"
                            class="w-8" alt="Google">
                        <div>
                            <div class="flex items-center gap-1 text-black">
                                <i class="fa fa-star text-xs"></i><i class="fa fa-star text-xs"></i><i
                                    class="fa fa-star text-xs"></i><i class="fa fa-star text-xs"></i><i
                                    class="fa fa-star text-xs"></i>
                                <span class="ml-2 text-sm font-bold">(4.8)</span>
                            </div>
                            <p class="text-[10px] uppercase tracking-wider text-black/60 font-bold">12k+ ratings on
                                Google</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h2
                        class="text-lg font-bold mb-5 relative inline-block after:content-[''] after:absolute after:w-10 after:h-0.5 after:bg-black after:-bottom-2 after:left-0">
                        Quick Links</h2>
                    <ul class="space-y-3 text-sm text-black/80 mt-4 font-medium">
                        <li><a href="#" class="hover:text-black hover:translate-x-1 inline-block transition-all">About
                                Us</a></li>
                        <li><a href="#" class="hover:text-black hover:translate-x-1 inline-block transition-all">Our
                                Services</a></li>
                        <li><a href="#" class="hover:text-black hover:translate-x-1 inline-block transition-all">Our
                                Team</a></li>
                        <li><a href="#"
                                class="hover:text-black hover:translate-x-1 inline-block transition-all">Appointments</a>
                        </li>
                        <li><a href="#" class="hover:text-black hover:translate-x-1 inline-block transition-all">Contact
                                Us</a></li>
                    </ul>
                </div>

                <div>
                    <h2
                        class="text-lg font-bold mb-5 relative inline-block after:content-[''] after:absolute after:w-10 after:h-0.5 after:bg-black after:-bottom-2 after:left-0">
                        Contact Us</h2>
                    <ul class="space-y-4 text-sm mt-4 font-medium">
                        <li class="flex items-center gap-3 border-b border-black/10 pb-3">
                            <i class="fa-regular fa-envelope"></i>
                            <a href="mailto:contact@company.com" class="hover:underline">contact@company.com</a>
                        </li>
                        <li class="flex items-center gap-3 border-b border-black/10 pb-3">
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:+11234567890" class="hover:underline">(414) 687 - 5892</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1"></i>
                            <span>794 Mcallister St <br> San Francisco, 94102</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2
                        class="text-lg font-bold mb-5 relative inline-block after:content-[''] after:absolute after:w-10 after:h-0.5 after:bg-black after:-bottom-2 after:left-0">
                        Newsletter</h2>
                    <p class="text-sm text-black/80 mb-4 mt-4 font-medium">
                        Subscribe our newsletter to get the latest updates
                    </p>

                    <form class="relative mb-8">
                        <input type="email" placeholder="Email Address"
                            class="w-full rounded-xl py-4 pl-5 pr-14 text-black outline-none ring-4 ring-black/10 border-2 border-black shadow-xl transition-all bg-white/90 focus:bg-white"
                            required>
                        <button type="submit"
                            class="absolute right-2 top-1/2 -translate-y-1/2 bg-black hover:bg-gray-800 text-[#D8A96A] w-10 h-10 rounded-lg flex items-center justify-center transition-all shadow-md">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>

                    <div class="flex gap-3 justify-center lg:justify-start">
                        <a href="#"
                            class="w-10 h-10 bg-black text-[#D8A96A] hover:bg-white hover:text-black transition-all duration-300 rounded-lg flex items-center justify-center border border-black">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-black text-[#D8A96A] hover:bg-white hover:text-black transition-all duration-300 rounded-lg flex items-center justify-center border border-black">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-black text-[#D8A96A] hover:bg-white hover:text-black transition-all duration-300 rounded-lg flex items-center justify-center border border-black">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-black text-[#D8A96A] hover:bg-white hover:text-black transition-all duration-300 rounded-lg flex items-center justify-center border border-black">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="border-t border-black/10 bg-black/5">
            <div
                class="max-w-7xl mx-auto px-6 py-6 flex flex-col gap-4 text-xs text-center lg:flex-row lg:justify-between lg:text-sm font-semibold">
                <p class="text-black/70">
                    © 2026 <a href="#" class="text-black hover:underline">DexignZone</a> Theme. All Rights Reserved.
                </p>

                <ul class="flex justify-center gap-6 text-black/70">
                    <li><a href="#" class="hover:text-black underline-offset-4 hover:underline transition-colors">Terms
                            & Conditions</a></li>
                    <li><a href="#"
                            class="hover:text-black underline-offset-4 hover:underline transition-colors">Privacy
                            Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>


</body>

</html>
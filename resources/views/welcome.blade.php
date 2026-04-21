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

        li a {
            color: #353535;
            font-weight: bold;
        }

        li a:hover {
            color: white;
            font-weight: bold;
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


                    <li class="pl-4">

                        <a href="appointment.html"
                            class="bg-cyan-600 text-stone-900 px-5 py-2.5 rounded text-[14.5px] font-medium hover:bg-cyan-700 transition-colors">

                            Make an Appointment

                        </a>

                    </li>

                    <li class="group static">

                        <a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-stone-900 flex items-center group-hover:text-cyan-600 transition-colors">
                            Contact Number
                            <span class="ml-2 border-t-4 border-x-4 border-x-transparent border-t-gray-400"></span>
                        </a>

                        <div class="absolute top-[70px] left-0 w-full bg-[#BF8142] border-t border-gray-100 shadow-2xl
        opacity-0 invisible
        translate-y-6 scale-95
        group-hover:opacity-100 group-hover:visible
        group-hover:translate-y-0 group-hover:scale-100
        transition-all duration-300 ease-out px-8 py-10">

                            <div class="max-w-5xl mx-auto grid grid-cols-2 gap-10">

                                <!-- Phone Numbers -->
                                <div>
                                    <h3 class="text-lg font-bold text-black mb-4">📞 Phone Numbers</h3>
                                    <ul class="space-y-2">
                                        <li class="text-[15px] text-black border-b border-dashed border-gray-300 py-2">
                                            Hospital Helpline: +8801335147313
                                        </li>
                                    </ul>
                                </div>

                                <!-- Emails -->
                                <div>
                                    <h3 class="text-lg font-bold text-black mb-4">📧 Email Address</h3>
                                    <ul class="space-y-2">
                                        <li class="text-[15px] text-black border-b border-dashed border-gray-300 py-2">
                                            it@osb.org.bd
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </li>

                    <li class="group relative">

                        <a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-stone-900 flex items-center group-hover:text-cyan-600 transition-colors">

                            Services <span
                                class="ml-2 border-t-4 border-x-4 border-x-transparent border-t-gray-400"></span>

                        </a>

                        <ul class="absolute top-[70px] left-0 w-48 bg-[#BF8142] border border-gray-100 shadow-xl
           opacity-0 invisible translate-y-4 scale-95
           group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 group-hover:scale-100
           transition-all duration-300 ease-out">

                            <li>
                                <a href="demo-2.html"
                                    class="block px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:pl-6 transition-all">
                                    Operation
                                </a>
                            </li>

                            <li>
                                <a href="demo-2.html"
                                    class="block px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:pl-6 transition-all">
                                    Investigation
                                </a>
                            </li>
                        </ul>

                    </li>

                    <li><a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-stone-900 hover:text-cyan-600 transition-colors">Ticket</a>
                    </li>

                    <li><a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-stone-900 hover:text-cyan-600 transition-colors">Consultant
                            Information</a>
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
                title: 'বাংলাদেশের সর্বাধুনিক চক্ষু চিকিৎসা কেন্দ্র',
                desc: 'সুস্থ দৃষ্টি, সুন্দর জীবন',
                img: '{{ asset('pictures/hospital_picture_one.jpg') }}'
            },
            { 
                id: 2, 
                title: 'আপনার চোখের যত্নই আমাদের অগ্রাধিকার', 
                desc: '', 
                img: '{{ asset('pictures/hospital_picture_two.jpg') }}'
            },
            { 
                id: 3, 
                title: 'চোখের সকল সমস্যার সমাধান এক ছাদের নিচে', 
                desc: '', 
                img: '{{ asset('pictures/hospital_picture_three.jpg') }}'
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
                        <h2 class="text-white ml-5 text-4xl sm:text-4xl md:text-4xl lg:text-4xl font-black italic tracking-tighter leading-none mb-4 md:mb-6"
                            x-show="activeSlide === slide.id"
                            x-transition:enter="transition duration-[3000ms] delay-500"
                            x-transition:enter-start="opacity-0 translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0" x-text="slide.title"></h2>
                        <p class="text-blue-400 text-lg ml-[30px] md:text-xl lg:text-2xl font-bold uppercase tracking-widest"
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

    <section class="bg-gradient-to-r from-green-900 to-green-600 py-20 overflow-hidden">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-10">

            <!-- LEFT: TEXT -->
            <div class="text-white max-w-xl">
                <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                    আপনার চোখ, <span class="text-[#BF8142]">আপনার ভবিষ্যৎ</span>
                </h2>

                <p class="text-lg mb-6 opacity-90">
                    আধুনিক প্রযুক্তি ও অভিজ্ঞ চিকিৎসকের মাধ্যমে আমরা নিশ্চিত করি আপনার দৃষ্টির সঠিক যত্ন।
                </p>

                <p id="typeText" class="text-2xl font-semibold text-[#FFD700]"></p>
            </div>

            <!-- RIGHT: ANIMATED SVG -->
            <!-- RIGHT: ADVANCED ANIMATED EYE -->
            <div class="relative w-[320px] h-[320px] flex items-center justify-center">

                <!-- Eye SVG -->
                <svg viewBox="0 0 200 120" class="w-full">

                    <!-- Eye Outline -->
                    <path d="M10 60 Q100 10 190 60 Q100 110 10 60Z" fill="none" stroke="white" stroke-width="3" />

                    <!-- Iris -->
                    <circle cx="100" cy="60" r="20" fill="#BF8142">
                        <animate attributeName="r" values="18;22;18" dur="2s" repeatCount="indefinite" />
                    </circle>

                    <!-- Pupil -->
                    <circle cx="100" cy="60" r="8" fill="black" />

                    <!-- Scanner Line -->
                    <line id="scanLine" x1="20" y1="60" x2="180" y2="60" stroke="#00ffcc" stroke-width="2"
                        opacity="0.8">
                        <animate attributeName="y1" values="40;80;40" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="y2" values="40;80;40" dur="2s" repeatCount="indefinite" />
                    </line>

                </svg>

                <!-- Glow Effect -->
                <div class="absolute w-40 h-40 rounded-full bg-green-400 opacity-20 blur-2xl animate-pulse"></div>

            </div>

        </div>

        <section id="info-8" class="relative py-24 text-stone-900">

            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center">

                    <!-- Content -->
                    <div class="w-full md:w-7/12 lg:w-5/12">
                        <div class="bg-[#BF8142] p-8 md:p-12 md:pr-16 rounded-lg relative
    z-10
    transform translate-y-[141px] md:translate-y-0 md:translate-x-[85px]
    wow fadeInUp" data-wow-delay="0.4s">

                            <!-- Title -->
                            <h4 class="text-yellow-100 text-2xl md:text-3xl font-bold mb-4">পরামর্শ মূল্য</h4>

                            <!-- Short Description -->
                            <p class="mb-6 text-white/90 text-base leading-relaxed">
                                আমাদের পরামর্শ ফি এমনভাবে নির্ধারিত যাতে প্রতিটি রোগী সহজলভ্য এবং মানসম্মত সেবা পেতে
                                পারেন।
                                নিচে বিস্তারিত দেখুন।
                            </p>

                            <!-- Table -->
                            <table class="w-full mb-6 text-sm sm:text-base">
                                <tbody>
                                    <tr class="border-b border-dashed border-black/60 font-semibold text-lg">
                                        <td class="text-white">সকাল পরামর্শ</td>
                                        <td class="px-2 text-white/70">—</td>
                                        <td class="text-right text-white">৳ 300</td>
                                    </tr>
                                    <tr class="border-b border-dashed border-black/60 font-semibold text-lg">
                                        <td class="text-white">বিকাল পরামর্শ</td>
                                        <td class="px-2 text-white/70">—</td>
                                        <td class="text-right text-white">৳ 200</td>
                                    </tr>
                                    <tr class="border-b border-dashed border-black/60 font-semibold text-lg">
                                        <td class="text-white">ফাস্ট ট্র্যাক পরামর্শ</td>
                                        <td class="px-2 text-white/70">—</td>
                                        <td class="text-right text-white">৳ 500</td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Optional Note -->
                            <p class="text-sm text-white/60 opacity-90">
                                * চিকিৎসাগত প্রয়োজন অনুযায়ী ফি পরিবর্তন হতে পারে।
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Image -->
            <div class="absolute top-0 left-0 w-full h-64 sm:h-80 md:top-0 md:left-2/5 md:w-3/5 md:h-full bg-cover bg-center"
                style="background-image: url('{{ asset('pictures/hospital_picture_seven.jpg') }}');">
            </div>
        </section>

        <div class="space-y-4">

            <div class="p-4 mt-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 auto-rows-[180px] grid-flow-dense">

                    <div class="lg:col-span-2 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl relative group cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_twenty_one.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_twenty_one.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>

                    <div class="lg:col-span-2 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl relative group cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_twenty_two.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_twenty_two.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>


                    <div class="lg:col-span-2 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl relative group cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_twenty_three.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_twenty_three.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>


                    <div class="lg:col-span-2 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl relative group cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_twenty_four.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_twenty_four.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>

                </div>
            </div>

            <div class="p-4 mt-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 auto-rows-[180px] grid-flow-dense">

                    <div class="lg:col-span-2 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl relative group cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_one.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_one.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>

                    <div class="lg:col-span-1 lg:row-span-1 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_ten.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_ten.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-1 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_three.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_three.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-1 lg:row-span-1 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_four.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_four.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-3 lg:row-span-1 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_five.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_five.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-1 lg:row-span-3 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_six.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_six.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-1 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_seven.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_seven.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-2 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_eight.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_eight.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                </div>
            </div>

            <div class="p-4 pt-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 auto-rows-[180px] grid-flow-dense">

                    <div class="lg:col-span-2 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl relative group cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_fourteen.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_fourteen.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>

                    <div class="lg:col-span-1 lg:row-span-1 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_fifteen.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_fifteen.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-1 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_sixteen.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_sixteen.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-1 lg:row-span-1 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hosppital_picture_seventeen.jpg') }}')">
                        <img src="{{ asset('pictures/hosppital_picture_seventeen.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-3 lg:row-span-1 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_eighteen.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_eighteen.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-1 lg:row-span-3 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_nineteen.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_nineteen.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-1 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_twenty.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_twenty.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <div class="lg:col-span-2 lg:row-span-2 overflow-hidden rounded-2xl shadow-md hover:shadow-xl cursor-pointer"
                        onclick="openModal('{{ asset('pictures/hospital_picture_eight.jpg') }}')">
                        <img src="{{ asset('pictures/hospital_picture_eight.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                </div>
            </div>
        </div>

        <div id="imageModal"
            class="fixed inset-0 z-[999] hidden bg-black/95 flex items-center justify-center p-4 cursor-zoom-out backdrop-blur-sm"
            onclick="closeModal()">

            <img id="modalImage" src=""
                class="max-w-full max-h-full object-contain rounded-sm shadow-2xl transition-all duration-300 transform scale-95 origin-center"
                onclick="event.stopPropagation()">
        </div>

        <script>
            function openModal(imageSrc) {
                const modal = document.getElementById('imageModal');
                const modalImg = document.getElementById('modalImage');

                // Update image source
                modalImg.src = imageSrc;

                // Show modal and handle animation
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modalImg.classList.remove('scale-95', 'opacity-0');
                    modalImg.classList.add('scale-100', 'opacity-100');
                }, 20);

                // Prevent background scrolling
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                const modal = document.getElementById('imageModal');
                const modalImg = document.getElementById('modalImage');

                // Hide modal
                modal.classList.add('hidden');
                modalImg.classList.add('scale-95');
                modalImg.classList.remove('scale-100');

                // Restore scrolling
                document.body.style.overflow = 'auto';
            }

            // Close on Escape Key
            document.addEventListener('keydown', function (e) {
                if (e.key === "Escape") closeModal();
            });
        </script>




        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4">

                <!-- Header -->
                <div class="flex flex-col lg:flex-row justify-between items-center mb-10">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                            আমাদের হাসপাতালে <span class="text-[#BF8142]">আধুনিক ও বিশ্বমানের সেবাসমূহ</span>
                        </h2>
                    </div>

                    <a href="#" class="mt-4 lg:mt-0 text-[#BF8142] underline font-medium">
                        View All Services
                    </a>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">

                    <!-- Card -->
                    <div
                        class="bg-[#BF8142] text-white rounded-2xl p-6 shadow-lg hover:scale-105 transition duration-300 flex flex-col items-center text-center">
                        <img src="https://visioneyebd.org/storage/files/Department/17194082653.jpg"
                            class="w-16 h-16 object-contain mb-4 rounded-full bg-white p-2">

                        <h5 class="font-semibold text-lg mb-2">Cataract</h5>

                        <a href="#" class="text-sm underline mt-auto">
                            Explore More →
                        </a>
                    </div>

                    <!-- Duplicate cards -->
                    <div
                        class="bg-[#BF8142] text-white rounded-2xl p-6 shadow-lg hover:scale-105 transition duration-300 flex flex-col items-center text-center">
                        <img src="https://visioneyebd.org/storage/files/Department/17194082922.jpg"
                            class="w-16 h-16 object-contain mb-4 rounded-full bg-white p-2">

                        <h5 class="font-semibold text-lg mb-2">Vitreo-Retina</h5>

                        <a href="#" class="text-sm underline mt-auto">
                            Explore More →
                        </a>
                    </div>

                    <div
                        class="bg-[#BF8142] text-white rounded-2xl p-6 shadow-lg hover:scale-105 transition duration-300 flex flex-col items-center text-center">
                        <img src="https://visioneyebd.org/storage/files/Department/17194083191.jpg"
                            class="w-16 h-16 object-contain mb-4 rounded-full bg-white p-2">

                        <h5 class="font-semibold text-lg mb-2">Glaucoma</h5>

                        <a href="#" class="text-sm underline mt-auto">
                            Explore More →
                        </a>
                    </div>

                    <div
                        class="bg-[#BF8142] text-white rounded-2xl p-6 shadow-lg hover:scale-105 transition duration-300 flex flex-col items-center text-center">
                        <img src="https://visioneyebd.org/storage/files/Department/171940836812.jpg"
                            class="w-16 h-16 object-contain mb-4 rounded-full bg-white p-2">

                        <h5 class="font-semibold text-lg mb-2">Pediatric</h5>

                        <a href="#" class="text-sm underline mt-auto">
                            Explore More →
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center gap-8">

                    <!-- Milestone 1 -->
                    <div class="flex items-center bg-[#BF8142] text-white rounded-xl p-6 shadow-md w-72">
                        <div class="w-16 h-16 flex items-center justify-center border-2 border-white rounded-full">
                            <!-- Calendar Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-2xl font-bold">
                                <span class="counter text-4xl" data-target="20">0</span> Years
                            </h5>
                            <p class="text-lg font-semibold">of Establishment</p>
                        </div>
                    </div>

                    <!-- Milestone 2 -->
                    <div class="flex items-center bg-[#BF8142] text-white rounded-xl p-6 shadow-md w-72">
                        <div class="w-16 h-16 flex items-center justify-center border-2 border-white rounded-full">
                            <!-- Hospital Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 21h18M9 21V9h6v12M4 10h4M16 10h4M10 3h4v4h-4z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-2xl font-bold">
                                <span class="counter text-4xl" data-target="11">0</span>
                            </h5>
                            <p class="text-lg font-semibold">Branches</p>
                        </div>
                    </div>

                    <!-- Milestone 3 -->
                    <div class="flex items-center bg-[#BF8142] text-white rounded-xl p-6 shadow-md w-72">
                        <div class="w-16 h-16 flex items-center justify-center border-2 border-white rounded-full">
                            <!-- Doctor Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A7 7 0 1118.364 4.56 7 7 0 015.12 17.804zM12 14v4m-2-2h4" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-2xl font-bold">
                                <span class="counter text-4xl" data-target="265">0</span>+
                            </h5>
                            <p class="text-lg font-semibold">Consultants</p>
                        </div>
                    </div>

                    <!-- Milestone 4 -->
                    <div class="flex items-center bg-[#BF8142] text-white rounded-xl p-6 shadow-md w-72">
                        <div class="w-16 h-16 flex items-center justify-center border-2 border-white rounded-full">
                            <!-- Users Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-1a4 4 0 00-3-3.87M9 20H4v-1a4 4 0 013-3.87m6-2.13a4 4 0 10-6 0m6 0a4 4 0 116 0" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-2xl font-bold">
                                <span class="counter text-4xl" data-target="1200">0</span>+
                            </h5>
                            <p class="text-lg font-semibold">Staffs</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Counter Script -->
        <script>
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const increment = target / 200;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });
        </script>

    </section>

    <script>
        // Typing Bangla Text
        const text = "দৃষ্টি পরিষ্কার, জীবন উজ্জ্বল";
        let i = 0;

        function typeEffect() {
            if (i < text.length) {
                document.getElementById("typeText").innerHTML += text.charAt(i);
                i++;
                setTimeout(typeEffect, 60);
            }
        }
        typeEffect();

        // Scanner Animation Loop
        const scan = document.getElementById("scan");

        setInterval(() => {
            scan.style.opacity = "1";
            scan.style.transform = "translateX(-50%) translateY(0px)";

            let pos = 0;
            let interval = setInterval(() => {
                pos += 2;
                scan.style.transform = `translateX(-50%) translateY(${pos}px)`;

                if (pos >= 120) {
                    clearInterval(interval);
                    scan.style.opacity = "0";
                }
            }, 10);

        }, 2000);
    </script>






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
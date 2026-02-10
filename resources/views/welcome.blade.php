<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSB Eye Hospital</title>

    {{-- Tailwind via Vite --}}
    @vite('resources/css/app.css')
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
         opacity-0 invisible
         translate-y-4 scale-95
         group-hover:opacity-100 group-hover:visible
         group-hover:translate-y-0 group-hover:scale-100
         transition-all duration-300 ease-out">

                            <li><a href="demo-2.html"
                                    class="block px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:text-black hover:pl-6 transition-all">Home

                                    Concept #2</a></li>

                            <li><a href="demo-3.html"
                                    class="block px-4 py-2 text-sm text-black hover:bg-cyan-600 hover:text-black hover:pl-6 transition-all">Home

                                    Concept #3</a></li>

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
                class="pointer-events-auto p-4 md:p-6 rounded-full border border-white/20 bg-black/50 hover:bg-white text-white hover:text-black transition-all duration-500 backdrop-blur-lg shadow-lg">
                <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button @click="next()"
                class="pointer-events-auto p-4 md:p-6 rounded-full border border-white/20 bg-black/50 hover:bg-white text-white hover:text-black transition-all duration-500 backdrop-blur-lg shadow-lg">
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



    <section id="about-1" class="relative z-10 bg-[#FAEBD7] py-16 px-4 rounded-xl">
        <div class="container mx-auto px-0 w-11/12">
            <div class="flex flex-wrap">

                <!-- ABOUT BOX #1 (lightest gold) -->
                <div id="abox-1" class="w-full sm:w-1/2 lg:w-1/4">
                    <div
                        class="h-80 bg-[#F0D9A2] rounded-t-lg lg:rounded-l-lg lg:rounded-tr-none text-stone-900 flex flex-col justify-between p-8 sm:p-12">
                        <h5 class="text-xl font-bold mb-6">Working Time</h5>
                        <table class="w-full text-stone-900 border-separate border-spacing-y-2">
                            <tbody>
                                <tr class="border-b border-dashed border-stone-900/60">
                                    <td>Mon – Wed</td>
                                    <td>-</td>
                                    <td class="text-right font-medium">9:00 AM - 7:00 PM</td>
                                </tr>
                                <tr class="border-b border-dashed border-stone-900/60">
                                    <td>Thursday</td>
                                    <td>-</td>
                                    <td class="text-right font-medium">9:00 AM - 6:30 PM</td>
                                </tr>
                                <tr class="border-b border-dashed border-stone-900/60">
                                    <td>Friday</td>
                                    <td>-</td>
                                    <td class="text-right font-medium">9:00 AM - 6:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Sun - Sun</td>
                                    <td>-</td>
                                    <td class="text-right font-medium">CLOSED</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- ABOUT BOX #2 (slightly darker) -->
                <div id="abox-2" class="w-full sm:w-1/2 lg:w-1/4">
                    <div
                        class="h-80 bg-[#D8A96A] text-stone-900 flex flex-col justify-between p-8 sm:p-12 rounded-none lg:rounded-none">
                        <h5 class="text-xl font-bold mb-6">Doctors Timetable</h5>
                        <p class="text-sm mb-6">An magnis nulla dolor at sapien augue erat iaculis purus tempor magna
                            ipsum and vitae a purus primis ipsum magna ipsum</p>
                        <a href="timetable.html"
                            class="mt-auto inline-block text-stone-900 border-2 border-stone-900 rounded-lg px-6 py-3 text-sm hover:bg-stone-900 hover:text-[#D8A96A] transition-all">View
                            Timetable</a>
                    </div>
                </div>

                <!-- ABOUT BOX #3 (darker brown) -->
                <div id="abox-3" class="w-full sm:w-1/2 lg:w-1/4">
                    <div
                        class="h-80 bg-[#BF8142] text-stone-900 flex flex-col justify-between p-8 sm:p-12 rounded-none lg:rounded-none">
                        <h5 class="text-xl font-bold mb-6">Appointments</h5>
                        <p class="text-sm mb-6">An magnis nulla dolor at sapien augue erat iaculis purus tempor magna
                            ipsum and vitae a purus primis ipsum magna ipsum</p>
                        <a href="#"
                            class="mt-auto inline-block text-stone-900 border-2 border-stone-900 rounded-lg px-6 py-3 text-sm hover:bg-stone-900 hover:text-[#BF8142] transition-all">Make
                            an Appointment</a>
                    </div>
                </div>

                <!-- ABOUT BOX #4 (darkest brown) -->
                <div id="abox-4" class="w-full sm:w-1/2 lg:w-1/4">
                    <div
                        class="h-80 bg-[#8C5E2C] text-stone-900 flex flex-col justify-between p-8 sm:p-12 rounded-b-lg lg:rounded-r-lg lg:rounded-bl-none">
                        <h5 class="text-xl font-bold mb-6">Emergency Cases</h5>
                        <h5 class="text-lg font-bold flex items-center mb-5"><i class="fas fa-phone mr-2"></i>
                            1-800-123-4560</h5>
                        <p class="text-sm">An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum and
                            vitae a purus primis ipsum magna ipsum</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="doctors-1" class="py-24 bg-[#FAEBD7]">
        <div class="container w-4/5 mx-auto px-4">

            <!-- SECTION TITLE -->
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold text-[#004861] mb-5">Hospitall Management Committee</h3>
                <p class="text-gray-500 px-10 md:px-48">
                    Our Management Committee brings together seasoned healthcare leaders dedicated to strategic
                    excellence. By integrating clinical expertise with robust administrative oversight, we ensure our
                    facility remains at the forefront of modern medicine.
                </p>
            </div>

            <div class="flex flex-wrap -mx-4">

                <!-- DOCTOR #1 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-12">
                    <!-- Image container with relative group -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('pictures/doctorOne.jpg') }}" alt="doctor-foto"
                            class="w-full h-auto transform scale-110 group-hover:scale-100 transition-transform duration-500">

                        <!-- Overlay restricted to image -->
                        <div
                            class="absolute inset-0 bg-[#00a3c8]/85 opacity-0 hover:opacity-100 transition-opacity duration-400 flex items-center justify-center">
                            <a href="doctor-1.html"
                                class="bg-white text-black px-4 py-2 rounded opacity-100 transform translate-y-0 transition-all duration-400">
                                View More Info
                            </a>
                        </div>
                    </div>

                    <!-- Meta/text outside image container -->
                    <div class="pt-4">
                        <h5 class="text-lg font-bold text-[#004861] mb-1">Jonathan Barnes D.M.</h5>
                        <span class="text-[#00a3c8] block mb-2">Chief Medical Officer</span>
                        <p class="text-gray-600 text-sm">
                            Donec vel sapien augue integer turpis cursus porta, mauris sed augue luctus magna dolor
                            luctus ipsum neque
                        </p>
                    </div>
                </div>

                <!-- DOCTOR #2 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-12">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('pictures/doctorTwo.jpg') }}" alt="doctor-foto"
                            class="w-full h-auto transform scale-110 hover:scale-100 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-[#00a3c8]/85 opacity-0 hover:opacity-100 transition-opacity duration-400 flex items-center justify-center">
                            <a href="doctor-2.html"
                                class="bg-white text-black px-4 py-2 rounded opacity-100 transform translate-y-0 transition-all duration-400">
                                View More Info
                            </a>
                        </div>
                    </div>
                    <div class="pt-4">
                        <h5 class="text-lg font-bold text-[#004861] mb-1">Hannah Harper D.M.</h5>
                        <span class="text-[#00a3c8] block mb-2">Anesthesiologist</span>
                        <p class="text-gray-600 text-sm">
                            Donec vel sapien augue integer turpis cursus porta, mauris sed augue luctus magna dolor
                            luctus ipsum neque
                        </p>
                    </div>
                </div>

                <!-- DOCTOR #3 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-12">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('pictures/doctorThree.jpg') }}" alt="doctor-foto"
                            class="w-full h-auto transform scale-110 hover:scale-100 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-[#00a3c8]/85 opacity-0 hover:opacity-100 transition-opacity duration-400 flex items-center justify-center">
                            <a href="doctor-3.html"
                                class="bg-white text-black px-4 py-2 rounded opacity-100 transform translate-y-0 transition-all duration-400">
                                View More Info
                            </a>
                        </div>
                    </div>
                    <div class="pt-4">
                        <h5 class="text-lg font-bold text-[#004861] mb-1">Matthew Anderson D.M.</h5>
                        <span class="text-[#00a3c8] block mb-2">Cardiology</span>
                        <p class="text-gray-600 text-sm">
                            Donec vel sapien augue integer turpis cursus porta, mauris sed augue luctus magna dolor
                            luctus ipsum neque
                        </p>
                    </div>
                </div>

                <!-- DOCTOR #4 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-12">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('pictures/doctorFour.jpg') }}" alt="doctor-foto"
                            class="w-full h-auto transform scale-110 hover:scale-100 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-[#00a3c8]/85 opacity-0 hover:opacity-100 transition-opacity duration-400 flex items-center justify-center">
                            <a href="doctor-4.html"
                                class="bg-white text-black px-4 py-2 rounded opacity-100 transform translate-y-0 transition-all duration-400">
                                View More Info
                            </a>
                        </div>
                    </div>
                    <div class="pt-4">
                        <h5 class="text-lg font-bold text-[#004861] mb-1">Megan Coleman D.M.</h5>
                        <span class="text-[#00a3c8] block mb-2">Neurosurgeon</span>
                        <p class="text-gray-600 text-sm">
                            Donec vel sapien augue integer turpis cursus porta, mauris sed augue luctus magna dolor
                            luctus ipsum neque
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
                    wow fadeInUp " data-wow-delay="0.4s">

                        <!-- Title -->
                        <h4 class="text-2xl md:text-3xl font-bold mb-4">Opening Hours:</h4>

                        <!-- Text -->
                        <p class="mb-6">
                            Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor tempus feugiat
                            dolor lacinia cursus vitae massa
                        </p>

                        <!-- Table -->
                        <table class="w-full mb-6 text-sm sm:text-base">
                            <tbody>
                                <tr class="border-b border-dashed border-white/60 uppercase font-extrabold text-lg">
                                    <td>Mon – Wed</td>
                                    <td class="px-2">-</td>
                                    <td class="text-right">9:00 AM - 7:00 PM</td>
                                </tr>
                                <tr class="border-b border-dashed border-white/60 uppercase font-extrabold text-lg">
                                    <td>Thursday</td>
                                    <td class="px-2">-</td>
                                    <td class="text-right">9:00 AM - 6:30 PM</td>
                                </tr>
                                <tr class="border-b border-dashed border-white/60 uppercase font-extrabold text-lg">
                                    <td>Friday</td>
                                    <td class="px-2">-</td>
                                    <td class="text-right">9:00 AM - 6:00 PM</td>
                                </tr>
                                <tr class="uppercase font-extrabold text-lg">
                                    <td>Sat – Sun</td>
                                    <td class="px-2">-</td>
                                    <td class="text-right">Closed</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Secondary Title -->
                        <h5 class="text-xl md:text-2xl font-bold mb-4">Need a personal health plan?</h5>

                        <!-- Text -->
                        <p>
                            Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor tempus feugiat
                            dolor lacinia undo cursus nulla massa suscipit, luctus neque purus ipsum neque dolor primis
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









    {{-- Hero Section --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <img src="/images/hero.jpg" alt="Conference" class="w-full h-[420px] object-cover rounded-md" />

            <div class="mt-4 border-t-4 border-indigo-700 pt-3">
                <p class="text-sm text-indigo-700 font-medium">
                    Enhancing eye care through consultancy and capacity building
                </p>
            </div>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $cards = [
                    'ARAVIND EYE HOSPITALS',
                    'EDUCATION',
                    'FOR PATIENTS',
                    'RESEARCH',
                    'CAPACITY BUILDING',
                    'MANUFACTURING',
                ];
            @endphp

            @foreach ($cards as $card)
                <div class="relative overflow-hidden rounded-lg shadow-md group">
                    <img src="/images/card-placeholder.jpg" alt="{{ $card }}"
                        class="w-full h-48 object-cover group-hover:scale-105 transition" />
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <h3 class="text-black font-semibold text-lg tracking-wide">
                            {{ $card }}
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- News & Announcements --}}
    <section class="bg-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- Current News --}}
            <div>
                <h2 class="text-lg font-semibold mb-4">Current News</h2>
                <div class="bg-white rounded shadow overflow-hidden">
                    <img src="/images/news.jpg" alt="Workshop" class="w-full h-56 object-cover" />
                    <div class="p-4 text-sm">
                        Workshop on Master MSICS Techniques
                    </div>
                </div>
            </div>

            {{-- Announcements --}}
            <div>
                <h2 class="text-lg font-semibold mb-4">Announcements</h2>
                <div class="bg-white rounded shadow p-4 text-sm space-y-3">
                    <p class="text-indigo-700">
                        Recruitment of Project Technical Support III – January 2026
                    </p>
                    <p>
                        Inviting applications for long term fellowship in Paediatric Ophthalmology
                    </p>
                    <p>
                        Inviting applications for fellowship in Orbit & Oculoplasty
                    </p>
                    <p>
                        Fellowship in Anterior Segment / IOL Surgery
                    </p>
                    <p>
                        Fellowship in Comprehensive Ophthalmology
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-300 text-sm">
        <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Address --}}
            <div>
                <h4 class="font-semibold mb-2">ARAVIND EYE HOSPITAL</h4>
                <p>
                    1, Anna Nagar, Madurai, Tamil Nadu – 625 020, India
                </p>
                <p>Ph: +91 452 435 6100</p>
                <p>Email: patientcare@aravind.org</p>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="font-semibold mb-2">Our Services</h4>
                <ul class="space-y-1">
                    <li>Hospital Locations</li>
                    <li>Speciality Clinics</li>
                    <li>Outreach</li>
                    <li>Tele-Ophthalmology</li>
                    <li>Consultancy (LAICO)</li>
                </ul>
            </div>

            {{-- Quote --}}
            <div class="italic text-gray-700">
                “Intelligence and capability are not enough.
                There must be the joy of doing something beautiful.”
                <br>
                <span class="not-italic font-medium block mt-2">
                    – Dr. G. Venkataswamy
                </span>
            </div>
        </div>

        <div class="text-center text-xs text-gray-600 py-4 border-t border-gray-400">
            © 2025 Aravind Eye Care System | All rights reserved
        </div>
    </footer>

</body>

</html>
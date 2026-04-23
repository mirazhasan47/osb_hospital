<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh Academy Of Ophthalmology (BAO)</title>

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

    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer components {
            .glass-card {
                @apply relative bg-white/70 backdrop-blur-md border border-white/40 
                       rounded-3xl p-6 pt-16 mt-12 transition-all duration-500 
                       hover:bg-white/90 hover:shadow-[0_20px_50px_rgba(0,102,204,0.15)]
                       hover:-translate-y-2 opacity-0 animate-[fadeInUp_0.7s_ease-out_forwards];
            }
            .profile-hex {
                @apply absolute -top-12 left-1/2 -translate-x-1/2 w-28 h-28 
                       md:w-32 md:h-32 rounded-[2rem] rotate-45 overflow-hidden 
                       border-4 border-white shadow-xl transition-transform duration-500 
                       group-hover:rotate-[55deg] group-hover:scale-110;
            }
            .profile-img {
                @apply w-full h-full object-cover -rotate-45 scale-125;
            }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body class="text-gray-800">


    <header
        class="hidden lg:block fixed top-0 w-full z-[999] bg-[#D8A96A] shadow-md font-['Lato',_sans-serif] bg-[#D8A96A]">
        <div class="max-w-7xl mx-auto px-4 h-[70px] flex items-center justify-between">

            <div class="flex-shrink-0">
                <a href="#hero-1" class="flex items-center gap-4">
                    <img src="{{ asset('pictures/bao_logo.png') }}" class="w-[85px] h-[80px] object-contain"
                        alt="header-logo">

                    <div class="flex flex-col justify-center border-l border-gray-300 pl-4">
                        <span class="text-[14px] font-bold text-gray-800 leading-tight">
                            বাংলাদেশ একাডেমি অব অপথ্যালমোলজি (বিএও)
                        </span>
                        <span class="text-[8px] text-stone-900 font-medium">
                            Bangladesh Academy Of Ophthalmology (BAO)
                        </span>
                    </div>
                </a>
            </div>



            <nav class="hidden lg:block">

                <ul class="flex items-center space-x-1">


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
                title: '',
                desc: '',
                img: '{{ asset('pictures/hospital_picture_one.jpg') }}'
            },
            { 
                id: 2, 
                title: '', 
                desc: '', 
                img: '{{ asset('pictures/hospital_picture_two.jpg') }}'
            },
            { 
                id: 3, 
                title: '', 
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




    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-16 px-4">

        <!-- HEADER -->
        <div class="text-center mb-16">
            <p class="text-blue-600 font-semibold tracking-widest uppercase text-sm">
                Executive Committee
            </p>

            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mt-2">
                বাংলাদেশ একাডেমি অফ অপথ্যালমোলজি
            </h1>

            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mt-4 rounded-full"></div>

            <p class="text-slate-500 mt-4 italic">
                জুলাই ২০২৫ - জুন ২০২৭
            </p>
        </div>

        <!-- GRID -->
        <div class="min-h-screen bg-gradient-to-br from-slate-100 via-indigo-50 to-cyan-50 p-10">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

                <!-- 1 PRESIDENT -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-yellow-300 via-amber-400 to-orange-300 rounded-3xl blur opacity-25 group-hover:opacity-60 transition">
                    </div>
                    <div
                        class="relative rounded-3xl p-6 backdrop-blur-xl border border-yellow-200/40 bg-gradient-to-br from-yellow-50/80 to-orange-50/60 hover:-translate-y-2 transition">
                        <div class="flex justify-center">
                            <img src="https://osb.org.bd/uploads/head-members/1765760521_Prof. Md. Abid Kamal.jpg"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: মোঃ আবিদ কামাল</h3>
                        <p class="text-center text-yellow-700 font-semibold text-sm uppercase">সভাপতি</p>
                    </div>
                </div>

                <!-- 2 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-emerald-300 via-green-400 to-teal-300 rounded-3xl blur opacity-25 group-hover:opacity-60 transition">
                    </div>
                    <div
                        class="relative rounded-3xl p-6 backdrop-blur-xl border border-emerald-200/40 bg-gradient-to-br from-emerald-50/80 to-teal-50/60 hover:-translate-y-2 transition">
                        <div class="flex justify-center">
                            <img src="https://osb.org.bd/uploads/head-members/1765760574_Dr.Zah-e-alam Mridha.jpg"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: জানে আলম মৃধা</h3>
                        <p class="text-center text-emerald-700 font-semibold text-sm uppercase">মহাসচিব</p>
                    </div>
                </div>

                <!-- 3 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-purple-300 via-indigo-400 to-cyan-300 rounded-3xl blur opacity-25 group-hover:opacity-60 transition">
                    </div>
                    <div
                        class="relative rounded-3xl p-6 backdrop-blur-xl border border-purple-200/40 bg-gradient-to-br from-purple-50/80 to-cyan-50/60 hover:-translate-y-2 transition">
                        <div class="flex justify-center">
                            <img src="https://osb.org.bd/uploads/head-members/1765760673_avatar_male.png"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: মোঃ সামসুল হক</h3>
                        <p class="text-center text-purple-700 font-semibold text-sm uppercase">সহ-সভাপতি</p>
                    </div>
                </div>

                <!-- 4 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-rose-300 via-pink-400 to-fuchsia-300 rounded-3xl blur opacity-25 group-hover:opacity-60 transition">
                    </div>
                    <div
                        class="relative rounded-3xl p-6 backdrop-blur-xl border border-rose-200/40 bg-gradient-to-br from-rose-50/80 to-pink-50/60 hover:-translate-y-2 transition">
                        <div class="flex justify-center">
                            <img src="https://osb.org.bd/uploads/head-members/1765760702_avatar_male.png"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: সৈয়দ আব্দুল ওয়াদুদ</h3>
                        <p class="text-center text-rose-700 font-semibold text-sm uppercase">সহ-সভাপতি</p>
                    </div>
                </div>

                <!-- 5 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-orange-300 via-yellow-400 to-amber-300 rounded-3xl blur opacity-25 group-hover:opacity-60 transition">
                    </div>
                    <div
                        class="relative rounded-3xl p-6 backdrop-blur-xl border border-orange-200/40 bg-gradient-to-br from-orange-50/80 to-yellow-50/60 hover:-translate-y-2 transition">
                        <div class="flex justify-center">
                            <img src="https://osb.org.bd/uploads/head-members/1765760733_avatar_male.png"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: মোহাম্মদ মোস্তফা হোসেন</h3>
                        <p class="text-center text-orange-700 font-semibold text-sm uppercase">সহ-সভাপতি</p>
                    </div>
                </div>

                <!-- 6 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-300 via-indigo-400 to-sky-300 rounded-3xl blur opacity-25 group-hover:opacity-60 transition">
                    </div>
                    <div
                        class="relative rounded-3xl p-6 backdrop-blur-xl border border-blue-200/40 bg-gradient-to-br from-blue-50/80 to-sky-50/60 hover:-translate-y-2 transition">
                        <div class="flex justify-center">
                            <img src="https://osb.org.bd/uploads/head-members/1765760767_Dr.Miftahul.jpg"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: মোঃ মিফতাহুল হোসেন চৌধুরী</h3>
                        <p class="text-center text-blue-700 font-semibold text-sm uppercase">কোষাধ্যক্ষ</p>
                    </div>
                </div>

                <!-- 7 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-teal-300 via-cyan-400 to-emerald-300 rounded-3xl blur opacity-25 group-hover:opacity-60 transition">
                    </div>
                    <div
                        class="relative rounded-3xl p-6 backdrop-blur-xl border border-teal-200/40 bg-gradient-to-br from-teal-50/80 to-cyan-50/60 hover:-translate-y-2 transition">
                        <div class="flex justify-center">
                            <img src="https://osb.org.bd/uploads/head-members/1765760789_avatar_male.png"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: মোঃ মাহফুজুল আলম</h3>
                        <p class="text-center text-teal-700 font-semibold text-sm uppercase">যুগ্ম-মহাসচিব</p>
                    </div>
                </div>

                <!-- MEMBERS -->
                <!-- 8 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-purple-50 to-indigo-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: এ এস এম ক্বাদির</h3>
                        <p class="text-center text-purple-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 9 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-indigo-50 to-cyan-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: মোঃ নজরুল ইসলাম</h3>
                        <p class="text-center text-indigo-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 10 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-emerald-50 to-green-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: কাজী মনিরুজ্জামান</h3>
                        <p class="text-center text-emerald-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 11 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-rose-50 to-pink-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">অধ্যাপক ডা: মোঃ আরিফ হায়াত খান পাঠান</h3>
                        <p class="text-center text-rose-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 12 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-sky-50 to-blue-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">অধ্যাপক ডা: এ বি শামসুদ্দুহা</h3>
                        <p class="text-center text-sky-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 13 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-purple-50 to-fuchsia-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: সায়ীদ মেহবুব উল কাদির</h3>
                        <p class="text-center text-purple-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 14 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-pink-50 to-rose-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: শাহনাজ বেগম</h3>
                        <p class="text-center text-pink-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 15 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-teal-50 to-cyan-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: এ এস এম মইন উদ্দিন</h3>
                        <p class="text-center text-teal-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 16 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-blue-50 to-indigo-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: মোঃ হাসানুজ্জামান</h3>
                        <p class="text-center text-blue-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 17 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-orange-50 to-amber-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: মোঃ ফরিদ হোসেন</h3>
                        <p class="text-center text-orange-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 18 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-indigo-50 to-purple-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: মোঃ মাজহারুল ইসলাম</h3>
                        <p class="text-center text-indigo-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 19 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-slate-50 to-gray-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">ডা: এস এম এ মাহবুব</h3>
                        <p class="text-center text-slate-700 text-sm">সদস্য</p>
                    </div>
                </div>

                <!-- 20 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-indigo-50 to-cyan-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">অধ্যাপক ডা: মোঃ সাহাব উদ্দিন (ওএসবি)</h3>
                        <p class="text-center text-indigo-700 text-sm">OSB CONVENOR</p>
                    </div>
                </div>

                <!-- 21 -->
                <div class="group relative">
                    <div
                        class="relative rounded-3xl p-6 bg-gradient-to-br from-purple-50 to-cyan-50 border hover:-translate-y-2 transition">
                        <h3 class="text-center font-bold">অধ্যাপক ডা: মোঃ জিন্নু রাইন (নিউটন)</h3>
                        <p class="text-center text-purple-700 text-sm">OSB SECRETARY</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


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
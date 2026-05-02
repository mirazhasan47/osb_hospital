<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

        .button_sec {
            color: #353535;
            font-weight: bold;
            background-color: #396cf0;
        }

        /* Main site nav: readable defaults without affecting header */
        .content-area li a {
            color: #353535;
            font-weight: bold;
        }

        .content-area li a:hover {
            color: white;
            font-weight: bold;
        }

        .btn-gradient-hover {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-gradient-hover::after {
            content: "";
            position: absolute;
            height: 100%;
            width: 0%;
            top: 0;
            right: 0;
            background-color: #396cf0;
            z-index: -1;
            transition: all 0.5s ease-out;
        }

        .btn-gradient-hover:hover::after {
            width: 100%;
            left: 0;
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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="text-gray-800 overflow-x-hidden">

    {{-- Checkbox must be a body-level sibling so peer-checked drawer/backdrop are not clipped by header backdrop-blur --}}
    <input type="checkbox" id="menu-toggle" class="peer hidden" autocomplete="off" aria-hidden="true">

    <header
        class="site-header hidden lg:flex fixed top-0 left-0 right-0 w-full z-[999] font-['Lato',_sans-serif]
        bg-[linear-gradient(to_right,rgba(168,85,247,0.12),rgba(236,72,153,0.12),rgba(6,182,212,0.12),rgba(139,92,246,0.12)),linear-gradient(rgba(255,255,255,0.72),rgba(255,255,255,0.62)),url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=2000')]
        bg-cover bg-center bg-no-repeat backdrop-blur-xl border-b-4 border-blue-600 overflow-hidden
        shadow-[0_6px_28px_-6px_rgba(37,99,235,0.55),0_2px_0_0_rgba(6,182,212,0.35)_inset]
        before:absolute before:inset-0 before:bg-white/55 before:backdrop-blur-2xl before:pointer-events-none">
        <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-8 h-[72px] w-full flex items-center justify-between gap-8">

            <div class="flex-shrink-0 min-w-0">
                <a href="#hero-1" class="flex items-center gap-3 min-w-0">
                    <img src="{{ asset('pictures/bao_logo.png') }}" class="w-16 h-16 shrink-0 object-contain"
                        alt="BAO logo" width="64" height="64">

                    <div class="flex flex-col justify-center border-l border-gray-300/80 pl-3 min-w-0">
                        <span class="text-sm font-semibold text-gray-800 leading-snug truncate max-w-[280px] xl:max-w-none">
                            বাংলাদেশ একাডেমি অব অপথ্যালমোলজি (বিএও)
                        </span>
                        <span class="text-xs text-stone-900 font-medium leading-tight mt-0.5">
                            Bangladesh Academy Of Ophthalmology (BAO)
                        </span>
                    </div>
                </a>
            </div>

            <div class="hidden lg:flex items-center gap-3 xl:gap-4 shrink-0">
                <nav class="shrink-0" aria-label="Primary">
                    <ul class="flex items-center gap-0.5 xl:gap-1">
                        <li>
                            <a href="appointment.html"
                                class="inline-flex items-center rounded-lg px-3 xl:px-4 py-2.5 text-[14px] xl:text-[15px] leading-5 font-medium text-stone-900 hover:text-cyan-600 hover:bg-white/25 transition-colors">
                                Journal of BAO
                            </a>
                        </li>
                        <li>
                            <a href="membership.html"
                                class="inline-flex items-center rounded-lg px-3 xl:px-4 py-2.5 text-[14px] xl:text-[15px] leading-5 font-medium text-stone-900 hover:text-cyan-600 hover:bg-white/25 transition-colors">
                                Membership
                            </a>
                        </li>
                        <li>
                            <a href="#photo-gallery"
                                class="inline-flex items-center rounded-lg px-3 xl:px-4 py-2.5 text-[14px] xl:text-[15px] leading-5 font-medium text-stone-900 hover:text-cyan-600 hover:bg-white/25 transition-colors">
                                Photo Gallery
                            </a>
                        </li>
                        <li>
                            <a href="#committee"
                                class="inline-flex items-center rounded-lg px-3 xl:px-4 py-2.5 text-[14px] xl:text-[15px] leading-5 font-medium text-stone-900 hover:text-cyan-600 hover:bg-white/25 transition-colors">
                                Committee
                            </a>
                        </li>
                    </ul>
                </nav>

                <a href="https://osb.org.bd/registration-bao" target="_blank" rel="noopener noreferrer"
                    class="group relative inline-flex shrink-0 items-center gap-2 overflow-hidden rounded-xl bg-gradient-to-r from-blue-600 via-blue-600 to-cyan-500 px-4 xl:px-5 py-2.5 text-[13px] xl:text-[15px] font-bold uppercase tracking-wide text-white shadow-[0_4px_18px_rgba(37,99,235,0.5)] ring-2 ring-white/45 transition duration-300 hover:from-blue-500 hover:via-blue-600 hover:to-cyan-400 hover:shadow-[0_6px_24px_rgba(8,145,178,0.45)] hover:ring-white/75 active:scale-[0.97]">
                    <span
                        class="pointer-events-none absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/30 to-transparent opacity-0 transition duration-700 group-hover:translate-x-full group-hover:opacity-100"></span>
                    <i class="fas fa-user-plus relative text-sm opacity-90" aria-hidden="true"></i>
                    <span class="relative">Register</span>
                    <i class="fas fa-arrow-right relative text-[10px] opacity-85 transition group-hover:translate-x-1" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </header>

    <header
        class="site-header block lg:hidden fixed top-0 left-0 right-0 w-full z-[999] font-['Lato',_sans-serif]
        bg-[linear-gradient(to_right,rgba(168,85,247,0.12),rgba(236,72,153,0.12),rgba(6,182,212,0.12),rgba(139,92,246,0.12)),linear-gradient(rgba(255,255,255,0.72),rgba(255,255,255,0.62)),url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=2000')]
        bg-cover bg-center bg-no-repeat backdrop-blur-xl border-b-4 border-blue-600 overflow-hidden
        shadow-[0_6px_28px_-6px_rgba(37,99,235,0.55),0_2px_0_0_rgba(6,182,212,0.35)_inset]
        before:absolute before:inset-0 before:bg-white/55 before:backdrop-blur-2xl before:pointer-events-none">
        <div class="relative z-10 max-w-7xl mx-auto px-4 h-[72px] flex items-center justify-between">

            <div class="flex min-w-0 flex-1 items-center gap-2 pr-2">
                <a href="#hero-1" class="flex min-w-0 items-center gap-2">
                    <img src="{{ asset('pictures/bao_logo.png') }}" class="w-14 h-14 shrink-0 object-contain" alt="BAO logo" width="56" height="56">
                    <span class="text-sm font-semibold text-slate-900 leading-tight line-clamp-2">বিএও</span>
                </a>
            </div>

            <div class="flex shrink-0 items-center gap-1.5">
                <a href="https://osb.org.bd/registration-bao" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-1.5 rounded-lg bg-gradient-to-r from-blue-600 to-cyan-500 px-3 py-2 text-xs font-bold uppercase tracking-wide text-white shadow-md ring-1 ring-white/30 active:scale-95">
                    <i class="fas fa-user-plus text-[10px] opacity-90"></i>
                    Register
                </a>
                <label for="menu-toggle" class="cursor-pointer p-2 text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </label>
            </div>
        </div>
    </header>

    {{-- Full-page mobile menu (fixed to viewport; checkbox is body-level peer) --}}
    <nav
        class="lg:hidden fixed inset-0 z-[1000] flex h-dvh max-h-dvh w-full flex-col overflow-hidden overscroll-contain
        bg-[linear-gradient(to_right,rgba(168,85,247,0.12),rgba(236,72,153,0.12),rgba(6,182,212,0.12),rgba(139,92,246,0.12)),linear-gradient(rgba(255,255,255,0.72),rgba(255,255,255,0.62)),url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=2000')]
        bg-cover bg-center bg-no-repeat backdrop-blur-xl
        opacity-0 invisible pointer-events-none translate-y-1
        peer-checked:opacity-100 peer-checked:visible peer-checked:pointer-events-auto peer-checked:translate-y-0
        transition-[opacity,transform] duration-300 ease-out
        before:absolute before:inset-0 before:bg-white/55 before:backdrop-blur-2xl before:pointer-events-none"
        aria-label="Mobile primary">
        <div class="relative z-10 flex min-h-0 flex-1 flex-col">
            <div
                class="flex shrink-0 items-center justify-between gap-3 border-b-4 border-blue-600 bg-white/25 px-4 py-3 backdrop-blur-md">
                <span class="text-base font-semibold text-stone-900">Menu</span>
                <label for="menu-toggle"
                    class="inline-flex cursor-pointer items-center justify-center rounded-full border-2 border-stone-800/20 bg-white/80 p-3 text-stone-900 shadow-md transition-colors hover:border-blue-600 hover:bg-white hover:text-blue-700 active:scale-95">
                    <span class="sr-only">Close menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2.25" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </label>
            </div>

            <ul class="flex flex-1 flex-col gap-2 overflow-y-auto px-4 py-6 pb-10" role="list">
                <li class="mb-2">
                    <a href="https://osb.org.bd/registration-bao" target="_blank" rel="noopener noreferrer"
                        onclick="document.getElementById('menu-toggle').checked=false"
                        class="relative flex items-center justify-center gap-2 overflow-hidden rounded-xl bg-gradient-to-r from-blue-600 via-blue-600 to-cyan-500 px-4 py-4 text-base font-bold uppercase tracking-wide text-white shadow-lg shadow-blue-600/35 ring-2 ring-white/40 transition hover:from-blue-500 hover:to-cyan-400 active:scale-[0.98]">
                        <i class="fas fa-user-plus text-lg opacity-90"></i>
                        Register for BAO
                    </a>
                </li>
                <li>
                    <a href="appointment.html"
                        onclick="document.getElementById('menu-toggle').checked=false"
                        class="flex items-center rounded-xl px-4 py-4 text-base font-medium text-stone-900 shadow-sm ring-1 ring-stone-900/10 transition-colors hover:bg-white/45 hover:text-cyan-700 active:bg-white/55">
                        Journal of BAO
                    </a>
                </li>
                <li>
                    <a href="membership.html"
                        onclick="document.getElementById('menu-toggle').checked=false"
                        class="flex items-center rounded-xl px-4 py-4 text-base font-medium text-stone-900 shadow-sm ring-1 ring-stone-900/10 transition-colors hover:bg-white/45 hover:text-cyan-700 active:bg-white/55">
                        Membership
                    </a>
                </li>
                <li>
                    <a href="#photo-gallery"
                        onclick="document.getElementById('menu-toggle').checked=false"
                        class="flex items-center rounded-xl px-4 py-4 text-base font-medium text-stone-900 shadow-sm ring-1 ring-stone-900/10 transition-colors hover:bg-white/45 hover:text-cyan-700 active:bg-white/55">
                        Photo Gallery
                    </a>
                </li>
                <li>
                    <a href="#committee"
                        onclick="document.getElementById('menu-toggle').checked=false"
                        class="flex items-center rounded-xl px-4 py-4 text-base font-medium text-stone-900 shadow-sm ring-1 ring-stone-900/10 transition-colors hover:bg-white/45 hover:text-cyan-700 active:bg-white/55">
                        Committee
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div x-data="{ 
        activeSlide: 1, 
        slides: [
            { 
                id: 1,
                title: '',
                desc: '',
                img: '{{ asset('pictures/bao_photo_one.jpg') }}'
            },
            { 
                id: 2, 
                title: '', 
                desc: '', 
                img: '{{ asset('pictures/bao_photo_two.jpg') }}'
            },
            { 
                id: 3, 
                title: '', 
                desc: '', 
                img: '{{ asset('pictures/bao_photo_three.jpg') }}'
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
    }" x-init="startTimer()" @mouseenter="stopTimer()" @mouseleave="startTimer()" id="hero-1"
        class="relative h-dvh min-h-[520px] w-screen max-w-[100vw] overflow-hidden bg-black group scroll-mt-[76px]">

        <!-- Slides: full-bleed below fixed header (72px bar + 4px border = 76px) — no margin gap -->
        <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" x-transition:enter="transition ease-in-out duration-[3000ms]"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-[3000ms]"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="absolute inset-x-0 top-[76px] bottom-0 bg-black">
                <img :src="slide.img"
                    class="absolute inset-0 h-full w-full min-w-full object-cover object-center brightness-[0.92]"
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

    <section id="about" class="content-area relative bg-cover bg-center scroll-mt-[76px] py-14 sm:py-16 md:py-20 lg:py-24 xl:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-10 md:gap-12 xl:flex-row xl:flex-nowrap xl:items-start xl:gap-x-12 2xl:gap-x-16">

                <div class="order-1 w-full min-w-0 xl:order-1 xl:w-7/12">
                    <div class="item-content max-w-2xl xl:max-w-none space-y-5 lg:space-y-6">
                        <h2 class="text-3xl lg:text-4xl font-semibold text-gray-900 capitalize leading-tight">
                            বাংলাদেশ একাডেমি অব অপথ্যালমোলজিতে স্বাগতম
                        </h2>
                        <div class="text-xl font-medium text-gray-900 leading-snug">
                            চক্ষুবিজ্ঞানের উন্নয়ন, শিক্ষা ও গবেষণায় দেশের অন্যতম অগ্রণী প্রতিষ্ঠান।
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base lg:text-lg">
                            বাংলাদেশ একাডেমি অব অপথ্যালমোলজি দেশের চক্ষু চিকিৎসা শিক্ষা ও গবেষণার মান উন্নয়নে
                            গুরুত্বপূর্ণ ভূমিকা পালন করছে। এখানে দক্ষ চিকিৎসক, গবেষক ও শিক্ষার্থীদের জন্য রয়েছে আধুনিক
                            প্রশিক্ষণ ব্যবস্থা, সেমিনার এবং কর্মশালার সুযোগ। আন্তর্জাতিক মানের জ্ঞান ও দক্ষতা অর্জনের
                            মাধ্যমে আমরা ভবিষ্যৎ চক্ষু বিশেষজ্ঞদের গড়ে তুলতে প্রতিশ্রুতিবদ্ধ।
                        </p>
                    </div>
                </div>

                <div class="order-2 w-full min-w-0 lg:mx-auto lg:max-w-xl xl:mx-0 xl:max-w-none xl:w-5/12 xl:shrink-0">
                    <ul class="space-y-4 sm:space-y-5">
                        <!-- Button 1 -->
                        <li>
                            <a href="appointment.html"
                                class="group relative block p-7 lg:p-9 pl-20 lg:pl-24 text-white text-lg lg:text-xl font-bold rounded-3xl overflow-hidden transition-all duration-500 hover:scale-[1.02] 
                       border-2 border-white/40 shadow-xl hover:border-white/80 hover:shadow-[0_0_30px_rgba(30,74,138,0.3)]">

                                <!-- Deeper Glass Base -->
                                <!-- Swapped light sky blues for deeper Royal and Navy tones -->
                                <div
                                    class="absolute inset-0 bg-[#1e4a8a]/80 bg-gradient-to-br from-[#2f5a9e]/90 via-[#1e4a8a]/95 to-[#0f2d5e] backdrop-blur-xl transition-colors duration-500 group-hover:from-[#254b8a]">
                                </div>

                                <!-- High-Contrast Micro-Dot Pattern -->
                                <div class="absolute inset-0 opacity-[0.25] group-hover:opacity-[0.4] transition-opacity duration-500"
                                    style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 14px 14px;">
                                </div>

                                <!-- Bright Scanning Animation -->
                                <div
                                    class="absolute inset-x-0 h-1/2 bg-gradient-to-b from-white/30 to-transparent -translate-y-full group-hover:translate-y-[200%] transition-all duration-[1200ms] ease-in-out">
                                </div>

                                <!-- Icon: Switched to White for visibility on deep blue -->
                                <i
                                    class="fas fa-book absolute left-7 lg:left-9 top-1/2 -translate-y-1/2 text-3xl lg:text-4xl 
                          text-white/90 group-hover:text-white group-hover:scale-110 transition-all duration-500 z-10"></i>

                                <span class="relative z-10 text-white tracking-wide">Journal of BAO</span>
                            </a>
                        </li>

                        <!-- Button 2 -->
                        <li>
                            <a href="membership.html"
                                class="group relative block p-7 lg:p-9 pl-20 lg:pl-24 text-white text-lg lg:text-xl font-bold rounded-3xl overflow-hidden transition-all duration-500 hover:scale-[1.02] 
                       border-2 border-white/40 shadow-xl hover:border-white/80 hover:shadow-[0_0_30px_rgba(30,74,138,0.3)]">

                                <div
                                    class="absolute inset-0 bg-[#1e4a8a]/80 bg-gradient-to-br from-[#2f5a9e]/90 via-[#1e4a8a]/95 to-[#0f2d5e] backdrop-blur-xl transition-colors duration-500 group-hover:from-[#254b8a]">
                                </div>

                                <div class="absolute inset-0 opacity-[0.25] group-hover:opacity-[0.4] transition-opacity duration-500"
                                    style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 14px 14px;">
                                </div>

                                <div
                                    class="absolute inset-x-0 h-1/2 bg-gradient-to-b from-white/30 to-transparent -translate-y-full group-hover:translate-y-[200%] transition-all duration-[1200ms] ease-in-out">
                                </div>

                                <i
                                    class="fas fa-id-card absolute left-7 lg:left-9 top-1/2 -translate-y-1/2 text-3xl lg:text-4xl text-white/90 group-hover:text-white group-hover:scale-110 transition-all duration-500 z-10"></i>
                                <span class="relative z-10 text-white tracking-wide">Membership</span>
                            </a>
                        </li>

                        <!-- Button 3: Photo Gallery -->
                        <li>
                            <a href="#photo-gallery"
                                class="group relative block p-7 lg:p-9 pl-20 lg:pl-24 text-white text-lg lg:text-xl font-bold rounded-3xl overflow-hidden transition-all duration-500 hover:scale-[1.02] 
                       border-2 border-white/40 shadow-xl hover:border-white/80 hover:shadow-[0_0_30px_rgba(30,74,138,0.3)]">

                                <div
                                    class="absolute inset-0 bg-[#1e4a8a]/80 bg-gradient-to-br from-[#2f5a9e]/90 via-[#1e4a8a]/95 to-[#0f2d5e] backdrop-blur-xl transition-colors duration-500 group-hover:from-[#254b8a]">
                                </div>

                                <div class="absolute inset-0 opacity-[0.25] group-hover:opacity-[0.4] transition-opacity duration-500"
                                    style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 14px 14px;">
                                </div>

                                <div
                                    class="absolute inset-x-0 h-1/2 bg-gradient-to-b from-white/30 to-transparent -translate-y-full group-hover:translate-y-[200%] transition-all duration-[1200ms] ease-in-out">
                                </div>

                                <i
                                    class="fas fa-images absolute left-7 lg:left-9 top-1/2 -translate-y-1/2 text-3xl lg:text-4xl text-white/90 group-hover:text-white group-hover:scale-110 transition-all duration-500 z-10"></i>
                                <span class="relative z-10 text-white tracking-wide">Photo Gallery</span>
                            </a>
                        </li>

                        <!-- Button 4: Committee -->
                        <li>
                            <a href="#committee"
                                class="group relative block p-7 lg:p-9 pl-20 lg:pl-24 text-white text-lg lg:text-xl font-bold rounded-3xl overflow-hidden transition-all duration-500 hover:scale-[1.02] 
                       border-2 border-white/40 shadow-xl hover:border-white/80 hover:shadow-[0_0_30px_rgba(30,74,138,0.3)]">

                                <div
                                    class="absolute inset-0 bg-[#1e4a8a]/80 bg-gradient-to-br from-[#2f5a9e]/90 via-[#1e4a8a]/95 to-[#0f2d5e] backdrop-blur-xl transition-colors duration-500 group-hover:from-[#254b8a]">
                                </div>

                                <div class="absolute inset-0 opacity-[0.25] group-hover:opacity-[0.4] transition-opacity duration-500"
                                    style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 14px 14px;">
                                </div>

                                <div
                                    class="absolute inset-x-0 h-1/2 bg-gradient-to-b from-white/30 to-transparent -translate-y-full group-hover:translate-y-[200%] transition-all duration-[1200ms] ease-in-out">
                                </div>

                                <i
                                    class="fas fa-users absolute left-7 lg:left-9 top-1/2 -translate-y-1/2 text-3xl lg:text-4xl text-white/90 group-hover:text-white group-hover:scale-110 transition-all duration-500 z-10"></i>
                                <span class="relative z-10 text-white tracking-wide">Committee</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </section>


    <div id="committee"
        class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-16 px-4 scroll-mt-[76px]">

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
        <div class="min-h-screen bg-gradient-to-br from-slate-100 via-indigo-50 to-cyan-50 p-10 font-sans">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

                <!-- 1. President -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-yellow-400 via-amber-500 to-orange-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-yellow-200/50 bg-gradient-to-br from-yellow-50 to-orange-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_abid_kamal.jpg') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: মোঃ আবিদ কামাল</h3>
                        <p class="text-center text-amber-700 font-semibold text-sm uppercase mt-1">সভাপতি</p>
                    </div>
                </div>

                <!-- 2. Mahasachib -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-emerald-400 via-teal-500 to-cyan-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-emerald-200/50 bg-gradient-to-br from-emerald-50 to-teal-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/zan_e_alam_mridha.jpg') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: জানে আলম মৃধা</h3>
                        <p class="text-center text-teal-700 font-semibold text-sm uppercase mt-1">মহাসচিব</p>
                    </div>
                </div>

                <!-- 3. Sah-Sovapoti 1 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-purple-400 via-indigo-500 to-violet-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-purple-200/50 bg-gradient-to-br from-purple-50 to-indigo-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/shamsul_haque.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: মোঃ সামসুল হক</h3>
                        <p class="text-center text-indigo-700 font-semibold text-sm uppercase mt-1">সহ-সভাপতি</p>
                    </div>
                </div>

                <!-- 4. Sah-Sovapoti 2 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-rose-400 via-pink-500 to-fuchsia-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-rose-200/50 bg-gradient-to-br from-rose-50 to-pink-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/abdul_wadud.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: সৈয়দ আব্দুল ওয়াদুদ</h3>
                        <p class="text-center text-rose-700 font-semibold text-sm uppercase mt-1">সহ-সভাপতি</p>
                    </div>
                </div>

                <!-- 5. Sah-Sovapoti 3 -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-orange-400 via-amber-500 to-yellow-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-orange-200/50 bg-gradient-to-br from-orange-50 to-amber-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/mostafa_hosen.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: মোহাম্মদ মোস্তফা হোসেন</h3>
                        <p class="text-center text-orange-700 font-semibold text-sm uppercase mt-1">সহ-সভাপতি</p>
                    </div>
                </div>

                <!-- 6. Koshadhyokkho -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-400 via-sky-500 to-cyan-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-blue-200/50 bg-gradient-to-br from-blue-50 to-sky-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/miftahul_hosen_chowdhury.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: মোঃ মিফতাহুল হোসেন চৌধুরী</h3>
                        <p class="text-center text-blue-700 font-semibold text-sm uppercase mt-1">কোষাধ্যক্ষ</p>
                    </div>
                </div>

                <!-- 7. Jukto-Mahasachib -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-teal-400 via-cyan-500 to-emerald-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-teal-200/50 bg-gradient-to-br from-teal-50 to-cyan-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/mahfuzul_alam.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: মোঃ মাহফুজুল আলম</h3>
                        <p class="text-center text-teal-700 font-semibold text-sm uppercase mt-1">যুগ্ম-মহাসচিব</p>
                    </div>
                </div>

                <!-- Remaining Members with Unique Colors -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-violet-400 to-purple-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-violet-200/50 bg-gradient-to-br from-violet-50 to-purple-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/sm_kadir.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: এ এস এম ক্বাদির</h3>
                        <p class="text-center text-purple-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-slate-500 to-zinc-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-slate-300 bg-gradient-to-br from-slate-50 to-zinc-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_nazrul_islam.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: মোঃ নজরুল ইসলাম</h3>
                        <p class="text-center text-slate-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-lime-400 to-green-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-lime-200/50 bg-gradient-to-br from-lime-50 to-green-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_kazi_moniruzzaman.jpg') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: কাজী মনিরুজ্জামান</h3>
                        <p class="text-center text-green-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-red-400 to-rose-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-red-200/50 bg-gradient-to-br from-red-50 to-rose-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/arif_hayat_khan_pathan.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800 text-xs sm:text-base">অধ্যাপক ডা: মোঃ আরিফ
                            হায়াত খান পাঠান</h3>
                        <p class="text-center text-rose-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-cyan-400 to-sky-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-cyan-200/50 bg-gradient-to-br from-cyan-50 to-sky-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_a_b_shamsuddin.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: এ বি শামসুদ্দুহা</h3>
                        <p class="text-center text-cyan-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-fuchsia-400 to-pink-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-fuchsia-200/50 bg-gradient-to-br from-fuchsia-50 to-pink-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/mehbub_ul_kadir.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: সায়ীদ মেহবুব উল কাদির</h3>
                        <p class="text-center text-fuchsia-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-pink-400 to-rose-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-pink-200/50 bg-gradient-to-br from-pink-50 to-rose-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_shahnaz_karim.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: শাহনাজ বেগম</h3>
                        <p class="text-center text-pink-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-emerald-400 to-cyan-500 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-emerald-200/50 bg-gradient-to-br from-emerald-50 to-cyan-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_asm_moin_uddin.jpg') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: এ এস এম মইন উদ্দিন</h3>
                        <p class="text-center text-emerald-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-blue-200/50 bg-gradient-to-br from-blue-50 to-indigo-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_mo_hasanuzzaman.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: মোঃ হাসানুজ্জামান</h3>
                        <p class="text-center text-indigo-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-amber-500 to-orange-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-amber-200/50 bg-gradient-to-br from-amber-50 to-orange-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_md_farid_hosen.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: মোঃ ফরিদ হোসেন</h3>
                        <p class="text-center text-amber-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-violet-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-indigo-200/50 bg-gradient-to-br from-indigo-50 to-violet-50 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_md_mazharul_hasan.png') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: মোঃ মাজহারুল ইসলাম</h3>
                        <p class="text-center text-violet-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-zinc-400 to-slate-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-zinc-200 bg-gradient-to-br from-zinc-50 to-slate-100 hover:-translate-y-2 transition shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/mahbub.jpg') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">ডা: এস এম এ মাহবুব</h3>
                        <p class="text-center text-slate-700 font-semibold text-sm mt-1">সদস্য</p>
                    </div>
                </div>

                <!-- OSB Convenor -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-violet-500 via-purple-600 to-fuchsia-600 rounded-3xl blur opacity-35 group-hover:opacity-75 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-violet-200/60 bg-gradient-to-br from-violet-50 to-purple-50 hover:-translate-y-2 transition shadow-2xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_shahabuddin.jpg') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: মোঃ সাহাব উদ্দিন (ওএসবি)</h3>
                        <p class="text-center text-purple-800 font-black text-xs tracking-widest mt-2 uppercase">OSB
                            CONVENOR</p>
                    </div>
                </div>

                <!-- OSB Secretary -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-cyan-500 via-blue-600 to-teal-600 rounded-3xl blur opacity-35 group-hover:opacity-75 transition">
                    </div>
                    <div
                        class="relative h-full rounded-3xl p-6 backdrop-blur-xl border border-cyan-200/60 bg-gradient-to-br from-cyan-50 to-blue-50 hover:-translate-y-2 transition shadow-2xl">
                        <div class="flex justify-center">
                            <img src="{{ asset('pictures/dr_newton.jpg') }}"
                                class="w-32 h-32 rounded-xl border-4 border-white object-cover shadow-md">
                        </div>
                        <h3 class="text-center mt-5 font-bold text-slate-800">অধ্যাপক ডা: মোঃ জিন্নু রাইন (নিউটন)</h3>
                        <p class="text-center text-blue-800 font-black text-xs tracking-widest mt-2 uppercase">OSB
                            SECRETARY</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <section id="photo-gallery" class="scroll-mt-[76px]">
    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mt-2 m-0-auto text-center mt-[100px] mb-[100px]">
        ফটো গ্যালারি
    </h1>

    <div class="grid grid-cols-2 gap-2 mb-[100px]">
        <div>
            <img class="h-auto max-w-full rounded-base" src="{{ asset('pictures/bao_photo_one.jpg') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-base" src="{{ asset('pictures/bao_photo_two.jpg') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-base" src="{{ asset('pictures/bao_photo_three.jpg') }}" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-base" src="{{ asset('pictures/bao_photo_one.jpg') }}" alt="">
        </div>
    </div>
    </section>



    {{-- Footer --}}
    <footer class="lg:block fixed bottom-0 w-full z-[999] shadow-xl font-['Lato',_sans-serif]
bg-[linear-gradient(to_right,rgba(168,85,247,0.12),rgba(236,72,153,0.12),rgba(6,182,212,0.12),rgba(139,92,246,0.12)),linear-gradient(rgba(255,255,255,0.25),rgba(255,255,255,0.15)),url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=2000')]
bg-cover bg-center bg-no-repeat
backdrop-blur-2xl
border-t border-white/40
shadow-white/20
relative overflow-hidden
before:absolute before:inset-0 before:bg-white/30 before:backdrop-blur-3xl before:pointer-events-none">

        <div class="max-w-7xl mx-auto px-6 py-20">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-4">

                <!-- Column 1 -->

                <div class="flex md:items-start">
                    <img src="{{ asset('pictures/bao_logo.png') }}"
                        class="w-[100px] md:w-38 h-auto drop-shadow-lg relative z-10" alt="Logo" />
                </div>


                <!-- Column 2 -->
                <div>
                    <h2 class="text-lg font-bold mb-5 relative inline-block text-gray-900
    after:content-[''] after:absolute after:w-10 after:h-0.5 after:bg-gray-900 after:-bottom-2 after:left-0">
                        Quick Links
                    </h2>

                    <ul
                        class="space-y-3 text-sm text-gray-900 mt-4 font-semibold drop-shadow-[0_1px_1px_rgba(0,0,0,0.15)]">

                        <li>
                            <a href="#"
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                About Us
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                Our Services
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                Our Team
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                Appointments
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </div>

                <!-- Column 3 -->
                <div>
                    <h2 class="text-lg font-bold mb-5 relative inline-block text-gray-900
after:content-[''] after:absolute after:w-10 after:h-0.5 after:bg-gray-900 after:-bottom-2 after:left-0">
                        Contact Us
                    </h2>

                    <ul
                        class="space-y-4 text-sm mt-4 font-semibold text-gray-900 drop-shadow-[0_1px_1px_rgba(0,0,0,0.15)]">

                        <li class="flex items-center gap-3 border-b border-black/10 pb-3">
                            <i class="fa-regular fa-envelope"></i>
                            <a href="mailto:contact@company.com"
                                class="hover:text-blue-500 transition-colors duration-300">
                                contact@company.com
                            </a>
                        </li>

                        <li class="flex items-center gap-3 border-b border-black/10 pb-3">
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:+11234567890" class="hover:text-blue-500 transition-colors duration-300">
                                (414) 687 - 5892
                            </a>
                        </li>

                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1"></i>
                            <span class="hover:text-blue-500 transition-colors duration-300">
                                794 Mcallister St <br> San Francisco, 94102
                            </span>
                        </li>

                    </ul>
                </div>

                <!-- Column 4 -->
                <div>
                    <h2 class="text-lg font-bold mb-5 relative inline-block text-gray-900
after:content-[''] after:absolute after:w-10 after:h-0.5 after:bg-gray-900 after:-bottom-2 after:left-0">
                        Newsletter
                    </h2>

                    <p class="text-sm text-gray-900 mb-4 mt-4 font-medium">
                        Subscribe our newsletter to get the latest updates
                    </p>

                    <form class="relative mb-8">
                        <input type="email" placeholder="Email Address"
                            class="w-full rounded-xl py-4 pl-5 pr-14 text-gray-900 outline-none ring-4 ring-black/10 border-2 border-black shadow-xl transition-all bg-white/90 focus:bg-white"
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

        <!-- Bottom -->
        <div class="border-t border-black/10 bg-black/5">
            <div
                class="max-w-7xl mx-auto px-6 py-6 flex flex-col gap-4 text-xs text-center lg:flex-row lg:justify-between lg:text-sm font-semibold text-gray-900">

                <p>
                    © 2026 <a href="#" class="hover:underline">DexignZone</a> Theme. All Rights Reserved.
                </p>

                <ul
                    class="flex justify-center gap-6 text-gray-900 font-semibold drop-shadow-[0_1px_1px_rgba(0,0,0,0.15)]">
                    <li>
                        <a href="#" class="hover:text-black underline-offset-4 hover:underline transition-colors">
                            Terms & Conditions
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-black underline-offset-4 hover:underline transition-colors">
                            Privacy Policy
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </footer>


</body>

</html>
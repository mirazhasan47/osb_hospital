<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        @keyframes membershipToastPop {
            0% { opacity: 0; transform: translateY(2rem) scale(0.88); }
            55% { opacity: 1; transform: translateY(-0.35rem) scale(1.04); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }

        @keyframes membershipToastOut {
            from { opacity: 1; transform: translateY(0) scale(1); }
            to { opacity: 0; transform: translateY(1rem) scale(0.94); }
        }

        @keyframes membershipToastIcon {
            0% { opacity: 0; transform: scale(0) rotate(-25deg); }
            55% { opacity: 1; transform: scale(1.12) rotate(6deg); }
            100% { opacity: 1; transform: scale(1) rotate(0deg); }
        }

        @keyframes membershipToastGlow {
            0%, 100% { box-shadow: 0 25px 50px -12px rgba(5, 150, 105, 0.35), 0 0 0 1px rgba(16, 185, 129, 0.2); }
            50% { box-shadow: 0 28px 60px -12px rgba(5, 150, 105, 0.5), 0 0 0 4px rgba(52, 211, 153, 0.35); }
        }

        .membership-toast-animate {
            animation: membershipToastPop 0.7s cubic-bezier(0.34, 1.25, 0.64, 1) forwards,
                membershipToastGlow 2.2s ease-in-out 0.7s 2;
        }

        .membership-toast-animate .membership-toast-icon {
            animation: membershipToastIcon 0.65s cubic-bezier(0.34, 1.45, 0.64, 1) 0.1s both;
        }

        .membership-toast-leave {
            animation: membershipToastOut 0.4s ease-in forwards !important;
        }

        @keyframes baoAdminToastGlowLogin {
            0%, 100% { box-shadow: 0 25px 50px -12px rgba(37, 99, 235, 0.32), 0 0 0 1px rgba(59, 130, 246, 0.2); }
            50% { box-shadow: 0 28px 60px -12px rgba(37, 99, 235, 0.48), 0 0 0 4px rgba(125, 211, 252, 0.32); }
        }

        @keyframes baoAdminToastGlowLogout {
            0%, 100% { box-shadow: 0 25px 50px -12px rgba(71, 85, 105, 0.28), 0 0 0 1px rgba(99, 102, 241, 0.18); }
            50% { box-shadow: 0 28px 60px -12px rgba(71, 85, 105, 0.42), 0 0 0 4px rgba(165, 180, 252, 0.28); }
        }

        .bao-admin-toast-animate--login {
            animation: membershipToastPop 0.7s cubic-bezier(0.34, 1.25, 0.64, 1) forwards,
                baoAdminToastGlowLogin 2.2s ease-in-out 0.7s 2;
        }

        .bao-admin-toast-animate--logout {
            animation: membershipToastPop 0.7s cubic-bezier(0.34, 1.25, 0.64, 1) forwards,
                baoAdminToastGlowLogout 2.2s ease-in-out 0.7s 2;
        }

        .bao-admin-toast-animate--login .bao-admin-toast-icon,
        .bao-admin-toast-animate--logout .bao-admin-toast-icon {
            animation: membershipToastIcon 0.65s cubic-bezier(0.34, 1.45, 0.64, 1) 0.1s both;
        }

        .bao-admin-toast-leave {
            animation: membershipToastOut 0.4s ease-in forwards !important;
        }

        /* MOCK registration CTA — shifting gradient + light sweep (accessibility-aware) */
        .mock-registration-cta {
            position: relative;
            overflow: hidden;
            isolation: isolate;
            background-image: linear-gradient(
                115deg,
                #1d4ed8 0%,
                #0e7490 15%,
                #4338ca 30%,
                #0369a1 45%,
                #2563eb 58%,
                #0891b2 72%,
                #4f46e5 86%,
                #1d4ed8 100%
            );
            background-size: 320% 100%;
            animation: mockRegistrationGradientFlow 5.5s ease-in-out infinite,
                mockRegistrationGlowPulse 3.2s ease-in-out infinite;
        }

        .mock-registration-cta > * {
            position: relative;
            z-index: 1;
        }

        .mock-registration-cta::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 0;
            opacity: 0.55;
            background: linear-gradient(
                105deg,
                transparent 0%,
                transparent 38%,
                rgba(255, 255, 255, 0.35) 49%,
                rgba(255, 255, 255, 0.55) 50%,
                rgba(255, 255, 255, 0.32) 51%,
                transparent 62%,
                transparent 100%
            );
            background-size: 220% 100%;
            animation: mockRegistrationShimmer 3.8s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes mockRegistrationGradientFlow {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes mockRegistrationGlowPulse {
            0%,
            100% {
                filter: saturate(1) brightness(1);
                box-shadow: 0 6px 24px -4px rgba(37, 99, 235, 0.45);
            }
            50% {
                filter: saturate(1.08) brightness(1.06);
                box-shadow: 0 10px 32px -4px rgba(8, 145, 178, 0.55), 0 0 24px -6px rgba(99, 102, 241, 0.35);
            }
        }

        @keyframes mockRegistrationShimmer {
            0% {
                background-position: 160% 50%;
            }
            100% {
                background-position: -60% 50%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .mock-registration-cta {
                animation: none;
                background-size: 100% 100%;
                filter: none;
                box-shadow: 0 6px 24px -4px rgba(37, 99, 235, 0.4);
            }

            .mock-registration-cta::after {
                animation: none;
                opacity: 0;
            }
        }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="text-gray-800 overflow-x-hidden">

    {{-- Checkbox must be a body-level sibling so peer-checked drawer/backdrop are not clipped by header backdrop-blur --}}
    <input type="checkbox" id="menu-toggle" class="peer hidden" autocomplete="off" aria-hidden="true">

    <header
        class="site-header hidden lg:flex fixed top-0 left-0 right-0 w-full z-[999] font-['Lato',_sans-serif]
        overflow-hidden border-b border-slate-200/80 bg-gradient-to-b from-white/95 via-white/90 to-slate-50/85 text-slate-900 shadow-[0_4px_32px_-8px_rgba(15,23,42,0.12),0_1px_0_0_rgba(255,255,255,0.9)_inset] backdrop-blur-xl backdrop-saturate-150
        before:pointer-events-none before:absolute before:inset-0 before:bg-[radial-gradient(120%_140%_at_0%_0%,rgba(59,130,246,0.08),transparent_55%),radial-gradient(100%_120%_at_100%_0%,rgba(6,182,212,0.06),transparent_50%)]
        after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-[2px] after:bg-gradient-to-r after:from-blue-600 after:via-cyan-500 after:to-blue-600 after:opacity-90">
        <div
            class="relative z-10 mx-auto flex h-[76px] w-full max-w-7xl items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">

            <div class="min-w-0 flex-shrink-0">
                <a href="#hero-1"
                    class="group flex min-w-0 items-center gap-3 rounded-2xl py-1 pr-2 transition hover:bg-slate-900/[0.03] sm:gap-3.5 sm:pr-3">
                    <span
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white shadow-[0_2px_12px_-2px_rgba(37,99,235,0.2)] ring-1 ring-slate-900/[0.06] sm:h-[52px] sm:w-[52px]">
                        <img src="{{ asset('pictures/bao_logo.png') }}" class="h-9 w-9 object-contain sm:h-10 sm:w-10"
                            alt="BAO logo" width="40" height="40">
                    </span>

                    <div class="min-w-0 border-l border-slate-200 pl-2.5 sm:pl-3.5">
                        <span
                            class="block truncate text-xs font-semibold leading-snug text-slate-900 sm:text-sm lg:max-w-[14rem] xl:max-w-[20rem] 2xl:max-w-none">
                            বাংলাদেশ একাডেমি অব অপথ্যালমোলজি (বিএও)
                        </span>
                        <span
                            class="mt-0.5 block truncate text-[10px] font-medium leading-tight text-slate-600 sm:text-xs lg:max-w-[14rem] xl:max-w-[20rem] 2xl:max-w-none">
                            Bangladesh Academy Of Ophthalmology (BAO)
                        </span>
                    </div>
                </a>
            </div>

            <div class="hidden min-w-0 flex-1 items-center justify-end gap-2.5 lg:flex xl:gap-3.5">
                <nav class="shrink-0 rounded-full bg-slate-900/[0.04] p-1 ring-1 ring-slate-900/[0.06] shadow-[inset_0_1px_0_0_rgba(255,255,255,0.65)]"
                    aria-label="Primary">
                    <ul class="flex items-center gap-0.5">
                        <li>
                            <a href="#" data-open-journal-modal
                                class="inline-flex items-center rounded-full px-3.5 py-2 text-sm font-semibold text-slate-700 transition hover:bg-white hover:text-blue-700 hover:shadow-sm">
                                Journal
                            </a>
                        </li>
                        <li>
                            <a href="#" data-open-membership-modal
                                class="inline-flex items-center rounded-full px-3.5 py-2 text-sm font-semibold text-slate-700 transition hover:bg-white hover:text-blue-700 hover:shadow-sm">
                                Membership
                            </a>
                        </li>
                        <li>
                            <a href="#photo-gallery"
                                class="inline-flex items-center rounded-full px-3.5 py-2 text-sm font-semibold text-slate-700 transition hover:bg-white hover:text-blue-700 hover:shadow-sm">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="#committee"
                                class="inline-flex items-center rounded-full px-3.5 py-2 text-sm font-semibold text-slate-700 transition hover:bg-white hover:text-blue-700 hover:shadow-sm">
                                Committee
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="mx-0.5 hidden h-8 w-px shrink-0 bg-gradient-to-b from-transparent via-slate-300/90 to-transparent xl:block"
                    aria-hidden="true"></div>

                <button type="button" id="bao-admin-header-btn" title="Login" aria-label="Login"
                    class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-slate-200/90 bg-white text-slate-800 shadow-sm transition hover:border-blue-300 hover:bg-blue-50/80 hover:text-blue-700 active:scale-[0.98] 2xl:h-auto 2xl:w-auto 2xl:gap-2 2xl:px-4 2xl:py-2.5">
                    <i id="bao-admin-header-icon" class="fa-solid fa-right-to-bracket text-sm text-blue-600 2xl:text-base"
                        aria-hidden="true"></i>
                    <span id="bao-admin-header-label" class="hidden text-sm font-semibold 2xl:inline" aria-hidden="true">Login</span>
                </button>

                <a href="https://osb.org.bd/registration-bao" target="_blank" rel="noopener noreferrer"
                    title="Register for MOCK test – Postgraduate Examinees (Ophthalmology), July 2026"
                    class="mock-registration-cta group inline-flex min-w-0 max-w-[min(100%,18rem)] shrink-0 items-center gap-2.5 rounded-full px-4 py-2.5 text-[14px] font-bold leading-tight text-white ring-1 ring-white/35 transition hover:brightness-110 active:scale-[0.98] xl:max-w-none xl:gap-3 xl:px-5 xl:py-3 xl:text-[15px]">
                    <i class="fas fa-clipboard-check shrink-0 text-base opacity-95 xl:text-lg" aria-hidden="true"></i>
                    <span class="min-w-0 text-left">
                        <span class="block xl:whitespace-nowrap">MOCK Test registration</span>
                        <span class="mt-0.5 hidden text-[10px] font-semibold leading-tight text-white/90 xl:block xl:text-[11px]">July
                            2026 · PG Ophthalmology</span>
                    </span>
                </a>
            </div>

        </div>
    </header>

    <header
        class="site-header block lg:hidden fixed top-0 left-0 right-0 w-full z-[999] font-['Lato',_sans-serif]
        overflow-hidden border-b border-slate-200/80 bg-gradient-to-b from-white/95 via-white/92 to-slate-50/88 backdrop-blur-xl backdrop-saturate-150
        shadow-[0_4px_28px_-8px_rgba(15,23,42,0.12)]
        before:pointer-events-none before:absolute before:inset-0 before:bg-[radial-gradient(100%_120%_at_0%_0%,rgba(59,130,246,0.07),transparent_55%)]
        after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-[2px] after:bg-gradient-to-r after:from-blue-600 after:via-cyan-500 after:to-blue-600 after:opacity-90">
        <div class="relative z-10 mx-auto flex h-[76px] max-w-7xl items-center justify-between gap-3 px-4">

            <div class="flex min-w-0 flex-1 items-center gap-2.5">
                <a href="#hero-1" class="flex min-w-0 items-center gap-2.5 rounded-xl py-0.5 pr-1 transition active:bg-slate-900/[0.04]">
                    <span
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white shadow-[0_2px_10px_-2px_rgba(37,99,235,0.18)] ring-1 ring-slate-900/[0.06]">
                        <img src="{{ asset('pictures/bao_logo.png') }}" class="h-8 w-8 object-contain" alt="BAO logo" width="32" height="32">
                    </span>
                    <div class="min-w-0 leading-tight">
                        <span class="block text-xs font-bold tracking-tight text-slate-900">বিএও</span>
                        <span class="block truncate text-[10px] font-semibold text-slate-600">BAO</span>
                    </div>
                </a>
            </div>

            <div class="flex shrink-0 items-center gap-1.5">
                <button type="button" id="bao-admin-mobile-header-btn" title="Login" aria-label="Login"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-200/90 bg-white text-slate-800 shadow-sm transition hover:border-blue-300 hover:bg-blue-50/80 hover:text-blue-700 active:scale-95">
                    <i id="bao-admin-mobile-header-icon" class="fa-solid fa-right-to-bracket text-base text-blue-600"
                        aria-hidden="true"></i>
                </button>
                <label for="menu-toggle"
                    class="inline-flex cursor-pointer items-center justify-center rounded-full border border-slate-200/80 bg-white p-2.5 text-slate-700 shadow-sm transition hover:border-blue-200 hover:bg-blue-50/50 hover:text-blue-700 active:scale-95">
                    <span class="sr-only">Open menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </label>
            </div>
        </div>
    </header>

    {{-- Full-page mobile menu (fixed to viewport; checkbox is body-level peer) --}}
    <nav
        class="lg:hidden fixed inset-0 z-[1000] flex h-dvh max-h-dvh w-full flex-col overflow-hidden overscroll-contain
        bg-gradient-to-b from-slate-50/98 via-white/95 to-blue-50/40 backdrop-blur-xl
        opacity-0 invisible pointer-events-none translate-y-1
        peer-checked:opacity-100 peer-checked:visible peer-checked:pointer-events-auto peer-checked:translate-y-0
        transition-[opacity,transform] duration-300 ease-out
        before:pointer-events-none before:absolute before:inset-0 before:bg-[radial-gradient(80%_60%_at_50%_-10%,rgba(59,130,246,0.08),transparent_65%)]"
        aria-label="Mobile primary">
        <div class="relative z-10 flex min-h-0 flex-1 flex-col">
            <div
                class="flex shrink-0 items-center justify-between gap-3 border-b border-slate-200/80 bg-white/90 px-4 py-3.5 shadow-[0_4px_20px_-12px_rgba(15,23,42,0.12)] backdrop-blur-md">
                <span class="text-base font-bold tracking-tight text-slate-900">Menu</span>
                <label for="menu-toggle"
                    class="inline-flex cursor-pointer items-center justify-center rounded-full border border-slate-200/90 bg-white p-2.5 text-slate-800 shadow-sm transition hover:border-blue-300 hover:bg-blue-50/80 hover:text-blue-700 active:scale-95">
                    <span class="sr-only">Close menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2.25" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </label>
            </div>

            <ul class="flex flex-1 flex-col gap-2 overflow-y-auto px-4 py-6 pb-10" role="list">
                <li class="mb-3">
                    <a href="https://osb.org.bd/registration-bao" target="_blank" rel="noopener noreferrer"
                        onclick="document.getElementById('menu-toggle').checked=false"
                        class="mock-registration-cta relative flex flex-col items-center gap-3 overflow-hidden rounded-2xl px-5 py-7 text-center text-white ring-2 ring-white/45 transition hover:brightness-110 active:scale-[0.98]">
                        <span class="flex items-center gap-3 text-lg font-bold uppercase tracking-wide sm:text-xl">
                            <i class="fas fa-clipboard-check text-2xl opacity-90 sm:text-[1.65rem]" aria-hidden="true"></i>
                            Register for MOCK test
                        </span>
                        <span class="max-w-md text-base font-semibold leading-snug text-white/95 sm:text-lg">For Postgraduate Examinees (Ophthalmology) – July 2026 Session</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        data-open-journal-modal
                        onclick="document.getElementById('menu-toggle').checked=false"
                        class="flex items-center rounded-xl px-4 py-4 text-base font-medium text-stone-900 shadow-sm ring-1 ring-stone-900/10 transition-colors hover:bg-white/45 hover:text-cyan-700 active:bg-white/55">
                        Journal of BAO
                    </a>
                </li>
                <li>
                    <a href="#"
                        data-open-membership-modal
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
                <li>
                    <button type="button" id="bao-admin-drawer-btn"
                        class="flex w-full items-center gap-3 rounded-xl px-4 py-4 text-left text-base font-medium text-stone-900 shadow-sm ring-1 ring-stone-900/10 transition-colors hover:bg-white/45 hover:text-cyan-700 active:bg-white/55">
                        <i id="bao-admin-drawer-icon" class="fa-solid fa-right-to-bracket text-blue-600" aria-hidden="true"></i>
                        <span id="bao-admin-drawer-label">Login</span>
                    </button>
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
                            <a href="#"
                                data-open-journal-modal
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
                            <a href="#"
                                data-open-membership-modal
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
                            <a href="#" data-open-journal-modal
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                Journal
                            </a>
                        </li>

                        <li>
                            <a href="#" data-open-membership-modal
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                Membership
                            </a>
                        </li>

                        <li>
                            <a href="#photo-gallery"
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                Gallery
                            </a>
                        </li>

                        <li>
                            <a href="#committee"
                                class="inline-block transition-all duration-300 hover:text-blue-500 hover:translate-x-2">
                                Committee
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

                        <li class="flex items-start gap-3 border-b border-black/10 pb-3">
                            <i class="fa-solid fa-location-dot mt-1 shrink-0"></i>
                            <p class="min-w-0 leading-snug">
                                Plot # 7, OSB Bhaban, 1 Road No. 1, Dhaka 1216
                            </p>
                        </li>

                        <li class="flex items-center gap-3 border-b border-black/10 pb-3">
                            <i class="fa-regular fa-envelope shrink-0"></i>
                            <a href="mailto:osbbd@yahoo.com"
                                class="min-w-0 break-all hover:text-blue-500 transition-colors duration-300">
                                osbbd@yahoo.com
                            </a>
                        </li>

                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone-volume shrink-0"></i>
                            <span class="font-semibold">
                                <span class="text-gray-800">Phone:</span>
                                <a href="tel:+88029003088" class="hover:text-blue-500 transition-colors duration-300">
                                    02-9003088
                                </a>
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

    {{-- Membership registration modal --}}
    <div id="membership-modal" class="fixed inset-0 z-[2000] hidden" aria-hidden="true" role="dialog"
        aria-labelledby="membership-modal-title">
        <div
            class="membership-modal-backdrop absolute inset-0 z-0 bg-slate-900/60 backdrop-blur-sm transition-opacity">
        </div>
        <div
            class="pointer-events-none absolute inset-0 z-10 flex items-center justify-center p-4 sm:p-6">
            <div
                class="pointer-events-auto relative w-full max-w-lg rounded-2xl border border-white/20 bg-white shadow-2xl shadow-blue-900/20">
                <div class="flex items-start justify-between gap-4 border-b border-slate-200 px-5 py-4 sm:px-6">
                    <h2 id="membership-modal-title" class="text-lg font-bold text-slate-900 sm:text-xl">Membership
                        registration</h2>
                    <button type="button" data-close-membership-modal
                        class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-slate-800">
                        <span class="sr-only">Close</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="membership-form" class="px-5 py-5 sm:px-6 sm:py-6">
                    <div class="space-y-4">
                        <div>
                            <label for="member-name" class="mb-1 block text-sm font-medium text-slate-700">Name</label>
                            <input id="member-name" name="name" type="text" required autocomplete="name"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30" />
                        </div>
                        <div>
                            <label for="member-phone" class="mb-1 block text-sm font-medium text-slate-700">Phone</label>
                            <input id="member-phone" name="phone" type="tel" required autocomplete="tel"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30" />
                        </div>
                        <div>
                            <label for="member-email" class="mb-1 block text-sm font-medium text-slate-700">Email</label>
                            <input id="member-email" name="email" type="email" required autocomplete="email"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30" />
                        </div>
                        <div>
                            <label for="member-institute" class="mb-1 block text-sm font-medium text-slate-700">Institute
                                name</label>
                            <input id="member-institute" name="institute_name" type="text" required
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30" />
                        </div>
                        <div>
                            <label for="member-designation"
                                class="mb-1 block text-sm font-medium text-slate-700">Designation</label>
                            <input id="member-designation" name="designation" type="text" required
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30" />
                        </div>
                    </div>
                    <p id="membership-form-error" class="mt-4 hidden text-sm text-red-600"></p>
                    <div class="mt-6 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                        <button type="button" data-close-membership-modal
                            class="rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" id="membership-submit"
                            class="rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 px-5 py-2.5 text-sm font-bold text-white shadow-md transition hover:from-blue-500 hover:to-cyan-500 disabled:opacity-60">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Journal of BAO: hub, list, submit --}}
    <div id="journal-root-modal" class="fixed inset-0 z-[2005] hidden" aria-hidden="true" role="dialog"
        aria-labelledby="journal-root-title">
        <div
            class="journal-root-backdrop absolute inset-0 z-0 bg-slate-900/60 backdrop-blur-sm transition-opacity">
        </div>
        <div
            class="pointer-events-none absolute inset-0 z-10 flex items-center justify-center p-4 sm:p-6">
            <div
                class="pointer-events-auto relative flex max-h-[min(90dvh,720px)] w-full max-w-lg flex-col rounded-2xl border border-white/20 bg-white shadow-2xl shadow-blue-900/25">
                <div class="flex shrink-0 items-start justify-between gap-4 border-b border-slate-200 px-5 py-4 sm:px-6">
                    <h2 id="journal-root-title" class="text-lg font-bold text-slate-900 sm:text-xl">Journal of BAO</h2>
                    <button type="button" data-close-journal-root
                        class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-slate-800">
                        <span class="sr-only">Close</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="min-h-0 flex-1 overflow-y-auto px-5 py-5 sm:px-6 sm:py-6">
                    <div id="journal-screen-menu" class="journal-screen">
                        <p class="mb-6 text-sm text-slate-600">Browse published submissions or upload a new journal (PDF).
                        </p>
                        <div class="flex flex-col gap-3 sm:flex-row sm:gap-4">
                            <button type="button" id="journal-btn-view"
                                class="flex-1 rounded-xl border-2 border-slate-200 bg-slate-50 px-4 py-4 text-center text-sm font-bold text-slate-800 shadow-sm transition hover:border-blue-400 hover:bg-white hover:text-blue-800">
                                <i class="fa-solid fa-list mb-2 block text-2xl text-blue-600" aria-hidden="true"></i>
                                View journals
                            </button>
                            <button type="button" id="journal-btn-submit"
                                class="flex-1 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 px-4 py-4 text-center text-sm font-bold text-white shadow-md transition hover:from-blue-500 hover:to-cyan-500">
                                <i class="fa-solid fa-file-arrow-up mb-2 block text-2xl opacity-95" aria-hidden="true"></i>
                                Submit journal
                            </button>
                        </div>
                    </div>
                    <div id="journal-screen-list" class="journal-screen hidden">
                        <button type="button" data-journal-back-menu
                            class="mb-4 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 hover:text-blue-900">
                            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                            Back
                        </button>
                        <p class="mb-3 text-sm font-medium text-slate-700">Submitted journals</p>
                        <div id="journal-list-loading" class="hidden py-8 text-center text-sm text-slate-500">Loading…
                        </div>
                        <p id="journal-list-empty" class="hidden py-8 text-center text-sm text-slate-500">No journals
                            submitted yet.</p>
                        <ul id="journal-list-items" class="space-y-2" role="list"></ul>
                        <p id="journal-list-error" class="mt-3 hidden text-sm text-red-600"></p>
                    </div>
                    <div id="journal-screen-submit" class="journal-screen hidden">
                        <button type="button" data-journal-back-menu
                            class="mb-4 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 hover:text-blue-900">
                            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                            Back
                        </button>
                        <form id="journal-submit-form" class="space-y-4">
                            <div>
                                <label for="journal-title" class="mb-1 block text-sm font-medium text-slate-700">Title
                                    (optional)</label>
                                <input id="journal-title" name="title" type="text" maxlength="255" autocomplete="off"
                                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30"
                                    placeholder="e.g. Research article title" />
                            </div>
                            <div>
                                <label for="journal-pdf" class="mb-1 block text-sm font-medium text-slate-700">PDF
                                    file</label>
                                <input id="journal-pdf" name="pdf" type="file" accept="application/pdf,.pdf" required
                                    class="block w-full text-sm text-slate-600 file:mr-4 file:rounded-lg file:border-0 file:bg-blue-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-blue-700 hover:file:bg-blue-100" />
                                <p class="mt-1 text-xs text-slate-500">PDF only, max 20 MB.</p>
                            </div>
                            <p id="journal-submit-error" class="hidden text-sm text-red-600"></p>
                            <p id="journal-submit-success" class="hidden text-sm font-medium text-emerald-700"></p>
                            <div class="flex flex-col-reverse gap-3 pt-2 sm:flex-row sm:justify-end">
                                <button type="button" data-journal-back-menu
                                    class="rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                                    Cancel
                                </button>
                                <button type="submit" id="journal-submit-btn"
                                    class="rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 px-5 py-2.5 text-sm font-bold text-white shadow-md transition hover:from-blue-500 hover:to-cyan-500 disabled:opacity-60">
                                    Upload
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Journal PDF viewer --}}
    <div id="journal-pdf-modal" class="fixed inset-0 z-[2260] hidden" aria-hidden="true" role="dialog"
        aria-label="Journal PDF">
        <div class="journal-pdf-backdrop absolute inset-0 z-0 bg-slate-950/80 backdrop-blur-sm"></div>
        <div class="pointer-events-none absolute inset-0 z-10 flex flex-col p-3 sm:p-6">
            <div
                class="pointer-events-auto flex min-h-0 flex-1 flex-col overflow-hidden rounded-xl border border-white/10 bg-slate-900 shadow-2xl sm:rounded-2xl">
                <div class="flex shrink-0 items-center justify-between gap-3 border-b border-white/10 px-4 py-3 sm:px-5">
                    <p id="journal-pdf-filename" class="min-w-0 truncate text-sm font-semibold text-white"></p>
                    <button type="button" data-close-journal-pdf
                        class="shrink-0 rounded-lg p-2 text-slate-300 transition hover:bg-white/10 hover:text-white">
                        <span class="sr-only">Close PDF</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="relative min-h-0 flex-1 bg-slate-800">
                    <iframe id="journal-pdf-iframe" title="Journal PDF" class="h-full w-full border-0"
                        src="about:blank"></iframe>
                </div>
            </div>
        </div>
    </div>

    {{-- BAO admin: login --}}
    <div id="bao-admin-login-modal" class="fixed inset-0 z-[2230] hidden" aria-hidden="true" role="dialog"
        aria-labelledby="bao-admin-login-title">
        <div class="bao-admin-login-backdrop absolute inset-0 z-0 bg-slate-900/65 backdrop-blur-sm"></div>
        <div class="pointer-events-none absolute inset-0 z-10 flex items-center justify-center p-4 sm:p-6">
            <div
                class="pointer-events-auto w-full max-w-md rounded-2xl border border-white/20 bg-white shadow-2xl shadow-blue-900/20">
                <div class="flex items-start justify-between gap-4 border-b border-slate-200 px-5 py-4 sm:px-6">
                    <h2 id="bao-admin-login-title" class="text-lg font-bold text-slate-900 sm:text-xl">Admin login</h2>
                    <button type="button" data-close-bao-admin-login
                        class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-slate-800">
                        <span class="sr-only">Close</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="bao-admin-login-form" class="px-5 py-5 sm:px-6 sm:py-6">
                    <div class="space-y-4">
                        <div>
                            <label for="bao-admin-username" class="mb-1 block text-sm font-medium text-slate-700">Username</label>
                            <input id="bao-admin-username" name="username" type="text" required autocomplete="username"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30" />
                        </div>
                        <div>
                            <label for="bao-admin-password" class="mb-1 block text-sm font-medium text-slate-700">Password</label>
                            <input id="bao-admin-password" name="password" type="password" required
                                autocomplete="current-password"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30" />
                        </div>
                    </div>
                    <p id="bao-admin-login-error" class="mt-4 hidden text-sm text-red-600"></p>
                    <div class="mt-6 flex justify-end gap-3">
                        <button type="button" data-close-bao-admin-login
                            class="rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                            Cancel
                        </button>
                        <button type="submit" id="bao-admin-login-submit"
                            class="rounded-xl bg-gradient-to-r from-slate-800 to-slate-900 px-5 py-2.5 text-sm font-bold text-white shadow-md transition hover:from-slate-700 hover:to-slate-800 disabled:opacity-60">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- BAO admin: visibility --}}
    <div id="bao-admin-panel-modal" class="fixed inset-0 z-[2235] hidden" aria-hidden="true" role="dialog"
        aria-labelledby="bao-admin-panel-title">
        <div class="bao-admin-panel-backdrop absolute inset-0 z-0 bg-slate-900/65 backdrop-blur-sm"></div>
        <div class="pointer-events-none absolute inset-0 z-10 flex items-center justify-center p-4 sm:p-6">
            <div
                class="pointer-events-auto flex max-h-[min(90dvh,760px)] w-full max-w-lg flex-col rounded-2xl border border-white/20 bg-white shadow-2xl shadow-blue-900/20">
                <div class="flex shrink-0 items-start justify-between gap-4 border-b border-slate-200 px-5 py-4 sm:px-6">
                    <div>
                        <h2 id="bao-admin-panel-title" class="text-lg font-bold text-slate-900 sm:text-xl">Journal visibility</h2>
                        <p class="mt-1 text-xs text-slate-600">Choose which PDFs appear in “View journals” for visitors.</p>
                    </div>
                    <button type="button" data-close-bao-admin-panel
                        class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-slate-800">
                        <span class="sr-only">Close</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="min-h-0 flex-1 overflow-y-auto px-5 py-4 sm:px-6">
                    <p id="bao-admin-panel-loading" class="hidden py-6 text-center text-sm text-slate-500">Loading…</p>
                    <p id="bao-admin-panel-empty" class="hidden py-6 text-center text-sm text-slate-500">No submissions yet.
                    </p>
                    <p id="bao-admin-panel-error" class="hidden text-sm text-red-600"></p>
                    <ul id="bao-admin-panel-list" class="space-y-2" role="list"></ul>
                </div>
                <div class="flex shrink-0 flex-col gap-3 border-t border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                    <button type="button" id="bao-admin-logout-btn"
                        class="rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50 sm:order-1">
                        Log out
                    </button>
                    <div class="flex flex-col-reverse gap-2 sm:flex-row sm:gap-3 sm:order-2">
                        <button type="button" data-close-bao-admin-panel
                            class="rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                            Close
                        </button>
                        <button type="button" id="bao-admin-save-visibility"
                            class="rounded-xl bg-gradient-to-r from-blue-600 to-cyan-600 px-5 py-2.5 text-sm font-bold text-white shadow-md transition hover:from-blue-500 hover:to-cyan-500 disabled:opacity-60">
                            Save visibility
                        </button>
                    </div>
                </div>
                <p id="bao-admin-panel-save-msg" class="hidden px-5 pb-4 text-center text-sm font-medium text-emerald-700 sm:px-6"></p>
            </div>
        </div>
    </div>

    <div id="membership-toast"
        class="pointer-events-none fixed bottom-8 left-1/2 z-[2100] hidden w-[calc(100%-2rem)] max-w-lg -translate-x-1/2 transform px-3 sm:bottom-10 sm:max-w-xl sm:px-4"
        role="status" aria-live="polite">
        <div id="membership-toast-panel"
            class="pointer-events-auto relative overflow-hidden rounded-3xl border-2 border-emerald-400/60 bg-gradient-to-br from-emerald-50 via-white to-teal-50 px-6 py-7 text-center shadow-2xl shadow-emerald-700/20 ring-4 ring-emerald-300/30 sm:px-10 sm:py-9">
            <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-emerald-400/15 blur-2xl"></div>
            <div class="pointer-events-none absolute -bottom-10 -left-10 h-36 w-36 rounded-full bg-teal-400/15 blur-2xl"></div>
            <div class="relative">
                <div class="mb-4 flex justify-center sm:mb-5">
                    <span
                        class="membership-toast-icon inline-flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-3xl text-white shadow-lg shadow-emerald-600/40 sm:h-20 sm:w-20 sm:text-4xl"
                        aria-hidden="true">
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                </div>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-emerald-700/90 sm:text-sm">Success</p>
                <p id="membership-toast-message"
                    class="mt-2 text-lg font-bold leading-snug text-emerald-950 sm:mt-3 sm:text-2xl sm:leading-tight"></p>
            </div>
        </div>
    </div>

    <div id="bao-admin-toast"
        class="pointer-events-none fixed bottom-8 left-1/2 z-[2280] hidden w-[calc(100%-2rem)] max-w-lg -translate-x-1/2 transform px-3 sm:bottom-10 sm:max-w-xl sm:px-4"
        role="status" aria-live="polite">
        <div id="bao-admin-toast-panel"
            class="pointer-events-auto relative overflow-hidden rounded-3xl border-2 border-blue-400/60 bg-gradient-to-br from-blue-50 via-white to-cyan-50 px-6 py-7 text-center shadow-2xl shadow-blue-700/20 ring-4 ring-blue-300/30 sm:px-10 sm:py-9">
            <div
                class="bao-admin-toast-blob-a pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full blur-2xl bg-blue-400/15">
            </div>
            <div
                class="bao-admin-toast-blob-b pointer-events-none absolute -bottom-10 -left-10 h-36 w-36 rounded-full blur-2xl bg-cyan-400/12">
            </div>
            <div class="relative">
                <div class="mb-4 flex justify-center sm:mb-5">
                    <span id="bao-admin-toast-icon-wrap"
                        class="bao-admin-toast-icon inline-flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-600 text-3xl text-white shadow-lg shadow-blue-600/40 sm:h-20 sm:w-20 sm:text-4xl"
                        aria-hidden="true">
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                </div>
                <p id="bao-admin-toast-heading"
                    class="text-xs font-bold uppercase tracking-[0.2em] text-blue-800/90 sm:text-sm">Signed in</p>
                <p id="bao-admin-toast-message"
                    class="mt-2 text-lg font-bold leading-snug text-slate-900 sm:mt-3 sm:text-2xl sm:leading-tight"></p>
            </div>
        </div>
    </div>

    <script>
        (function () {
            window.baoRefreshBodyScrollLock = function () {
                var ids = ['membership-modal', 'journal-root-modal', 'journal-pdf-modal', 'bao-admin-login-modal',
                    'bao-admin-panel-modal'
                ];
                var any = ids.some(function (id) {
                    var el = document.getElementById(id);
                    return el && !el.classList.contains('hidden');
                });
                document.body.classList.toggle('overflow-hidden', any);
            };

            const modal = document.getElementById('membership-modal');
            const form = document.getElementById('membership-form');
            const errEl = document.getElementById('membership-form-error');
            const toast = document.getElementById('membership-toast');
            const toastPanel = document.getElementById('membership-toast-panel');
            const toastMsg = document.getElementById('membership-toast-message');
            const submitBtn = document.getElementById('membership-submit');
            const storeUrl = @json(route('bao.students.store'));

            function openModal(e) {
                if (e) e.preventDefault();
                modal.classList.remove('hidden');
                window.baoRefreshBodyScrollLock();
                modal.setAttribute('aria-hidden', 'false');
                errEl.classList.add('hidden');
                errEl.textContent = '';
            }

            function closeModal() {
                modal.classList.add('hidden');
                window.baoRefreshBodyScrollLock();
                modal.setAttribute('aria-hidden', 'true');
            }

            document.querySelectorAll('[data-open-membership-modal]').forEach(function (el) {
                el.addEventListener('click', openModal);
            });

            modal.querySelectorAll('[data-close-membership-modal]').forEach(function (el) {
                el.addEventListener('click', closeModal);
            });

            modal.querySelector('.membership-modal-backdrop').addEventListener('click', closeModal);

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
            });

            function showToast(text) {
                toastMsg.textContent = text;
                toastPanel.classList.remove('membership-toast-leave');
                toast.classList.remove('hidden');
                toastPanel.classList.remove('membership-toast-animate');
                void toastPanel.offsetWidth;
                toastPanel.classList.add('membership-toast-animate');
                clearTimeout(window._membershipToastTimer);
                clearTimeout(window._membershipToastHideTimer);
                window._membershipToastTimer = setTimeout(function () {
                    toastPanel.classList.add('membership-toast-leave');
                    window._membershipToastHideTimer = setTimeout(function () {
                        toast.classList.add('hidden');
                        toastPanel.classList.remove('membership-toast-animate', 'membership-toast-leave');
                    }, 420);
                }, 5500);
            }

            form.addEventListener('submit', async function (e) {
                e.preventDefault();
                errEl.classList.add('hidden');
                errEl.textContent = '';
                submitBtn.disabled = true;

                const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                const payload = {
                    name: document.getElementById('member-name').value.trim(),
                    phone: document.getElementById('member-phone').value.trim(),
                    email: document.getElementById('member-email').value.trim(),
                    institute_name: document.getElementById('member-institute').value.trim(),
                    designation: document.getElementById('member-designation').value.trim(),
                };

                try {
                    const res = await fetch(storeUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token || '',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: JSON.stringify(payload),
                    });

                    const data = await res.json().catch(function () {
                        return {};
                    });

                    if (!res.ok) {
                        if (data.errors) {
                            const first = Object.values(data.errors).flat()[0];
                            errEl.textContent = first || data.message || 'Something went wrong.';
                        } else {
                            errEl.textContent = data.message || 'Something went wrong.';
                        }
                        errEl.classList.remove('hidden');
                        return;
                    }

                    form.reset();
                    closeModal();
                    showToast(data.message || 'You have registered as a member.');
                } catch (err) {
                    errEl.textContent = 'Network error. Please try again.';
                    errEl.classList.remove('hidden');
                } finally {
                    submitBtn.disabled = false;
                }
            });
        })();
    </script>

    <script>
        (function () {
            const loginModal = document.getElementById('bao-admin-login-modal');
            const panelModal = document.getElementById('bao-admin-panel-modal');
            const loginForm = document.getElementById('bao-admin-login-form');
            const loginErr = document.getElementById('bao-admin-login-error');
            const loginSubmit = document.getElementById('bao-admin-login-submit');
            const panelLoading = document.getElementById('bao-admin-panel-loading');
            const panelEmpty = document.getElementById('bao-admin-panel-empty');
            const panelErr = document.getElementById('bao-admin-panel-error');
            const panelList = document.getElementById('bao-admin-panel-list');
            const panelSaveMsg = document.getElementById('bao-admin-panel-save-msg');
            const saveBtn = document.getElementById('bao-admin-save-visibility');
            const logoutBtn = document.getElementById('bao-admin-logout-btn');

            const sessionUrl = @json(route('bao.admin.session'));
            const loginUrl = @json(route('bao.admin.login'));
            const logoutUrl = @json(route('bao.admin.logout'));
            const adminJournalsUrl = @json(route('bao.admin.journals'));
            const publishUrl = @json(route('bao.admin.journals.publish'));

            let baoAdminAuth = false;

            function openLoginModal() {
                loginErr.classList.add('hidden');
                loginErr.textContent = '';
                loginModal.classList.remove('hidden');
                loginModal.setAttribute('aria-hidden', 'false');
                window.baoRefreshBodyScrollLock();
            }

            function closeLoginModal() {
                loginModal.classList.add('hidden');
                loginModal.setAttribute('aria-hidden', 'true');
                window.baoRefreshBodyScrollLock();
            }

            function openPanelModal() {
                panelErr.classList.add('hidden');
                panelSaveMsg.classList.add('hidden');
                panelModal.classList.remove('hidden');
                panelModal.setAttribute('aria-hidden', 'false');
                window.baoRefreshBodyScrollLock();
                loadAdminJournals();
            }

            function closePanelModal() {
                panelModal.classList.add('hidden');
                panelModal.setAttribute('aria-hidden', 'true');
                window.baoRefreshBodyScrollLock();
            }

            function updateAdminChrome() {
                const label = baoAdminAuth ? 'Journal admin' : 'Login';
                const iconClass = baoAdminAuth ? 'fa-solid fa-gear' : 'fa-solid fa-right-to-bracket';
                const elLabel = document.getElementById('bao-admin-header-label');
                const elIcon = document.getElementById('bao-admin-header-icon');
                const deskBtn = document.getElementById('bao-admin-header-btn');
                const mIcon = document.getElementById('bao-admin-mobile-header-icon');
                const dLabel = document.getElementById('bao-admin-drawer-label');
                const dIcon = document.getElementById('bao-admin-drawer-icon');
                const mBtn = document.getElementById('bao-admin-mobile-header-btn');
                if (elLabel) elLabel.textContent = label;
                if (elIcon) elIcon.className = iconClass + ' text-sm text-blue-600 2xl:text-base';
                if (deskBtn) {
                    deskBtn.setAttribute('aria-label', label);
                    deskBtn.title = label;
                }
                if (mIcon) mIcon.className = iconClass + ' text-base text-blue-600';
                if (mBtn) {
                    mBtn.setAttribute('aria-label', label);
                    mBtn.title = label;
                }
                if (dLabel) dLabel.textContent = label;
                if (dIcon) dIcon.className = iconClass + ' text-blue-600';
            }

            const baoAdminToastPanelBase =
                'pointer-events-auto relative overflow-hidden rounded-3xl border-2 px-6 py-7 text-center shadow-2xl ring-4 sm:px-10 sm:py-9';
            const baoAdminToastIconBase =
                'bao-admin-toast-icon inline-flex h-16 w-16 items-center justify-center rounded-2xl text-3xl text-white shadow-lg sm:h-20 sm:w-20 sm:text-4xl';
            const baoAdminToastBlobBase = 'pointer-events-none absolute rounded-full blur-2xl';

            function applyBaoAdminToastTheme(kind) {
                const panel = document.getElementById('bao-admin-toast-panel');
                const iconWrap = document.getElementById('bao-admin-toast-icon-wrap');
                const heading = document.getElementById('bao-admin-toast-heading');
                const blobA = panel.querySelector('.bao-admin-toast-blob-a');
                const blobB = panel.querySelector('.bao-admin-toast-blob-b');
                if (kind === 'login') {
                    panel.className = baoAdminToastPanelBase +
                        ' border-blue-400/60 bg-gradient-to-br from-blue-50 via-white to-cyan-50 shadow-blue-700/20 ring-blue-300/30';
                    iconWrap.className = baoAdminToastIconBase +
                        ' bg-gradient-to-br from-blue-600 to-cyan-600 shadow-blue-600/40';
                    heading.className =
                        'text-xs font-bold uppercase tracking-[0.2em] text-blue-800/90 sm:text-sm';
                    blobA.className = baoAdminToastBlobBase +
                        ' bao-admin-toast-blob-a -right-8 -top-8 h-32 w-32 bg-blue-400/15';
                    blobB.className = baoAdminToastBlobBase +
                        ' bao-admin-toast-blob-b -bottom-10 -left-10 h-36 w-36 bg-cyan-400/12';
                } else {
                    panel.className = baoAdminToastPanelBase +
                        ' border-slate-400/55 bg-gradient-to-br from-slate-50 via-white to-indigo-50 shadow-slate-700/20 ring-slate-300/35';
                    iconWrap.className = baoAdminToastIconBase +
                        ' bg-gradient-to-br from-slate-600 to-indigo-600 shadow-indigo-600/35';
                    heading.className =
                        'text-xs font-bold uppercase tracking-[0.2em] text-slate-700/90 sm:text-sm';
                    blobA.className = baoAdminToastBlobBase +
                        ' bao-admin-toast-blob-a -right-8 -top-8 h-32 w-32 bg-slate-400/14';
                    blobB.className = baoAdminToastBlobBase +
                        ' bao-admin-toast-blob-b -bottom-10 -left-10 h-36 w-36 bg-indigo-400/12';
                }
            }

            function showBaoAdminToast(kind, message) {
                const wrap = document.getElementById('bao-admin-toast');
                const panel = document.getElementById('bao-admin-toast-panel');
                const iconWrap = document.getElementById('bao-admin-toast-icon-wrap');
                const heading = document.getElementById('bao-admin-toast-heading');
                const msg = document.getElementById('bao-admin-toast-message');
                applyBaoAdminToastTheme(kind);
                if (kind === 'login') {
                    iconWrap.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
                    heading.textContent = 'Signed in';
                } else {
                    iconWrap.innerHTML = '<i class="fa-solid fa-right-from-bracket"></i>';
                    heading.textContent = 'Signed out';
                }
                msg.textContent = message;
                panel.classList.remove('bao-admin-toast-animate--login', 'bao-admin-toast-animate--logout',
                    'bao-admin-toast-leave');
                wrap.classList.remove('hidden');
                void panel.offsetWidth;
                panel.classList.add(kind === 'login' ? 'bao-admin-toast-animate--login' :
                    'bao-admin-toast-animate--logout');
                clearTimeout(window._baoAdminToastTimer);
                clearTimeout(window._baoAdminToastHideTimer);
                window._baoAdminToastTimer = setTimeout(function () {
                    panel.classList.remove('bao-admin-toast-animate--login', 'bao-admin-toast-animate--logout');
                    panel.classList.add('bao-admin-toast-leave');
                    window._baoAdminToastHideTimer = setTimeout(function () {
                        wrap.classList.add('hidden');
                        panel.classList.remove('bao-admin-toast-animate--login', 'bao-admin-toast-animate--logout',
                            'bao-admin-toast-leave');
                    }, 420);
                }, 5500);
            }

            function handlePrimaryAdminClick(e) {
                if (e) e.preventDefault();
                const toggle = document.getElementById('menu-toggle');
                if (toggle) toggle.checked = false;
                if (baoAdminAuth) {
                    openPanelModal();
                } else {
                    openLoginModal();
                }
            }

            document.getElementById('bao-admin-header-btn').addEventListener('click', handlePrimaryAdminClick);
            document.getElementById('bao-admin-mobile-header-btn').addEventListener('click', handlePrimaryAdminClick);
            document.getElementById('bao-admin-drawer-btn').addEventListener('click', handlePrimaryAdminClick);

            loginModal.querySelectorAll('[data-close-bao-admin-login]').forEach(function (el) {
                el.addEventListener('click', closeLoginModal);
            });
            loginModal.querySelector('.bao-admin-login-backdrop').addEventListener('click', closeLoginModal);

            panelModal.querySelectorAll('[data-close-bao-admin-panel]').forEach(function (el) {
                el.addEventListener('click', closePanelModal);
            });
            panelModal.querySelector('.bao-admin-panel-backdrop').addEventListener('click', closePanelModal);

            document.addEventListener('keydown', function (e) {
                if (e.key !== 'Escape') return;
                const pdfModal = document.getElementById('journal-pdf-modal');
                if (pdfModal && !pdfModal.classList.contains('hidden')) {
                    return;
                }
                if (panelModal && !panelModal.classList.contains('hidden')) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    closePanelModal();
                    return;
                }
                if (loginModal && !loginModal.classList.contains('hidden')) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    closeLoginModal();
                }
            }, true);

            async function refreshSession() {
                try {
                    const res = await fetch(sessionUrl, {
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                    });
                    const data = await res.json().catch(function () {
                        return {};
                    });
                    baoAdminAuth = !!(data && data.authenticated);
                    updateAdminChrome();
                } catch (err) {
                    baoAdminAuth = false;
                    updateAdminChrome();
                }
            }

            loginForm.addEventListener('submit', async function (e) {
                e.preventDefault();
                loginErr.classList.add('hidden');
                const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                loginSubmit.disabled = true;
                try {
                    const res = await fetch(loginUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token || '',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: JSON.stringify({
                            username: document.getElementById('bao-admin-username').value,
                            password: document.getElementById('bao-admin-password').value,
                        }),
                    });
                    const data = await res.json().catch(function () {
                        return {};
                    });
                    if (!res.ok) {
                        loginErr.textContent = data.message || 'Login failed.';
                        if (data.errors) {
                            const first = Object.values(data.errors).flat()[0];
                            if (first) loginErr.textContent = first;
                        }
                        loginErr.classList.remove('hidden');
                        return;
                    }
                    loginForm.reset();
                    closeLoginModal();
                    baoAdminAuth = true;
                    updateAdminChrome();
                    openPanelModal();
                    showBaoAdminToast('login', data.message || 'You are signed in as admin.');
                } catch (err) {
                    loginErr.textContent = 'Network error.';
                    loginErr.classList.remove('hidden');
                } finally {
                    loginSubmit.disabled = false;
                }
            });

            logoutBtn.addEventListener('click', async function () {
                const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                let logoutMessage = 'You have been logged out.';
                try {
                    const res = await fetch(logoutUrl, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token || '',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                    });
                    const data = await res.json().catch(function () {
                        return {};
                    });
                    if (data.message) logoutMessage = data.message;
                } catch (err) { /* ignore */ }
                baoAdminAuth = false;
                updateAdminChrome();
                closePanelModal();
                setTimeout(function () {
                    showBaoAdminToast('logout', logoutMessage);
                }, 120);
            });

            async function loadAdminJournals() {
                panelLoading.classList.remove('hidden');
                panelEmpty.classList.add('hidden');
                panelErr.classList.add('hidden');
                panelList.innerHTML = '';
                const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                try {
                    const res = await fetch(adminJournalsUrl, {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token || '',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                    });
                    const data = await res.json().catch(function () {
                        return {};
                    });
                    panelLoading.classList.add('hidden');
                    if (res.status === 401 || !res.ok) {
                        panelErr.textContent = data.message || 'Session expired. Log in again.';
                        panelErr.classList.remove('hidden');
                        baoAdminAuth = false;
                        updateAdminChrome();
                        return;
                    }
                    const rows = data.data || [];
                    if (rows.length === 0) {
                        panelEmpty.classList.remove('hidden');
                        return;
                    }
                    rows.forEach(function (row) {
                        const li = document.createElement('li');
                        li.className =
                            'flex flex-col gap-2 rounded-xl border border-slate-200 bg-slate-50/90 p-3 sm:flex-row sm:items-center sm:justify-between';
                        const left = document.createElement('div');
                        left.className = 'flex min-w-0 flex-1 items-start gap-3';
                        const cb = document.createElement('input');
                        cb.type = 'checkbox';
                        cb.className = 'mt-1 h-4 w-4 rounded border-slate-300 text-blue-600';
                        cb.dataset.journalId = String(row.id);
                        cb.checked = !!row.visible_to_public;
                        cb.setAttribute('aria-label', 'Show to public');
                        const labels = document.createElement('div');
                        labels.className = 'min-w-0 flex-1';
                        const t = document.createElement('p');
                        t.className = 'text-sm font-semibold text-slate-900';
                        t.textContent = row.title;
                        const s = document.createElement('p');
                        s.className = 'text-xs text-slate-500';
                        s.textContent = row.original_filename;
                        labels.appendChild(t);
                        labels.appendChild(s);
                        left.appendChild(cb);
                        left.appendChild(labels);
                        const actions = document.createElement('div');
                        actions.className = 'flex shrink-0';
                        const vbtn = document.createElement('button');
                        vbtn.type = 'button';
                        vbtn.className =
                            'rounded-lg border border-slate-300 bg-white px-3 py-2 text-xs font-bold text-slate-800 transition hover:bg-slate-100';
                        vbtn.textContent = 'Preview';
                        vbtn.addEventListener('click', function () {
                            if (typeof window.baoOpenJournalPdf === 'function') {
                                window.baoOpenJournalPdf(row.pdf_url, row.original_filename);
                            }
                        });
                        actions.appendChild(vbtn);
                        li.appendChild(left);
                        li.appendChild(actions);
                        panelList.appendChild(li);
                    });
                } catch (err) {
                    panelLoading.classList.add('hidden');
                    panelErr.textContent = 'Network error.';
                    panelErr.classList.remove('hidden');
                }
            }

            saveBtn.addEventListener('click', async function () {
                panelSaveMsg.classList.add('hidden');
                const ids = [];
                panelList.querySelectorAll('input[type="checkbox"][data-journal-id]').forEach(function (cb) {
                    if (cb.checked) ids.push(parseInt(cb.dataset.journalId, 10));
                });
                const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                saveBtn.disabled = true;
                try {
                    const res = await fetch(publishUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token || '',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: JSON.stringify({
                            ids: ids
                        }),
                    });
                    const data = await res.json().catch(function () {
                        return {};
                    });
                    if (!res.ok) {
                        panelErr.textContent = data.message || 'Could not save.';
                        panelErr.classList.remove('hidden');
                        return;
                    }
                    panelSaveMsg.textContent = data.message || 'Saved.';
                    panelSaveMsg.classList.remove('hidden');
                } catch (err) {
                    panelErr.textContent = 'Network error.';
                    panelErr.classList.remove('hidden');
                } finally {
                    saveBtn.disabled = false;
                }
            });

            refreshSession();
        })();
    </script>

    <script>
        (function () {
            const root = document.getElementById('journal-root-modal');
            const pdfModal = document.getElementById('journal-pdf-modal');
            const iframe = document.getElementById('journal-pdf-iframe');
            const pdfFilename = document.getElementById('journal-pdf-filename');
            const screenMenu = document.getElementById('journal-screen-menu');
            const screenList = document.getElementById('journal-screen-list');
            const screenSubmit = document.getElementById('journal-screen-submit');
            const listItems = document.getElementById('journal-list-items');
            const listLoading = document.getElementById('journal-list-loading');
            const listEmpty = document.getElementById('journal-list-empty');
            const listError = document.getElementById('journal-list-error');
            const submitForm = document.getElementById('journal-submit-form');
            const submitErr = document.getElementById('journal-submit-error');
            const submitOk = document.getElementById('journal-submit-success');
            const submitBtn = document.getElementById('journal-submit-btn');

            const journalsIndexUrl = @json(route('bao.journals.index'));
            const journalsStoreUrl = @json(route('bao.journals.store'));

            function showScreen(name) {
                screenMenu.classList.toggle('hidden', name !== 'menu');
                screenList.classList.toggle('hidden', name !== 'list');
                screenSubmit.classList.toggle('hidden', name !== 'submit');
            }

            function openJournalRoot(e) {
                if (e) e.preventDefault();
                showScreen('menu');
                listError.classList.add('hidden');
                listError.textContent = '';
                submitErr.classList.add('hidden');
                submitOk.classList.add('hidden');
                root.classList.remove('hidden');
                root.setAttribute('aria-hidden', 'false');
                window.baoRefreshBodyScrollLock();
            }

            function closeJournalRoot() {
                closeJournalPdf();
                root.classList.add('hidden');
                root.setAttribute('aria-hidden', 'true');
                showScreen('menu');
                submitForm.reset();
                window.baoRefreshBodyScrollLock();
            }

            function openJournalPdf(url, filename) {
                pdfFilename.textContent = filename || 'Journal';
                iframe.src = url;
                pdfModal.classList.remove('hidden');
                pdfModal.setAttribute('aria-hidden', 'false');
                window.baoRefreshBodyScrollLock();
            }

            function closeJournalPdf() {
                pdfModal.classList.add('hidden');
                pdfModal.setAttribute('aria-hidden', 'true');
                iframe.src = 'about:blank';
                pdfFilename.textContent = '';
                window.baoRefreshBodyScrollLock();
            }

            document.querySelectorAll('[data-open-journal-modal]').forEach(function (el) {
                el.addEventListener('click', openJournalRoot);
            });

            root.querySelectorAll('[data-close-journal-root]').forEach(function (el) {
                el.addEventListener('click', closeJournalRoot);
            });
            root.querySelector('.journal-root-backdrop').addEventListener('click', closeJournalRoot);

            pdfModal.querySelectorAll('[data-close-journal-pdf]').forEach(function (el) {
                el.addEventListener('click', closeJournalPdf);
            });
            pdfModal.querySelector('.journal-pdf-backdrop').addEventListener('click', closeJournalPdf);

            document.getElementById('journal-btn-view').addEventListener('click', function () {
                showScreen('list');
                loadJournalList();
            });

            document.getElementById('journal-btn-submit').addEventListener('click', function () {
                showScreen('submit');
                submitErr.classList.add('hidden');
                submitOk.classList.add('hidden');
            });

            root.querySelectorAll('[data-journal-back-menu]').forEach(function (el) {
                el.addEventListener('click', function () {
                    showScreen('menu');
                    listError.classList.add('hidden');
                    submitErr.classList.add('hidden');
                    submitOk.classList.add('hidden');
                });
            });

            async function loadJournalList() {
                listLoading.classList.remove('hidden');
                listEmpty.classList.add('hidden');
                listError.classList.add('hidden');
                listItems.innerHTML = '';
                try {
                    const res = await fetch(journalsIndexUrl, {
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                    });
                    const data = await res.json().catch(function () {
                        return {};
                    });
                    listLoading.classList.add('hidden');
                    if (!res.ok) {
                        listError.textContent = data.message || 'Could not load journals.';
                        listError.classList.remove('hidden');
                        return;
                    }
                    const rows = data.data || [];
                    if (rows.length === 0) {
                        listEmpty.classList.remove('hidden');
                        return;
                    }
                    rows.forEach(function (row) {
                        const li = document.createElement('li');
                        li.className =
                            'flex flex-col gap-2 rounded-xl border border-slate-200 bg-slate-50/80 p-3 sm:flex-row sm:items-center sm:justify-between';
                        const info = document.createElement('div');
                        info.className = 'min-w-0 flex-1';
                        const t = document.createElement('p');
                        t.className = 'truncate text-sm font-semibold text-slate-900';
                        t.textContent = row.title;
                        const s = document.createElement('p');
                        s.className = 'truncate text-xs text-slate-500';
                        s.textContent = row.original_filename;
                        info.appendChild(t);
                        info.appendChild(s);
                        const actions = document.createElement('div');
                        actions.className = 'flex shrink-0 gap-2';
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className =
                            'rounded-lg bg-blue-600 px-3 py-2 text-xs font-bold text-white shadow transition hover:bg-blue-500';
                        btn.textContent = 'View PDF';
                        btn.addEventListener('click', function () {
                            openJournalPdf(row.pdf_url, row.original_filename);
                        });
                        actions.appendChild(btn);
                        li.appendChild(info);
                        li.appendChild(actions);
                        listItems.appendChild(li);
                    });
                } catch (err) {
                    listLoading.classList.add('hidden');
                    listError.textContent = 'Network error. Please try again.';
                    listError.classList.remove('hidden');
                }
            }

            submitForm.addEventListener('submit', async function (e) {
                e.preventDefault();
                submitErr.classList.add('hidden');
                submitOk.classList.add('hidden');
                const pdfInput = document.getElementById('journal-pdf');
                if (!pdfInput.files || !pdfInput.files[0]) {
                    submitErr.textContent = 'Please choose a PDF file.';
                    submitErr.classList.remove('hidden');
                    return;
                }
                const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                const fd = new FormData();
                const title = document.getElementById('journal-title').value.trim();
                if (title) fd.append('title', title);
                fd.append('pdf', pdfInput.files[0]);
                submitBtn.disabled = true;
                try {
                    const res = await fetch(journalsStoreUrl, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token || '',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: fd,
                    });
                    const data = await res.json().catch(function () {
                        return {};
                    });
                    if (!res.ok) {
                        let msg = data.message || 'Upload failed.';
                        if (data.errors) {
                            const first = Object.values(data.errors).flat()[0];
                            if (first) msg = first;
                        }
                        submitErr.textContent = msg;
                        submitErr.classList.remove('hidden');
                        return;
                    }
                    submitOk.textContent = data.message || 'Journal submitted successfully.';
                    submitOk.classList.remove('hidden');
                    submitForm.reset();
                } catch (err) {
                    submitErr.textContent = 'Network error. Please try again.';
                    submitErr.classList.remove('hidden');
                } finally {
                    submitBtn.disabled = false;
                }
            });

            document.addEventListener('keydown', function (e) {
                if (e.key !== 'Escape') return;
                if (pdfModal && !pdfModal.classList.contains('hidden')) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    closeJournalPdf();
                    return;
                }
                if (root && !root.classList.contains('hidden')) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    closeJournalRoot();
                }
            }, true);

            window.baoOpenJournalPdf = openJournalPdf;
        })();
    </script>

</body>

</html>
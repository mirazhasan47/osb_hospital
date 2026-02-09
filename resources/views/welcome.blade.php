<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSB Eye Hospital</title>

    {{-- Tailwind via Vite --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">

    <header class="hidden lg:block fixed top-0 w-full z-[999] bg-white shadow-md font-['Lato',_sans-serif]">
        <div class="max-w-7xl mx-auto px-4 h-[70px] flex items-center justify-between">



            <div class="flex-shrink-0">

                <a href="#hero-1">

                    <img src="images/logo-grey.png" width="180" height="40" alt="header-logo">

                </a>

            </div>



            <nav class="hidden lg:block">

                <ul class="flex items-center space-x-1">



                    <li class="group relative">

                        <a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-gray-600 flex items-center group-hover:text-cyan-600 transition-colors">

                            Home <span class="ml-2 border-t-4 border-x-4 border-x-transparent border-t-gray-400"></span>

                        </a>

                        <ul
                            class="absolute top-[70px] left-0 w-48 bg-white border border-gray-100 shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top -rotate-x-12 group-hover:rotate-0">

                            <li><a href="demo-2.html"
                                    class="block px-4 py-2 text-sm text-gray-500 hover:bg-cyan-600 hover:text-white hover:pl-6 transition-all">Home

                                    Concept #2</a></li>

                            <li><a href="demo-3.html"
                                    class="block px-4 py-2 text-sm text-gray-500 hover:bg-cyan-600 hover:text-white hover:pl-6 transition-all">Home

                                    Concept #3</a></li>

                        </ul>

                    </li>



                    <li class="group static">

                        <a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-gray-600 flex items-center group-hover:text-cyan-600 transition-colors">

                            Pages <span
                                class="ml-2 border-t-4 border-x-4 border-x-transparent border-t-gray-400"></span>

                        </a>

                        <div
                            class="absolute top-[70px] left-0 w-full bg-white border-t border-gray-100 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top -rotate-x-12 group-hover:rotate-0 px-8 py-10">

                            <div class="max-w-7xl mx-auto grid grid-cols-4 gap-8">

                                <div>

                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Standard Pages:</h3>

                                    <ul class="space-y-1">

                                        <li><a href="about-us.html"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">About

                                                Us Page</a></li>

                                        <li><a href="who-we-are.html"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Who

                                                We Are</a></li>

                                    </ul>

                                </div>

                                <div>

                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Medical Pages:</h3>

                                    <ul class="space-y-1">

                                        <li><a href="all-departments.html"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Our

                                                Departments</a></li>

                                        <li><a href="all-doctors.html"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Meet

                                                the Doctors</a></li>

                                    </ul>

                                </div>

                                <div>

                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Special Pages:</h3>

                                    <ul class="space-y-1">

                                        <li><a href="appointment.html"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Make

                                                an Appointment</a></li>

                                    </ul>

                                </div>

                                <div>

                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Auxiliary Pages:</h3>

                                    <ul class="space-y-1">

                                        <li><a href="blog-listing.html"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Blog

                                                Listing</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </li>



                    <li class="group static">
                        <a href="#"
                            class="px-4 py-6 text-[14.5px] font-medium text-gray-600 flex items-center group-hover:text-cyan-600 transition-colors">
                            Mega Menu
                            <span class="ml-2 border-t-4 border-x-4 border-x-transparent border-t-gray-400"></span>
                        </a>

                        <div
                            class="absolute top-[70px] left-0 w-full bg-white border-t border-gray-100 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top -rotate-x-12 group-hover:rotate-0 px-8 py-10">

                            <div class="max-w-7xl mx-auto flex flex-wrap lg:flex-nowrap gap-8">

                                <div class="w-1/4">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Quick Links:</h3>
                                    <ul class="space-y-1">
                                        <li><a href="#"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Online
                                                Patients Portal</a></li>
                                        <li><a href="#"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Insurance
                                                Info</a></li>
                                        <li><a href="#"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Medical
                                                Services</a></li>
                                        <li><a href="#"
                                                class="block py-2 text-[15px] text-gray-500 border-b border-dashed border-gray-300 hover:text-cyan-600 hover:pl-2 transition-all">Find
                                                a Doctor</a></li>
                                    </ul>
                                </div>

                                <div class="w-5/12">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Featured News:</h3>
                                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80"
                                        class="w-full rounded h-48 object-cover" alt="Medical News Featured">
                                    <h5 class="mt-4 text-md font-bold text-gray-700 hover:underline cursor-pointer">
                                        5 Benefits of integrative medicine
                                    </h5>
                                    <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                                        Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus
                                        feugiat dolor.
                                    </p>
                                </div>

                                <div class="w-1/3">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4">Latest News:</h3>

                                    <div class="space-y-4 max-h-[400px] overflow-y-auto pr-4 custom-news-scrollbar">

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1504813184591-01572f98c85f?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-gray-600 hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    Etiam sapien risus ante auctor tempus...
                                                </a>
                                                <p class="text-xs text-gray-400 mt-1">43 Comments</p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-gray-600 hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    Maecenas vel elit at purus lacinia...
                                                </a>
                                                <p class="text-xs text-gray-400 mt-1">12 Comments</p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-gray-600 hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    New advancements in Cardiology 2024...
                                                </a>
                                                <p class="text-xs text-gray-400 mt-1">18 Comments</p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-gray-600 hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    Understanding the future of Telehealth...
                                                </a>
                                                <p class="text-xs text-gray-400 mt-1">25 Comments</p>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-4 border-b border-dashed border-gray-300 pb-4">
                                            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=150&q=80"
                                                class="w-20 h-20 min-w-[80px] object-cover rounded shadow-sm"
                                                alt="News">
                                            <div>
                                                <a href="#"
                                                    class="text-sm text-gray-600 hover:text-cyan-600 hover:underline font-medium leading-tight block">
                                                    Global Health Summit highlights...
                                                </a>
                                                <p class="text-xs text-gray-400 mt-1">9 Comments</p>
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
                            class="px-4 py-6 text-[14.5px] font-medium text-gray-600 hover:text-cyan-600 transition-colors">Simple

                            Link</a></li>



                    <li class="pl-4">

                        <a href="appointment.html"
                            class="bg-cyan-600 text-white px-5 py-2.5 rounded text-[14.5px] font-medium hover:bg-cyan-700 transition-colors">

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
                            class="block text-center bg-cyan-600 text-white px-6 py-3 rounded font-medium">
                            Make an Appointment
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
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
                        <h3 class="text-white font-semibold text-lg tracking-wide">
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aravind Eye Care System</title>

    {{-- Tailwind via Vite --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">

    {{-- Header --}}
    <header class="bg-indigo-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <div class="flex items-center gap-3">
                    <img src="/images/aravind-logo.png" alt="Aravind Eye Care System" class="h-8 w-auto">
                    <span class="hidden sm:block text-sm font-semibold tracking-wide uppercase">
                        Aravind Eye Care System
                    </span>
                </div>

                {{-- Navigation --}}
                <nav class="hidden lg:flex items-center gap-5 text-xs font-medium uppercase tracking-wide">
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        Home
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        About Us
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        Hospitals
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        Our Services
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        Resources
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        For Patients
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        Education & Training
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        Get Involved
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        Careers
                    </a>
                    <a href="#"
                        class="relative after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:after:left-0">
                        Contact Us
                    </a>
                </nav>


                {{-- App Buttons --}}
                <div class="hidden lg:flex items-center gap-2">
                    <a href="#" class="bg-black rounded px-2 py-1">
                        <img src="/images/google-play.png" alt="Google Play" class="h-6">
                    </a>
                    <a href="#" class="bg-black rounded px-2 py-1">
                        <img src="/images/app-store.png" alt="App Store" class="h-6">
                    </a>
                </div>

            </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>StarTech-style Catalog — Layout Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --st-navy: #1c2b39;
            --st-navy-deep: #141f29;
            --st-yellow: #f9c448;
            --st-white: #ffffff;
            --st-grey-top: #eceff1;
            --st-grey-search: #e8eaed;
            --st-text: #333333;
            --st-text-muted: #5f6368;
            --st-border: #dadce0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, "Segoe UI", sans-serif;
            font-size: 14px;
            color: var(--st-text);
            background: var(--st-white);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* —— Top utility bar —— */
        .st-top-bar {
            background: var(--st-grey-top);
            border-bottom: 1px solid var(--st-border);
            font-size: 12px;
            color: var(--st-text-muted);
        }

        .st-top-bar__inner {
            max-width: 1240px;
            margin: 0 auto;
            padding: 8px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 8px;
        }

        .st-top-bar__left,
        .st-top-bar__right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .st-top-bar__link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--st-text-muted);
        }

        .st-top-bar__link:hover {
            color: var(--st-navy);
        }

        /* —— Main header —— */
        .st-main-header {
            background: var(--st-white);
            border-bottom: 1px solid var(--st-border);
        }

        .st-main-header__inner {
            max-width: 1240px;
            margin: 0 auto;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .st-logo {
            flex-shrink: 0;
            font-weight: 800;
            font-size: 28px;
            letter-spacing: -0.02em;
            color: var(--st-navy);
        }

        .st-logo span {
            color: #c62828;
        }

        .st-logo small {
            display: block;
            font-size: 10px;
            font-weight: 600;
            color: var(--st-text-muted);
            letter-spacing: 0.02em;
        }

        .st-search-wrap {
            flex: 1;
            min-width: 0;
            max-width: 720px;
            margin-left: auto;
            display: flex;
            height: 44px;
        }

        .st-search-wrap input {
            flex: 1;
            border: 1px solid var(--st-border);
            border-right: 0;
            border-radius: 4px 0 0 4px;
            padding: 0 16px;
            font-size: 14px;
            background: var(--st-grey-search);
        }

        .st-search-wrap input:focus {
            outline: none;
            background: var(--st-white);
            border-color: var(--st-navy);
        }

        .st-search-wrap button {
            padding: 0 28px;
            background: var(--st-navy);
            color: var(--st-white);
            border: 1px solid var(--st-navy);
            border-radius: 0 4px 4px 0;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
        }

        .st-search-wrap button:hover {
            background: #2a3f52;
        }

        /* —— Primary nav (dark) —— */
        .st-nav {
            background: var(--st-navy);
        }

        .st-nav__inner {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: stretch;
            justify-content: space-between;
            min-height: 48px;
            flex-wrap: wrap;
        }

        .st-nav__links {
            display: flex;
            align-items: stretch;
        }

        .st-nav__item {
            position: relative;
            display: flex;
            align-items: center;
        }

        .st-nav__item>a,
        .st-nav__item>button {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 0 18px;
            height: 100%;
            color: var(--st-white);
            font-size: 14px;
            font-weight: 600;
            border: none;
            background: transparent;
            cursor: pointer;
            font-family: inherit;
        }

        .st-nav__item>a:hover,
        .st-nav__item>button:hover {
            background: rgba(255, 255, 255, 0.08);
            text-decoration: none;
        }

        .st-nav__item--active>a,
        .st-nav__item--active>button {
            background: var(--st-yellow);
            color: var(--st-navy);
        }

        .st-nav__item--active>a:hover {
            background: #fdd567;
        }

        .st-nav__right {
            display: flex;
            align-items: center;
            gap: 20px;
            color: var(--st-white);
            font-size: 13px;
            font-weight: 600;
        }

        .st-nav__right a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--st-white);
        }

        .st-nav__right a:hover {
            text-decoration: underline;
        }

        /* Dropdown */
        .st-dropdown__panel {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 220px;
            background: var(--st-white);
            border: 1px solid var(--st-border);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            z-index: 100;
            padding: 8px 0;
        }

        .st-nav__item:hover .st-dropdown__panel {
            display: block;
        }

        .st-dropdown__panel a {
            display: block;
            padding: 10px 16px;
            color: var(--st-text);
            font-weight: 500;
        }

        .st-dropdown__panel a:hover {
            background: var(--st-grey-top);
            text-decoration: none;
        }

        /* —— Hero —— */
        .st-hero {
            background: var(--st-navy);
            color: var(--st-white);
        }

        .st-hero__inner {
            max-width: 1240px;
            margin: 0 auto;
            padding: 48px 20px 56px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        @media (max-width: 900px) {
            .st-hero__inner {
                grid-template-columns: 1fr;
            }
        }

        .st-hero__eyebrow {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 12px;
        }

        .st-hero h1 {
            margin: 0 0 12px;
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 800;
            color: var(--st-yellow);
            line-height: 1.15;
        }

        .st-hero__sub {
            font-size: 18px;
            line-height: 1.45;
            margin-bottom: 20px;
            opacity: 0.95;
        }

        .st-hero__cta {
            display: inline-block;
            font-weight: 800;
            font-size: 15px;
            color: var(--st-yellow);
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        .st-hero__cta:hover {
            text-decoration: underline;
        }

        .st-hero__visual {
            border-radius: 8px;
            overflow: hidden;
            background: linear-gradient(135deg, #2a3f52 0%, var(--st-navy) 100%);
            min-height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .st-hero__visual-inner {
            text-align: center;
            padding: 32px;
            color: rgba(255, 255, 255, 0.85);
            font-size: 14px;
        }

        .st-hero__visual-inner i {
            font-size: 64px;
            color: var(--st-yellow);
            margin-bottom: 16px;
            opacity: 0.9;
        }

        /* —— Trusted —— */
        .st-trusted {
            padding: 40px 20px 48px;
            background: var(--st-white);
            border-bottom: 1px solid var(--st-border);
        }

        .st-trusted__inner {
            max-width: 1240px;
            margin: 0 auto;
        }

        .st-trusted h2 {
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            color: var(--st-text-muted);
            margin: 0 0 32px;
        }

        .st-logos {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 24px;
            align-items: center;
            justify-items: center;
        }

        .st-logo-cell {
            width: 100%;
            max-width: 140px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fafafa;
            border: 1px solid var(--st-border);
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
            color: #9e9e9e;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        /* —— Categories —— */
        .st-categories {
            padding: 48px 20px 56px;
            background: #fafbfc;
        }

        .st-categories__inner {
            max-width: 1240px;
            margin: 0 auto;
        }

        .st-categories h2 {
            margin: 0 0 28px;
            font-size: 24px;
            font-weight: 700;
            color: #1565c0;
        }

        .st-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 20px;
        }

        .st-card {
            background: var(--st-white);
            border: 1px solid var(--st-border);
            border-radius: 4px;
            overflow: hidden;
            transition: box-shadow 0.2s;
        }

        .st-card:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .st-card__img {
            height: 160px;
            background: linear-gradient(180deg, #f5f5f5, #eeeeee);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #bdbdbd;
            font-size: 48px;
        }

        .st-card__body {
            padding: 16px;
        }

        .st-card__body a {
            font-size: 14px;
            font-weight: 700;
            color: #1565c0;
        }

        .st-card__body a:hover {
            text-decoration: underline;
        }

        /* —— Testimonials —— */
        .st-testimonials {
            padding: 48px 20px 56px;
            background: var(--st-white);
        }

        .st-testimonials__inner {
            max-width: 1100px;
            margin: 0 auto;
            position: relative;
        }

        .st-testimonials__row {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .st-testimonials__arrow {
            display: none;
        }

        .st-testimonials__track {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        @media (max-width: 900px) {
            .st-testimonials__track {
                grid-template-columns: 1fr;
            }
        }

        .st-quote-card {
            border: 1px solid var(--st-border);
            border-radius: 4px;
            padding: 24px;
            background: var(--st-white);
        }

        .st-quote-card__icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--st-yellow);
            color: var(--st-navy);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 16px;
        }

        .st-quote-card p {
            font-style: italic;
            color: var(--st-text);
            line-height: 1.55;
            margin: 0 0 16px;
            font-size: 14px;
        }

        .st-quote-card cite {
            font-style: normal;
            font-weight: 700;
            font-size: 13px;
        }

        /* —— Footer —— */
        .st-footer {
            background: var(--st-navy);
            color: rgba(255, 255, 255, 0.9);
            padding: 48px 20px 32px;
        }

        .st-footer__inner {
            max-width: 1240px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 32px;
        }

        @media (max-width: 900px) {
            .st-footer__inner {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 520px) {
            .st-footer__inner {
                grid-template-columns: 1fr;
            }
        }

        .st-footer h3 {
            margin: 0 0 16px;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--st-yellow);
        }

        .st-footer ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .st-footer li {
            margin-bottom: 10px;
        }

        .st-footer a {
            color: rgba(255, 255, 255, 0.9);
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .st-footer a::before {
            content: "›";
            color: var(--st-yellow);
            font-weight: 700;
        }

        .st-footer__social {
            display: flex;
            gap: 12px;
            margin-top: 8px;
        }

        .st-footer__social a {
            width: 36px;
            height: 36px;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .st-footer__social a::before {
            display: none;
        }

        .st-subfooter {
            background: var(--st-navy-deep);
            padding: 20px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.65);
        }

        .st-subfooter__inner {
            max-width: 1240px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .st-subfooter__legal {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .st-subfooter a {
            color: rgba(255, 255, 255, 0.75);
        }

        /* —— Notice modal (cookie style) —— */
        .st-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .st-modal-overlay[hidden] {
            display: none;
        }

        .st-modal {
            width: 100%;
            max-width: 520px;
            background: var(--st-white);
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
        }

        .st-modal__head {
            background: var(--st-navy);
            color: var(--st-white);
            padding: 14px 20px;
            font-weight: 800;
            font-size: 16px;
        }

        .st-modal__body {
            padding: 20px;
            font-size: 14px;
            line-height: 1.55;
            color: var(--st-text);
        }

        .st-modal__actions {
            padding: 0 20px 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .st-modal__btn {
            flex: 1;
            min-width: 120px;
            padding: 12px 16px;
            border-radius: 4px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            border: none;
            font-family: inherit;
        }

        .st-modal__btn--yellow {
            background: var(--st-yellow);
            color: var(--st-navy);
        }

        .st-modal__btn--yellow:hover {
            filter: brightness(1.05);
        }

        .st-modal__btn--grey {
            width: 100%;
            flex-basis: 100%;
            background: var(--st-grey-top);
            color: var(--st-text);
            border: 1px solid var(--st-border);
        }

        /* Chat widget */
        .st-chat {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 50;
            background: var(--st-navy);
            color: var(--st-white);
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .st-chat:hover {
            background: #2a3f52;
        }

        .st-mobile-toggle {
            display: none;
            background: var(--st-navy);
            color: var(--st-white);
            border: 1px solid rgba(255, 255, 255, 0.25);
            padding: 10px 14px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        @media (min-width: 769px) {
            .st-mobile-toggle {
                display: none !important;
            }
        }

        @media (max-width: 768px) {
            .st-main-header__inner {
                flex-wrap: wrap;
            }

            .st-search-wrap {
                order: 3;
                width: 100%;
                max-width: none;
                margin-left: 0;
            }

            .st-nav__inner {
                padding: 0 12px;
                align-items: center;
            }

            .st-mobile-toggle {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                margin: 8px 0;
                order: 0;
            }

            .st-nav__right {
                order: 1;
                margin-left: auto;
                width: auto;
                flex-basis: auto;
                padding: 8px 0;
                border-top: none;
                justify-content: flex-end;
                gap: 12px;
            }

            .st-nav__links {
                display: none;
                flex-direction: column;
                order: 2;
                flex: 1 1 100%;
                width: 100%;
                border-top: 1px solid rgba(255, 255, 255, 0.12);
            }

            .st-nav--open .st-nav__links {
                display: flex;
            }

            .st-nav__item>a,
            .st-nav__item>button {
                padding: 14px 20px;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    {{-- Top utility bar --}}
    <div class="st-top-bar">
        <div class="st-top-bar__inner">
            <div class="st-top-bar__left">
                <span class="st-top-bar__link"><i class="fa-solid fa-earth-americas"></i> United States <i
                        class="fa-solid fa-chevron-down" style="font-size:10px;"></i></span>
                <span class="st-top-bar__link">English <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></span>
            </div>
            <div class="st-top-bar__right">
                <a href="#" class="st-top-bar__link">Drivers &amp; Downloads</a>
                <a href="{{ url('/bao-website') }}" class="st-top-bar__link"><i class="fa-regular fa-user"></i> Log in</a>
                <a href="#" class="st-top-bar__link"><i class="fa-solid fa-cart-shopping"></i> Cart (0)</a>
            </div>
        </div>
    </div>

    {{-- Logo + search --}}
    <header class="st-main-header">
        <div class="st-main-header__inner">
            <a href="#" class="st-logo">Star<span>Tech</span>.com <small>layout reference</small></a>
            <form class="st-search-wrap" action="#" method="get" role="search">
                <input type="search" name="q" placeholder="Search product ID, model, keyword, or question"
                    aria-label="Search">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

    {{-- Dark primary nav --}}
    <nav class="st-nav" id="st-nav">
        <div class="st-nav__inner">
            <button type="button" class="st-mobile-toggle" id="st-nav-toggle" aria-expanded="false"
                aria-controls="st-nav-links" aria-label="Toggle menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="st-nav__links" id="st-nav-links">
                <div class="st-nav__item st-nav__item--active">
                    <button type="button">Product <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></button>
                    <div class="st-dropdown__panel">
                        <a href="#">Docking Stations</a>
                        <a href="#">USB &amp; Thunderbolt</a>
                        <a href="#">Cables &amp; Adapters</a>
                        <a href="#">KVM Switches</a>
                    </div>
                </div>
                <div class="st-nav__item">
                    <button type="button">Support <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></button>
                    <div class="st-dropdown__panel">
                        <a href="#">Knowledge Base</a>
                        <a href="#">Downloads</a>
                        <a href="#">Warranty</a>
                    </div>
                </div>
                <div class="st-nav__item">
                    <button type="button">Who We Are <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></button>
                    <div class="st-dropdown__panel">
                        <a href="#">About</a>
                        <a href="#">Careers</a>
                        <a href="#">Newsroom</a>
                    </div>
                </div>
                <div class="st-nav__item">
                    <button type="button">Learn <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></button>
                    <div class="st-dropdown__panel">
                        <a href="#">Blog</a>
                        <a href="#">Videos</a>
                    </div>
                </div>
                <div class="st-nav__item">
                    <a href="{{ url('/bao-website') }}"><i class="fa-solid fa-book-open"></i> Journal of BAO</a>
                </div>
                <div class="st-nav__item">
                    <a href="{{ url('/bao-website') }}"><i class="fa-solid fa-right-to-bracket"></i> Admin login</a>
                </div>
            </div>
            <div class="st-nav__right">
                <a href="#"><i class="fa-solid fa-book"></i> Knowledge Base</a>
                <a href="tel:18002651844"><i class="fa-solid fa-phone"></i> 1 800 265 1844</a>
            </div>
        </div>
    </nav>

    {{-- Hero --}}
    <section class="st-hero">
        <div class="st-hero__inner">
            <div>
                <p class="st-hero__eyebrow">Featured</p>
                <h1>NIAP-Certified Secure KVM</h1>
                <p class="st-hero__sub">Engineered for Classified Environments</p>
                <a href="#" class="st-hero__cta">Shop Now →</a>
            </div>
            <div class="st-hero__visual">
                <div class="st-hero__visual-inner">
                    <i class="fa-solid fa-server"></i>
                    <p>Product imagery placeholder — replace with your hero photo or Laravel <code>asset()</code> image.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Trusted logos --}}
    <section class="st-trusted">
        <div class="st-trusted__inner">
            <h2>Trusted by 90% of Fortune 500 Companies</h2>
            <div class="st-logos">
                @foreach (['Disney', 'Bank of America', 'Hilton', 'Amazon', 'Google', 'Visa', 'Walmart', 'FedEx', 'IBM', 'Intel'] as $brand)
                    <div class="st-logo-cell">{{ $brand }}</div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="st-categories">
        <div class="st-categories__inner">
            <h2>Popular Product Categories &amp; Featured Products</h2>
            <div class="st-card-grid">
                @php
                    $cats = [
                        ['icon' => 'fa-laptop', 'title' => 'Universal Laptop Docking Stations & Port Replicators'],
                        ['icon' => 'fa-usb', 'title' => 'USB Hubs'],
                        ['icon' => 'fa-plug', 'title' => 'Cables & Adapters'],
                        ['icon' => 'fa-network-wired', 'title' => 'KVM Switches'],
                        ['icon' => 'fa-hard-drive', 'title' => 'Drive Enclosures'],
                        ['icon' => 'fa-ethernet', 'title' => 'Network Cards'],
                    ];
                @endphp
                @foreach ($cats as $cat)
                    <article class="st-card">
                        <div class="st-card__img"><i class="fa-solid {{ $cat['icon'] }}"></i></div>
                        <div class="st-card__body">
                            <a href="#">{{ $cat['title'] }}</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="st-testimonials">
        <div class="st-testimonials__inner">
            <div class="st-testimonials__row">
                <div class="st-testimonials__track" id="st-quote-track">
                    <div class="st-quote-card">
                        <div class="st-quote-card__icon"><i class="fa-solid fa-quote-left"></i></div>
                        <p>“StarTech.com has been our go-to for reliable connectivity across our sites.”</p>
                        <cite>— Mike K., CIO – Kansas Spine &amp; Specialty Hospital</cite>
                    </div>
                    <div class="st-quote-card">
                        <div class="st-quote-card__icon"><i class="fa-solid fa-quote-left"></i></div>
                        <p>“Quality products and documentation that our IT team actually wants to use.”</p>
                        <cite>— Sarah L., IT Director</cite>
                    </div>
                    <div class="st-quote-card">
                        <div class="st-quote-card__icon"><i class="fa-solid fa-quote-left"></i></div>
                        <p>“Fast shipping and support when we standardize on StarTech accessories.”</p>
                        <cite>— James R., Systems Engineer</cite>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="st-footer">
        <div class="st-footer__inner">
            <div>
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Become a Partner</a></li>
                    <li><a href="#">Where to Buy</a></li>
                    <li><a href="#">Quick Buy</a></li>
                    <li><a href="#">Government</a></li>
                </ul>
            </div>
            <div>
                <h3>StarTech.com</h3>
                <ul>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div>
                <h3>Support</h3>
                <ul>
                    <li><a href="#">Warranty Policy</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Returns</a></li>
                </ul>
            </div>
            <div>
                <h3>Connect</h3>
                <p style="font-size:13px;opacity:.9;margin:0 0 12px;">Follow us</p>
                <div class="st-footer__social">
                    <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="st-subfooter">
        <div class="st-subfooter__inner">
            <div>45 Artisans Crescent, London, ON, Canada &nbsp;·&nbsp; Toll Free: 1 800 265 1844</div>
            <div class="st-subfooter__legal">
                <a href="#">Site Feedback</a>
                <a href="#">Terms of Use</a>
                <a href="#">Privacy Policy</a>
                <span>© {{ date('Y') }} Layout demo — not affiliated with StarTech.com</span>
            </div>
        </div>
    </div>

    {{-- Notice modal --}}
    <div class="st-modal-overlay" id="st-notice-modal" role="dialog" aria-modal="true" aria-labelledby="st-notice-title">
        <div class="st-modal">
            <div class="st-modal__head" id="st-notice-title">Notice</div>
            <div class="st-modal__body">
                We use cookies to offer you a better experience, analyze site traffic, and serve targeted advertisements.
                By continuing to use this site, you consent to the use of cookies in accordance with our privacy
                statement.
            </div>
            <div class="st-modal__actions">
                <button type="button" class="st-modal__btn st-modal__btn--yellow" id="st-notice-reject">Reject</button>
                <button type="button" class="st-modal__btn st-modal__btn--yellow" id="st-notice-accept">Accept</button>
                <button type="button" class="st-modal__btn st-modal__btn--grey" id="st-notice-customize">Learn more and
                    customize</button>
            </div>
        </div>
    </div>

    <button type="button" class="st-chat" id="st-chat-btn"><i class="fa-solid fa-message"></i> We’re Offline</button>

    <script>
        (function () {
            var nav = document.getElementById('st-nav');
            var toggle = document.getElementById('st-nav-toggle');
            var links = document.getElementById('st-nav-links');
            if (toggle && nav && links) {
                toggle.addEventListener('click', function () {
                    var open = nav.classList.toggle('st-nav--open');
                    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                });
            }

            var modal = document.getElementById('st-notice-modal');
            function closeModal() {
                if (modal) modal.hidden = true;
            }
            if (modal) {
                document.getElementById('st-notice-accept')?.addEventListener('click', closeModal);
                document.getElementById('st-notice-reject')?.addEventListener('click', closeModal);
                document.getElementById('st-notice-customize')?.addEventListener('click', closeModal);
                if (!sessionStorage.getItem('st_notice_dismissed')) {
                    modal.hidden = false;
                }
                ['st-notice-accept', 'st-notice-reject', 'st-notice-customize'].forEach(function (id) {
                    document.getElementById(id)?.addEventListener('click', function () {
                        sessionStorage.setItem('st_notice_dismissed', '1');
                    });
                });
            }

            document.getElementById('st-chat-btn')?.addEventListener('click', function () {
                alert('Chat widget placeholder.');
            });
        })();
    </script>
</body>

</html>

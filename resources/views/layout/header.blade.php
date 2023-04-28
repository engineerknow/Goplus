<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        .topwidget-menu .navbar-nav .dropdown-menu {
            padding: 0;
            margin: 0;
        }

        /*PC hack to hover*/
        @media (min-width: 1025px) {
            ul.navbar-topmenu.navbar-nav>li.nav-item:hover>.dropdown-menu {
                display: block !important;
            }

            ul.navbar-topmenu.navbar-nav>li.nav-item>ul.dropdown-menu li:hover>.dropdown-menu {
                display: block !important;
            }

            ul.navbar-topmenu.navbar-nav ul {
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            }

            .topwidget-menu {
                margin: 10px;
            }

            ul.dropdown-menu.dropdown-menu-right {
                left: unset;
                right: 0;
            }

            .dropdownfix-menu-right {
                right: 100% !important;
                left: auto !important;
            }

            .public-topmenu .dropdown-menu-right .fa-chevron-right {
                transform: rotate(180deg);
                left: 0;
                position: absolute;
                top: 12px;
            }

            .public-topmenu .dropdown-menu-right .fa-chevron-down {
                transform: rotate(90deg);
                left: 0;
                position: absolute;
                top: 12px;
            }

            .more.hidden {
                display: none;
            }

            .public-topmenu .dropdown-menu:not(.dropdown-menu-right) .fa-chevron-down {
                transform: rotate(-90deg);
            }

            ul.navbar-topmenu.navbar-nav>li.nav-item ul {
                position: absolute;
            }

            .public-topmenu .topmenuLg {
                border-right: none !important;
            }
        }

        /* tablet*/
        @media only screen and (min-width: 768px) and (max-width: 1112px) {
            ul.navbar-topmenu.navbar-nav ul {
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            }
        }

        /*mobile tablet*/
        @media only screen and (max-width: 1024px) {

            ul.navbar-topmenu .abl1 .arrowCollapse,
            ul.navbar-topmenu .abl2 .arrowCollapse {
                position: absolute;
                right: 20px !important;
                top: 25%;
                text-align: center;
                height: 16px;
            }

            ul.navbar-topmenu.navbar-nav a {
                text-align: left !important;
                white-space: normal;
            }

            ul.navbar-topmenu.navbar-nav .fa-chevron-down {
                transition: all .3s ease 0s;
                -ms-transition: all .3s ease 0s;
                -webkit-transition: all .3s ease 0s;
                -moz-transition: all .3s ease 0s;
            }

            ul.navbar-topmenu.navbar-nav .fa-chevron-right {
                transform: rotate(90deg);
                transition: all .3s ease 0s;
                -ms-transition: all .3s ease 0s;
                -webkit-transition: all .3s ease 0s;
                -moz-transition: all .3s ease 0s;
                /* width: 15px;
            height: 15px; */
            }

            ul.navbar-topmenu.navbar-nav span.arrowCollapse>.fa-chevron-right {
                right: 12px;
                top: 27%;
            }

            ul.navbar-topmenu.navbar-nav a {
                word-wrap: break-word;
            }

            ul.navbar-topmenu.navbar-nav .more {
                display: none !important;
            }

            .public-topmenu .dropdown.show>a>.arrowCollapse {
                transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
            }

            .public-topmenu ul.dropdown-menu.show>li.show:not(.dropdown)>a>svg.fa-chevron-right {
                transform: rotate(270deg);
                -ms-transform: rotate(270deg);
                -webkit-transform: rotate(270deg);
                -moz-transform: rotate(270deg);
            }

            .public-topmenu li.show:not(.dropdown)>a>.arrowCollapse>svg {
                transform: rotate(270deg);
                -ms-transform: rotate(270deg);
                -webkit-transform: rotate(270deg);
                -moz-transform: rotate(270deg);
            }

            ul.navbar-topmenu.navbar-nav>li>ul>li>a {
                padding-left: 30px !important;
            }

            ul.navbar-topmenu.navbar-nav ul ul a {
                padding-left: 45px !important;
            }
        }

        .headerMobile .topwidget-menu .navbar-nav .dropdown-menu {
            padding: 0;
            margin: 0;
        }

        /*PC hack to hover*/
        @media (min-width: 1025px) {
            .headerMobile ul.navbar-topmenu.navbar-nav>li.nav-item:hover>.dropdown-menu {
                display: block !important;
            }

            .headerMobile ul.navbar-topmenu.navbar-nav>li.nav-item>ul.dropdown-menu li:hover>.dropdown-menu {
                display: block !important;
            }

            .headerMobile ul.navbar-topmenu.navbar-nav ul {
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            }

            .headerMobile .topwidget-menu {
                margin: 10px;
            }

            .headerMobile ul.dropdown-menu.dropdown-menu-right {
                left: unset;
                right: 0;
            }

            .headerMobile .dropdownfix-menu-right {
                right: 100% !important;
                left: auto !important;
            }

            .headerMobile .public-topmenu .dropdown-menu-right .fa-chevron-right {
                transform: rotate(180deg);
                left: 0;
                position: absolute;
                top: 12px;
            }

            .headerMobile .public-topmenu .dropdown-menu-right .fa-chevron-down {
                transform: rotate(90deg);
                left: 0;
                position: absolute;
                top: 12px;
            }

            .headerMobile .more.hidden {
                display: none;
            }

            .headerMobile .public-topmenu .dropdown-menu:not(.dropdown-menu-right) .fa-chevron-down {
                transform: rotate(-90deg);
            }

            .headerMobile ul.navbar-topmenu.navbar-nav>li.nav-item ul {
                position: absolute;
            }

            .headerMobile .public-topmenu .topmenuLg {
                border-right: none !important;
            }
        }

        /* tablet*/
        @media only screen and (min-width: 768px) and (max-width: 1112px) {
            .headerMobile ul.navbar-topmenu.navbar-nav ul {
                box-shadow: none;
            }

            /*.topwidget-menu {
            margin: 10px;
        }*/
        }

        /*mobile tablet*/
        @media only screen and (max-width: 1024px) {
            .headerMobile ul.navbar-topmenu.navbar-nav a {
                text-align: left !important;
                white-space: normal;
            }

            .headerMobile ul.navbar-topmenu.navbar-nav .fa-chevron-down {
                transition: all .3s ease 0s;
                -ms-transition: all .3s ease 0s;
                -webkit-transition: all .3s ease 0s;
                -moz-transition: all .3s ease 0s;

            }

            .headerMobile ul.navbar-topmenu.navbar-nav .fa-chevron-right {
                transform: rotate(90deg);
                transition: all .3s ease 0s;
                -ms-transition: all .3s ease 0s;
                -webkit-transition: all .3s ease 0s;
                -moz-transition: all .3s ease 0s;
            }

            .headerMobile ul.navbar-topmenu.navbar-nav span.arrowCollapse>.fa-chevron-right {
                right: 12px;
                top: 27%;
            }

            .headerMobile ul.navbar-topmenu.navbar-nav a {
                word-wrap: break-word;
            }

            .headerMobile ul.navbar-topmenu.navbar-nav .more {
                display: none !important;
            }

            .headerMobile .public-topmenu .dropdown.show>a>.arrowCollapse {
                transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
            }

            .headerMobile .public-topmenu li.show:not(.dropdown)>a>.arrowCollapse>svg {
                transform: rotate(270deg);
                -ms-transform: rotate(270deg);
                -webkit-transform: rotate(270deg);
                -moz-transform: rotate(270deg);
            }

            .headerMobile ul.navbar-topmenu.navbar-nav>li>ul>li>a {
                padding-left: 30px !important;
            }

            .headerMobile ul.navbar-topmenu.navbar-nav ul ul a {
                padding-left: 45px !important;
            }

            .headerMobile ul.navbar-topmenu.navbar-nav ul ul ul a {
                padding-left: 60px !important;
            }
        }

        @media (min-width: 1025px) {
            .navbar-brand {
                font-size: 24px !important;
                border: none !important;
                padding: 0;
                margin: auto;
            }

            .navbar-text {
                min-height: 24px;
            }

            .text-truncate {
                width: 100%;
            }

            .text-truncate p {
                margin-bottom: 0 !important;
                line-height: 24px;
            }

            #menutop {
                margin: 10px 10px 10px 0 !important;
            }

            .topwidget-menu {
                margin: 0 !important;
            }

            .sps--abv .row-display-justify {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .sps--blw .row-display-justify {
                -webkit-box-pack: flex-start !important;
                -ms-flex-pack: flex-start !important;
                justify-content: flex-start !important;
            }

            #top-area #logotop {
                margin: 10px 0px 0px 0px;
            }

            .navbar-brand .img-logo {
                max-width: 100%;
                min-width: 1px;
                min-height: 1px;
                max-height: 100%;
            }

            #top-sticky #cart2 {
                display: none !important;
            }

            .sps--blw #top-sticky #cart2 {
                display: inline-flex !important;

            }
        }
    </style>
</head>

<body>

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="topwidget-menu">
            <ul class="navbar-nav navbar-topmenu public-topmenu">
                <li class="nav-item ">
                    <a class="nav-link abl1" id="topmenuonpage" data-onhome="home" href="/"
                        target="_self">{{ trans('message.Home') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1" href="/about" target="_self">{{ trans('message.About') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1" href="/service" target="_self">{{ trans('message.Service') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1" href="/Productprocess" target="_self">{{ trans('message.Productprocess') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1" href="/Product" target="_self"
                        style="position: relative;">{{ trans('message.Product') }}
                    </a>
                <li class="nav-item ">
                    <a class="nav-link abl1 dropdown-item" href="/Article" target="_self">{{ trans('message.Article') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1 dropdown-item" href="/contactus" target="_self">{{ trans('message.Contact') }}</a>
                </li>
            </ul>
           
        </div>

        <div class="container">
            @yield('content')
        </div>

</body>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after, ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b, strong {
            font-weight: bolder
        }

        code, kbd, pre, samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button, select {
            text-transform: none
        }

        [type=button], [type=reset], [type=submit], button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu, ol, ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder, textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button], button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio, canvas, embed, iframe, img, object, svg, video {
            display: block;
            vertical-align: middle
        }

        img, video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *, ::before, ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
        }


        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;

            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }

        .taken {

        }
    </style>
</head>
<body class="antialiased">
<main class="office">
    <aside class="sidebar">
        @if($user)
            <div class="profile">
                <a href="{{route('logout')}}" class="profile__logout">Выйти</a>
                <div class="profile__photo">
                    <img src="{{$user->avatar->path}}" alt="">
                </div>
                <div class="profile__info">
                    <h3 class="profile__name">{{$user->name}}</h3>
                    <div class="profile__time" data-time="{{$user->created_at}}">{{$user->created_at}}</div>
                </div>
            </div>
            <div class="rooms">
                <div class="room__items">
                        <?php foreach ($rooms as $room):
                        $emptyPlaces = $room->places->filter(function ($item) {
                            return $item->user_id;
                        })
                        ?>
                    <div class="room__item">
                        <div class="room__title">{{$room->name}} ( {{count($emptyPlaces)}} / {{count($room->places)}}
                            )
                        </div>
                        <div class="room__users">
                                <?php foreach ($room->places as $place):
                                ?>
                            @if($place->user)
                                <div class="room__user">
                                    <img src="{{$place->user->avatar->path}}" alt="">
                                    <span>{{$place->user->name}}</span>
                                </div>
                            @endif
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
{{--            <div class="chat">--}}
{{--                <div class="chat__messages"></div>--}}
{{--                <form action="{{route('message')}}" method="POST" class="chat__input">--}}
{{--                    @csrf--}}
{{--                    <label>--}}
{{--                        <input name="message" type="text" placeholder="Сообщение">--}}
{{--                    </label>--}}
{{--                </form>--}}
{{--            </div>--}}
        @endif

    </aside>
    <section class="content">
        @if($user)
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3611.57 1661.28">
                <defs>
                    <style>
                        .cls-1 {
                            stroke-width: 1.52px;
                        }

                        .cls-1, .cls-2, .cls-3, .cls-4, .cls-5, .cls-6, .cls-7, .cls-8, .cls-9, .cls-10, .cls-11, .cls-12, .cls-13, .cls-14, .cls-15, .cls-16, .cls-17, .cls-18, .cls-19 {
                            stroke: #333;
                            stroke-miterlimit: 10;
                        }

                        .cls-1, .cls-2, .cls-3, .cls-6, .cls-12, .cls-14, .cls-16, .cls-17, .cls-19 {
                            fill: none;
                        }

                        .cls-2, .cls-15 {
                            stroke-width: 1.64px;
                        }

                        .cls-3 {
                            stroke-width: 15px;
                        }

                        .cls-20, .cls-4, .cls-13, .cls-15 {
                            fill: #fff;
                        }

                        .cls-21 {
                            fill: #333;
                        }

                        .cls-4, .cls-14 {
                            stroke-width: 2px;
                        }

                        .cls-5 {
                            stroke-width: .79px;
                        }

                        .cls-5, .cls-8, .cls-11 {
                            fill: #f2f2f2;
                        }

                        .cls-6 {
                            stroke-width: 5px;
                        }

                        .cls-7, .cls-8 {
                            stroke-width: .94px;
                        }

                        .cls-7, .cls-9, .cls-10, .cls-18 {
                            fill: #dadada;
                        }

                        .cls-9 {
                            stroke-width: 1.92px;
                        }

                        .cls-10 {
                            stroke-width: 1.92px;
                        }

                        .cls-11 {
                            stroke-width: .98px;
                        }

                        .cls-12 {
                            stroke-width: 10px;
                        }

                        .cls-16 {
                            stroke-width: 4px;
                        }

                        .cls-18 {
                            stroke-width: .76px;
                        }

                        .cls-19 {
                            stroke-width: .5px;
                        }
                    </style>
                </defs>
                <g id="Stairs">
                    <line class="cls-14" x1="2646.08" y1="56.31" x2="2646.08" y2="636.32"/>
                    <line class="cls-14" x1="2327.48" y1="56.31" x2="2327.48" y2="636.32"/>
                    <line class="cls-19" x1="2362.88" y1="56.31" x2="2362.88" y2="636.32"/>
                    <line class="cls-19" x1="2398.28" y1="56.31" x2="2398.28" y2="636.32"/>
                    <line class="cls-19" x1="2433.68" y1="56.31" x2="2433.68" y2="636.32"/>
                    <line class="cls-19" x1="2469.08" y1="56.31" x2="2469.08" y2="636.32"/>
                    <line class="cls-19" x1="2504.48" y1="56.31" x2="2504.48" y2="636.32"/>
                    <line class="cls-19" x1="2539.88" y1="56.31" x2="2539.88" y2="636.32"/>
                    <line class="cls-19" x1="2575.28" y1="56.31" x2="2575.28" y2="636.32"/>
                    <line class="cls-19" x1="2610.68" y1="56.31" x2="2610.68" y2="636.32"/>
                    <rect class="cls-4" x="2327.48" y="316.69" width="318.6" height="29.63"/>
                    <rect class="cls-4" x="2343.93" y="352.23" width="285.71" height="7.24"/>
                    <rect class="cls-4" x="2343.93" y="303.53" width="285.71" height="7.24"/>
                    <rect class="cls-4" x="2343.93" y="622.66" width="328.76" height="7.24"/>
                    <rect class="cls-4" x="2343.93" y="61.04" width="328.76" height="7.24"/>
                </g>
                <g id="External_Walls" data-name="External Walls">
                    <polygon class="cls-3"
                             points="612.66 46.74 612.66 872.84 685.3 872.84 685.3 1479.31 1050.2 1479.31 1050.2 1420.19 1185.35 1420.19 1185.35 1384.71 3498.08 1384.71 3498.08 46.74 612.66 46.74"/>
                </g>
                <g id="Internal_Walls" data-name="Internal Walls">
                    <polyline class="cls-12" points="850.86 46.74 850.86 467.39 1986.11 467.39 1986.11 46.74"/>
                    <line class="cls-12" x1="1288.4" y1="46.74" x2="1288.4" y2="467.39"/>
                    <line class="cls-12" x1="612.66" y1="279.87" x2="850.86" y2="279.87"/>
                    <line class="cls-12" x1="1986.11" y1="467.39" x2="1986.11" y2="1384.71"/>
                    <line class="cls-12" x1="1590.8" y1="1285.04" x2="1590.8" y2="1384.71"/>
                    <line class="cls-12" x1="1986.11" y1="926.05" x2="2813.89" y2="926.05"/>
                    <line class="cls-12" x1="1986.11" y1="648.15" x2="2813.89" y2="648.15"/>
                    <line class="cls-12" x1="2813.89" y1="46.74" x2="2813.89" y2="1384.71"/>
                    <polyline class="cls-12" points="3057.16 46.74 3057.16 518.07 3498.08 518.07"/>
                    <polyline class="cls-12" points="2408.45 926.05 2408.45 1447.25 2408.45 1617.72"/>
                    <polyline class="cls-12" points="2178.69 926.05 2178.69 1087.38 2688.88 1087.38"/>
                    <line class="cls-12" x1="2102.67" y1="1087.38" x2="2178.69" y2="1087.38"/>
                    <line class="cls-12" x1="2126.32" y1="56.31" x2="2126.32" y2="648.15"/>
                    <line class="cls-12" x1="2327.48" y1="46.74" x2="2327.48" y2="346.32"/>
                    <polyline class="cls-3" points="2251.34 1384.71 2251.34 1617.72 2557.08 1617.72 2557.08 1384.71"/>
                    <line class="cls-12" x1="1986.11" y1="1062.04" x2="1921.91" y2="1062.04"/>
                </g>
                <g id="Toilets">
                    <ellipse class="cls-2" cx="2330.6" cy="1560.42" rx="20.84" ry="27.59"/>
                    <path class="cls-15"
                          d="m2301.51,1581.66h58.17c3.22,0,5.83,2.61,5.83,5.83v23.22h-69.83v-23.22c0-3.22,2.61-5.83,5.83-5.83Z"/>
                    <ellipse class="cls-2" cx="2484.81" cy="1560.42" rx="20.84" ry="27.59"/>
                    <path class="cls-15"
                          d="m2455.73,1581.66h58.17c3.22,0,5.83,2.61,5.83,5.83v23.22h-69.83v-23.22c0-3.22,2.61-5.83,5.83-5.83Z"/>
                    <path class="cls-2"
                          d="m2372.91,1137.27h31.85v76.41h-31.85c-2.59,0-4.68-2.1-4.68-4.68v-67.04c0-2.59,2.1-4.68,4.68-4.68Z"/>
                    <path class="cls-2"
                          d="m2368.22,1145.21h21.18c3.9,0,7.07,3.17,7.07,7.07v46.4c0,3.9-3.17,7.07-7.07,7.07h-21.18v-60.54h0Z"/>
                    <circle class="cls-2" cx="2381.7" cy="1177.14" r="3.52"/>
                    <path class="cls-2"
                          d="m2372.91,1219.89h31.85v76.41h-31.85c-2.59,0-4.68-2.1-4.68-4.68v-67.04c0-2.59,2.1-4.68,4.68-4.68Z"/>
                    <path class="cls-2"
                          d="m2368.22,1227.83h21.18c3.9,0,7.07,3.17,7.07,7.07v46.4c0,3.9-3.17,7.07-7.07,7.07h-21.18v-60.54h0Z"/>
                    <circle class="cls-2" cx="2381.7" cy="1259.76" r="3.52"/>
                </g>
                <g id="rando_Wall" data-name="rando Wall">
                    <polyline class="cls-6" points="2994.17 1376.11 2994.17 1114.41 3115.6 1114.41"/>
                    <polyline class="cls-6" points="3213.99 1156.62 3213.99 1100.59 3491.7 1100.59"/>
                </g>
                <g id="Chairs">
                    <g class="seat" data-id="28">
                        <path class="cls-11"
                              d="m1156.23,589.95h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m1147.67,605.69h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m1208.25,605.69h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="1149.79" y1="599.68" x2="1210.37" y2="599.68"/>
                    </g>
                    <g class="seat" data-id="20">
                        <path class="cls-11"
                              d="m760.28,742.96h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(790.39 1877.96) rotate(-135)"/>
                        <path class="cls-8"
                              d="m807.33,770.7h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(821.23 1925.77) rotate(-135)"/>
                        <path class="cls-8"
                              d="m764.5,727.86h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(778.39 1822.36) rotate(-135)"/>
                        <line class="cls-7" x1="789.58" y1="812.68" x2="746.74" y2="769.85"/>
                    </g>
                    <g class="seat" data-id="29">
                        <path class="cls-11"
                              d="m1296.87,823.93h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(2176.98 -464.47) rotate(90)"/>
                        <path class="cls-8"
                              d="m1313.09,803.86h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2141.17 -489.25) rotate(90)"/>
                        <path class="cls-8"
                              d="m1313.09,864.44h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2201.75 -428.67) rotate(90)"/>
                        <line class="cls-7" x1="1343.32" y1="825.96" x2="1343.32" y2="886.54"/>
                    </g>
                    <g class="seat" data-id="30">
                        <path class="cls-11"
                              d="m1024.45,1135.29h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(2215.92 119.31) rotate(90)"/>
                        <path class="cls-8"
                              d="m1040.67,1115.22h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2180.11 94.54) rotate(90)"/>
                        <path class="cls-8"
                              d="m1040.67,1175.8h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2240.69 155.11) rotate(90)"/>
                        <line class="cls-7" x1="1070.9" y1="1137.33" x2="1070.9" y2="1197.9"/>
                    </g>
                    <g class="seat" data-id="31">
                        <path class="cls-11"
                              d="m1435.24,823.93h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(602.84 2315.35) rotate(-90)"/>
                        <path class="cls-8"
                              d="m1462.49,864.44h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(578.07 2351.15) rotate(-90)"/>
                        <path class="cls-8"
                              d="m1462.49,803.86h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(638.65 2290.57) rotate(-90)"/>
                        <line class="cls-7" x1="1436.5" y1="886.54" x2="1436.5" y2="825.96"/>
                    </g>
                    <g class="seat" data-id="5">
                        <path class="cls-11"
                              d="m1447.54,145.68h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m1438.99,161.41h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m1499.57,161.41h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="1441.11" y1="155.41" x2="1501.69" y2="155.41"/>
                    </g>
                    <g class="seat" data-id="6">
                        <path class="cls-11"
                              d="m1394.92,224.74h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(1161.71 1675.83) rotate(-90)"/>
                        <path class="cls-8"
                              d="m1422.17,265.25h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(1136.93 1711.64) rotate(-90)"/>
                        <path class="cls-8"
                              d="m1422.17,204.67h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(1197.51 1651.06) rotate(-90)"/>
                        <line class="cls-7" x1="1396.17" y1="287.35" x2="1396.17" y2="226.77"/>
                    </g>
                    <g class="seat" data-id="7">
                        <path class="cls-11"
                              d="m1801.86,224.74h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(2082.78 -1568.65) rotate(90)"/>
                        <path class="cls-8"
                              d="m1818.08,204.67h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2046.97 -1593.43) rotate(90)"/>
                        <path class="cls-8"
                              d="m1818.08,265.25h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2107.55 -1532.85) rotate(90)"/>
                        <line class="cls-7" x1="1848.31" y1="226.77" x2="1848.31" y2="287.35"/>
                    </g>
                    <g class="seat" data-id="8">
                        <path class="cls-11"
                              d="m1547.78,145.68h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m1539.22,161.41h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m1599.8,161.41h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="1541.34" y1="155.41" x2="1601.92" y2="155.41"/>
                    </g>
                    <g class="seat" data-id="9">
                        <path class="cls-11"
                              d="m1648.01,145.68h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m1639.46,161.41h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m1700.04,161.41h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="1641.58" y1="155.41" x2="1702.16" y2="155.41"/>
                    </g>
                    <g class="seat" data-id="10">
                        <path class="cls-11"
                              d="m1748.25,145.68h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m1739.69,161.41h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m1800.27,161.41h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="1741.81" y1="155.41" x2="1802.39" y2="155.41"/>
                    </g>
                    <g class="seat" data-id="11">
                        <path class="cls-11"
                              d="m1748.25,299.68h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(3544.2 664) rotate(180)"/>
                        <path class="cls-8"
                              d="m1800.27,304.38h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3604.78 652.97) rotate(180)"/>
                        <path class="cls-8"
                              d="m1739.69,304.38h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3483.63 652.97) rotate(180)"/>
                        <line class="cls-7" x1="1802.39" y1="354.6" x2="1741.81" y2="354.6"/>
                    </g>
                    <g class="seat" data-id="12">
                        <path class="cls-11"
                              d="m1648.01,299.68h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(3343.73 664) rotate(180)"/>
                        <path class="cls-8"
                              d="m1700.04,304.38h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3404.31 652.97) rotate(180)"/>
                        <path class="cls-8"
                              d="m1639.46,304.38h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3283.16 652.97) rotate(180)"/>
                        <line class="cls-7" x1="1702.16" y1="354.6" x2="1641.58" y2="354.6"/>
                    </g>
                    <g class="seat" data-id="13">
                        <path class="cls-11"
                              d="m1547.78,299.68h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(3143.26 664) rotate(180)"/>
                        <path class="cls-8"
                              d="m1599.8,304.38h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3203.84 652.97) rotate(180)"/>
                        <path class="cls-8"
                              d="m1539.22,304.38h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3082.68 652.97) rotate(180)"/>
                        <line class="cls-7" x1="1601.92" y1="354.6" x2="1541.34" y2="354.6"/>
                    </g>
                    <g class="seat" data-id="14">
                        <path class="cls-11"
                              d="m1447.54,299.68h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(2942.79 664) rotate(180)"/>
                        <path class="cls-8"
                              d="m1499.57,304.38h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3003.37 652.97) rotate(180)"/>
                        <path class="cls-8"
                              d="m1438.99,304.38h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2882.21 652.97) rotate(180)"/>
                        <line class="cls-7" x1="1501.69" y1="354.6" x2="1441.11" y2="354.6"/>
                    </g>
                    <g class="seat" data-id="23">
                        <path class="cls-11"
                              d="m1717.39,823.93h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(2597.5 -884.99) rotate(90)"/>
                        <path class="cls-8"
                              d="m1733.61,803.86h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2561.69 -909.76) rotate(90)"/>
                        <path class="cls-8"
                              d="m1733.61,864.44h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2622.27 -849.19) rotate(90)"/>
                        <line class="cls-7" x1="1763.84" y1="825.96" x2="1763.84" y2="886.54"/>
                    </g>
                    <g class="seat" data-id="24">
                        <path class="cls-11"
                              d="m1174.93,1237.62h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(-71.16 2468.73) rotate(-90)"/>
                        <path class="cls-8"
                              d="m1202.18,1278.12h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(-95.93 2504.53) rotate(-90)"/>
                        <path class="cls-8"
                              d="m1202.18,1217.55h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(-35.35 2443.95) rotate(-90)"/>
                        <line class="cls-7" x1="1176.19" y1="1300.23" x2="1176.19" y2="1239.65"/>
                    </g>
                    <g class="seat" data-id="25">
                        <path class="cls-11"
                              d="m1457.08,1237.62h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(2750.87 -210.99) rotate(90)"/>
                        <path class="cls-8"
                              d="m1473.3,1217.55h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2715.07 -235.77) rotate(90)"/>
                        <path class="cls-8"
                              d="m1473.3,1278.12h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2775.65 -175.19) rotate(90)"/>
                        <line class="cls-7" x1="1503.53" y1="1239.65" x2="1503.53" y2="1300.23"/>
                    </g>
                    <g class="seat" data-id="26">
                        <path class="cls-11"
                              d="m784.42,1279.02h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(1616.55 2622.69) rotate(180)"/>
                        <path class="cls-8"
                              d="m836.44,1283.72h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(1677.13 2611.66) rotate(180)"/>
                        <path class="cls-8"
                              d="m775.86,1283.72h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(1555.97 2611.66) rotate(180)"/>
                        <line class="cls-7" x1="838.56" y1="1333.94" x2="777.98" y2="1333.94"/>
                    </g>
                    <g class="seat" data-id="27">
                        <path class="cls-11"
                              d="m784.42,996.87h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m775.86,1012.6h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m836.44,1012.6h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="777.98" y1="1006.6" x2="838.56" y2="1006.6"/>
                    </g>
                    <g class="seat" data-id="32">
                        <path class="cls-11"
                              d="m1773.85,1301.62h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(3595.41 2667.88) rotate(180)"/>
                        <path class="cls-8"
                              d="m1825.88,1306.32h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3655.99 2656.85) rotate(180)"/>
                        <path class="cls-8"
                              d="m1765.3,1306.32h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(3534.83 2656.85) rotate(180)"/>
                        <line class="cls-7" x1="1827.99" y1="1356.54" x2="1767.42" y2="1356.54"/>
                    </g>
                    <g class="seat" data-id="1">
                        <path class="cls-11"
                              d="m1057.31,81.99h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m1048.75,97.72h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m1109.33,97.72h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="1050.87" y1="91.72" x2="1111.45" y2="91.72"/>
                    </g>
                    <g class="seat" data-id="2">
                        <g>
                            <path class="cls-5"
                                  d="m967.17,399.61h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(1972.81 851.36) rotate(-180)"/>
                            <line class="cls-18" x1="1010.83" y1="443.9" x2="961.98" y2="443.9"/>
                        </g>
                        <rect class="cls-5" x="956.73" y="417.27" width="7.88" height="21.96" rx="3.94" ry="3.94"/>
                        <rect class="cls-5" x="1006.84" y="417.27" width="7.88" height="21.96" rx="3.94" ry="3.94"/>
                    </g>
                    <g class="seat" data-id="3">
                        <g>
                            <path class="cls-5"
                                  d="m1035.59,399.61h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(2109.65 851.36) rotate(-180)"/>
                            <line class="cls-18" x1="1079.25" y1="443.9" x2="1030.4" y2="443.9"/>
                        </g>
                        <rect class="cls-5" x="1025.14" y="417.27" width="7.88" height="21.96" rx="3.94" ry="3.94"/>
                        <rect class="cls-5" x="1075.26" y="417.27" width="7.88" height="21.96" rx="3.94" ry="3.94"/>
                    </g>
                    <g class="seat" data-id="4">
                        <g>
                            <path class="cls-5"
                                  d="m869.18,346.98h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(515.37 1261.47) rotate(-90)"/>
                            <line class="cls-18" x1="870.2" y1="397.48" x2="870.2" y2="348.62"/>
                        </g>
                        <rect class="cls-5" x="881.9" y="336.33" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1233.16 -538.53) rotate(90)"/>
                        <rect class="cls-5" x="881.9" y="386.45" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1283.28 -488.42) rotate(90)"/>
                    </g>
                    <g class="seat" data-id="16">
                        <g>
                            <path class="cls-5"
                                  d="m1928.3,231.72h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(2205.33 -1689.74) rotate(90)"/>
                            <line class="cls-18" x1="1965.76" y1="233.36" x2="1965.76" y2="282.22"/>
                        </g>
                        <rect class="cls-5" x="1946.16" y="272.55" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1666.58 2233.64) rotate(-90)"/>
                        <rect class="cls-5" x="1946.16" y="222.43" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1716.7 2183.52) rotate(-90)"/>
                    </g>
                    <g class="seat" data-id="17">
                        <g>
                            <path class="cls-5"
                                  d="m1928.3,156.77h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(2130.37 -1764.7) rotate(90)"/>
                            <line class="cls-18" x1="1965.76" y1="158.41" x2="1965.76" y2="207.27"/>
                        </g>
                        <rect class="cls-5" x="1946.16" y="197.59" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1741.53 2158.68) rotate(-90)"/>
                        <rect class="cls-5" x="1946.16" y="147.48" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1791.65 2108.56) rotate(-90)"/>
                    </g>
                    <g class="seat" data-id="18">
                        <g>
                            <path class="cls-5"
                                  d="m1928.3,307.18h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(2280.78 -1614.28) rotate(90)"/>
                            <line class="cls-18" x1="1965.76" y1="308.82" x2="1965.76" y2="357.68"/>
                        </g>
                        <rect class="cls-5" x="1946.16" y="348.01" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1591.12 2309.1) rotate(-90)"/>
                        <rect class="cls-5" x="1946.16" y="297.89" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1641.24 2258.98) rotate(-90)"/>
                    </g>
                    <g class="seat" data-id="19">
                        <g>
                            <path class="cls-5"
                                  d="m1928.3,382.64h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(2356.24 -1538.83) rotate(90)"/>
                            <line class="cls-18" x1="1965.76" y1="384.28" x2="1965.76" y2="433.14"/>
                        </g>
                        <rect class="cls-5" x="1946.16" y="423.47" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1515.66 2384.55) rotate(-90)"/>
                        <rect class="cls-5" x="1946.16" y="373.35" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1565.78 2334.44) rotate(-90)"/>
                    </g>
                    <g>
                        <g>
                            <path class="cls-5"
                                  d="m2994,136.82h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(3176.13 -2850.35) rotate(90)"/>
                            <line class="cls-18" x1="3031.46" y1="138.46" x2="3031.46" y2="187.32"/>
                        </g>
                        <rect class="cls-5" x="3011.87" y="177.65" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(2827.19 3204.44) rotate(-90)"/>
                        <rect class="cls-5" x="3011.87" y="127.53" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(2877.3 3154.32) rotate(-90)"/>
                    </g>
                    <g>
                        <g>
                            <path class="cls-5"
                                  d="m2994,64.97h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(3104.28 -2922.2) rotate(90)"/>
                            <line class="cls-18" x1="3031.46" y1="66.61" x2="3031.46" y2="115.47"/>
                        </g>
                        <rect class="cls-5" x="3011.87" y="105.8" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(2899.04 3132.59) rotate(-90)"/>
                        <rect class="cls-5" x="3011.87" y="55.68" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(2949.16 3082.47) rotate(-90)"/>
                    </g>
                    <g class="seat" data-id="15">
                        <g>
                            <path class="cls-5"
                                  d="m1928.3,80.81h38.48c2.86,0,5.19,2.33,5.19,5.19v32.34c0,8.06-6.55,14.61-14.61,14.61h-19.64c-8.06,0-14.61-6.55-14.61-14.61v-32.34c0-2.86,2.33-5.19,5.19-5.19Z"
                                  transform="translate(2054.41 -1840.66) rotate(90)"/>
                            <line class="cls-18" x1="1965.76" y1="82.45" x2="1965.76" y2="131.31"/>
                        </g>
                        <rect class="cls-5" x="1946.16" y="121.63" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1817.49 2082.72) rotate(-90)"/>
                        <rect class="cls-5" x="1946.16" y="71.52" width="7.88" height="21.96" rx="3.94" ry="3.94"
                              transform="translate(1867.61 2032.6) rotate(-90)"/>
                    </g>
                    <g class="seat" data-id="38">
                        <path class="cls-11"
                              d="m2268.34,945.77h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m2259.79,961.5h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m2320.37,961.5h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="2261.91" y1="955.5" x2="2322.49" y2="955.5"/>
                    </g>
                    <g class="seat" data-id="44">
                        <path class="cls-11"
                              d="m2986.91,802.62h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(2175.82 3845.7) rotate(-90)"/>
                        <path class="cls-8"
                              d="m3014.16,843.13h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2151.04 3881.51) rotate(-90)"/>
                        <path class="cls-8"
                              d="m3014.16,782.55h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2211.62 3820.93) rotate(-90)"/>
                        <line class="cls-7" x1="2988.17" y1="865.23" x2="2988.17" y2="804.65"/>
                    </g>
                    <g class="seat" data-id="45">
                        <path class="cls-11"
                              d="m3294.18,638.75h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(6636.06 1342.16) rotate(-180)"/>
                        <path class="cls-8"
                              d="m3346.2,643.45h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(6696.64 1331.12) rotate(-180)"/>
                        <path class="cls-8"
                              d="m3285.62,643.45h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(6575.48 1331.12) rotate(-180)"/>
                        <line class="cls-7" x1="3348.32" y1="693.67" x2="3287.74" y2="693.67"/>
                    </g>
                    <g class="seat" data-id="46">
                        <path class="cls-11"
                              d="m3324.46,969.02h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(2346.97 4349.66) rotate(-90)"/>
                        <path class="cls-8"
                              d="m3351.71,1009.53h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2322.19 4385.47) rotate(-90)"/>
                        <path class="cls-8"
                              d="m3351.71,948.95h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(2382.77 4324.89) rotate(-90)"/>
                        <line class="cls-7" x1="3325.72" y1="1031.63" x2="3325.72" y2="971.06"/>
                    </g>
                    <g class="seat" data-id="47">
                        <path class="cls-11"
                              d="m3278.26,754.26h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(4088.71 -2515.53) rotate(90)"/>
                        <path class="cls-8"
                              d="m3294.48,734.19h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(4052.9 -2540.3) rotate(90)"/>
                        <path class="cls-8"
                              d="m3294.48,794.77h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(4113.48 -2479.72) rotate(90)"/>
                        <line class="cls-7" x1="3324.71" y1="756.3" x2="3324.71" y2="816.88"/>
                    </g>
                    <g>
                        <path class="cls-11"
                              d="m3366.42,1247.79h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"/>
                        <path class="cls-8"
                              d="m3357.87,1263.52h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <path class="cls-8"
                              d="m3418.45,1263.52h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"/>
                        <line class="cls-7" x1="3359.99" y1="1257.52" x2="3420.56" y2="1257.52"/>
                    </g>
                    <g>
                        <path class="cls-11"
                              d="m3366.42,1168.83h47.71c3.55,0,6.44,2.88,6.44,6.44v51.23c0,3.86-3.13,6.98-6.98,6.98h-46.61c-3.86,0-6.98-3.13-6.98-6.98v-51.23c0-3.55,2.88-6.44,6.44-6.44Z"
                              transform="translate(6780.55 2402.32) rotate(-180)"/>
                        <path class="cls-8"
                              d="m3418.45,1173.53h4.26c2.21,0,4.01,1.79,4.01,4.01v36.48c0,2.06-1.67,3.73-3.73,3.73h-4.84c-2.06,0-3.73-1.67-3.73-3.73v-36.45c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(6841.13 2391.28) rotate(-180)"/>
                        <path class="cls-8"
                              d="m3357.87,1173.53h4.26c2.21,0,4.01,1.79,4.01,4.01v36.83c0,1.87-1.52,3.38-3.38,3.38h-5.54c-1.87,0-3.38-1.52-3.38-3.38v-36.8c0-2.23,1.81-4.03,4.03-4.03Z"
                              transform="translate(6719.97 2391.28) rotate(-180)"/>
                        <line class="cls-7" x1="3420.56" y1="1223.75" x2="3359.99" y2="1223.75"/>
                    </g>
                </g>
                <g id="Couches_tables_etc" data-name="Couches tables etc">
                    <path data-id="34" class="seat cls-2"
                          d="m2512.86,728.96h34.73v56.71h-34.73c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"/>
                    <path class="cls-2"
                          d="m2512.86,728.96v5c-3.22,0-5.85,2.62-5.85,5.85v35.02c0,3.22,2.62,5.85,5.85,5.85v5"/>
                    <path data-id="35" class="seat cls-2"
                          d="m2634.14,728.96h34.73v56.71h-34.73c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"
                          transform="translate(5292.17 1514.63) rotate(180)"/>
                    <path class="cls-2"
                          d="m2658.03,785.67v-5c3.22,0,5.85-2.62,5.85-5.85v-35.02c0-3.22-2.62-5.85-5.85-5.85v-5"/>
                    <path data-id="36" class="seat cls-2"
                          d="m2573.5,668.32h34.73v56.71h-34.73c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"
                          transform="translate(3282.12 -1888.77) rotate(90)"/>
                    <path class="cls-2"
                          d="m2613.8,684.73h-5c0-3.22-2.62-5.85-5.85-5.85h-35.02c-3.22,0-5.85,2.62-5.85,5.85h-5"/>
                    <path data-id="36" class="seat cls-2"
                          d="m2573.5,789.6h34.73v56.71h-34.73c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"
                          transform="translate(1767.48 3403.4) rotate(-90)"/>
                    <path class="cls-2"
                          d="m2557.08,829.9h5c0,3.22,2.62,5.85,5.85,5.85h35.02c3.22,0,5.85-2.62,5.85-5.85h5"/>
                    <rect class="cls-2" x="741.43" y="326.98" width="65.32" height="74.39"/>
                    <path class="cls-2"
                          d="m681.32,536.01h-52.52v-203.77h52.52c2.2,0,3.98-1.78,3.98-3.98s-1.78-3.98-3.98-3.98h-60.22v219.69h60.22c2.2,0,3.98-1.78,3.98-3.98s-1.78-3.98-3.98-3.98Z"/>
                    <path class="cls-2"
                          d="m628.8,468.19h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"/>
                    <path class="cls-2"
                          d="m628.8,332.24h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"/>
                    <path class="cls-2"
                          d="m628.8,400.38h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"/>
                    <path class="cls-2"
                          d="m2474.17,1298.29h-52.52v-135.63h52.52c2.2,0,3.98-1.78,3.98-3.98s-1.78-3.98-3.98-3.98h-60.22v151.56h60.22c2.2,0,3.98-1.78,3.98-3.98s-1.78-3.98-3.98-3.98Z"/>
                    <path class="cls-2"
                          d="m2421.65,1230.48h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"/>
                    <path class="cls-2"
                          d="m2421.65,1162.66h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"/>
                    <path class="cls-2"
                          d="m2878.33,541.09h-52.52v-135.63h52.52c2.2,0,3.98-1.78,3.98-3.98s-1.78-3.98-3.98-3.98h-60.22v151.56h60.22c2.2,0,3.98-1.78,3.98-3.98s-1.78-3.98-3.98-3.98Z"/>
                    <path class="cls-2"
                          d="m2825.81,473.27h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"/>
                    <path class="cls-2"
                          d="m2825.81,405.45h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"/>
                    <path class="cls-2"
                          d="m2485.68,1153.11v-52.52h67.42v52.52c0,2.2,1.78,3.98,3.98,3.98s3.98-1.78,3.98-3.98v-52.52s0-7.7,0-7.7h-7.96s-67.42,0-67.42,0h-7.96s0,7.7,0,7.7v52.52c0,2.2,1.78,3.98,3.98,3.98s3.98-1.78,3.98-3.98Z"/>
                    <path class="cls-2"
                          d="m2491.34,1094.93h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"
                          transform="translate(3648.43 -1390.75) rotate(90)"/>
                    <circle class="cls-15" cx="3225.82" cy="161.54" r="40.83"/>
                    <circle class="cls-15" cx="3225.82" cy="263.05" r="40.83"/>
                    <circle class="cls-15" cx="3203.33" cy="364.75" r="40.83"/>
                    <circle class="cls-15" cx="2587.41" cy="756.31" r="54.42"/>
                    <path data-id="39" class="seat cls-2"
                          d="m3280.43,74.81h33.68c8.31,0,15.05,6.74,15.05,15.05v26.61c0,8.31-6.74,15.05-15.05,15.05h-33.68c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"
                          transform="translate(5792.93 -2059.85) rotate(137.27)"/>
                    <path class="cls-2"
                          d="m3332.53,111.15l-3.39-3.67c2.37-2.19,2.51-5.89.33-8.26l-23.77-25.73c-2.19-2.37-5.89-2.51-8.26-.33l-3.39-3.67"/>
                    <path data-id="40" class="seat cls-2"
                          d="m3296.01,211.02h33.68c8.31,0,15.05,6.74,15.05,15.05v26.61c0,8.31-6.74,15.05-15.05,15.05h-33.68c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"
                          transform="translate(6223.58 -1368.78) rotate(146.93)"/>
                    <path class="cls-2"
                          d="m3346.3,252.8l-2.73-4.19c2.7-1.76,3.47-5.39,1.71-8.09l-19.11-29.35c-1.76-2.7-5.39-3.47-8.09-1.71l-2.73-4.19"/>
                    <path data-id="41" class="seat cls-2"
                          d="m3274.98,320.88h33.68c8.31,0,15.05,6.74,15.05,15.05v26.61c0,8.31-6.74,15.05-15.05,15.05h-33.68c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"
                          transform="translate(6603.05 495.85) rotate(176.48)"/>
                    <path class="cls-2"
                          d="m3314.56,376.38l-.31-4.99c3.22-.2,5.67-2.98,5.48-6.19l-2.15-34.96c-.2-3.22-2.98-5.67-6.19-5.48l-.31-4.99"/>
                    <path data-id="42" class="seat cls-2"
                          d="m3100.53,320.12h33.68c8.31,0,15.05,6.74,15.05,15.05v26.61c0,8.31-6.74,15.05-15.05,15.05h-33.68c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"
                          transform="translate(149.82 -668.25) rotate(12.53)"/>
                    <path class=" cls-2"
                          d="m3107.13,316.69l-1.08,4.88c-3.15-.7-6.28,1.29-6.97,4.44l-7.6,34.19c-.7,3.15,1.29,6.28,4.44,6.97l-1.08,4.88"/>
                    <path data-id="43" class="seat cls-2"
                          d="m3125.75,91.2h33.68c8.31,0,15.05,6.74,15.05,15.05v26.61c0,8.31-6.74,15.05-15.05,15.05h-33.68c-5.99,0-10.85-4.86-10.85-10.85v-35.02c0-5.99,4.86-10.85,10.85-10.85Z"
                          transform="translate(448.37 -1503.15) rotate(28.86)"/>
                    <path class="cls-2"
                          d="m3141.79,85.58l-2.41,4.38c-2.82-1.56-6.39-.53-7.94,2.3l-16.91,30.67c-1.56,2.82-.53,6.39,2.3,7.94l-2.41,4.38"/>
                    <path class="cls-2"
                          d="m854.71,534.36v-52.52h67.42v52.52c0,2.2,1.78,3.98,3.98,3.98s3.98-1.78,3.98-3.98v-52.52s0-7.7,0-7.7h-7.96s-67.42,0-67.42,0h-7.96s0,7.7,0,7.7v52.52c0,2.2,1.78,3.98,3.98,3.98s3.98-1.78,3.98-3.98Z"/>
                    <path class="cls-2"
                          d="m860.37,476.18h51.06c3,0,5.44,2.44,5.44,5.44v56.93c0,3-2.44,5.44-5.44,5.44h-51.06v-67.82h0Z"
                          transform="translate(1398.71 -378.52) rotate(90)"/>
                    <rect class="cls-2" x="931.54" y="476.56" width="61.78" height="61.78"/>
                    <rect data-id="22" class="seat cls-2" x="622.31" y="547.92" width="61.78" height="61.78"
                          transform="translate(1232.01 -74.4) rotate(90)"/>
                    <rect class="cls-2" x="2824.05" y="555.8" width="58.26" height="58.26"/>
                    <rect class="cls-2" x="3244.15" y="486.86" width="148.89" height="29.13"/>
                    <rect class="cls-2" x="2824.05" y="330.35" width="58.26" height="58.26"/>
                    <rect class="cls-2" x="2910.53" y="60.2" width="29.13" height="29.13"/>
                    <rect class="cls-2" x="3412.87" y="117.06" width="82.9" height="61.13"
                          transform="translate(3601.94 -3306.69) rotate(90)"/>
                    <rect class="cls-2" x="3379.88" y="145.2" width="82.9" height="4.85"
                          transform="translate(3568.95 -3273.7) rotate(90)"/>
                    <rect class="cls-2" x="3412.87" y="203" width="82.9" height="61.13"
                          transform="translate(3687.87 -3220.75) rotate(90)"/>
                    <rect class="cls-2" x="3379.88" y="231.13" width="82.9" height="4.85"
                          transform="translate(3654.89 -3187.77) rotate(90)"/>
                    <rect class="cls-2" x="3412.87" y="289.3" width="82.9" height="61.13"
                          transform="translate(3774.18 -3134.45) rotate(90)"/>
                    <rect class="cls-2" x="3379.88" y="317.44" width="82.9" height="4.85"
                          transform="translate(3741.19 -3101.46) rotate(90)"/>
                    <rect class="cls-2" x="3412.87" y="376.24" width="82.9" height="61.13"
                          transform="translate(3861.12 -3047.51) rotate(90)"/>
                    <rect class="cls-2" x="3379.88" y="404.38" width="82.9" height="4.85"
                          transform="translate(3828.13 -3014.52) rotate(90)"/>
                </g>
                <g id="Desks">
                    <rect class="cls-10" x="709.36" y="1167.47" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(1616.55 2434) rotate(180)"/>
                    <rect class="cls-10" x="857.8" y="1117.94" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(2124.19 210.75) rotate(90)"/>
                    <rect class="cls-10" x="709.36" y="1068.41" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(1616.55 2235.88) rotate(180)"/>
                    <rect class="cls-10" x="1130.7" y="813.96" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(2093.1 -366.12) rotate(90)"/>
                    <rect class="cls-10" x="1081.16" y="665.51" width="197.84" height="99.06" rx="7.51" ry="7.51"/>
                    <rect class="cls-10" x="982.1" y="154.86" width="197.84" height="99.06" rx="7.51" ry="7.51"/>
                    <rect class="cls-10" x="1550.78" y="813.96" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(2513.19 -786.21) rotate(90)"/>
                    <rect class="cls-10" x="1422.77" y="185.22" width="397.84" height="139.06" rx="7.51" ry="7.51"/>
                    <rect class="cls-10" x="1451.72" y="813.96" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(2414.13 -687.15) rotate(90)"/>
                    <rect class="cls-10" x="1290.47" y="1217" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(2655.92 -122.86) rotate(90)"/>
                    <rect class="cls-10" x="1699.23" y="1183.97" width="197.84" height="99.06" rx="7.51" ry="7.51"/>
                    <rect class="cls-10" x="3294.12" y="1273.83" width="197.84" height="99.06" rx="7.51" ry="7.51"/>
                    <rect class="cls-10" x="3294.12" y="1107.09" width="197.84" height="99.06" rx="7.51" ry="7.51"/>
                    <rect class="cls-10" x="3005.17" y="789.43" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(2265.13 3943.05) rotate(-90)"/>
                    <rect class="cls-10" x="3104.24" y="737.06" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(2416.57 3989.74) rotate(-90)"/>
                    <rect class="cls-10" x="3219.11" y="529.27" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(6636.06 1157.59) rotate(180)"/>
                    <rect class="cls-10" x="3343.65" y="948.32" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(4440.42 -2444.72) rotate(90)"/>
                    <rect class="cls-10" x="1191.41" y="1217" width="197.84" height="99.06" rx="7.51" ry="7.51"
                          transform="translate(2556.86 -23.79) rotate(90)"/>
                    <path class="cls-9"
                          d="m832.41,650.68h-149.64v73.49h120.38c16.16,0,29.26,13.1,29.26,29.26v121.8h73.49v-151.07h0c0-40.59-32.9-73.49-73.49-73.49h0Z"/>
                    <rect class="cls-10" x="2230.02" y="1016.35" width="124.36" height="62.27" rx="4.72" ry="4.72"/>
                </g>
                <g id="Columns">
                    <rect class="cls-21" x="3156.77" y="883.47" width="57.22" height="57.22" rx="1.08" ry="1.08"/>
                    <rect class="cls-21" x="1569.43" y="962.87" width="57.22" height="57.22" rx="1.08" ry="1.08"/>
                </g>
                <g id="Cabinets">
                    <rect class="cls-17" x="1291.78" y="1124.13" width="107.27" height="36.74"/>
                    <rect class="cls-17" x="1462.19" y="962.83" width="107.27" height="36.74"/>
                    <rect class="cls-1" x="701.98" y="885.93" width="248.92" height="36.74"/>
                    <rect data-id="21" class="seat cls-1" x="622.31" y="735.43" width="30.89" height="107.02"/>
                    <rect class="cls-2" x="1442.5" y="478.56" width="288.17" height="36.74"/>
                    <rect class="cls-2" x="1442.5" y="515.3" width="288.17" height="5.14"/>
                    <rect class="cls-2" x="2804.71" y="989.79" width="67.22" height="36.74"
                          transform="translate(1830.16 3846.48) rotate(-90)"/>
                    <rect class="cls-2" x="2825.65" y="1005.59" width="67.22" height="5.14"
                          transform="translate(1851.1 3867.42) rotate(-90)"/>
                    <rect class="cls-2" x="2789.94" y="1071.78" width="106.24" height="46.23"
                          transform="translate(1748.17 3937.96) rotate(-90)"/>
                    <rect class="cls-2" x="2858.8" y="1092.41" width="19.73" height="4.96"
                          transform="translate(1773.77 3963.55) rotate(-90)"/>
                    <rect class="cls-2" x="2789.94" y="1178.02" width="106.24" height="46.23"
                          transform="translate(1641.93 4044.2) rotate(-90)"/>
                    <rect class="cls-2" x="2858.8" y="1198.65" width="19.73" height="4.96"
                          transform="translate(1667.53 4069.8) rotate(-90)"/>
                    <rect class="cls-21" x="3156.77" y="883.47" width="57.22" height="57.22" rx="1.08" ry="1.08"/>
                    <rect class="cls-2" x="3050.53" y="687.92" width="106.24" height="46.23"
                          transform="translate(6207.29 1422.08) rotate(180)"/>
                    <rect class="cls-2" x="3093.78" y="682.96" width="19.73" height="4.96"
                          transform="translate(6207.29 1370.88) rotate(180)"/>
                    <rect class="cls-2" x="3062.47" y="1329.3" width="106.24" height="46.23"
                          transform="translate(6231.19 2704.83) rotate(180)"/>
                    <rect class="cls-2" x="3105.73" y="1324.33" width="19.73" height="4.96"
                          transform="translate(6231.19 2653.63) rotate(180)"/>
                    <rect class="cls-2" x="3168.72" y="1329.3" width="106.24" height="46.23"
                          transform="translate(6443.68 2704.83) rotate(180)"/>
                    <rect class="cls-2" x="3211.97" y="1324.33" width="19.73" height="4.96"
                          transform="translate(6443.68 2653.63) rotate(180)"/>
                    <rect class="cls-2" x="3433.97" y="841.43" width="46.23" height="69.23"
                          transform="translate(4333.13 -2581.04) rotate(90)"/>
                    <rect class="cls-2" x="3410.12" y="875.1" width="19.73" height="4.96"
                          transform="translate(4297.56 -2542.41) rotate(90)"/>
                    <rect class="cls-2" x="685.3" y="1433.92" width="357.49" height="45.4"
                          transform="translate(1728.09 2913.23) rotate(180)"/>
                    <rect class="cls-2" x="685.3" y="1428.78" width="357.49" height="5.14"
                          transform="translate(1728.09 2862.7) rotate(180)"/>
                    <rect class="cls-2" x="1874.37" y="1337.73" width="83.74" height="36.74"
                          transform="translate(3832.48 2712.2) rotate(180)"/>
                    <rect class="cls-2" x="1874.37" y="1332.59" width="83.74" height="5.14"
                          transform="translate(3832.48 2670.32) rotate(180)"/>
                    <rect class="cls-2" x="1889.79" y="1199.88" width="142.94" height="27.38"
                          transform="translate(3174.83 -747.69) rotate(90)"/>
                    <rect class="cls-2" x="1918.48" y="686.25" width="76.2" height="36.74"
                          transform="translate(2661.2 -1251.96) rotate(90)"/>
                    <rect class="cls-2" x="1897.54" y="702.05" width="76.2" height="5.14"
                          transform="translate(2640.26 -1231.02) rotate(90)"/>
                    <rect class="cls-2" x="1918.48" y="607.91" width="76.2" height="36.74"
                          transform="translate(2582.86 -1330.3) rotate(90)"/>
                    <rect class="cls-2" x="1897.54" y="623.71" width="76.2" height="5.14"
                          transform="translate(2561.92 -1309.36) rotate(90)"/>
                    <rect class="cls-2" x="1190.71" y="58.56" width="83.74" height="36.74"/>
                    <rect class="cls-2" x="1190.71" y="95.3" width="83.74" height="5.14"/>
                    <rect class="cls-2" x="910.83" y="58.56" width="66.73" height="29.28"/>
                    <rect class="cls-2" x="910.83" y="87.84" width="66.73" height="4.09"/>
                    <rect class="cls-2" x="821.12" y="218.67" width="108.32" height="29.28"
                          transform="translate(641.97 1108.6) rotate(-90)"/>
                    <rect class="cls-2" x="1232.32" y="175.98" width="66.13" height="23.86"
                          transform="translate(1077.48 1453.29) rotate(-90)"/>
                    <rect data-id="33" class="seat cls-2" x="2362.27" y="657.94" width="68.42" height="64.74"/>
                    <rect class="cls-2" x="2359.02" y="896.36" width="103" height="24.01"/>
                    <rect class="cls-2" x="2362.27" y="722.69" width="68.42" height="5.14"/>
                    <rect class="cls-2" x="1987.94" y="646.47" width="341.95" height="72.99"/>
                    <rect class="cls-2" x="2178.69" y="926.05" width="39.94" height="161.33"/>
                    <rect class="cls-2" x="2368.51" y="926.05" width="39.94" height="161.33"/>
                    <rect class="cls-17" x="1157.46" y="973.11" width="97.78" height="33.49"/>
                    <rect class="cls-17" x="675.53" y="1372.96" width="72.39" height="33.49"
                          transform="translate(-677.99 2101.44) rotate(-90)"/>
                    <rect class="cls-17" x="675.53" y="1297.7" width="72.39" height="33.49"
                          transform="translate(-602.72 2026.17) rotate(-90)"/>
                    <rect class="cls-2" x="1986.11" y="1313.76" width="181.32" height="70.71"/>
                    <rect class="cls-17" x="2742.38" y="1221.22" width="71.52" height="163.49"/>
                    <rect class="cls-2" x="1735.78" y="479.11" width="76.2" height="36.74"/>
                </g>
                <g id="Sinks">
                    <path class="cls-17"
                          d="m2000.75,1358.17h56.63v9.46c0,2.28-1.85,4.13-4.13,4.13h-48.37c-2.28,0-4.13-1.85-4.13-4.13v-9.46h0Z"/>
                    <path class="cls-17"
                          d="m2009.52,1320.8h39.1c4.84,0,8.77,3.93,8.77,8.77v28.6h-56.63v-28.6c0-4.84,3.93-8.77,8.77-8.77Z"/>
                    <rect class="cls-13" x="2025.69" y="1343.6" width="6.74" height="21.44"/>
                    <path class="cls-17"
                          d="m2086.59,1358.17h56.63v9.46c0,2.28-1.85,4.13-4.13,4.13h-48.37c-2.28,0-4.13-1.85-4.13-4.13v-9.46h0Z"/>
                    <path class="cls-17"
                          d="m2095.35,1320.8h39.1c4.84,0,8.77,3.93,8.77,8.77v28.6h-56.63v-28.6c0-4.84,3.93-8.77,8.77-8.77Z"/>
                    <rect class="cls-13" x="2111.53" y="1343.6" width="6.74" height="21.44"/>
                    <path class="cls-17"
                          d="m2182.56,661.15h56.63v9.46c0,2.28-1.85,4.13-4.13,4.13h-48.37c-2.28,0-4.13-1.85-4.13-4.13v-9.46h0Z"
                          transform="translate(4421.76 1335.89) rotate(180)"/>
                    <path class="cls-17"
                          d="m2191.33,674.74h39.1c4.84,0,8.77,3.93,8.77,8.77v28.6h-56.63v-28.6c0-4.84,3.93-8.77,8.77-8.77Z"
                          transform="translate(4421.76 1386.85) rotate(180)"/>
                    <rect class="cls-13" x="2207.51" y="667.87" width="6.74" height="21.44"
                          transform="translate(4421.76 1357.18) rotate(180)"/>
                    <path class="cls-17"
                          d="m2766.93,1252h56.63v9.46c0,2.28-1.85,4.13-4.13,4.13h-48.37c-2.28,0-4.13-1.85-4.13-4.13v-9.46h0Z"
                          transform="translate(1536.45 4054.03) rotate(-90)"/>
                    <path class="cls-17"
                          d="m2750.21,1240.11h39.1c4.84,0,8.77,3.93,8.77,8.77v28.6h-56.63v-28.6c0-4.84,3.93-8.77,8.77-8.77Z"
                          transform="translate(1510.97 4028.55) rotate(-90)"/>
                    <rect class="cls-13" x="2781.22" y="1248.07" width="6.74" height="21.44"
                          transform="translate(1525.8 4043.39) rotate(-90)"/>
                    <path class="cls-17"
                          d="m2766.93,1320.02h56.63v9.46c0,2.28-1.85,4.13-4.13,4.13h-48.37c-2.28,0-4.13-1.85-4.13-4.13v-9.46h0Z"
                          transform="translate(1468.43 4122.06) rotate(-90)"/>
                    <path class="cls-17"
                          d="m2750.21,1308.13h39.1c4.84,0,8.77,3.93,8.77,8.77v28.6h-56.63v-28.6c0-4.84,3.93-8.77,8.77-8.77Z"
                          transform="translate(1442.94 4096.58) rotate(-90)"/>
                    <rect class="cls-13" x="2781.22" y="1316.1" width="6.74" height="21.44"
                          transform="translate(1457.78 4111.41) rotate(-90)"/>
                </g>
                <g id="Doors">
                    <rect class="cls-20" x="1074.42" y="1412.05" width="85.59" height="16.72"/>
                    <rect class="cls-15" x="1069.32" y="1412.05" width="5.1" height="16.72"
                          transform="translate(2143.73 2840.83) rotate(180)"/>
                    <rect class="cls-15" x="1160.01" y="1412.05" width="5.1" height="16.72"
                          transform="translate(2325.13 2840.83) rotate(180)"/>
                    <rect class="cls-15" x="1154.91" y="1428.78" width="5.1" height="82"
                          transform="translate(2314.92 2939.55) rotate(180)"/>
                    <path class="cls-15" d="m1074.42,1428.78h0c0,44.79,35.9,81.17,80.49,82"/>
                    <rect class="cls-20" x="1308.36" y="457.42" width="85.59" height="16.72"
                          transform="translate(2702.31 931.57) rotate(180)"/>
                    <rect class="cls-15" x="1393.95" y="457.42" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="1303.26" y="457.42" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="1308.36" y="375.42" width="5.1" height="82"/>
                    <path class="cls-15" d="m1393.95,457.42h0c0-44.79-35.9-81.17-80.49-82"/>
                    <rect class="cls-20" x="1945.14" y="787.36" width="85.59" height="16.72"
                          transform="translate(1192.22 2783.66) rotate(-90)"/>
                    <rect class="cls-15" x="1985.39" y="832.71" width="5.1" height="16.72"
                          transform="translate(2829.01 -1146.87) rotate(90)"/>
                    <rect class="cls-15" x="1985.39" y="742.01" width="5.1" height="16.72"
                          transform="translate(2738.31 -1237.57) rotate(90)"/>
                    <rect class="cls-15" x="2034.75" y="714.48" width="5.1" height="82"
                          transform="translate(2792.78 -1281.83) rotate(90)"/>
                    <path class="cls-15" d="m1996.3,838.52h0c44.79,0,81.17-35.9,82-80.49"/>
                    <rect class="cls-20" x="2059.88" y="920.37" width="85.59" height="16.72"/>
                    <rect class="cls-15" x="2054.77" y="920.37" width="5.1" height="16.72"
                          transform="translate(4114.65 1857.46) rotate(180)"/>
                    <rect class="cls-15" x="2145.47" y="920.37" width="5.1" height="16.72"
                          transform="translate(4296.04 1857.46) rotate(180)"/>
                    <rect class="cls-15" x="2140.37" y="937.09" width="5.1" height="82"
                          transform="translate(4285.84 1956.18) rotate(180)"/>
                    <path class="cls-15" d="m2059.88,937.09h0c0,44.79,35.9,81.17,80.49,82"/>
                    <rect class="cls-20" x="2244.3" y="916.11" width="85.59" height="16.72"
                          transform="translate(4574.19 1848.94) rotate(-180)"/>
                    <rect class="cls-15" x="2329.89" y="916.11" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2239.2" y="916.11" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2244.3" y="834.11" width="5.1" height="82"/>
                    <path class="cls-15" d="m2329.89,916.11h0c0-44.79-35.9-81.17-80.49-82"/>
                    <rect class="cls-20" x="1186.3" y="457.42" width="85.59" height="16.72"/>
                    <rect class="cls-15" x="1181.2" y="457.42" width="5.1" height="16.72"
                          transform="translate(2367.49 931.57) rotate(-180)"/>
                    <rect class="cls-15" x="1271.89" y="457.42" width="5.1" height="16.72"
                          transform="translate(2548.89 931.57) rotate(-180)"/>
                    <rect class="cls-15" x="1266.79" y="375.42" width="5.1" height="82"
                          transform="translate(2538.68 832.85) rotate(-180)"/>
                    <path class="cls-15" d="m1186.3,457.42h0c0-44.79,35.9-81.17,80.49-82"/>
                    <rect class="cls-20" x="682.87" y="269.9" width="85.59" height="16.72"/>
                    <rect class="cls-15" x="677.77" y="269.9" width="5.1" height="16.72"
                          transform="translate(1360.64 556.53) rotate(-180)"/>
                    <rect class="cls-15" x="768.46" y="269.9" width="5.1" height="16.72"
                          transform="translate(1542.03 556.53) rotate(-180)"/>
                    <rect class="cls-15" x="763.36" y="187.91" width="5.1" height="82"
                          transform="translate(1531.83 457.81) rotate(-180)"/>
                    <path class="cls-15" d="m682.87,269.9h0c0-44.79,35.9-81.17,80.49-82"/>
                    <rect class="cls-20" x="570.68" y="153.05" width="85.59" height="16.72"
                          transform="translate(774.88 -452.06) rotate(90)"/>
                    <rect class="cls-15" x="610.92" y="107.7" width="5.1" height="16.72"
                          transform="translate(497.41 729.53) rotate(-90)"/>
                    <rect class="cls-15" x="610.92" y="198.39" width="5.1" height="16.72"
                          transform="translate(406.72 820.23) rotate(-90)"/>
                    <rect class="cls-15" x="660.28" y="160.66" width="5.1" height="82"
                          transform="translate(461.18 864.49) rotate(-90)"/>
                    <path class="cls-15" d="m621.84,118.61h0c44.79,0,81.17,35.9,82,80.49"/>
                    <rect class="cls-20" x="2287.1" y="1376.11" width="85.59" height="16.72"
                          transform="translate(4659.78 2768.94) rotate(-180)"/>
                    <rect class="cls-15" x="2372.69" y="1376.11" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2281.99" y="1376.11" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2287.1" y="1392.83" width="5.1" height="82"/>
                    <path class="cls-15" d="m2372.69,1392.83h0c0,44.79-35.9,81.17-80.49,82"/>
                    <rect class="cls-20" x="2435.35" y="1376.11" width="85.59" height="16.72"
                          transform="translate(4956.3 2768.94) rotate(-180)"/>
                    <rect class="cls-15" x="2520.95" y="1376.11" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2430.25" y="1376.11" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2435.35" y="1392.83" width="5.1" height="82"/>
                    <path class="cls-15" d="m2520.95,1392.83h0c0,44.79-35.9,81.17-80.49,82"/>
                    <rect class="cls-20" x="2843.42" y="1376.11" width="85.59" height="16.72"
                          transform="translate(5772.43 2768.94) rotate(-180)"/>
                    <rect class="cls-15" x="2929.01" y="1376.11" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2838.32" y="1376.11" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2843.42" y="1392.83" width="5.1" height="82"/>
                    <path class="cls-15" d="m2929.01,1392.83h0c0,44.79-35.9,81.17-80.49,82"/>
                    <rect class="cls-20" x="2646.08" y="920.37" width="85.59" height="16.72"
                          transform="translate(5377.76 1857.46) rotate(-180)"/>
                    <rect class="cls-15" x="2731.68" y="920.37" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2640.98" y="920.37" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="2646.08" y="937.09" width="5.1" height="82"/>
                    <path class="cls-15" d="m2731.68,937.09h0c0,44.79-35.9,81.17-80.49,82"/>
                    <rect class="cls-20" x="2772.89" y="782.26" width="85.59" height="16.72"
                          transform="translate(3606.31 -2025.07) rotate(90)"/>
                    <rect class="cls-15" x="2813.14" y="736.91" width="5.1" height="16.72"
                          transform="translate(2070.42 3560.96) rotate(-90)"/>
                    <rect class="cls-15" x="2813.14" y="827.61" width="5.1" height="16.72"
                          transform="translate(1979.72 3651.66) rotate(-90)"/>
                    <rect class="cls-15" x="2862.5" y="789.87" width="5.1" height="82"
                          transform="translate(2034.19 3695.92) rotate(-90)"/>
                    <path class="cls-15" d="m2824.05,747.82h0c44.79,0,81.17,35.9,82,80.49"/>
                    <rect class="cls-20" x="3016.09" y="235.43" width="85.59" height="16.72"
                          transform="translate(3302.69 -2815.09) rotate(90)"/>
                    <rect class="cls-15" x="3056.34" y="190.09" width="5.1" height="16.72"
                          transform="translate(2860.44 3257.34) rotate(-90)"/>
                    <rect class="cls-15" x="3056.34" y="280.78" width="5.1" height="16.72"
                          transform="translate(2769.74 3348.03) rotate(-90)"/>
                    <rect class="cls-15" x="3105.7" y="243.04" width="5.1" height="82"
                          transform="translate(2824.21 3392.29) rotate(-90)"/>
                    <path class="cls-15" d="m3067.25,201h0c44.79,0,81.17,35.9,82,80.49"/>
                    <rect class="cls-20" x="3106.45" y="507.62" width="85.59" height="16.72"
                          transform="translate(6298.49 1031.97) rotate(-180)"/>
                    <rect class="cls-15" x="3192.04" y="507.62" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="3101.35" y="507.62" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="3106.45" y="425.63" width="5.1" height="82"/>
                    <path class="cls-15" d="m3192.04,507.62h0c0-44.79-35.9-81.17-80.49-82"/>
                    <rect class="cls-20" x="1947.74" y="520.9" width="85.59" height="16.72"
                          transform="translate(2519.81 -1461.27) rotate(90)"/>
                    <rect class="cls-15" x="1987.99" y="475.55" width="5.1" height="16.72"
                          transform="translate(1506.62 2474.46) rotate(-90)"/>
                    <rect class="cls-15" x="1987.99" y="566.25" width="5.1" height="16.72"
                          transform="translate(1415.93 2565.15) rotate(-90)"/>
                    <rect class="cls-15" x="2037.35" y="528.51" width="5.1" height="82"
                          transform="translate(1470.39 2609.41) rotate(-90)"/>
                    <path class="cls-15" d="m1998.9,486.47h0c44.79,0,81.17,35.9,82,80.49"/>
                    <rect class="cls-20" x="2085.48" y="98.51" width="85.59" height="16.72"
                          transform="translate(2235.15 -2021.4) rotate(90)"/>
                    <rect class="cls-15" x="2125.72" y="53.17" width="5.1" height="16.72"
                          transform="translate(2066.74 2189.8) rotate(-90)"/>
                    <rect class="cls-15" x="2125.72" y="143.86" width="5.1" height="16.72"
                          transform="translate(1976.05 2280.5) rotate(-90)"/>
                    <rect class="cls-15" x="2175.08" y="106.12" width="5.1" height="82"
                          transform="translate(2030.51 2324.76) rotate(-90)"/>
                    <path class="cls-15" d="m2136.64,64.08h0c44.79,0,81.17,35.9,82,80.49"/>
                </g>
                <g id="Glazed_Walls" data-name="Glazed Walls">
                    <rect class="cls-2" x="1584.6" y="1169.77" width="11.66" height="11.66"/>
                    <rect class="cls-2" x="1703.9" y="1057.71" width="11.66" height="11.66"/>
                    <rect class="cls-2" x="1584.6" y="1057.71" width="11.66" height="11.66"/>
                    <rect class="cls-2" x="1812.9" y="1057.71" width="11.66" height="11.66"/>
                    <line class="cls-16" x1="1590.43" y1="1069.36" x2="1590.43" y2="1169.77"/>
                    <line class="cls-16" x1="1590.43" y1="1181.42" x2="1590.43" y2="1285.04"/>
                    <line class="cls-16" x1="1596.26" y1="1063.54" x2="1703.9" y2="1063.54"/>
                    <line class="cls-16" x1="1715.55" y1="1063.54" x2="1812.9" y2="1063.54"/>
                </g>
                <g id="Windows">
                    <rect class="cls-20" x="965.77" y="459.83" width="194.02" height="16.72"/>
                    <rect class="cls-15" x="960.67" y="459.83" width="5.1" height="16.72"
                          transform="translate(1926.44 936.39) rotate(-180)"/>
                    <rect class="cls-15" x="1159.79" y="459.83" width="5.1" height="16.72"
                          transform="translate(2324.68 936.39) rotate(-180)"/>
                    <line class="cls-15" x1="965.77" y1="462.88" x2="1158.89" y2="462.88"/>
                    <line class="cls-15" x1="965.77" y1="467.39" x2="1158.89" y2="467.39"/>
                    <rect class="cls-20" x="1018.25" y="38.38" width="124.02" height="16.72"/>
                    <rect class="cls-15" x="1013.15" y="38.38" width="5.1" height="16.72"
                          transform="translate(2031.4 93.48) rotate(-180)"/>
                    <rect class="cls-15" x="1142.27" y="38.38" width="5.1" height="16.72"
                          transform="translate(2289.65 93.48) rotate(-180)"/>
                    <line class="cls-15" x1="1018.25" y1="41.43" x2="1141.37" y2="41.43"/>
                    <line class="cls-15" x1="1018.25" y1="45.93" x2="1141.37" y2="45.93"/>
                    <rect class="cls-20" x="1423.87" y="459.83" width="394.02" height="16.72"/>
                    <rect class="cls-15" x="1418.77" y="459.83" width="5.1" height="16.72"
                          transform="translate(2842.64 936.39) rotate(-180)"/>
                    <rect class="cls-15" x="1817.89" y="459.83" width="5.1" height="16.72"
                          transform="translate(3640.89 936.39) rotate(-180)"/>
                    <line class="cls-15" x1="1423.87" y1="462.88" x2="1816.99" y2="462.88"/>
                    <line class="cls-15" x1="1423.87" y1="467.39" x2="1816.99" y2="467.39"/>
                    <rect class="cls-20" x="1935.93" y="282.16" width="104.02" height="16.72"
                          transform="translate(2278.46 -1697.42) rotate(90)"/>
                    <rect class="cls-15" x="1985.39" y="227.6" width="5.1" height="16.72"
                          transform="translate(1751.98 2223.9) rotate(-90)"/>
                    <rect class="cls-15" x="1985.39" y="336.72" width="5.1" height="16.72"
                          transform="translate(1642.86 2333.03) rotate(-90)"/>
                    <line class="cls-15" x1="1993.25" y1="238.51" x2="1993.25" y2="341.63"/>
                    <line class="cls-15" x1="1988.75" y1="238.51" x2="1988.75" y2="341.63"/>
                    <rect class="cls-20" x="1408.41" y="1376.35" width="94.02" height="16.72"/>
                    <rect class="cls-15" x="1502.43" y="1376.35" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="1403.3" y="1376.35" width="5.1" height="16.72"/>
                    <line class="cls-15" x1="1502.43" y1="1390.02" x2="1409.31" y2="1390.02"/>
                    <line class="cls-15" x1="1502.43" y1="1385.52" x2="1409.31" y2="1385.52"/>
                    <rect class="cls-20" x="1650.25" y="1376.35" width="94.02" height="16.72"/>
                    <rect class="cls-15" x="1744.27" y="1376.35" width="5.1" height="16.72"/>
                    <rect class="cls-15" x="1645.14" y="1376.35" width="5.1" height="16.72"/>
                    <line class="cls-15" x1="1744.27" y1="1390.02" x2="1651.15" y2="1390.02"/>
                    <line class="cls-15" x1="1744.27" y1="1385.52" x2="1651.15" y2="1385.52"/>
                    <rect class="cls-20" x="676.73" y="1115.36" width="16.72" height="94.02"/>
                    <rect class="cls-15" x="682.55" y="1203.57" width="5.1" height="16.72"
                          transform="translate(1897.03 526.83) rotate(90)"/>
                    <rect class="cls-15" x="682.55" y="1104.44" width="5.1" height="16.72"
                          transform="translate(1797.9 427.71) rotate(90)"/>
                    <line class="cls-15" x1="679.79" y1="1209.38" x2="679.79" y2="1116.26"/>
                    <line class="cls-15" x1="684.29" y1="1209.38" x2="684.29" y2="1116.26"/>
                    <rect class="cls-20" x="2799.68" y="856.87" width="32.02" height="16.72"
                          transform="translate(3680.93 -1950.46) rotate(90)"/>
                    <rect class="cls-15" x="2813.14" y="838.31" width="5.1" height="16.72"
                          transform="translate(1969.02 3662.36) rotate(-90)"/>
                    <rect class="cls-15" x="2813.14" y="875.43" width="5.1" height="16.72"
                          transform="translate(1931.9 3699.49) rotate(-90)"/>
                    <line class="cls-15" x1="2821" y1="849.22" x2="2821" y2="880.34"/>
                    <line class="cls-15" x1="2816.5" y1="849.22" x2="2816.5" y2="880.34"/>
                    <rect class="cls-20" x="2799.68" y="709.37" width="32.02" height="16.72"
                          transform="translate(3533.43 -2097.96) rotate(90)"/>
                    <rect class="cls-15" x="2813.14" y="690.81" width="5.1" height="16.72"
                          transform="translate(2116.52 3514.86) rotate(-90)"/>
                    <rect class="cls-15" x="2813.14" y="727.93" width="5.1" height="16.72"
                          transform="translate(2079.4 3551.98) rotate(-90)"/>
                    <line class="cls-15" x1="2821" y1="701.72" x2="2821" y2="732.84"/>
                    <line class="cls-15" x1="2816.5" y1="701.72" x2="2816.5" y2="732.84"/>
                    <rect class="cls-20" x="2928.23" y="38.38" width="72.02" height="16.72"/>
                    <rect class="cls-15" x="2923.12" y="38.38" width="5.1" height="16.72"
                          transform="translate(5851.35 93.48) rotate(-180)"/>
                    <rect class="cls-15" x="3000.25" y="38.38" width="5.1" height="16.72"
                          transform="translate(6005.6 93.48) rotate(-180)"/>
                    <line class="cls-15" x1="2928.23" y1="41.43" x2="2999.34" y2="41.43"/>
                    <line class="cls-15" x1="2928.23" y1="45.93" x2="2999.34" y2="45.93"/>
                    <rect class="cls-20" x="1435.39" y="38.38" width="72.02" height="16.72"/>
                    <rect class="cls-15" x="1430.28" y="38.38" width="5.1" height="16.72"
                          transform="translate(2865.67 93.48) rotate(-180)"/>
                    <rect class="cls-15" x="1507.41" y="38.38" width="5.1" height="16.72"
                          transform="translate(3019.92 93.48) rotate(-180)"/>
                    <line class="cls-15" x1="1435.39" y1="41.43" x2="1506.5" y2="41.43"/>
                    <line class="cls-15" x1="1435.39" y1="45.93" x2="1506.5" y2="45.93"/>
                    <rect class="cls-20" x="695.75" y="38.38" width="72.02" height="16.72"/>
                    <rect class="cls-15" x="690.65" y="38.38" width="5.1" height="16.72"
                          transform="translate(1386.4 93.48) rotate(-180)"/>
                    <rect class="cls-15" x="767.77" y="38.38" width="5.1" height="16.72"
                          transform="translate(1540.64 93.48) rotate(-180)"/>
                    <line class="cls-15" x1="695.75" y1="41.43" x2="766.87" y2="41.43"/>
                    <line class="cls-15" x1="695.75" y1="45.93" x2="766.87" y2="45.93"/>
                    <rect class="cls-20" x="635.76" y="269.9" width="32.02" height="16.72"/>
                    <rect class="cls-15" x="630.66" y="269.9" width="5.1" height="16.72"
                          transform="translate(1266.43 556.53) rotate(-180)"/>
                    <rect class="cls-15" x="667.79" y="269.9" width="5.1" height="16.72"
                          transform="translate(1340.67 556.53) rotate(-180)"/>
                    <line class="cls-15" x1="635.76" y1="272.95" x2="666.88" y2="272.95"/>
                    <line class="cls-15" x1="635.76" y1="277.46" x2="666.88" y2="277.46"/>
                    <rect class="cls-20" x="783.86" y="269.9" width="32.02" height="16.72"/>
                    <rect class="cls-15" x="778.76" y="269.9" width="5.1" height="16.72"
                          transform="translate(1562.63 556.53) rotate(-180)"/>
                    <rect class="cls-15" x="815.89" y="269.9" width="5.1" height="16.72"
                          transform="translate(1636.87 556.53) rotate(-180)"/>
                    <line class="cls-15" x1="783.86" y1="272.95" x2="814.98" y2="272.95"/>
                    <line class="cls-15" x1="783.86" y1="277.46" x2="814.98" y2="277.46"/>
                    <rect class="cls-20" x="1725.39" y="38.38" width="72.02" height="16.72"/>
                    <rect class="cls-15" x="1720.28" y="38.38" width="5.1" height="16.72"
                          transform="translate(3445.67 93.48) rotate(-180)"/>
                    <rect class="cls-15" x="1797.41" y="38.38" width="5.1" height="16.72"
                          transform="translate(3599.92 93.48) rotate(-180)"/>
                    <line class="cls-15" x1="1725.39" y1="41.43" x2="1796.5" y2="41.43"/>
                    <line class="cls-15" x1="1725.39" y1="45.93" x2="1796.5" y2="45.93"/>
                </g>
                <g class="rooms">
                    <g data-room="1" class="room ">
                        <rect class="office-1" x="840" y="60" width="194.02" height="16.72"/>
                    </g>

                    <rect data-room="2" class="room meeting-room" x="1295" y="60" width="194.02" height="16.72"/>
                    <rect data-room="3" class="room desk-room" x="610" y="550" width="194.02" height="16.72"/>
                    <g data-room="4" class="room open-office-room">
                        <rect class="open-office-part" x="1030" y="580" width="194.02" height="16.72"/>
                        <rect class="open-office-part" x="690" y="930" width="194.02" height="16.72"/>
                    </g>
                    <rect data-room="5" class="room silent-room-1" x="1590" y="1065" width="194.02" height="16.72"/>
                    <rect data-room="6" class="room kitchen-room" x="1990" y="650" width="194.02" height="16.72"/>
                    <rect data-room="7" class="room silent-room-2" x="2180" y="930" width="194.02" height="16.72"/>
                    <rect data-room="8" class="room break-room" x="3060" y="60" width="194.02" height="16.72"/>
                    <rect data-room="9" class="room office-2" x="2820" y="520" width="194.02" height="16.72"/>
                    <rect data-room="10" class="room silent-room-3" x="3000" y="1110" width="194.02" height="16.72"/>
                </g>
            </svg>
        @else
            <img src='/images/office_base_clean.png' alt="">
        @endif

    </section>
</main>
@if(!$user)
    <div class="modal-auth">

        <form action="{{route('register')}}" method="POST" class="auth">
            @csrf
            <h2>Welcome to Virtual Office</h2>
            <div class="avatars">
                @foreach($avatars as $avatar)
                    <div data-id="{{$avatar->id}}" class="avatars__item">
                        <img src="<?= $avatar->path ?>" alt="">
                    </div>
                @endforeach
            </div>
            <span class="message"></span>
            <input class="input-hidden" name="avatar" type="hidden" required>
            <label>
                <input name="username" type="text" placeholder="Введите ваше имя" required>
            </label>
            <button type="submit">Enter to the room</button>
        </form>
    </div>
@endif

<div class="alert">

    <div class="alert__body">
        <div class="alert__close">
            X
        </div>
        <div class="alert__message"></div>
    </div>
</div>
</body>
<script src="/js/app.js"></script>
<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const officeMap = document.querySelector('svg')

    document.addEventListener('DOMContentLoaded', () => {
        const places = <?= json_encode($places) ?>;
        getPLace()
        setPositions(places)
        setInterval(updateData, 1500);
        sendMessage();
    })

    // SET X,Y POSITION ON OFFICE MAP
    function setPositions(items) {
        items.forEach((item) => {
            placeAvatarAt(item.x, item.y, item.imagePath, item.user_id);
        });
    }

    function alertModal(message) {
        const modal = document.querySelector('.alert');
        const close = modal.querySelector('.alert__close');
        const content = modal.querySelector('.alert__message');
        modal.style.display = 'flex';
        content.innerText = message;
        close.addEventListener('click', () => {
            modal.style.display = 'none'
        })
    }

    // CREATE SVG OBJECT TO NAVIGATE AVATAR ON OFFICE MAP
    function getSVGObject(event) {
        const ctm = officeMap.getScreenCTM();
        const point = officeMap.createSVGPoint();
        point.x = event.clientX - 13;
        point.y = event.clientY - 13;
        return point.matrixTransform(ctm.inverse())
    }

    // QUERY FOR CHECK PLACE FOR USER
    async function setPlace(id, x, y) {
        return await fetch('/place', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({roomId: id, x: x, y: y})
        }).then(response => response.json())
            .then(data => {
                return data;
            });
    }


    // LISTENER FOR CLICK BY MAP
    function getPLace() {
        officeMap.addEventListener('click', async (e) => {
            const room = e.target.closest('.room');
            if (room) {
                const roomId = room.getAttribute('data-room');
                if (roomId) {
                    const svgPoint = getSVGObject(e);
                    const result = await setPlace(roomId, svgPoint.x, svgPoint.y);
                    if (result && result.status) {
                        await updateData()
                    } else {
                        alertModal(result.message)
                    }
                }
            }
        });
    }


    // CREATE OR MOVE USER INFO POINT ON OFFICE MAP
    function placeAvatarAt(x, y, imagePath, user_id) {
        const officeMap = document.querySelector('svg');
        const existImage = officeMap.querySelector(`image[data-id="${user_id}"]`);
        if (existImage) {
            existImage.setAttributeNS(null, "x", x);
            existImage.setAttributeNS(null, "y", y);
        } else {
            let svgNS = "http://www.w3.org/2000/svg";
            let img = document.createElementNS(svgNS, "image");
            img.setAttributeNS(null, "height", "100");
            img.setAttributeNS(null, "width", "100");
            img.setAttributeNS(null, "data-id", user_id);
            img.setAttributeNS('http://www.w3.org/1999/xlink', 'href', imagePath); // Ссылка на изображение аватара
            img.setAttributeNS(null, "x", x);
            img.setAttributeNS(null, "class", 'smooth');
            img.setAttributeNS(null, "y", y);
            img.setAttributeNS(null, "visibility", "visible");
            officeMap.appendChild(img);
        }

    }

    function renderRooms(rooms) {
        const container = document.querySelector('.room__items');
        container.innerHTML = '';

        let roomsHTML = '';
        rooms.forEach((room) => {
            const seats = room.places
            const takenSeats = room.users.length;

            let usersHTML = '';

            room.users.forEach((user) => {
                usersHTML +=
                    `
                        <div class="room__user">
                            <img src="${user.imagePath}" alt="">
                            <span>${user.name}</span>
                        </div>
                    `;
            })


            roomsHTML += `
            <div class="room__item">
                <div class="room__title">${room.name} ( ${takenSeats} / ${seats} ) </div>
                <div class="room__users">
                    ${usersHTML}
                </div>
            </div>`;
        })

        container.innerHTML = roomsHTML;
    }

    async function updateRooms() {
        const response = await fetch('/update/room', {method: 'GET'});
        const data = await response.json();
        renderRooms(data)
    }

    // UPDATE DATA IN REAL TIME
    async function updateData() {
        try {
            const response = await fetch('/update/position', {method: 'GET'});
            const data = await response.json();
            setPositions(data.places);
            updateRooms()
        } catch (error) {
            console.log(error);
        }
    }


    function sendMessage() {
        const chatForm = document.querySelector('.chat__input');
        const chatInput = chatForm.querySelector('input')
        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault()
            return await fetch('/send/message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({message: chatInput.value})
            }).then(response => response.json())
                .then(data => {
                    console.log(data)
                    return data;
                });
        })

    }

</script>
</html>

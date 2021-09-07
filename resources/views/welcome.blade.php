{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{config('app.name','PruLife')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Prudential Life - Insurance Company" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <!--[if lt IE 9]>
            <script src="{{ asset('landing/js/html5shiv.js') }}"></script>
        <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link href="{{asset('landing/css/jpreloader.css')}}" rel="stylesheet" type="text/css">
    <link id="bootstrap" href="{{asset('landing/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{asset('landing/css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="css/bootstrap-reboot.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('landing/css/animate.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('landing/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('landing/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('landing/css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('landing/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('landing/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link id="colors" href="{{asset('landing/css/colors/scheme-03.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('landing/css/coloring.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>
    <div id="wrapper">
        <div id="topbar" class="text-light">
            <div class="container">
                <div class="topbar-left sm-hide">
                    <span class="topbar-widget tb-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </span>
                </div>

                <div class="topbar-right">
                    <div class="topbar-right">
                        <span class="topbar-widget"><a href="{{route('login')}}">Login</a></span>
                        <span class="topbar-widget"><a href="#">Pay Premiums</a></span>
                        <span class="topbar-widget"><a href="#">FAQ</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- header begin -->
        <header class="transparent header-light scroll-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{route('landing')}}">
                                            <img alt="logo" class="logo" src="{{asset('landing/images/logo-light.png')}}" />
                                            <img alt="logo" class="logo-2" src="{{asset('landing/images/logo-green.png')}}" />
                                        </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <!--<a href="index.html">Home<span></span></a>
                                        <ul>
                                            <li><a href="index.html">Homepage 1</a></li>
                                            <li><a href="index-2.html">Homepage 2</a></li>
                                            <li><a href="index.html">Homepage 3</a></li>
                                            <li><a href="index-4.html">Homepage 4</a></li>
                                            <li><a href="index-5.html">Homepage 5</a></li>
                                            <li><a href="index-6.html">Homepage 6</a></li>
                                            <li><a href="index-7.html">Homepage 7</a></li>
                                            <li><a href="index-8.html">Homepage 8</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="#">Company<span></span></a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                            <li><a href="careers.html">Careers</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Insurance<span></span></a>
                                        <ul>
                                            <li><a href="insurance-details-1.html">Life Insurance</a></li>
                                            <li><a href="insurance-details-2.html">Home Insurance</a></li>
                                            <li><a href="insurance-details-3.html">Auto Insurance</a></li>
                                            <li><a href="insurance-details-4.html">Health Insurance</a></li>
                                            <li><a href="insurance-details-5.html">Business Insurance</a></li>
                                            <li><a href="insurance-details-6.html">Condo Insurance</a></li>
                                            <li><a href="insurance-1.html">All Insurance Layout 1</a></li>
                                            <li><a href="insurance-2.html">All Insurance Layout 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages<span></span></a>
                                        <ul>
                                            <li><a href="news.html">Blog</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="login-2.html">Login 2</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Elements<span></span></a>
                                        <ul>
                                            <li><a href="icons-font-awesome.html">Font Awesome Icons</a></li>
                                            <li><a href="icons-elegant.html">Elegant Icons</a></li>
                                            <li><a href="icons-etline.html">Etline Icons</a></li>
                                            <li><a href="alerts.html">Alerts</a></li>
                                            <li><a href="accordion.html">Accordion</a></li>
                                            <li><a href="modal.html">Modal</a></li>
                                            <li><a href="progress-bar.html">Progress Bar</a></li>
                                            <li><a href="tabs.html">Tabs</a></li>
                                            <li><a href="counters.html">Counters</a></li>-->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="h-phone"><span>Need&nbsp;Help?</span><i class="fa fa-phone"></i> +23300000007</div>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section aria-label="section" class="no-top no-bottom vh-100" data-bgimage="url({{asset('landing/images/background/5.jpg')}}) top left">
                <div class="v-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">

                            </div>

                            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">
                                <div class="padding30 rounded img-shadow" data-bgcolor="rgba(240, 246, 234, .7)">
                                    <h2>No more hassles & no more worries. <span class="id-color"><a href="index.html"> Register today</a></span>.</h2>
                                    <a href='insurance-details-1.html' class="icon-box rounded">
                                            <i class="icofont-group"></i>
                                            <span>Life</span>
                                        </a>

                                    <a href='insurance-details-2.html' class="icon-box rounded">
                                            <i class="icofont-home"></i>
                                            <span>Home</span>
                                        </a>

                                    <a href='insurance-details-31.html' class="icon-box rounded">
                                            <i class="icofont-car"></i>
                                            <span>Auto</span>
                                        </a>

                                    <a href='insurance-details-4.html' class="icon-box rounded">
                                            <i class="icofont-heart-beat"></i>
                                            <span>Health</span>
                                        </a>

                                    <a href='insurance-details-5.html' class="icon-box rounded">
                                            <i class="icofont-briefcase"></i>
                                            <span>Business</span>
                                        </a>

                                    <a href='insurance-details-6.html' class="icon-box rounded">
                                            <i class="icofont-building"></i>
                                            <span>Condo</span>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-highlight" class="bg-color text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="p-title invert text-white">Welcome</span><br>
                            <h2>
                                Plan for the future<br>and live your life now
                            </h2>
                            <div class="small-border white sm-left"></div>
                        </div>
                        <div class="col-md-6">
                            <p>By helping to take the financial risk out of life’s big decisions, Prudential creates long-term value for our customers, our shareholders and the communities we serve. Adding more to life.
                                To be the trusted face of life insurance with expertise in minimizing risk, maximizing wealth, honoring customer obligations and bettering the life of Ghanaians.
                            </p>
                        </div>
                    </div>

                    <div class="spacer-double"></div>

                </div>
            </section>

            <section class="no-top relative z1000">
                <div class="container">
                    <div class="row mt-100">
                        <div class="col-md-4">
                            <div class="mask rounded img-shadow">
                                <div class="cover rounded">
                                    <div class="c-inner">
                                        <h3><i class="icofont-check-circled"></i><span>Online Payment</span></h3>
                                        <p>Make payments from the comforts of your seats.</p>
                                        <div class="spacer20"></div>
                                        <a href="#" class="btn-custom invert capsule">Pay Insurance</a>
                                    </div>
                                </div>
                                <img src="{{asset('landing/images/misc/f1.jpg')}}" alt="" class="img-responsive" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mask rounded img-shadow">
                                <div class="cover rounded">
                                    <div class="c-inner">
                                        <h3><i class="icofont-check-circled"></i><span>Quick Claims</span></h3>
                                        <p>Achieve quick claims within 5-7 business and receive cash.</p>
                                        <div class="spacer20"></div>
                                        <a href="#" class="btn-custom invert capsule">Receive Money</a>
                                    </div>
                                </div>
                                <img src="{{asset('landing/images/misc/f2.jpg')}}" alt="" class="img-responsive" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mask rounded img-shadow">
                                <div class="cover rounded">
                                    <div class="c-inner">
                                        <h3><i class="icofont-check-circled"></i><span>Get an Agent</span></h3>
                                        <p>Providing world-class advisory on insurance, easily.</p>
                                        <div class="spacer20"></div>
                                        <a href="#" class="btn-custom invert capsule">Connect Instantly</a>
                                    </div>
                                </div>
                                <img src="{{asset('landing/images/misc/f3.jpg')}}" alt="" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-fun-facts" class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb30" data-wow-delay="0s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="4500" data-speed="3000">0</span></h3>
                                <h5 class="id-color">Home Protected</h5>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb30" data-wow-delay=".25s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="16" data-speed="3000">0</span>k</h3>
                                <h5 class="id-color">People Saved</h5>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb30" data-wow-delay=".4s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="4" data-speed="3000">0</span>m</h3>
                                <h5 class="id-color">Money Saved</h5>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb-sm-30" data-wow-delay=".6s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="52" data-speed="3000">0</span>k</h3>
                                <h5 class="id-color">Contract Signed</h5>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb-sm-30" data-wow-delay=".8s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="100" data-speed="3000">0</span>+</h3>
                                <h5 class="id-color">Countries</h5>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb-sm-30" data-wow-delay="1s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="2" data-speed="3000">2</span>k</h3>
                                <h5 class="id-color">Staff Member</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-testimonial" data-bgcolor="#f5f7f0" data-bgimage="url({{asset('landing/images/background/15.jpg')}}) top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <span class="p-title invert text-white">Latest</span><br>
                                <h2>Customer Reviews</h2>
                                <div class="small-border"></div>
                            </div>
                            <div class="owl-carousel owl-theme" id="testimonial-carousel">
                                <div class="item">
                                    <div class="de_testi opt-2 review no-bg">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Trustworthy insurance</h3>
                                            <p>The world is changing faster than ever. Prudential Life has been committed to constantly improve things. This is why we insure with them</p>
                                            <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review no-bg">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Quality insurance service</h3>
                                            <p>The world is changing faster than ever. Prudential Life has been committed to constantly improve things. This is why we insure with them.</p>
                                            <div class="de_testi_by"><span>Sarah, Microsoft</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review no-bg">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Top companies listed</h3>
                                            <p>The world is changing faster than ever. Prudential Life has been committed to constantly improve things. This is why we insure with them.</p>
                                            <div class="de_testi_by"><span>Michael, Apple</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review no-bg">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Great services</h3>
                                            <p>The world is changing faster than ever. Prudential Life has been committed to constantly improve things. This is why we insure with them.</p>
                                            <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review no-bg">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Easy to claim</h3>
                                            <p>The world is changing faster than ever. Prudential Life has been committed to constantly improve things. This is why we insure with them.</p>
                                            <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review no-bg">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Excellent support</h3>
                                            <p>The world is changing faster than ever. Prudential Life has been committed to constantly improve things. This is why we insure with them.</p>
                                            <div class="de_testi_by"><span>Sarah, Microsoft</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review no-bg">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Reliable insurance</h3>
                                            <p>The world is changing faster than ever. Prudential Life has been committed to constantly improve things. This is why we insure with them.</p>
                                            <div class="de_testi_by"><span>Michael, Apple</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review no-bg">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color"></i>
                                            <h3>Five-star services</h3>
                                            <p>The world is changing faster than ever. Prudential Life has been committed to constantly improve things. This is why we insure with them.</p>
                                            <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span class="p-title invert text-white">Frequently</span><br>
                            <h2>Asked Qustions</h2>
                            <div class="small-border"></div>
                        </div>

                        <div class="col-md-6">
                            <!-- Accordion -->
                            <div id="accordion-1" class="accordion">

                                <!-- Accordion item 1 -->
                                <div class="card">
                                    <div id="heading-a1" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a1" aria-expanded="false" aria-controls="collapse-a1" class="d-block position-relative text-dark collapsible-link py-2">When is time to update my coverage?</a></h6>
                                    </div>
                                    <div id="collapse-a1" aria-labelledby="heading-a1" data-parent="#accordion-1" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 2 -->
                                <div class="card">
                                    <div id="heading-a2" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a2" aria-expanded="false" aria-controls="collapse-a2" class="d-block position-relative collapsed text-dark collapsible-link py-2">How often should I review my life insurance needs?</a></h6>
                                    </div>
                                    <div id="collapse-a2" aria-labelledby="heading-a2" data-parent="#accordion-1" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 3 -->
                                <div class="card">
                                    <div id="heading-a3" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a3" aria-expanded="false" aria-controls="collapse-a3" class="d-block position-relative collapsed text-dark collapsible-link py-2">What happen to my insurance if I stop paying?</a></h6>
                                    </div>
                                    <div id="collapse-a3" aria-labelledby="heading-a3" data-parent="#accordion-1" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-6">
                            <!-- Accordion -->
                            <div id="accordion-2" class="accordion">

                                <!-- Accordion item 1 -->
                                <div class="card">
                                    <div id="heading-b1" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b1" aria-expanded="false" aria-controls="collapse-b1" class="d-block position-relative text-dark collapsible-link py-2">How much life insurance do i need?</a></h6>
                                    </div>
                                    <div id="collapse-b1" aria-labelledby="heading-b1" data-parent="#accordion-2" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 2 -->
                                <div class="card">
                                    <div id="heading-b2" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b2" aria-expanded="false" aria-controls="collapse-b2" class="d-block position-relative collapsed text-dark collapsible-link py-2">What makes PruLife better than others?</a></h6>
                                    </div>
                                    <div id="collapse-b2" aria-labelledby="heading-b2" data-parent="#accordion-2" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 3 -->
                                <div class="card">
                                    <div id="heading-b3" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b3" aria-expanded="false" aria-controls="collapse-b3" class="d-block position-relative collapsed text-dark collapsible-link py-2">Do I need a life insurance policy in Africa?</a></h6>
                                    </div>
                                    <div id="collapse-b3" aria-labelledby="heading-b3" data-parent="#accordion-2" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="no-padding bg-color text-light">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.2)">
                                <i class="bg-color-secondary i-boxed fa fa-comments"></i>
                                <div class="text">
                                    <h4>Free Consultation</h4>
                                    Our advisory and consultancy services are opened 5 days a week, for maximum support. Just a button click away from your dashboard.
                                </div>
                                <i class="wm fa fa-comments"></i>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.15)">
                                <i class="bg-color-secondary i-boxed fa fa-address-card"></i>
                                <div class="text">
                                    <h4>Find an Agent</h4>
                                    Find your own personal agent to help you get the assistance you need. Available for all our users on premium and average packages
                                </div>
                                <i class="wm fa fa-address-card"></i>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.1)">
                                <i class="bg-color-secondary i-boxed fa fa-file-text"></i>
                                <div class="text">
                                    <h4>Get a Quote</h4>
                                    Have access to a free quote on a particular insurance. Ask for an Insurance quote for your particular need,<a href="index.html"> Click here </a>  Prudential quote
                                </div>
                                <i class="wm fa fa-file-text"></i>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.05)">
                                <i class="bg-color-secondary i-boxed fa fa-clock-o"></i>
                                <div class="text">
                                    <h4>Company Insurance</h4>
                                    This assures employees that in the unlikely event of illness, a multiple of their annual salary will be provided to their beneﬁciaries.
                                </div>
                                <i class="wm fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <!--<footer class="footer-light">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Our Company</h5>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                <li><a href="jobs.html">Careers</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="contact.html">News</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Insurance</h5>
                            <ul>
                                <li><a href="features.html">Life Insurance</a></li>
                                <li><a href="pricing.html">Home Insurance</a></li>
                                <li><a href="reviews.html">Auto Insurance</a></li>
                                <li><a href="download.html">Health Insurance</a></li>
                                <li><a href="download.html">Business Insurance</a></li>
                                <li><a href="download.html">Condo Insurance</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Get In Touch</h5>
                            We're here to listen:
                            <address class="s1">
                                    <span><i class="fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                                    <span><i class="fa fa-phone fa-lg"></i>+1 200 300 9000</span>
                                    <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                                    <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                                </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Newsletter</h5>

                            <p>Signup for our newsletter to get the latest news, updates and special offers in your inbox.</p>
                            <form action="blank.php" class="row" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="name_1" name="name_1" placeholder="enter your email" type="text" /> <a href="#" id="btn-submit"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    &copy; Copyright 2021 - PrudentialLife by Prodigee
                                </div>

                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer> -->
        <!-- footer close -->


    </div>

    <!--<div id="selector">

        <<div id="demo-rtl" class="sc-opt">
            <div class="sc-icon">RTL</div><span class="sc-val">Click to Enable</span>
        </div>

        <div class="sc-opt sc-mt">
            <div class="sc-icon"><i class="fa fa-eyedropper"></i></div>
            <span class="opt tc1" data-color="scheme-01"></span>
            <span class="opt tc2" data-color="scheme-02"></span>
            <span class="opt tc3" data-color="scheme-03"></span>
            <span class="opt tc4" data-color="scheme-04"></span>
            <span class="opt tc5" data-color="scheme-05"></span>
            <span class="opt tc6" data-color="scheme-06"></span>
        </div>

    </div>-->

    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('landing/js/jquery.min.js')}}"></script>
    <script src="{{asset('landing/js/jpreLoader.min.js')}}"></script>
    <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('landing/js/wow.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('landing/js/easing.js')}}"></script>
    <script src="{{asset('landing/js/owl.carousel.js')}}"></script>
    <script src="{{asset('landing/js/validation.js')}}"></script>
    <script src="{{asset('landing/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('landing/js/enquire.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.plugin.js')}}"></script>
    <script src="{{asset('landing/js/typed.js')}}"></script>
    <script src="{{asset('landing/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('landing/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('landing/js/typed.js')}}"></script>
    <script src="{{asset('landing/js/designesia.js')}}"></script>

    <script>
        $(function() {
            // jquery typed plugin
            $(".typed").typed({
                stringsElement: $('.typed-strings'),
                typeSpeed: 100,
                backDelay: 1500,
                loop: true,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function() {
                    null;
                },
                resetCallback: function() {
                    newTyped();
                }
            });
        });
    </script>

</body>

</html>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class = "bg-black">
    <nav class="bg-gray-800 text-white relative w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
        aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Cafe XYZ</a>
            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle w-8 h-8 flex justify-center items-center text-sm font-semibold rounded-full border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation"
                    aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-collapse-with-animation"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
                <a class="font-medium text-blue-600 md:py-6 dark:text-blue-500" href="{{ url('/') }}"
                    aria-current="page">Dashboard</a>
                @if (Route::has('login'))
                    @auth
                        <a class="font-medium text-gray-500 hover:text-gray-400 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                            href="{{ url('table') }}">Data Table</a>
                    @else
                        <div></div>
                    @endauth
                @endif

                <a class="font-medium text-gray-500 hover:text-gray-400 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                    href="#">Work</a>
                <a class="font-medium text-gray-500 hover:text-gray-400 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                    href="#">Blog</a>


                @auth
                    <div
                        class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 md:border-s md:border-gray-300 md:my-6 md:ps-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>

                        <span>{{ Auth::user()->name }}</span>
                    </div>
                @endauth

                @if (Route::has('login'))
                    @auth
                        <a class="font-medium text-gray-500 hover:text-gray-400 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('frmlogout').submit();">
                            Logout
                        </a>
                        <form id="frmlogout" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    @else
                        <a class="font-medium text-gray-500 hover:text-gray-400 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                            href="{{ route('login') }}">
                            Login
                        </a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>



</head>
<body>
    <header class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="/">
                        <span class="sr-only">Home</span>
                            <svg class="h-8" viewBox="0 0 28 24" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22.613 22.613" xml:space="preserve" 
                            fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" 
                            stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path style="fill:#030104;" 
                                d="M11.988,5.382c-1.969,0-3.559,1.815-3.559,4.057s1.59,4.058,3.559,4.058 c1.968,0,3.562-1.816,3.562-4.058S13.956,5.382,11.988,5.382z">
                            </path> <path style="fill:#030104;" d="M20.715,0.001H1.9c-1.05,0-1.9,0.85-1.9,1.898v18.815c0,1.051,0.85,1.898,1.9,1.898h18.814 c1.049,0,1.899-0.848,1.899-1.898V1.899C22.614,0.851,21.764,0.001,20.715,0.001z M11.988,14.839 c-1.459,0-2.761-0.757-3.621-1.946v5.627H7.063V4.273h1.304v1.828c0.86-1.188,2.162-1.946,3.621-1.946 c2.588,0,4.691,2.392,4.691,5.343C16.68,12.447,14.577,14.839,11.988,14.839z"></path> </g> </g> </g></svg>
                    </a>
                </div>

                <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:text-blue-500" href="/"> About
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-blue-500" href="/"> Stores
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-blue-500" href="/">Categories
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-blue-500" href="/"> Discounts
                                </a>
                            </li>
                        </ul>
                    </nav>

                    @auth
                        <div class="flex items-center gap-4">
                            <div class="sm:flex sm:gap-4">
                                <span class="inline-block rounded border border-gray-200 bg-gray-200 px-10 py-2 text-sm font-medium text-black"
                                    >
                                    Welcome, {{auth()->user()->name}}
                                </span>

                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="inline-block px-10 py-2 text-sm font-medium text-blue-500"
                                        type="submit" 
                                        href="/logout">Log Out
                                    </button>
                                </form>
                                
                            </div>
                        </div>
                    @else
                        <div class="flex items-center gap-4">
                            <div class="sm:flex sm:gap-4">
                                <a class="inline-block rounded border border-gray-900 bg-gray-900 px-10 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-gray-900 focus:outline-none focus:ring active:text-gray-900"
                                    href="/login">
                                    Login
                                </a>
                                 
                                <div class="hidden sm:flex">
                                    <a class="inline-block rounded border border-gray-900 px-10 py-2 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring active:bg-gray-900"
                                        href="/register">
                                        Register
                                    </a>
                                </div>
                            </div>

                            <div class="block md:hidden">
                                <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endauth
                 
                        
                   

                </div>
            </div>
        </div>
    </header>
    {{-- Here, the content will be rendered --}}
    @yield('content')
    {{-- {{$slot}} --}}

</body>
</html>
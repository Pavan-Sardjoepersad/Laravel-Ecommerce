

@extends('components.layout')
@section('content')
        
        <section class="bg-white">
            


            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
                    <div class="grid place-content-center rounded bg-gray-100 p-6 sm:p-8">
                        <div class="mx-auto max-w-md text-center lg:text-left">
                            <header>
                                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">SportsWear</h2>

                                <p class="mt-4 text-gray-500">
                                    Discover peak performance with our premier sports products.
                                    Elevate your game in style with our curated selection of top-tier
                                    gear and apparel, delivered to your doorstep.
                                </p>
                            </header>

                            <a href="#"
                                class="mt-8 inline-block rounded border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-black focus:outline-none focus:ring">
                                Shop All
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-2 lg:py-8">
                        <ul class="grid grid-cols-3 gap-4">

                            @foreach ($products as $product)
                                <li>
                                    <a href="/products/{{$product->slug}}" class="group block">
                                        <img src="/images/{{$product->slug}}.png"
                                            alt="" class="aspect-square w-full rounded object-cover transform transition duration-300 hover:scale-110" />

                                        <div class="mt-3">
                                            <h3
                                                class="font-medium text-gray-900 group-hover:text-blue-400 ">
                                                {{$product->name}}
                                            </h3>

                                            <p class="mt-1 text-sm text-gray-700">${{$product->price}}</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>


        </section>

        <x-flash />

@endsection
    

<x-layout>


    
    <div class="bg-gradient-to-b from-gray-900 to-gray-600 bg-gradient-to-r flex flex-row w-full h-screen items-center justify-center">
        @foreach ($products as $product)
            {{-- <a href="/products/{{ $product->slug }}"> --}}
            <div
                class="flex items-center flex-col mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                <img class="h-48 mb-16 w-full object-cover object-center" src="/images/{{$product->slug}}.png"
                    alt="Product Image" />
                <a href="/products/{{ $product->slug }}">

                    <button
                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-2 mb-8">
                        {{-- class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-2 mb-8"> --}}
                        {{ $product->name }}
                    </button>

                </a>
            </div>
        @endforeach
    </div>




</x-layout>



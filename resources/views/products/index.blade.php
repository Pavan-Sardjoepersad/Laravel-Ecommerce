<x-layout>

    <div class="flex flex-row w-full h-screen items-center justify-center">
        @foreach ($products as $product)
            {{-- <a href="/products/{{ $product->slug }}"> --}}
            <a href="/products/{{$product->slug}}">    
                <div class="px-20 pt-56">
                    <button
                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        {{ $product->name }}
                    </button>
                </div>
            </a>
        @endforeach
    </div>




</x-layout>

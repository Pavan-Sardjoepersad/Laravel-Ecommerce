
@extends('components.layout')
@section('content')

    {{-- Flash message when adding to cart --}}
    @if (session()->has('added'))
    
        <div 
            x-data="{show:true}"
            x-init="setTimeout(() => show = false, 4000)"
            x-show = "show" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class=" bg-blue-100 border border-blue-400 text-blue-700 px-2 py-1 rounded  text-center" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{session('added')}}</span>
        </div>
  
    @endif

        <div class="bg-white dark:bg-gray-800 py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                            <img class="w-full h-full object-cover" src="/images/{{$product->slug}}.png" alt="Product Image">
                        </div>
                        <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                                <a href="{{route('add.to.cart', $product->id)}}">
                                    <button class="
                                            w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-600 
                                            dark:hover:bg-gray-700">
                                            Add to Cart
                                    </button>
                                </a>
                            </div>
                            <div class="w-1/2 px-2">
                                <a href="/">
                                    <button class="
                                            w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold 
                                            hover:bg-gray-300 dark:hover:bg-gray-600">
                                            Back to Products
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex-1 px-4">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{$product->name}}</h2>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                            {{$product->description}}.
                        </p>
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold text-gray-700 dark:text-gray-300">Price:</span>
                                <span class="text-gray-600 dark:text-gray-300">${{$product->price}}</span>
                            </div>
                            <div>
                                <span class="font-bold text-gray-700 dark:text-gray-300">Availability:</span>
                                <span class="text-gray-600 dark:text-gray-300">In Stock</span>
                            </div>
                        </div>
                        {{-- <div class="mb-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Select Color:</span>
                            <div class="flex items-center mt-2">
                                <button class="w-6 h-6 rounded-full bg-gray-800 dark:bg-gray-200 mr-2"></button>
                                <button class="w-6 h-6 rounded-full bg-red-500 dark:bg-red-700 mr-2"></button>
                                <button class="w-6 h-6 rounded-full bg-blue-500 dark:bg-blue-700 mr-2"></button>
                                <button class="w-6 h-6 rounded-full bg-yellow-500 dark:bg-yellow-700 mr-2"></button>
                            </div>
                        </div> --}}
                        <div x-data="{ selectedSize: '' }" class="mb-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Select Size:</span>
                            <div class="flex items-center mt-2">
                                <button @click="selectedSize = 'S'" :class="{ 'bg-blue-500 text-white': selectedSize === 'S', 'bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white': selectedSize !== 'S' }" class="py-2 px-4 rounded-full font-bold mr-2 ">S</button>
                                <button @click="selectedSize = 'M'" :class="{ 'bg-blue-500 text-white': selectedSize === 'M', 'bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white': selectedSize !== 'M' }" class="py-2 px-4 rounded-full font-bold mr-2 ">M</button>
                                <button @click="selectedSize = 'L'" :class="{ 'bg-blue-500 text-white': selectedSize === 'L', 'bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white': selectedSize !== 'L' }" class="py-2 px-4 rounded-full font-bold mr-2 ">L</button>
                                <button @click="selectedSize = 'XL'" :class="{ 'bg-blue-500 text-white': selectedSize === 'XL', 'bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white': selectedSize !== 'XL' }" class="py-2 px-4 rounded-full font-bold mr-2 ">XL</button>
                                <button @click="selectedSize = 'XXL'" :class="{ 'bg-blue-500 text-white': selectedSize === 'XXL', 'bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white': selectedSize !== 'XXL' }" class="py-2 px-4 rounded-full font-bold mr-2 ">XXL</button>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 dark:text-gray-300">Product Description:</span>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut
                                lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque
                                ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non
                                sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

@endsection
    
    

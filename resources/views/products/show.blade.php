<x-layout>

    <div
        class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
        <img class="h-48 w-full object-cover object-center"
            src="/images/{{$product->slug}}.png"
            alt="Product Image" />
        <div class="p-4">
            <h2 class="mb-2 text-lg font-medium dark:text-white text-gray-900">{{$product->name}}</h2>
            <p class="mb-2 text-base dark:text-gray-300 text-gray-700">{{$product->description}}</p>
            <div class="flex items-center">
                <p class="mr-2 text-lg font-semibold text-gray-900 dark:text-white">{{$product->price}}</p>
                <p class="text-base  font-medium text-gray-500 line-through dark:text-gray-300">{{$product->price - ($product->price / 100) * 10}}</p>
                <p class="ml-auto text-base font-medium text-green-500">10% off</p>
            </div>
        </div>
    </div>

    <a href="/products">
        <button
            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Go back to Products Page</button>
    </a>

</x-layout>


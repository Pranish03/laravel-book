@php
    $book = [
        'id' => 1,
        'title' => 'Red Rising',
        'imgUrl' => 'https://images4.penguinrandomhouse.com/cover/9780345539809',
        'author' => 'Pierce Brown',
        'price' => 499,
        'description' => 'Red Rising is a 2014 dystopian science fiction novel by American author Pierce Brown. It is the
            first book and eponym of the series. The novel, set in the future on Mars, follows lowborn miner Darrow as he
            infiltrates the ranks of the elite Golds. Red Rising has received generally positive reviews, and reached #20
            on the New York Times Best Seller list.',
        'published_on' => 'Jul 15, 2014',
        'isbn' => '9780345539809',
        'pages' => '416',
        'dimensions' => '5-1/2 x 8-1/4',
    ];
@endphp

<x-page-layout>
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8 flex gap-30">
        <img class="w-[270px] h-[400px] object-cover" src="{{ $book['imgUrl'] }}" alt="{{ $book['title'] }}">

        <div>
            <h1 class="text-3xl font-semibold text-zinc-900">{{ $book['title'] }}</h1>
            <h2 class="text-lg text-zinc-700 font-medium mb-4">By {{ $book['author'] }}</h2>
            <p class="text-2xl font-medium text-zinc-800 mb-4">Rs. {{ $book['price'] }}</p>

            <div class="flex items-center gap-4">
                <button
                    class="border border-slate-600 bg-slate-600 text-white font-semibold px-4 py-2 rounded-md cursor-pointer mb-8">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </button>

                <button
                    class="border border-slate-600 bg-white text-slate-600 font-semibold px-4 py-2 rounded-md cursor-pointer mb-8">
                    <i class="fa-regular fa-heart"></i>
                    Wishlist
                </button>
            </div>

            <div class="border-b border-zinc-300 mb-5"></div>

            <div class="mb-7">
                <h3 class="text-2xl font-semibold text-zinc-900 mb-4">About Book</h3>
                <p class="text-justify">{{ $book['description'] }}
                </p>
            </div>

            <div class="border-b border-zinc-300 mb-5"></div>

            <div>
                <h3 class="text-2xl font-semibold text-zinc-900 mb-4">Other Details</h3>
                <div class="grid grid-cols-4 gap-4">
                    <div
                        class="bg-slate-100 border border-slate-300 rounded-md p-4 text-center flex flex-col items-center justify-center gap-2 text-xl">
                        <h4 class="text-lg font-medium">Published on</h4>
                        <i class="fa-solid fa-bookmark"></i>
                        <span class="text-base">{{ $book['published_on'] }}</span>
                    </div>
                    <div
                        class="bg-slate-100 border border-slate-300 rounded-md p-4 text-center flex flex-col items-center justify-center gap-2 text-xl">
                        <h4 class="text-lg font-medium">ISBN</h4>
                        <i class="fa-solid fa-barcode"></i>
                        <span class="text-base">{{ $book['isbn'] }}</span>
                    </div>
                    <div
                        class="bg-slate-100 border border-slate-300 rounded-md p-4 text-center flex flex-col items-center justify-center gap-2 text-xl">
                        <h4 class="text-lg font-medium">Pages</h4>
                        <i class="fa-solid fa-file-lines"></i>
                        <span class="text-base">{{ $book['pages'] }} Page</span>
                    </div>
                    <div
                        class="bg-slate-100 border border-slate-300 rounded-md p-4 text-center flex flex-col items-center justify-center gap-2 text-xl">
                        <h4 class="text-lg font-medium">Dimensions</h4>
                        <i class="fa-solid fa-ruler-combined"></i>
                        <span class="text-base">{{ $book['dimensions'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-page-layout>

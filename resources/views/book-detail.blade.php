<x-page-layout>
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8 flex gap-30">
        <img class="w-[270px] h-[400px] object-cover" src="{{ asset($book->img_url) }}" alt="{{ $book->title }}">

        <div>
            <h1 class="text-3xl font-semibold text-zinc-900">{{ $book->title }}</h1>
            <h2 class="text-zinc-700 font-medium mb-4">By {{ $book->author }}</h2>
            <p class="text-2xl font-semibold text-zinc-800 mb-4">Rs. {{ $book->price }}</p>

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
                <p class="text-justify">{{ $book->description }}
                </p>
            </div>

            <div class="border-b border-zinc-300 mb-5"></div>

            <div>
                <h3 class="text-2xl font-semibold text-zinc-900 mb-4">Other Details</h3>
                <div class="grid grid-cols-4 gap-4">
                    <div
                        class="bg-slate-100 border border-slate-300 rounded-md p-4 text-center flex flex-col items-center justify-center gap-2 text-xl">
                        <h4 class="text-lg font-medium">ISBN</h4>
                        <i class="fa-solid fa-barcode"></i>
                        <span class="text-base">{{ $book->isbn }}</span>
                    </div>
                    <div
                        class="bg-slate-100 border border-slate-300 rounded-md p-4 text-center flex flex-col items-center justify-center gap-2 text-xl">
                        <h4 class="text-lg font-medium">Published on</h4>
                        <i class="fa-solid fa-bookmark"></i>
                        <span class="text-base">{{ $book->published_on }}</span>
                    </div>
                    <div
                        class="bg-slate-100 border border-slate-300 rounded-md p-4 text-center flex flex-col items-center justify-center gap-2 text-xl">
                        <h4 class="text-lg font-medium">Pages</h4>
                        <i class="fa-solid fa-file-lines"></i>
                        <span class="text-base">{{ $book->pages }} Page</span>
                    </div>
                    <div
                        class="bg-slate-100 border border-slate-300 rounded-md p-4 text-center flex flex-col items-center justify-center gap-2 text-xl">
                        <h4 class="text-lg font-medium">Published by</h4>
                        <i class="fa-solid fa-book-bookmark"></i>
                        <span
                            class="text-base max-w-[110px] overflow-hidden text-nowrap text-ellipsis">{{ $book->published_by }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-page-layout>

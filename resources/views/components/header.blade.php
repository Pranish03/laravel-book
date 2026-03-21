<header class="py-5">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <div class="shrink-0 font-bold text-3xl text-slate-700">
            BookStore
        </div>
        <div class="hidden md:flex items-stretch">
            <div class="relative">
                <select
                    class="border border-slate-600 bg-slate-200 px-3 py-2 rounded-l-md border-r-0 outline-none appearance-none w-28">
                    <option>All</option>
                    <option>Authors</option>
                    <option>Books</option>
                </select>
                <span class="absolute right-3 text-sm top-2.5">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
            <input type="text" class="w-80 border border-slate-600 px-3 py-2 outline-none border-r-0"
                placeholder="Search by Title, Author, or ISBN">

            <button
                class="border border-slate-600 bg-slate-600 text-white font-semibold px-4 py-2 rounded-r-md cursor-pointer">
                Search
            </button>
        </div>
        <div class="flex items-center gap-5">
            <div class="bg-slate-200 flex items-center justify-center text-xl text-slate-700 h-10 w-10 rounded-full">
                <i class="fa-regular fa-user"></i>
            </div>

            <div
                class="bg-slate-200 flex items-center justify-center text-xl text-slate-700 h-10 w-10 rounded-full relative">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="bg-red-600 absolute text-sm text-white py-0 px-2 rounded-full top-0 -right-1">
                    0
                </span>
            </div>
        </div>
    </nav>
</header>

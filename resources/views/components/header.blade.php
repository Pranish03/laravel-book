<header class="py-5">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <a href="/" class="shrink-0 font-bold text-3xl text-slate-700">
            BookStore
        </a>
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
            <div class="relative">
                <div id="dropdown-js"
                    class="bg-slate-200 flex items-center justify-center text-xl text-slate-700 h-10 w-10 rounded-full cursor-pointer">
                    <i class="fa-regular fa-user"></i>
                </div>

                <div id="close-js" class="fixed inset-0 z-40 hidden"></div>

                <div id="menu-js"
                    class="absolute shadow border border-zinc-200 rounded-lg text-lg py-1 w-max space-y-1 bg-white text-zinc-800 z-50 top-13 left-0 hidden">
                    <div class="px-1">
                        <a href="/dashboard"
                            class="bg-white min-w-[140px] hover:bg-slate-100 px-3 py-1 block rounded-md">
                            Dashboard
                        </a>
                    </div>
                    <div class="border-b border-zinc-200"></div>
                    <div class="px-1">
                        <a href="" class="bg-white min-w-[140px] hover:bg-slate-100 px-3 py-1 block rounded-md">
                            Account
                        </a>
                    </div>
                    <div class="px-1">
                        <a href=""
                            class="bg-white min-w-[140px] hover:bg-red-100 text-red-600 px-3 py-1 block rounded-md">
                            Logout
                        </a>
                    </div>
                </div>
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

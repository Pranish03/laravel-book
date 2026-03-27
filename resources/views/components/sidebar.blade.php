<section class="w-72 bg-white h-full border-r border-zinc-300">
    <div class="py-4 px-4">
        <a href="/" class="shrink-0 font-bold text-3xl text-slate-700 ml-4">
            BookStore
        </a>

        <div class="mt-8 flex flex-col gap-2 text-lg">
            <a href="{{ route('dashboard') }}"
                class="font-medium hover:text-slate-700 hover:bg-slate-200 py-2 px-4 rounded-md flex items-center gap-3
                {{ request()->is('admin') ? 'text-slate-700 bg-slate-100' : 'text-zinc-800' }}">
                <i class="fa-solid fa-sliders"></i>
                Dashboard
            </a>

            <a href=""
                class="font-medium hover:text-slate-700 hover:bg-slate-200 py-2 px-4 rounded-md flex items-center gap-3
                {{ request()->is('') ? 'text-slate-700 bg-slate-100' : 'text-zinc-800' }}">
                <i class="fa-regular fa-address-book"></i>
                Users
            </a>

            <a href="{{ route('admin.books.index') }}"
                class="font-medium hover:text-slate-700 hover:bg-slate-200 py-2 px-4 rounded-md flex items-center gap-3
                {{ request()->is('admin/books*') ? 'text-slate-700 bg-slate-100' : 'text-zinc-800' }}">
                <i class="fa-solid fa-book"></i>
                Books
            </a>
        </div>
    </div>
</section>

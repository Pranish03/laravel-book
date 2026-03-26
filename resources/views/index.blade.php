<x-page-layout>
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold mb-4 text-slate-700">Best Sellers</h1>

        <div class="grid grid-cols-5 gap-10">

            @foreach ($books as $book)
                <a href="/book/{{ $book->id }}">
                    <x-book-card img_url="{{ $book->img_url }}" title="{{ $book->title }}" author="{{ $book->author }}"
                        price="{{ $book->price }}" />
                </a>
            @endforeach

        </div>
    </div>
</x-page-layout>

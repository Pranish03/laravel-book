@php
    $books = [
        [
            'id' => 1,
            'title' => 'Red Rising',
            'imgUrl' => 'https://images4.penguinrandomhouse.com/cover/9780345539809',
            'author' => 'Pierce Brown',
            'price' => 499,
        ],
        [
            'id' => 2,
            'title' => 'The Big Empty',
            'imgUrl' => 'https://images4.penguinrandomhouse.com/cover/9780525535775',
            'author' => 'Robert Crais',
            'price' => 499,
        ],
        [
            'id' => 3,
            'title' => 'The Inheritance',
            'imgUrl' => 'https://images4.penguinrandomhouse.com/cover/9780593832936',
            'author' => 'Trisha Sakhlecha',
            'price' => 499,
        ],
        [
            'id' => 4,
            'title' => 'A Knight of the Seven Kingdoms',
            'imgUrl' => 'https://images4.penguinrandomhouse.com/cover/9798217302574',
            'author' => 'George R. R. Martin',
            'price' => 499,
        ],
        [
            'id' => 5,
            'title' => 'Twelve Months',
            'imgUrl' => 'https://images4.penguinrandomhouse.com/cover/9780593199336',
            'author' => 'Jim Butcher',
            'price' => 499,
        ],
    ];
@endphp

<x-page-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold mb-8 text-slate-700">Best Sellers</h1>

        <div class="grid grid-cols-5 gap-10">

            @foreach ($books as $book)
                <a href="/book">
                    <x-book-card imgUrl="{{ $book['imgUrl'] }}" title="{{ $book['title'] }}" author="{{ $book['author'] }}"
                        price="{{ $book['price'] }}" />
                </a>
            @endforeach

        </div>
    </div>
</x-page-layout>

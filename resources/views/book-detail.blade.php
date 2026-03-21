@php
    $book = [
        'id' => 1,
        'title' => 'Red Rising',
        'imgUrl' => 'https://images4.penguinrandomhouse.com/cover/9780345539809',
        'author' => 'Pierce Brown',
        'price' => 499,
    ];
@endphp

<x-page-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex gap-30">
        <div class="bg-slate-100 py-18 px-30 min-w-max">
            <img src="{{ $book['imgUrl'] }}" alt="{{ $book['title'] }}">
        </div>
        <div class="w-full">
            <h1 class="text-3xl font-semibold text-zinc-900">{{ $book['title'] }}</h1>
            <h2 class="text-xl text-zinc-700 font-medium">By {{ $book['author'] }}</h2>

            <div class="border-b border-slate-300 w-full mt-10 mb-2"></div>

            <p class="font-medium text-lg text-zinc-700">Paperback</p>
            <p class="text-3xl font-semibold text-zinc-900">Rs. {{ $book['price'] }}</p>
        </div>
    </div>
</x-page-layout>

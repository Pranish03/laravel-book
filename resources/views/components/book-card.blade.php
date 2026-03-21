@props(['imgUrl', 'title', 'author', 'price'])

<div>
    <img class="mb-2" src="{{ $imgUrl }}" alt="{{ $title }}">
    <h3 class="text-xl font-semibold text-zinc-900 overflow-hidden whitespace-nowrap text-ellipsis">
        {{ $title }}
    </h3>
    <p class="font-medium text-zinc-800">
        {{ $author }}
    </p>
    <p class="font-semibold text-lg text-zinc-900">
        Rs. {{ $price }}
    </p>
</div>

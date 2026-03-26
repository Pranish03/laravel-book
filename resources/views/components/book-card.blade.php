@props(['img_url', 'title', 'author', 'price'])

<div>
    <img class="mb-2" src="{{ asset($img_url) }}" alt="{{ $title }}">
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

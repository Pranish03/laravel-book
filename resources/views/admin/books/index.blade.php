<x-admin-layout>
    <h1 class="text-2xl font-semibold text-slate-700">
        Manage Books
    </h1>

    <div class="mt-8 flex justify-between items-center mb-8">
        <div class="relative flex items-center">
            <span class="absolute left-3 text-md text-zinc-500">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" placeholder="Search..."
                class="w-80 border border-zinc-400 pl-10 pr-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
        </div>

        <a href="/admin/books/create"
            class="border border-slate-600 bg-slate-600 text-white font-semibold px-4 py-2 rounded-md cursor-pointer">
            <i class="fa-solid fa-circle-plus"></i>
            Add Book
        </a>
    </div>

    <div class="border border-zinc-400 rounded-md overflow-hidden">
        <table class="w-full text-left text-lg">
            <thead class="bg-slate-100 border-b border-zinc-400 text-zinc-900">
                <tr>
                    <th class="py-3 px-4">SN</th>
                    <th class="py-3 px-4">Title</th>
                    <th class="py-3 px-4">Author</th>
                    <th class="py-3 px-4">Price</th>
                    <th class="py-3 px-4">Created at</th>
                    <th class="py-3 px-4">Updated at</th>
                    <th class="py-3 px-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y-1 divide-zinc-400 text-zinc-800">
                @foreach ($books as $i => $book)
                    <tr>
                        <td class="py-3 px-4">{{ ++$i }}.</td>
                        <td class="py-3 px-4 max-w-[220px] overflow-hidden text-nowrap text-ellipsis">
                            {{ $book->title }}</td>
                        <td class="py-3 px-4">{{ $book->author }}</td>
                        <td class="py-3 px-4">Rs. {{ $book->price }}</td>
                        <td class="py-3 px-4">{{ $book->created_at->diffForHumans() }}</td>
                        <td class="py-3 px-4">{{ $book->updated_at->diffForHumans() }}</td>
                        <td class="py-3 px-4">
                            <div class="flex items-center gap-4 text-xl">
                                <a href="/admin/books/{{ $book->id }}/edit" class="text-slate-600">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <form method="POST" action="/admin/books/{{ $book->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 cursor-pointer" type="submit">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>

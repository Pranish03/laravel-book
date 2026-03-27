<x-admin-layout>
    <div class="mb-4">
        <a href="{{ route('admin.books.index') }}" class="text-zinc-600 hover:text-zinc-900">
            <i class="fa-solid fa-arrow-left"></i>
            <span class="hover:underline">
                Go back
            </span>
        </a>
    </div>

    <h1 class="text-2xl font-semibold text-slate-700">
        Edit Book
    </h1>

    <div class="mt-8">
        <form class="w-300" action="{{ route('admin.books.update', $book->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="w-full grid grid-cols-3 gap-8">
                <div>
                    <label for="title" class="block text-lg mb-2">Title*</label>
                    <input type="text" name="title" id="title" placeholder="The Great Adventure"
                        value="{{ $book->title }}"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="author" class="block text-lg mb-2">Author*</label>
                    <input type="text" name="author" id="author" placeholder="John Doe"
                        value="{{ $book->author }}"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="price" class="block text-lg mb-2">Price*</label>
                    <input type="number" name="price" id="price" placeholder="500" value="{{ $book->price }}"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500 appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-moz-appearance]:textfield">
                </div>

                <div class="col-span-2">
                    <label class="block text-lg mb-2">Image*</label>

                    <label for="imageInput-js"
                        class="bg-white h-[142px] hover:bg-slate-100 border-2 border-zinc-400 rounded-md py-8 border-dotted flex justify-center items-center cursor-pointer">
                        <div id="uploadContainer-js">
                            <div class="flex flex-col justify-center items-center gap-2">
                                <span class="text-4xl text-zinc-500">
                                    <i class="fa-solid fa-file-arrow-up"></i>
                                </span>
                                <span class="text-md text-zinc-600">
                                    Upload an image
                                </span>
                            </div>
                        </div>

                        <div id="previewContainer-js" class="h-auto relative hidden">
                            <img class="h-[120px]" id="imagePreview-js" src="#" alt="Preview">
                            <button type="button"
                                class="absolute -top-1.5 -right-1.5 h-6 w-6 flex items-center justify-center cursor-pointer text-sm text-white bg-red-600 rounded-full"
                                id="removeBtn-js">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </label>

                    <input type="file" name="image" id="imageInput-js" class="hidden">
                </div>

                <div>
                    <label class="block text-lg mb-2">Current image</label>
                    <div
                        class="h-[142px] border-2 border-zinc-400 border-dotted rounded-md py-2 flex items-center justify-center">
                        <img class="h-full" src="{{ asset($book->img_url) }}" alt="{{ $book->title }}">
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="description" class="block text-lg mb-2">Description*</label>
                    <textarea name="description" id="description" placeholder="An epic tale of adventure and discovery."
                        class="h-[142px] w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">{{ $book->description }}</textarea>
                </div>

                <div></div>

                <div>
                    <label for="isbn" class="block text-lg mb-2">ISBN*</label>
                    <input type="text" name="isbn" id="isbn" placeholder="9783161484573"
                        value="{{ $book->isbn }}"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="published_on" class="block text-lg mb-2">Published on*</label>
                    <input type="text" name="published_on" id="published_on" placeholder="YYYY-MM-DD"
                        value="{{ $book->published_on }}"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="published_by" class="block text-lg mb-2">Published by*</label>
                    <input type="string" name="published_by" id="published_by" placeholder="Sunrise Publishing"
                        value="{{ $book->published_by }}"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="pages" class="block text-lg mb-2">Pages*</label>
                    <input type="number" name="pages" id="pages" placeholder="350" value="{{ $book->pages }}"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500 appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-moz-appearance]:textfield">
                </div>
            </div>

            <button type="submit"
                class="border border-slate-600 bg-slate-600 text-white font-semibold px-4 py-2 rounded-md cursor-pointer mt-8">
                Update Book
            </button>
        </form>
    </div>

    <script>
        const imageInput = document.getElementById("imageInput-js");
        const uploadContainer = document.getElementById("uploadContainer-js");
        const imagePreview = document.getElementById("imagePreview-js");
        const previewContainer = document.getElementById("previewContainer-js");
        const removeBtn = document.getElementById("removeBtn-js");

        imageInput.addEventListener("change", () => {
            const file = imageInput.files[0];

            if (file) {
                imagePreview.src = URL.createObjectURL(file);
                previewContainer.classList.remove("hidden");
                uploadContainer.classList.add("hidden");
            }
        });

        removeBtn.addEventListener("click", () => {
            imageInput.value = "";
            imagePreview.src = "";
            previewContainer.classList.add("hidden");
            uploadContainer.classList.remove("hidden");
        });
    </script>
</x-admin-layout>

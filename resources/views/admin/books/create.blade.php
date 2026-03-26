<x-admin-layout>
    <div class="mb-4">
        <a href="/admin/books" class="text-zinc-600 hover:text-zinc-900">
            <i class="fa-solid fa-arrow-left"></i>
            <span class="hover:underline">
                Go back
            </span>
        </a>
    </div>

    <h1 class="text-2xl font-semibold text-slate-700">
        Add Book
    </h1>

    <div class="mt-8">
        <form class="w-300" action="/admin/books/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full grid grid-cols-3 gap-8">
                <div>
                    <label for="title" class="block text-lg mb-2">Title*</label>
                    <input type="text" name="title" id="title" placeholder="The Great Adventure"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="author" class="block text-lg mb-2">Author*</label>
                    <input type="text" name="author" id="author" placeholder="John Doe"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="price" class="block text-lg mb-2">Price*</label>
                    <input type="number" name="price" id="price" placeholder="500"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500 appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-moz-appearance]:textfield">
                </div>

                <div class="col-span-2">
                    <label class="block text-lg mb-2">Image*</label>

                    <label for="image-js"
                        class="bg-white hover:bg-slate-100 border-2 border-zinc-400 rounded-md py-8 border-dotted flex flex-col justify-center items-center gap-2 cursor-pointer">
                        <span class="text-4xl text-zinc-500">
                            <i class="fa-solid fa-file-arrow-up"></i>
                        </span>
                        <span class="text-lg text-zinc-600">
                            Upload an image
                        </span>
                    </label>

                    <input type="file" name="image" id="image-js" class="hidden">
                </div>

                <div id="preview-container-js" class="hidden">
                    <label class="block text-lg mb-2">Selected image</label>
                    <div
                        class="h-[142px] border-2 border-zinc-400 border-dotted rounded-md py-2 flex items-center justify-center">
                        <div class="h-full relative">
                            <img class="h-full" id="preview-js" src="#" alt="Preview">
                            <button type="button"
                                class="absolute -top-1.5 -right-1.5 h-6 w-6 flex items-center justify-center cursor-pointer text-sm text-white bg-red-600 rounded-full"
                                id="remove-image-js">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <label for="description" class="block text-lg mb-2">Description*</label>
                    <textarea name="description" id="description" placeholder="An epic tale of adventure and discovery."
                        class="h-[142px] w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500"></textarea>
                </div>

                <div></div>

                <div>
                    <label for="isbn" class="block text-lg mb-2">ISBN*</label>
                    <input type="text" name="isbn" id="isbn" placeholder="9783161484573"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="published_on" class="block text-lg mb-2">Published on*</label>
                    <input type="text" name="published_on" id="published_on" placeholder="YYYY-MM-DD"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="published_by" class="block text-lg mb-2">Published by*</label>
                    <input type="string" name="published_by" id="published_by" placeholder="Sunrise Publishing"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500">
                </div>

                <div>
                    <label for="pages" class="block text-lg mb-2">Pages*</label>
                    <input type="number" name="pages" id="pages" placeholder="350"
                        class="w-full border border-zinc-400 px-3 py-2 outline-none rounded-md focus:border-slate-700 focus:ring-3 focus:ring-slate-300 placeholder:text-zinc-500 appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-moz-appearance]:textfield">
                </div>
            </div>

            <button type="submit"
                class="border border-slate-600 bg-slate-600 text-white font-semibold px-4 py-2 rounded-md cursor-pointer mt-8">
                Add Book
            </button>
        </form>

    </div>

    <script>
        document.getElementById("image-js").addEventListener("change", (e) => {
            const file = e.target.files[0];
            const preview = document.getElementById("preview-js");
            const previewContainer = document.getElementById("preview-container-js");

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewContainer.classList.remove("hidden");
                };

                reader.readAsDataURL(file);
            }
        });

        document.getElementById('remove-image-js').addEventListener('click', function() {
            const image = document.getElementById('image-js');
            const preview = document.getElementById("preview-js");
            const previewContainer = document.getElementById('preview-container-js');

            image.value = '';
            previewContainer.classList.add('hidden');
            preview.src = '#';
        });
    </script>
</x-admin-layout>

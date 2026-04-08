<x-app-layout>
    <div class="w-full lg:ps-64">
        <div class="p-6 page-content">

            <div class="flex items-center justify-between w-full mb-6">
                <h4 class="text-xl font-medium">
                    Products Add
                </h4>

                <ol aria-label="Breadcrumb" class="hidden md:flex items-center whitespace-nowrap min-w-0 gap-2">
                    <li class="text-sm">
                        <a class="flex items-center gap-2 align-middle text-default-800 transition-all leading-none hover:text-primary-500"
                            href="javascript:void(0)">
                            Products
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>

                    <li aria-current="page"
                        class="text-sm font-medium text-primary truncate leading-none hover:text-primary-500">
                        Products Add
                    </li>
                </ol>
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-8 border rounded-lg">
                    @foreach ($errors->all() as $err)
                        <p class="text-red-500 text-center">{{ $err }}</p>
                    @endforeach
                    <div class="p-6">
                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-input label="Product Name" name="name" />

                            <x-input label="Price" name="price" type="number" />

                            <x-input label="Product Description" name="description" />

                            <label for="">Select Category
                                <select name="category_id" id="" class="w-full">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </label>



                            <x-input label="Product image" name="image" type="file" />
                            <button
                                class="py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500">Save</button>

                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>
</x-app-layout>

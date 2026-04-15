<x-app-layout>
    <div class="w-full lg:ps-64">
        <div class="p-6 page-content">

            <div class="flex items-center justify-between w-full mb-6">
                <h4 class="text-xl font-medium">
                    Products Edit
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
                        Edit {{ $product->name }}
                    </li>
                </ol>
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-8 border rounded-lg">
                    <div class="p-6">
                        <form action="{{ route('admin.product.update', $product->id) }}" method="POST"> @csrf
                            <x-input label="Product Name" name="name" value="{{ $product->name }}" />

                            <x-input label="Price" name="price" type="number" value="{{ $product->price }}" />

                            <x-input label="Product Description" name="description"
                                value="{{ $product->description }}" />

                            <label for="">Select Category
                                <select name="category_id" id="" class="w-full">
                                    <option value="{{ $product->category_id }}">"{{ $product->category->name }}"
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </label>

                            <!-- Add Restaurant Dropdown -->
                            <div class="form-group">
                                <label for="restaurant_id">Restaurant:</label>
                                <select name="restaurant_id" id="restaurant_id" class="form-control" required>
                                    <option value="">Select Restaurant</option>
                                    @foreach ($restaurants as $restaurant)
                                        <option value="{{ $restaurant->id }}"
                                            {{ $product->restaurant_id == $restaurant->id ? 'selected' : '' }}>
                                            {{ $restaurant->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

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

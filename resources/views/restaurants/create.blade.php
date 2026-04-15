{{-- resources/views/admin/addrestaurant.blade.php --}}
<x-app-layout>
    <div class="w-full lg:ps-64">
        <div class="p-6 page-content">

            <div class="flex items-center justify-between w-full mb-6">
                <h4 class="text-xl font-medium">
                    Add New Restaurant
                </h4>

                <ol aria-label="Breadcrumb" class="hidden md:flex items-center whitespace-nowrap min-w-0 gap-2">
                    <li class="text-sm">
                        <a class="flex items-center gap-2 align-middle text-default-800 transition-all leading-none hover:text-primary-500"
                            href="{{ route('admin.restaurants.index') }}">
                            Restaurant
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>

                    <li aria-current="page"
                        class="text-sm font-medium text-primary truncate leading-none hover:text-primary-500">
                        Add Restaurant
                    </li>
                </ol>
            </div>

            <div class="grid grid-cols-1">
                <div class="border rounded-lg border-default-200">
                    <div class="px-6 py-4">
                        <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="space-y-6">
                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-default-700 mb-2">
                                        Restaurant Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" 
                                           name="name" 
                                           id="name" 
                                           value="{{ old('name') }}"
                                           class="w-full rounded-lg border-default-200 focus:border-primary-500 focus:ring-primary-500 @error('name') border-red-500 @enderror"
                                           placeholder="Enter restaurant name"
                                           required>
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-default-700 mb-2">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" 
                                           name="email" 
                                           id="email" 
                                           value="{{ old('email') }}"
                                           class="w-full rounded-lg border-default-200 focus:border-primary-500 focus:ring-primary-500 @error('email') border-red-500 @enderror"
                                           placeholder="restaurant@example.com"
                                           required>
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Address -->
                                <div>
                                    <label for="address" class="block text-sm font-medium text-default-700 mb-2">
                                        Address <span class="text-red-500">*</span>
                                    </label>
                                    <textarea name="address" 
                                              id="address" 
                                              rows="3"
                                              class="w-full rounded-lg border-default-200 focus:border-primary-500 focus:ring-primary-500 @error('address') border-red-500 @enderror"
                                              placeholder="Enter restaurant address"
                                              required>{{ old('address') }}</textarea>
                                    @error('address')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Image -->
                                <div>
                                    <label for="image" class="block text-sm font-medium text-default-700 mb-2">
                                        Restaurant Image <span class="text-red-500">*</span>
                                    </label>
                                    <div class="flex items-center justify-center w-full">
                                        <label for="image" 
                                               class="flex flex-col items-center justify-center w-full h-48 border-2 border-default-200 border-dashed rounded-lg cursor-pointer bg-default-50 hover:bg-default-100 transition-all">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <i data-lucide="upload" class="w-10 h-10 mb-3 text-default-500"></i>
                                                <p class="mb-2 text-sm text-default-500">
                                                    <span class="font-semibold">Click to upload</span>
                                                </p>
                                                <p class="text-xs text-default-500">
                                                    JPG, JPEG or PNG (MAX. 3MB)
                                                </p>
                                            </div>
                                            <input type="file" 
                                                   name="image" 
                                                   id="image" 
                                                   class="hidden" 
                                                   accept="image/jpeg,image/png,image/jpg"
                                                   required>
                                        </label>
                                    </div>
                                    <div id="image-preview" class="hidden mt-4">
                                        <img id="preview" class="h-32 w-32 object-cover rounded-lg" alt="Preview">
                                    </div>
                                    @error('image')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Form Actions -->
                            <div class="flex justify-end gap-3 mt-6 pt-4 border-t border-default-200">
                                <a href="{{ route('admin.restaurants.index') }}" 
                                   class="px-4 py-2 text-sm font-medium text-default-700 bg-white border border-default-200 rounded-lg hover:bg-default-50">
                                    Cancel
                                </a>
                                <button type="submit" 
                                        class="px-4 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary-600">
                                    Create Restaurant
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Image preview
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    document.getElementById('image-preview').classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
    @endpush
</x-app-layout>
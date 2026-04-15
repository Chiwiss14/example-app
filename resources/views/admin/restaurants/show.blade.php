{{-- resources/views/admin/show_restaurant.blade.php --}}
<x-app-layout>
    <div class="w-full lg:ps-64">
        <div class="p-6 page-content">

            <div class="flex items-center justify-between w-full mb-6">
                <h4 class="text-xl font-medium">
                    Restaurant Details
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
                        {{ $restaurant->name }}
                    </li>
                </ol>
            </div>

            <div class="grid grid-cols-1">
                <div class="border rounded-lg border-default-200">
                    <div class="px-6 py-4">
                        <div class="flex justify-end gap-3 mb-6">
                            <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" 
                               class="px-4 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary-600">
                                Edit Restaurant
                            </a>
                            <a href="{{ route('admin.restaurants.index') }}" 
                               class="px-4 py-2 text-sm font-medium text-default-700 bg-white border border-default-200 rounded-lg hover:bg-default-50">
                                Back to List
                            </a>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Restaurant Image -->
                            <div class="col-span-1">
                                <div class="bg-default-50 rounded-lg p-4">
                                    <h3 class="text-sm font-medium text-default-700 mb-3">Restaurant Image</h3>
                                    <div class="flex justify-center">
                                        @if($restaurant->image)
                                            <img src="{{ $restaurant->image }}" 
                                                 class="h-64 w-full object-cover rounded-lg" 
                                                 alt="{{ $restaurant->name }}">
                                        @else
                                            <div class="h-64 w-full bg-default-200 rounded-lg flex items-center justify-center">
                                                <span class="text-default-500">No image available</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Restaurant Information -->
                            <div class="col-span-1">
                                <div class="bg-default-50 rounded-lg p-4">
                                    <h3 class="text-sm font-medium text-default-700 mb-3">Restaurant Information</h3>
                                    
                                    <div class="space-y-4">
                                        <div>
                                            <label class="text-xs text-default-500 block">Restaurant Name</label>
                                            <p class="text-sm font-medium text-default-900 mt-1">{{ $restaurant->name }}</p>
                                        </div>

                                        <div>
                                            <label class="text-xs text-default-500 block">Email Address</label>
                                            <p class="text-sm font-medium text-default-900 mt-1">{{ $restaurant->email }}</p>
                                        </div>

                                        <div>
                                            <label class="text-xs text-default-500 block">Address</label>
                                            <p class="text-sm font-medium text-default-900 mt-1">{{ $restaurant->address }}</p>
                                        </div>

                                        <div>
                                            <label class="text-xs text-default-500 block">Created At</label>
                                            <p class="text-sm font-medium text-default-900 mt-1">
                                                {{ $restaurant->created_at->format('F d, Y h:i A') }}
                                            </p>
                                        </div>

                                        <div>
                                            <label class="text-xs text-default-500 block">Last Updated</label>
                                            <p class="text-sm font-medium text-default-900 mt-1">
                                                {{ $restaurant->updated_at->format('F d, Y h:i A') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Products belonging to this restaurant (optional) -->
                        @if($restaurant->products && count($restaurant->products) > 0)
                        <div class="mt-6">
                            <div class="bg-default-50 rounded-lg p-4">
                                <h3 class="text-sm font-medium text-default-700 mb-3">Products from this Restaurant</h3>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-default-200">
                                        <thead class="bg-default-100">
                                            <tr>
                                                <th class="px-4 py-2 text-left text-xs font-medium text-default-700">Product</th>
                                                <th class="px-4 py-2 text-left text-xs font-medium text-default-700">Price</th>
                                                <th class="px-4 py-2 text-left text-xs font-medium text-default-700">Category</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-default-200">
                                            @foreach($restaurant->products as $product)
                                            <tr>
                                                <td class="px-4 py-2 text-sm text-default-900">{{ $product->name }}</td>
                                                <td class="px-4 py-2 text-sm text-default-900">${{ number_format($product->price, 2) }}</td>
                                                <td class="px-4 py-2 text-sm text-default-900">{{ $product->category->name ?? 'N/A' }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
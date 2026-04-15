{{-- resources/views/admin/restaurants.blade.php --}}
<x-app-layout>
    <div class="w-full lg:ps-64">
        <div class="p-6 page-content">

            <div class="flex items-center justify-between w-full mb-6">
                <h4 class="text-xl font-medium">
                    Restaurants
                </h4>

                <ol aria-label="Breadcrumb" class="hidden md:flex items-center whitespace-nowrap min-w-0 gap-2">
                    <li class="text-sm">
                        <a class="flex items-center gap-2 align-middle text-default-800 transition-all leading-none hover:text-primary-500"
                            href="javascript:void(0)">
                            Restaurant
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>

                    <li aria-current="page"
                        class="text-sm font-medium text-primary truncate leading-none hover:text-primary-500">
                        All Restaurants
                    </li>
                </ol>
            </div>

            <div class="grid grid-cols-1">
                <div class="border rounded-lg border-default-200">
                    <div class="px-6 py-4 overflow-hidden">
                        <div class="flex flex-wrap md:flex-nowrap items-center justify-between gap-4">
                            <h2 class="text-xl text-default-800 font-semibold">Restaurant List</h2>

                            <div class="flex flex-wrap items-center gap-4">
                                <a href="{{ route('admin.restaurants.create') }}"
                                    class="py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500">
                                    Add Restaurant
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="relative overflow-x-auto">
                        <div class="min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-default-200">
                                    <thead class="bg-default-100">
                                        <tr class="text-start">
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">
                                                Restaurant
                                            </th>
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">
                                                Email
                                            </th>
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">
                                                Address
                                            </th>
                                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-default-200">
                                        @forelse ($restaurants as $restaurant)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                                <a href="#" class="flex items-center gap-3">
                                                    <div class="shrink">
                                                        <img src="{{ $restaurant->image }}" class="h-12 w-12 rounded object-cover">
                                                    </div>
                                                    <p class="text-base text-default-500 transition-all hover:text-primary">
                                                        {{ $restaurant->name }}
                                                    </p>
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-500">
                                                {{ $restaurant->email }}
                                            </td>
                                            <td class="px-6 py-4 text-sm font-medium text-default-500">
                                                {{ Str::limit($restaurant->address, 50) }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex gap-3">
                                                    <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}"
                                                        class="transition-all hover:text-primary">
                                                        <i data-lucide="pencil" class="w-5 h-5"></i>
                                                    </a>
                                                    <form action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" 
                                                          method="POST" 
                                                          class="inline-block"
                                                          onsubmit="return confirm('Are you sure you want to delete this restaurant?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="transition-all hover:text-red-500">
                                                            <i data-lucide="trash-2" class="w-5 h-5"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="px-6 py-8 text-center text-default-500">
                                                No restaurants found. 
                                                <a href="{{ route('admin.restaurants.create') }}" class="text-primary hover:underline">
                                                    Create your first restaurant
                                                </a>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                @if(isset($restaurants) && method_exists($restaurants, 'links'))
                                    <div class="px-6 py-4">
                                        {{ $restaurants->links() }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-guest-layout>

    <!-- Mobile Menu (Sidebar Menu) -->
    <section>
        <div>
            <div>
                <div>
                    <h3 class="text-4xl font-medium text-default-800 mb-1">{{ $product->name }}</h3>
                    <h5 class="text-lg font-medium text-default-600 mb-2"><span class="text-base font-normal text-default-500">by</span> Blaze Pizza</h5>

                    <div class="flex items-center gap-3 mb-3">
                        <div class="flex gap-1.5">
                            <span><i class="fa-solid fa-star text-base text-yellow-400"></i></span>
                            <span><i class="fa-solid fa-star text-base text-yellow-400"></i></span>
                            <span><i class="fa-solid fa-star text-base text-yellow-400"></i></span>
                            <span><i class="fa-solid fa-star text-base text-yellow-400"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke text-base text-yellow-400"></i></span>
                        </div>
                        <div class="h-4 w-px bg-default-400"></div>
                        <h5 class="text-sm text-default-500">54 Reviews</h5>
                    </div>

                    <p class="text-sm text-default-500 mb-4">{{ $product->description }}</p>

    
                    <div class="flex items-center">
                        <i data-lucide="eye" class="w-5 h-5 me-2 text-primary"></i>
                        <h5 class="text-sm text-default-600"><span class="text-primary font-semibold">152</span>&nbsp; People are viewing this right now</h5>
                    </div>
                </div>
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>

</x-guest-layout>

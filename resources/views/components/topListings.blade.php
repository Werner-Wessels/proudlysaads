<section class="mb-5">
    <h1 class="text-center mb-4 sm:mx-auto font-black text-4xl text-center sm:text-5xl md:text-6xl xl:text-7xl  text-white">Our
        <br><span class="text-green-500">Top Listings</span>
    </h1>
    <div class="flex flex-wrap mx-auto gap-6 justify-center">
        @forelse($listings as $listing)
            <div class="sm:w-[30%]">
                <div class="flex flex-wrap m-2 mx-auto">
                    @include('layout.product')
                </div>
            </div>
        @empty
            <p class="text-center text-white text-xl">Oh no we don't have anything to show yet.</p>
        @endforelse

    </div>
</section>

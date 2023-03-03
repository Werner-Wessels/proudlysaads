<div class="mt-12">
    <p class="text-center mb-4 sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-3xl lg:text-5xl text-center md:text-5xl lg:w-auto xl:text-5xl  text-white">Our Latest
        <br><span class="text-green-500">Listings </span>
    </p>
    <div class=" grid mx-auto sm:columns-5">
        @forelse($latestListings as $latest)
            <div class="flex flex-wrap mx-auto">
                <div class="m-2 mx-auto">
                    @include('components.productLatest')
                </div>
            </div>
    </div>
        @empty
            <p class="flex mx-auto justify-content-center justify-center text-center text-white text-xl">Oh no we don't have anything to show yet!</p>
        @endforelse


</div>

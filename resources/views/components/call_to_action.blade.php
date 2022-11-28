<div {{ $attributes->class(['py-16 bg-white']) }}>
    <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12 lg:px-20">
        <div class="justify-center text-center gap-6 md:text-left md:flex lg:items-center  lg:gap-16">
            <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                <h1 class="text-4xl text-gray-700 font-bold md:text-5xl">It pays to sell with <span
                            class="text-green-500">Tickey Turners</span></h1>
                <p class="text-gray-700 text-lg">Be paid to advertise your movable good with Tickey Turners, we will pay
                    you an additional 1% when your items are sold through Tickey Turners.</p>
                <div class="flex flex-row-reverse flex-wrap justify-center gap-4 md:gap-6 md:justify-end">
                    <button type="button" title="Start buying"
                            class="w-full py-3 px-6 text-center rounded-xl transition bg-gray-700 shadow-xl hover:bg-gray-600 active:bg-gray-700 focus:bg-gray-600 sm:w-max">
                        <span class="block text-white font-semibold">
                            <a href="{{route('listings.create')}}">Start Selling</a>
                        </span>
                    </button>
                    <button type="button" title="more about"
                            class="w-full order-first py-3 px-6 text-center rounded-xl bg-gray-100 transition hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-200 sm:w-max">
                        <span class="block text-gray-600 font-semibold">
                            <a href="/about">Want To Know More</a>
                        </span>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-5 grid-rows-4 gap-4 md:w-5/12 lg:w-6/12">
                <div class="col-span-2 row-span-4">
                    <img src="https://images.unsplash.com/photo-1627307886605-309bba4cb9a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                         class="rounded-full" width="640" height="960" alt="shoes" loading="lazy">
                </div>
                <div class="col-span-2 row-span-2">
                    <img src="https://images.unsplash.com/photo-1484687742385-1249620c2687?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHZpbnRhZ2UlMjBjYXJ8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                         class="w-full h-full object-cover object-top rounded-xl" width="640" height="640" alt="shoe"
                         loading="lazy">
                </div>
                <div class="col-span-3 row-span-3">
                    <img src="https://images.unsplash.com/photo-1661961110218-35af7210f803?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxzZWFyY2h8MTV8fGxhcHRvcHxlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                         class="w-full h-full object-cover object-top rounded-xl" width="640" height="427" alt="shoes"
                         loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

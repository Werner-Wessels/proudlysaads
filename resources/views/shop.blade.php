@include('layout.main')


<div class="flex">
    <x-shop.aside :categories="$categories" :locations="$locations"/>

    <main class="p-8 w-4/5 align-middle content-center">
        <div class="flex justify-center">
            <div class="flex mt-10 items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <h1 class="text-2xl font-semibold tracking-wider capitalize text-white">
Please view all our available listings as approved by the Proudly SA Ads Team                    </h1>
                </div>
            </div>
        </div>
        <!-- This is an example component -->
        @include('layout.productShow')

    </main>
</div>


    </main>
</div>
<div class="p4">{{ $listings->links() }}</div>

<x-layout.footer/>

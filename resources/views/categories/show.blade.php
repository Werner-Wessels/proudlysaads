@include('layout.main')


<div class="flex">
    <x-shop.aside :categories="$categories" :locations="$locations"/>

    <main class="p-8 w-4/5 align-middle content-center">
        <div class="flex justify-center">
            <div class="hidden bg-cover lg:block" >
            </div>

            <div class="flex mt-28 items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <p class="text-md font-semibold tracking-wider capitalize text-white">
                        All of the below listings have been verified by our profession Proudly SA Ads staff for your peace of mind.
                    </p>


                    <hr class="py-2">

                    <h1 class="text-2xl font-semibold tracking-wider capitalize text-white">
                        Now Showing Results For: <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 from-green-400 to-green-500">{{$area->name}}</span>
                    </h1>
                </div>
            </div>
        </div>
        <!-- This is an example component -->
        @include('layout.productShow')


    </main>
</div>

<x-layout.footer/>

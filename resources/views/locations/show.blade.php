@include('layout.main')


<div class="flex">
    <x-shop.aside :categories="$categories" :locations="$locations"/>

    <main class="p-8 w-4/5 align-middle content-center">
        <div class="flex justify-center">
            <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
            </div>

            <div class="flex mt-28 items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <p class="text-md font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        All of the below listings have been verified by our profession Tickey Turners Branch Principals for your peace of mind.
                    </p>


                    <hr class="py-2">

                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        Now Showing Results For: <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$area->name}}</span>
                    </h1>
                </div>
            </div>
        </div>
        <!-- This is an example component -->
        <div class="flex flex-wrap columns-3">
            @foreach($listings as $listing)
                <div class="max-w-2xl m-2 mx-auto">


                    <div class="bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg p-8" src="{{ URL::asset('/storage/'.$listing->image_url) }}" alt="product image">
                        </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">{{$listing->title}}</h3>
                            </a>

                            <div class="items-center justify-between">
                                <p class="text-xs my-1 text-gray-900 dark:text-white">{{$listing->description}} </p>
                                <br>
                                <p class="text-sm my-1 text-gray-900 dark:text-white"><strong>Condition: </strong>{{ucfirst(trans($listing->condition))}}</p>
                                <p class="text-sm my-1 text-gray-900 dark:text-white"><strong>Created: </strong>{{$listing->created_at->diffForHumans()}}</p>
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">R{{ number_format($listing->price, 2, ',', ' ') }}</span>





                            </div>
                            <div class="my-4 columns-2">
                                <div class="justify-start">
                                    <a href="#"
                                       class="p-2 text-2xl justify-self-start text-white bg-green-500 font-bold ring-4 ring-green-500 font-medium rounded-lg text-sm text-center">Make an Offer
                                    </a>
                                </div>
                                <div class="justify-end">

                                    <span class="text-[8px]  rounded-full bg-green-500 p-2 font-bold text-gray-900 dark:text-white"><a href="">{{$listing->category->name}}</a></span>





                                    <span class="text-[8px]  rounded-full bg-green-500 p-2 font-bold text-gray-900 dark:text-white"><a href="">{{$listing->location->name}}</a></span>

                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            @endforeach




        </div>

    </main>
</div>

<x-layout.footer/>

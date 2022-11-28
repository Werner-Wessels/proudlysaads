@include('layout.main')


<div class="flex">
    <x-shop.aside :categories="$categories" :locations="$locations"/>

    <main class="p-8 md:w-3/5 align-middle content-center">

            <div class="flex justify-center">
                <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                    <div class="w-full">
                        <h1 class="text-2xl font-semibold text-center tracking-wider capitalize text-white">
                            All of the below listings have been verified by our professional Tickey Turners Branch Principals for your peace of mind.
                        </h1>

                        <p class="mt-4 text-gray-400">
                            Now enjoy your shopping, and maybe you have something you wish to sell?
                        </p>
                    </div>
                </div>
            </div>
            <!-- This is an example component -->
        @forelse($listings as $listing)
        <div class="flex flex-wrap columns-3">

                <div class="max-w-2xl m-2 mx-auto">


                    <div class="shadow-md rounded-lg max-w-sm bg-gray-800 border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg p-8" src="{{ URL::asset('/storage/'.$listing->image_url) }}" alt="product image">
                        </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h3 class="font-semibold text-xl tracking-tight text-white">{{$listing->title}}</h3>
                            </a>

                            <div class="items-center justify-between">
                                <p class="text-xs my-1 text-white">{{$listing->description}} </p>
                                <br>
                                <p class="text-sm my-1 text-white"><strong>Condition: </strong>{{ucfirst(trans($listing->condition))}}</p>
                                <p class="text-sm my-1 text-white"><strong>Created: </strong>{{$listing->created_at->diffForHumans()}}</p>
                                <span class="text-3xl font-bold text-white">R{{ number_format($listing->price, 2, ',', ' ') }}</span>





                            </div>
                            <div class="my-4">
                                <div class="justify-start mb-8">
                                    <a href="{{route('offer.create', ['listing_id' => $listing->id])}}"
                                       class="p-2 text-2xl justify-self-start text-white bg-green-500 font-bold ring-4 ring-green-500 font-medium rounded-lg text-sm text-center break-normal">Make an Offer
                                    </a>
                                </div>
                                <div class="">

                                    <a class="text-[8px]  rounded-full bg-green-500 p-2 font-bold text-white" href="">{{$listing->category->name}}</a>





                                    <a class=" text-[8px] no-wrap rounded-full bg-green-500 p-2 font-bold text-white" href="">{{$listing->location->name}}</a>

                                </div>


                            </div>


                        </div>
                    </div>
                </div>





        </div>
        @empty
            <p class="text-center text-white text-xl">Oh no we don't have anything to show yet.</p>
        @endforelse


    </main>
</div>
<div class="p4">{{ $listings->links() }}</div>

<x-layout.footer/>

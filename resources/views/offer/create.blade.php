@include('layout.main')


<div class="flex justify-content-center justify-center mx-auto">
    <main class="p-8 justify-center align-middle content-center">
        <!-- This is an example component -->
        <form action="{{route('offer.store', ['listing_id' => $listing->id])}}" method="POST">
            @csrf
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
                                    <div>
                                        <label class="font-semibold text-xl tracking-tight text-white" for="offer">Your Offer: <span class="text-xs">Min = R{{ number_format( $listing->price /2, 2, ',', ' ') }}</span><br>
                                            <span><input class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" step='0.01' type="number" min="{{$listing->price/2}}" name="offer" id="offer"></span>
                                    </div>
                                </div>
                                <div class="justify-start mb-8">

                                    <button type="submit" class="p-2 text-2xl justify-self-start text-white bg-green-500 font-bold ring-4 ring-green-500 font-medium rounded-lg text-sm text-center break-normal">
                                        Submit Offer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</div>
<x-layout.footer/>


<a href="{{route('listings.show', $listing->id)}}">
    <div class=" m-6 gap-6 mx-auto">
        <a href="{{route('listings.show', $listing->id)}}">
            <div class="h-[500px] w-[300px]  rounded-lg max-w-sm @if($listing->promoted) border-[10px] border-green-500 @else border-[10px] border-gray-500 @endif ">
                @include('components.productImage')
                <div class="px-5 pb-5">
                    <h3 class="font-semibold text-xl tracking-tight text-white">{{$listing->title}}</h3>
                    <div class="items-center justify-between">
                        <br>
                        <p class="text-sm my-1 text-white"><strong>Images: </strong>{{ucfirst(trans($listing->images->count()))}}</p>
                        <p class="text-sm my-1 text-white"><strong>Condition: </strong>{{ucfirst(trans($listing->condition))}}</p>
                        <p class="text-sm my-1 text-white"><strong>Created: </strong>{{$listing->created_at->diffForHumans()}}</p>
                        <span class="text-3xl font-bold text-white">R{{ number_format($listing->price, 2, ',', ' ') }}</span>
                    </div>
                    <div class="my-4">
                        <div class="">
                            <a class="text-[8px]  rounded-full bg-black p-2 font-bold text-white" href="{{route('categories.show', $listing->category->id)}}">{{$listing->category->name}}</a>
                            <a class=" text-[8px] no-wrap rounded-full bg-black p-2 font-bold text-white" href="{{route('location.show', $listing->location->id)}}">{{$listing->location->name}}</a>
                        </div>
                    </div>
                </div>->
            </div>
        </a>
    </div>
</a>


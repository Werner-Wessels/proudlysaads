<a href="{{route('listings.show', $latest->id)}}">
    <div class="h-[500px] w-[350px] shadow-md rounded-lg max-w-xs @if($latest->promoted) border-[10px] border-green-500 @else border-[10px] border-gray-500 @endif ">
        @isset($latest->images[0]->img_path)
            <img class="flex mx-auto justify-content-center justify-center rounded-t-lg p-8 max-h-[200px]"  src="{{ URL::asset('/storage/'.$latest->images[0]->img_path) }}" alt="product image">
        @endisset
        <div class="px-5 pb-5">
            <h3 class="font-semibold text-xl tracking-tight text-white">{{$latest->title}}</h3>
            <div class="items-center justify-between">
                <br>
                <p class="text-sm my-1 text-white"><strong>Images: </strong>{{ucfirst(trans($latest->images->count()))}}</p>
                <p class="text-sm my-1 text-white"><strong>Condition: </strong>{{ucfirst(trans($latest->condition))}}</p>
                <p class="text-sm my-1 text-white"><strong>Created: </strong>{{$latest->created_at->diffForHumans()}}</p>
                <span class="text-3xl font-bold text-white">R{{ number_format($latest->price, 2, ',', ' ') }}</span>
            </div>
            <div class="my-4">
                <div class="">
                    <a class="text-[8px]  rounded-full bg-black p-2 font-bold text-white" href="{{route('categories.show', $latest->category->id)}}">{{$latest->category->name}}</a>
                    <a class=" text-[8px] no-wrap rounded-full bg-black p-2 font-bold text-white" href="{{route('location.show', $latest->location->id)}}">{{$latest->location->name}}</a>
                </div>
            </div>
        </div>
    </div>
</a>

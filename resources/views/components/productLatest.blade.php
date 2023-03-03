<a href="{{route('listings.show', $latest->id)}}">
    <div class="h-[500px]  shadow-md rounded-lg max-w-xs @if($latest->promoted) w-[350px] border-[10px] border-green-500 @else w-[200px] border-[10px] border-gray-500 @endif ">
        @if($latest->promoted) <h1 class="text-white text-center bg-green-500">Promoted</h1> @endif
        @isset($latest->images[0]->img_path)
            <img class="flex mx-auto justify-content-center justify-center rounded-t-lg p-8 max-h-[200px]"  src="{{ URL::asset('/storage/'.$latest->images[0]->img_path) }}" alt="product image">
        @endisset
        <div class="px-5 pb-5">
            <h1 class="font-semibold text-xl tracking-tight text-white">{{$latest->title}}</h1>
            <div class="items-center justify-between">
                <br>
                <p class="text-sm my-1 text-white"><strong>Images: </strong>{{ucfirst(trans($latest->images->count()))}}</p>
                <p class="text-sm my-1 text-white"><strong>Condition: </strong>{{ucfirst(trans($latest->condition))}}</p>
                <p class="text-sm my-1 text-white"><strong>Created: </strong>{{$latest->created_at->diffForHumans()}}</p>
                <span class="@if($latest->promoted)text-3xl @else text-lg @endif font-bold text-white">R{{ number_format($latest->price, 2, ',', ' ') }}</span>
            </div>
            <div class="my-4">
                <div class="">
                    <a class="text-[8px]  rounded-full bg-black p-2 font-bold text-white" href="{{route('categories.show', $latest->category->id)}}">{{$latest->category->name}}</a>
                    <a class=" text-[8px] no-wrap rounded-full bg-black p-2 font-bold text-white" href="{{route('location.show', $latest->location->id)}}">{{$latest->location->name}}</a>
                    @isset($latest->subcategory)
                        <a class=" text-[8px] no-wrap rounded-full bg-black p-2 font-bold text-white" href="{{route('subcategory.show', $latest->subcategory->id)}}">{{$latest->subcategory->name}}</a>
                    @endisset

                </div>
            </div>
        </div>
    </div>
</a>

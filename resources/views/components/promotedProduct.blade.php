<div class="shadow-md rounded-lg max-w-sm bg-green-500 border-gray-700">
    @include('components.productImage')
    <div class="px-5 pb-5">
        <h1 class="font-semibold text-xl tracking-tight text-white">{{$listing->title}}</h1>
        <div class="items-center justify-between">
            <br>
            <p class="text-sm my-1 text-white"><strong>Condition: </strong>{{ucfirst(trans($listing->condition))}}</p>
            <p class="text-sm my-1 text-white"><strong>Created: </strong>{{$listing->created_at->diffForHumans()}}</p>
            <span class="text-3xl font-bold text-white">R{{ number_format($listing->price, 2, ',', ' ') }}</span>
        </div>
        <div class="my-4">
            <div class="">
                <a class="text-[8px]  rounded-full bg-black p-2 font-bold text-white" href="">{{$listing->category->name}}</a>
                <a class=" text-[8px] no-wrap rounded-full bg-black p-2 font-bold text-white" href="">{{$listing->location->name}}</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100 m-10 rounded">
    <div class="p-8 mx-auto justify-content-center justify-center relative space-y-8 text-center">
        <div class="text-white">
            <h1 class="text-center mb-4 sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-3xl lg:text-5xl text-center md:text-5xl lg:w-auto xl:text-5xl  text-green-500">Our
                <br><span class="text-green-500">Categories </span>
            </h1>
            <br>
            <div class="md:columns-5 justify-center justify-content-center text-center">
                @foreach($categories as $category)
                    <a href="{{route('categories.show', $category->id)}}">
                        <li class="flex mx-auto p-4 text-center justify-center rounded gap-x-2 gap-y-2 mb-2 bg-green-500">{{$category->name}}</li>
                    </a>
                @endforeach
            </div>
            <br>
        </div>
    </div>
</div>


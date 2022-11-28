@props([
    /** @var \Illuminate\Database\Eloquent\Collection */
    'categories',
    /** @var \Illuminate\Database\Eloquent\Collection */
    'locations'
])

<aside {{ $attributes->class([' rounded-lg text-gray-300 px-4 bg-gray-800 hidden sm:block md:block w-80']) }}>
    <ul class="p-4">

        <li class="text-xl font-bold underline py-2">Categories</li>
        @foreach($categories as $category)
            <a href="{{route('categories.show', $category->id)}}">
                <li class="text-xl py-2">{{$category->name}}</li>
            </a>
        @endforeach
    </ul>

    <ul class="p-4">

        <li class="text-xl font-bold underline py-2">Locations</li>
        @foreach($locations as $location)
            <a href="{{route('location.show', $location->id)}}">
                <li class="text-xl py-2">{{$location->name}}</li>
            </a>
        @endforeach
    </ul>


</aside>

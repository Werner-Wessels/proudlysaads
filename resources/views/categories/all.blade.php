@include('layout.main')
<div>
    <h1 class="mt-12 text-center text-2xl text-white font-bold text-center">Below are a list of Categories that you might be interested in:</h1>

</div>
<div class="grid md:grid-cols-4 justify-center gap-2 text-white text-center">
    @foreach($categories as $category)
            <a class="bg-green-500 rounded-xl" href="{{route('categories.show', $category->id)}}">
                <p class="max-w-sm justify-items-center bg-green-500 m-4 rounded text-xl py-2">{{$category->name}}</p>
            </a>
    @endforeach
</div>
<div class="">
    <div class="flex mx-auto flex-col justify-center justify-items-center text-center max-w-2xl">
        <a class="" href="{{url()->previous()}}"><p class="text-white rounded-full px-4 py-2 m-4 bg-gray-500">Return To Previous Page</p></a>
    </div>
</div>
<x-layout.footer/>

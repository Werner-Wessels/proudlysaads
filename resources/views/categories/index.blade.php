@include('layout.main')
<div>
    <h1 class="mt-12 text-center text-2xl text-white font-bold text-center">Please select one of the following categories best suited for your listing.</h1>

</div>
@foreach($categories as $category)
    <div class="">
        <div class="flex mx-auto flex-col justify-center justify-items-center text-center max-w-2xl">
            <a class="" href="{{route('selectSubCategory', $category->id)}}"><p class="text-white rounded-full px-4 py-2 m-4 bg-green-500">{{$category->name}}</p></a>
        </div>
    </div>
@endforeach
<div class="">
    <div class="flex mx-auto flex-col justify-center justify-items-center text-center max-w-2xl">
        <a class="" href="{{url()->previous()}}"><p class="text-white rounded-full px-4 py-2 m-4 bg-gray-500">Return To Previous Page</p></a>
    </div>
</div>
<x-layout.footer/>

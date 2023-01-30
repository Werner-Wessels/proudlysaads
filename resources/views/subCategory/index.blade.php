@include('layout.main')
<div>
    <h1 class="mt-12 text-center text-2xl text-white font-bold text-center">Please select one of the following sub-categories best suited for your listing.</h1>

</div>
@foreach($subCategories as $subcategory)
    <div class="">
        <div class="flex mx-auto flex-col justify-center justify-items-center text-center max-w-2xl">
            <a class="" href="{{route('showSellForm', $subcategory->id)}}"><p class="text-white rounded-full px-4 py-2 m-4 bg-green-500">{{$subcategory->name}}</p></a>
        </div>
    </div>
@endforeach
<x-layout.footer/>

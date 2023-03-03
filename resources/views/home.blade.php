@include('layout.main')

@if ($errors->any())
    <div class="err">
        <ul>
            @foreach ($errors->all() as $error)
                <div class="text-center p-4 mb-4 text-sm text-white bg-red-700 rounded-lg bg-red-700 text-white" role="alert">
                    <span class="font-medium">{{ $error }}</span>
                </div>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('success'))
    <div class="text-center p-4 mb-4 text-sm text-white bg-green-700 rounded-lg bg-green-700 text-white">
        {{Session::get('success')}}
    </div>
@endif
@include('components.header')
@include('components.corporate')

@include('components.promotionHeader')
@include('components.categories')
<br>
<br>
<div class="">
    <div class="px-6 md:px-12 lg:px-6">
        @include('components.topListings')
        @include('components.latestListings')
        @include('components.noScams')
    </div>
</div>


<section class="m-16 rounded p-16 bg-white">
    <div>
        <p class="text-xl text-center font-bold text-green-500">Do you have any other questions? We would love to assist!</p>
        <button class="m-5 bg-green-500 text-white rounded flex mx-auto justify-center">
            <a class="p-4" href="/contact">Contact Us Today!</a>
        </button>
    </div>
</section>

<x-layout.footer/>


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
@include('components.promotionHeader')
@include('components.categories')
<br>
<br>
<div class="">
    <div class="px-6 md:px-12 lg:px-6">
        @include('components.topListings')
        @include('components.noScams')
        @include('components.latestListings')
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

{{--<div class="relative pt-40 pb-20 lg:pt-44 bg-gray-900">--}}
{{--    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">--}}
{{--        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-600 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto  xl:text-7xl text-white">How It <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500  from-green-400  to-green-500">Works</span>.</h1>--}}
{{--        <div class="md:grid grid-cols-3 gap-4 border-white mt-10">--}}
{{--            <div>--}}
{{--                <h3 class="text-white text-2xl text-center">Step 1</h3>--}}

{{--                <x-svg.step1/>--}}

{{--                <p class="p-8 text-center text-xl text-white">List your movable goods for free on Proudly SA Ads. List the details of the item and your asking price.</p>--}}

{{--            </div>--}}
{{--            <div>--}}
{{--                <h3 class="text-white text-2xl text-center">Step 2</h3>--}}

{{--                <x-svg.step2/>--}}

{{--                <p class="p-8 text-center text-xl text-white">Our users will view the available listings and make an offer to the seller that can be accepted or declined.</p>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <h3 class="text-white text-2xl text-center">Step 3</h3>--}}

{{--                <x-svg.step3/>--}}

{{--                <p class="p-8 text-center text-xl text-white">Allow our experienced TIckey Turners Branch Principal to facilitate the transaction to ensure that all parties get exactly what they are expecting.</p>--}}
{{--            </div>--}}


{{--        </div>--}}


{{--    </div>--}}
{{--</div>--}}

{{--<x-call_to_action/>--}}

<x-layout.footer/>


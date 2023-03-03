<div x-data="{
        billingType: 'month',
        basicPrice: '19',
        premiumPrice: '29',
        proPrice: '39'
    }" class="min-h-full bg-gray-200 pb-12">
    <div class="w-full bg-red-600 pt-16 pb-24 text-center">
        <h1 class="text-3xl font-bold text-gray-100">Premium Corporate Listings</h1>
        <p class="text-sm text-gray-100 mt-2">Get noticed, and generate business the easy way.</p>
        <span><p class="text-xl font-black text-gray-100 mt-2">Only R500.00 pm</p></span>
        <span class="m-4"><button class="text-red-600 text-xl m-4 rounded bg-white px-4 py-6">Find Out More</button></span>
{{--        <div class="flex items-center justify-center mt-8">--}}
{{--            <button @click="--}}
{{--                    billingType = 'month',--}}
{{--                    basicPrice = '19',--}}
{{--                    premiumPrice = '29',--}}
{{--                    proPrice = '39'--}}
{{--                " class="text-gray-800 px-4 py-2 rounded-tl-lg rounded-bl-lg bg-gray-200" :class=" billingType === 'month' ? 'bg-red-600' : 'bg-gray-200' " title="Choose Monthly billing">--}}
{{--                Monthly billing--}}
{{--            </button>--}}
{{--            <button @click="--}}
{{--                    billingType = 'year',--}}
{{--                    basicPrice = '205',--}}
{{--                    premiumPrice = '313',--}}
{{--                    proPrice = '421'--}}
{{--                " class="text-gray-800 px-4 py-2 rounded-tr-lg rounded-br-lg bg-gray-200" :class=" billingType === 'year' ? 'bg-red-600' : 'bg-gray-200' " title="Choose Annual billing">--}}
{{--                Annual billing--}}
{{--            </button>--}}
{{--        </div>--}}
    </div>
    <div class="w-full 2xl:w-3/4 flex items-center justify-center px-8 md:px-32 lg:px-16 2xl:px-0 mx-auto -mt-8">
        <div class="w-full grid grid-cols-1 xl:grid-cols-3 gap-8">
            @include('components.company')
            @include('components.company')
            @include('components.company')
        </div>
    </div>
</div>

@include('layout.main')



<div class="relative pt-10 pb-20 bg-gray-900">
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl  text-white">The most trusted selling platform in  <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500  from-green-400  to-green-500">South Africa</span>.</h1>
        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl  text-white">We <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500  from-green-400  to-green-500">pay</span> you to advertise.</h1>
        <div class="lg:flex">
            <div class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto lg:text-left lg:mr-auto lg:w-7/12">
                <p class="ml-3 sm:text-lg text-gray-700  text-gray-400 lg:w-11/12">

                    <li class="ml-20 text-white font-bold text-2xl">No Scams...</li>
                    <li class="ml-20 text-white font-bold text-2xl">No Fraudulent Activities...</li>
                    <li class="ml-20 text-white font-bold text-2xl">No Get-Rich-Quick Schemes...</li>
                    <li class="ml-20 text-white font-bold text-2xl">No Fake Deals...</li>

                    <br><br>
                </p>

                <div class="grid grid-cols-3 space-x-4 md:space-x-6 md:flex md:justify-center lg:justify-start">
                    <a aria-label="add to slack" href="#" class="p-1 border border-gray-200  bg-gray-800  border-gray-700 rounded-full duration-300 hover:border-cyan-400 hover:shadow-lg hover:shadow-cyan-600/20  hover:border-cyan-300/30">
                        <div class="flex justify-center space-x-1">
@include('svg.hero_svg')
                        </div>

                    </a>
                    <a aria-label="add to slack" href="#" class="p-1 border border-gray-200  bg-gray-800  border-gray-700 rounded-full duration-300 hover:border-cyan-400 hover:shadow-lg hover:shadow-cyan-600/20  hover:border-cyan-300/30">
                        <div class="flex justify-center space-x-1">
<x-svg.honesty/>

                        </div>
                    </a>
                    <a aria-label="add to slack" href="#" class="p-1 border border-gray-200  bg-gray-800  border-gray-700 rounded-full duration-300 hover:border-cyan-400 hover:shadow-lg hover:shadow-cyan-600/20  hover:border-cyan-300/30">
                        <div class="flex justify-center space-x-1">
<x-svg.integrity/>
                        </div>

                    </a>
                </div>

                <div class="text-gray-300">
                    <span>
                        <div class="text-xl"><strong><p>Trust, Honesty and Integrity</p></strong><br></div>
                        <p class="sm:text-lg text-gray-300 lg:w-11/12">
                            If something is too good to be true... it is because it is not true. <br><br>
                             <strong class="text-2xl">Bad experience!</strong>

                            <br><br>
                        </p>
                    </span>
                </div>


            </div>
            <div class="mt-12 md:mt-0 lg:absolute -right-2 lg:w-5/12">
                <div class="relative w-full">
                    <div class="max-w-md">
                        @include('svg.header_svg')
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative pt-40 pb-20 lg:pt-44 bg-gray-900">
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto  xl:text-7xl text-white">How It <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500  from-green-400  to-green-500">Works</span>.</h1>
        <div class="md:grid grid-cols-3 gap-4 border-white mt-10">
            <div>
                <h3 class="text-white text-2xl text-center">Step 1</h3>

                <x-svg.step1/>

                <p class="p-8 text-center text-xl text-white">List your movable goods for free on Tickey Turners. List the details of the item and your asking price.</p>

            </div>
            <div>
                <h3 class="text-white text-2xl text-center">Step 2</h3>

                <x-svg.step2/>

                <p class="p-8 text-center text-xl text-white">Our users will view the available listings and make an offer to the seller that can be accepted or declined.</p>
            </div>
            <div>
                <h3 class="text-white text-2xl text-center">Step 3</h3>

                <x-svg.step3/>

                <p class="p-8 text-center text-xl text-white">Allow our experienced TIckey Turners Branch Principal to facilitate the transaction to ensure that all parties get exactly what they are expecting.</p>
            </div>


        </div>


    </div>
</div>

<x-call_to_action/>

<x-layout.footer/>


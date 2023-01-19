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

<div class="flex mx-auto justify-center pt-10 pb-20 bg-gray-900">

    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-600 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl  text-white">The most trusted selling platform in   <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500  from-green-400  to-green-500">South Africa</span>.</h1>
        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-600 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl  text-white">We <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500  from-green-400  to-green-500">pay</span> you to advertise.</h1>
        <div class="lg:flex">
            <div class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto lg:text-left lg:mr-auto lg:w-7/12">
                <p class="ml-3 sm:text-lg text-gray-700  text-gray-400 lg:w-11/12">

                    <li class="ml-5 lg:ml-20 text-white font-bold text-2xl">No Scams...</li>
                    <li class="ml-5 lg:ml-20 text-white font-bold text-2xl">No Fraudulent Activities...</li>
                    <li class="ml-5 lg:ml-20 text-white font-bold text-2xl">No Get-Rich-Quick Schemes...</li>
                    <li class="ml-5 lg:ml-20 text-white font-bold text-2xl">No Fake Deals...</li>
                </p>

                <div class="grid grid-cols-3 space-x-4 md:space-x-6 md:flex md:justify-center lg:justify-start">
                    <a aria-label="add to slack" href="#" class="p-1 border border-gray-200  bg-gray-800  border-gray-700 rounded-full duration-300 hover:border-cyan-400 hover:shadow-lg hover:shadow-cyan-600/20  hover:border-cyan-300/30">
                        <div class="flex justify-center">
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

                <div class="text-gray-200">
                    <span>
                        <div class="text-xl"><strong><p>Trust, Honesty and Integrity</p></strong><br></div>
                        <p class="sm:text-lg text-gray-200 lg:w-11/12">
                            If something is too good to be true... it is because it is not true. <br><br>
                             <strong class="text-2xl">Bad experience!</strong>

                            <br><br>
                        </p>
                    </span>
                </div>


            </div>

        </div>
    </div>
</div>
<div class="flex justify-content-center  mx-auto w-full">
    <div class="px-6 md:px-12 lg:px-6">
        <section class="mb-5">
            <h1 class="flex justify-center text-center mb-4 sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-600 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl  text-white">Proudly SA Ads
                <br></h1>
            <h1 class="flex justify-center text-center mb-4 sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-600 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl  text-white">
                <br>
                <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500  from-green-400  to-green-500"> Needs You</span>!</h1>
        </section>
        <h1 class="flex justify-center text-center sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-white text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl text-white font-bold underline">This is a limited time offer!</h1>
        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-white text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl text-white">Are you an <strong class="text-green-500">Honest</strong>, <strong class="text-green-500">Trustworthy</strong> person?</h1>
        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-white text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl text-white">Do you have <strong class="text-green-500">Basic Computer Literacy</strong>?</h1>

        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-white text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl text-white">Are you a <strong class="text-green-500">Peoples Person</strong>?</h1>

        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-white text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl text-white">Can you <strong class="text-green-500">Sell</strong>?</h1>
        <div class="lg:flex">
            <div class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto text-center lg:text-left lg:mr-auto lg:w-7/12">
                <p class="sm:text-lg text-gray-200 text-gray-400 lg:w-11/12">

                    Do you want to be part of a large national infrastructure but your own boss at the same time?
                    <br><br>
                    <strong class="font-bold text-green-500">If this is what and who you are, please complete the simple application form below and change your life forever.</strong>
                </p>
                <span class="block font-semibold text-gray-200 text-gray-400">What makes this opportunity even more incredible, is that the buying in opportunity will only cost you a <span class="font-bold text-lg text-green-500">R1,000.00</span></span>


                <div class="text-gray-200">
                    <span>
                        <div class="text-xl"><strong class="text-green-500"><p>Please Note!</p></strong><br></div>
                        <p class="sm:text-lg text-gray-200 text-gray-400 lg:w-11/12">
                            No time wasters. <span class="text-yellow-500 font-bold">We approve, train and do business from day one.</span> We want our members to make a commitment. This offer is only valid for the next <strong class="text-green-500">7 days</strong></strong>.

                            <br><br>
                                <strong>We would like to welcome you to the Proudly SA Ads family as a Branch Principal of one of our local branches.</strong>
                        </p>
                    </span>
                </div>
                <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl text-white"><strong class="text-green-500">Own Your Town!</strong></h1>

            </div>
            <div class="mt-12 md:mt-0 lg:absolute -right-2 lg:w-5/12">
                <div class="relative w-full">
                    <div class="max-w-md">
                        <x-svg.step3/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div
<section class="bg-gray-900">
    <div class="flex justify-center min-h-screen">

        <div class="flex mt-5 items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-200 capitalize text-white">
                    Join the Proudly SA Ads Family today!
                </h1>

                <p class="mt-4 text-gray-500 text-gray-400">
                    Provide us with a few simple details below to apply to become a Proudly SA Ads Branch Principal and <strong class="font-bold underline decoration-solid">Own Your Town</strong>.
                </p>



                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-1" action="{{ route('application.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm text-gray-400 text-gray-200">Name and Surname</label>
                        <input name="name" id="name" type="text" value="{{old('phone')}}" placeholder="John Doe" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-200 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="phone" class="block mb-2 text-sm text-gray-400 text-gray-200">Phone Number</label>
                        <input name="phone" id="phone" value="{{old('phone')}}" type="text" placeholder="Your 10 Digit Contact Number (0821234567)" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-200 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="id_num" class="block mb-2 text-sm text-gray-400 text-gray-200">Identity Number</label>
                        <input name="id_num" id="id_num"  value="{{old('id_num')}}" type="text" placeholder="Your 13 Digit ID Number" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-200 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="town" class="block mb-2 text-sm text-gray-400 text-gray-200">Town</label>
                        <input name="town" id="town" type="text"  value="{{old('town')}}"  placeholder="Johannesburg" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-200 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="province" class="block mb-2 text-sm text-gray-400 text-gray-200">Province</label>
                        <input name="province" id="province" value="{{old('province')}}"  type="text" placeholder="Gauteng" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-200 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm text-gray-400 text-gray-200">Email Address</label>
                        <input name="email" id="email" type="email"  value="{{old('email')}}" placeholder="example@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-200 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="code" class="block mb-2 text-sm text-gray-400 text-gray-200">Referral Code <span class="text-white text-xs">(if you have a referral code, please enter it here.)</span></label>
                        <input name="code" id="code"  value="none"  type="text" placeholder="Optional Referral Code" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-200 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>



                    <button
                        class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Submit</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="m-4 rounded p-16 bg-white">
    <div>
        <p class="text-xl text-center font-bold text-green-500">Do you have any other questions? We would love to assist!</p>
        <button class="m-5 bg-green-500 text-white rounded flex mx-auto justify-center">
            <a class="p-4" href="/contact">Contact Us Today!</a>
        </button>
    </div>
</section>

<div class="relative pt-20 pb-20 lg:pt-44 bg-gray-900">
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-white text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl text-white">Yes, we are going local in every town in <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 from-green-400 to-green-500">South Africa</span>.</h1>
        <div class="lg:flex">
            <div class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto text-center lg:text-left lg:mr-auto lg:w-7/12">
                <p class="sm:text-lg text-white text-white lg:w-11/12">

                    Trust, Integrity, Honesty and Reliability are just some of the characteristics you will find in every Proudly SA Ads Branch Principal. Your Branch Principal will assist you with his passion, contacts and experience to facilitate your transaction speedily and to your satisfaction.
                    <br><br>
                    <strong>This, if spelled out means every transaction is a one-on-one interaction.</strong>
                </p>
                <span class="block font-semibold text-white text-white">No more Doubt, no more Scams and no more Get-Rich-Quick Schemes</span>


                <div class="text-white">
                    <span>
                        <div class="text-xl text-white"><strong><p>Trust, Honesty and Integrity</p></strong><br></div>
                        <p class="sm:text-lg text-white lg:w-11/12">
                            On a true South African Platform, where you can be guaranteed serious buying and selling. <strong class="text-green-500">Proudly SA Ads... where it always pays to advertise</strong>.


                        </p>
                    </span>
                </div>

            </div>
            <div class="mt-12 md:mt-0 lg:absolute -right-2 lg:w-5/12">
                <div class="relative w-full">
                    <div class="flex mx-auto justify-center max-w-md">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="4da96dbaf5"><path d="M 80 66.351562 L 355.660156 66.351562 L 355.660156 146 L 80 146 Z M 80 66.351562 " clip-rule="nonzero"/></clipPath><clipPath id="5b07c8fa4f"><path d="M 80 229 L 355.660156 229 L 355.660156 308.601562 L 80 308.601562 Z M 80 229 " clip-rule="nonzero"/></clipPath><clipPath id="ed00d96b5b"><path d="M 19.660156 122 L 118 122 L 118 253 L 19.660156 253 Z M 19.660156 122 " clip-rule="nonzero"/></clipPath><clipPath id="74f2410cb6"><path d="M 19.660156 103 L 146 103 L 146 272 L 19.660156 272 Z M 19.660156 103 " clip-rule="nonzero"/></clipPath><clipPath id="8d21de8c17"><path d="M 19.660156 66.351562 L 355.660156 66.351562 L 355.660156 308.601562 L 19.660156 308.601562 Z M 19.660156 66.351562 " clip-rule="nonzero"/></clipPath><clipPath id="aec248c3ca"><path d="M 52 66.351562 L 355.660156 66.351562 L 355.660156 308.601562 L 52 308.601562 Z M 52 66.351562 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#4da96dbaf5)"><path fill="#de3830" d="M 318.257812 66.351562 L 80.386719 66.351562 L 196.988281 145.546875 L 355.570312 145.546875 L 355.570312 103.621094 C 355.570312 83.039062 338.863281 66.351562 318.257812 66.351562 Z M 318.257812 66.351562 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#5b07c8fa4f)"><path fill="#002395" d="M 80.386719 308.601562 L 318.257812 308.601562 C 338.863281 308.601562 355.570312 291.914062 355.570312 271.332031 L 355.570312 229.402344 L 196.988281 229.402344 Z M 80.386719 308.601562 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#ed00d96b5b)"><path fill="#141414" d="M 19.753906 122.253906 L 19.753906 252.699219 L 117.699219 187.476562 Z M 19.753906 122.253906 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#74f2410cb6)"><path fill="#ffb611" d="M 19.753906 103.621094 L 19.753906 122.253906 L 117.699219 187.476562 L 19.753906 252.699219 L 19.753906 271.332031 L 145.683594 187.476562 Z M 19.753906 103.621094 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#8d21de8c17)"><path fill="#007a4d" d="M 52.785156 66.613281 C 34.195312 68.746094 19.753906 84.492188 19.753906 103.621094 L 145.683594 187.476562 L 19.753906 271.332031 C 19.753906 290.460938 34.195312 306.207031 52.785156 308.339844 L 192.324219 210.769531 L 355.570312 210.769531 L 355.570312 164.183594 L 192.324219 164.183594 Z M 52.785156 66.613281 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#aec248c3ca)"><path fill="#eeeeee" d="M 80.386719 66.351562 L 57.066406 66.351562 C 55.613281 66.351562 54.195312 66.453125 52.785156 66.613281 L 192.324219 164.183594 L 355.570312 164.183594 L 355.570312 145.546875 L 196.988281 145.546875 Z M 52.785156 308.339844 C 54.195312 308.5 55.613281 308.601562 57.066406 308.601562 L 80.386719 308.601562 L 196.988281 229.402344 L 355.570312 229.402344 L 355.570312 210.769531 L 192.324219 210.769531 Z M 52.785156 308.339844 " fill-opacity="1" fill-rule="nonzero"/></g></svg>                            </div>

                </div>
            </div>
        </div>
    </div>
</div>

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


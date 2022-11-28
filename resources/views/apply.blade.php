name="" id="" @include('layout.main')

<div class="relative pt-10 pb-20 dark:bg-gray-900">
    @if ($errors->any())
        <div class="err">
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="text-center p-4 mb-4 text-sm text-white bg-red-700 rounded-lg dark:bg-red-700 dark:text-white" role="alert">
                        <span class="font-medium">{{ $error }}</span>
                    </div>
                @endforeach
            </ul>
        </div>
    @endif
        @if(session()->has('success'))
            <div class="text-center p-4 mb-4 text-sm text-white bg-green-700 rounded-lg dark:bg-green-700 dark:text-white">
                {{ session()->get('success') }}
            </div>
        @endif
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl dark:text-white">Are you an <strong class="text-green-500">Honest</strong>, <strong class="text-green-500">Trustworthy</strong> person?</h1>
        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl dark:text-white">Do you have <strong class="text-green-500">Basic Computer Literacy</strong>?</h1>

        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl dark:text-white">Are you a <strong class="text-green-500">Peoples Person</strong>?</h1>

        <br>
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl dark:text-white">Can you <strong class="text-green-500">Sell</strong>?</h1>
        <div class="lg:flex">
            <div class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto text-center lg:text-left lg:mr-auto lg:w-7/12">
                <p class="sm:text-lg text-gray-300 dark:text-gray-400 lg:w-11/12">

                    Do you want to be part of a large national infrastructure but your own boss at the same time?
                    <br><br>
                    <strong>If this is what and who you are, please complete the simple application form below.</strong>
                </p>
                <span class="block font-semibold text-gray-300 dark:text-gray-400">What makes this opportunity even more incredible, is that the buying in opportunity will only cost you a R1 000.00</span>


                <div class="dark:text-gray-300">
                    <span>
                        <div class="text-xl"><strong class="text-green-500"><p>Please Note!</p></strong><br></div>
                        <p class="sm:text-lg text-gray-300 dark:text-gray-400 lg:w-11/12">
                            No time wasters. <span class="text-yellow-500 font-bold">We approve, train and do business from day one.</span> We want our members to make a commitment. This offer is only valid for the next <strong class="text-green-500">7 days</strong></strong>.

                            <br><br>
                                <strong>We would like to welcome you to the Tickey Turners family as a Branch Principal of one of our local branches.</strong>
                        </p>
                    </span>
                </div>
                <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto lg:text-left xl:text-4xl dark:text-white"><strong class="text-green-500">Own Your Town!</strong></h1>

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
</div>

<section class="bg-gray-900">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
        </div>

        <div class="flex mt-28 items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-300 capitalize dark:text-white">
                    Join the Tickey Turners Family today!
                </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                    Provide us with a few simple details below to apply to become a Tickey Turners Branch Principal and <strong class="font-bold underline decoration-solid">Own Your Town</strong>.
                </p>



                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-1" action="{{ route('application.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm text-gray-400 dark:text-gray-200">Name and Surname</label>
                        <input name="name" id="name" value="{{old('name')}}" type="text" placeholder="John Doe" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="phone" class="block mb-2 text-sm text-gray-400 dark:text-gray-200">Phone Number</label>
                        <input name="phone" id="phone" value="{{old('phone')}}" type="text" placeholder="Your 10 Digit Contact Number (0821234567)" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="id_num" class="block mb-2 text-sm text-gray-400 dark:text-gray-200">Identity Number</label>
                        <input name="id_num" id="id_num"  value="{{old('id_num')}}" type="text" placeholder="Your 13 Digit ID Number" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="town" class="block mb-2 text-sm text-gray-400 dark:text-gray-200">Town</label>
                        <input name="town" id="town" type="text"  value="{{old('town')}}"  placeholder="Johannesburg" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="province" class="block mb-2 text-sm text-gray-400 dark:text-gray-200">Province</label>
                        <input name="province" id="province" value="{{old('province')}}"  type="text" placeholder="Gauteng" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm text-gray-400 dark:text-gray-200">Email Address</label>
                        <input name="email" id="email" type="email"  value="{{old('email')}}" placeholder="example@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
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

<x-layout.footer/>

@include('layout.main')

<section class="bg-gray-900">
    <div class="flex justify-center min-h-screen">

        <div class="flex mt-10 items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
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
                <h1 class="text-2xl font-semibold tracking-wider text-gray-300 capitalize text-white">
                    We would love to hear from you
                </h1>

                <p class="mt-4 text-gray-500 text-gray-400">
                    Please send us a message below and we will get back to you before you know it.
                </p>



                <form method="POST" action="{{route('contact.store')}}" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-1">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm text-gray-400 text-gray-200">Name and Surname</label>
                        <input value="{{old('name')}}" id="name" type="text"  placeholder="John Doe" name="name" class="block w-full px-5 py-3 mt-2 text-white placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm text-gray-400 text-gray-200">Email Address</label>
                        <input value="{{old('email')}}" id="email" type="email" placeholder="example@example.com"  name="email" class="block w-full px-5 py-3 mt-2 text-white placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="phone" class="block mb-2 text-sm text-gray-400 text-gray-200">Phone Number</label>
                        <input value="{{old('phone')}}" id="phone" type="text" placeholder="Your 10 Digit Contact Number"  name="phone" class="block w-full px-5 py-3 mt-2 text-white placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="subject" class="block mb-2 text-sm text-gray-400 text-gray-200">Subject</label>
                        <input value="{{old('subject')}}" id="subject" type="text" placeholder="Subject" name="subject"  class="block w-full px-5 py-3 mt-2 text-white placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="message" class="block mb-2 text-sm text-gray-200">Your Message</label>
                        <textarea  id="message" class="block w-full px-5 py-3 mt-2  placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="message" cols="50" rows="4"></textarea>

                    </div>



                    <button
                        class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Send </span>

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
        <p class="text-xl text-center font-bold text-green-500">Do you wish to speak to us in person. Give us a call or contact us on WhatsApp!</p>
        <button class="m-5 bg-green-500 text-white rounded flex mx-auto justify-center">
            <a class="p-4" href="tel:0842320209">Minky Rossouw: <br>084 252 0209</a>
        </button>
        <button class="m-5 bg-green-500 text-white rounded flex mx-auto justify-center">
            <a class="p-4" href="tel:0813762954">Paul du Plessis: <br>081 376 2954</a>
        </button>
    </div>
</section>

<x-layout.footer/>

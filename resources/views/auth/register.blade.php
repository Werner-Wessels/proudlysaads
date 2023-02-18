@include('layout.main')

<div class="relative pt-10  bg-gray-900">
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto  xl:text-4xl text-white">Welcome, its great to have you join us, please <strong class="text-green-500">Register</strong> below.</h1>
    </div>
</div>

<section class="bg-gray-900">
    <div class="flex justify-center">
        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-1" action="{{ route('register.post') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm text-gray-400 text-gray-200">Name and Surname</label>
                        <div class="col-md-6">
                            <input type="text" id="name" placeholder="Your Name and Surname" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="name" required autofocus>
                            @if ($errors->has('name'))
                                <span class="text-red-500">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-400 text-gray-200">Email Address</label>
                            <input type="text" placeholder="example@example.com" id="email_address" class="form-block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-red-500">{{ $errors->first('email') }}</span>
                            @endif

                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm text-gray-400 text-gray-200">Password</label>
                        <div class="col-md-6">
                            <input type="password" placeholder="Password" id="password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-red-500">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <button type="submit"
                        class="flex mx-auto items-center justify-between px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Register</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button>
                    <a href="{{route('user_login')}}" class="mx-auto px-2 text-center text-gray-200 bg-green-500 py-2 rounded-full"> Already have an account?</a>
                </form>
            </div>
        </div>
    </div>
</section>

<x-layout.footer/>

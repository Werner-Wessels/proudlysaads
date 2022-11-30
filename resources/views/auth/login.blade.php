@include('layout.main')
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
<div class="relative pt-10  bg-gray-900">
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-5xl md:text-4xl lg:w-auto  xl:text-4xl dark:text-white">Welcome back <strong class="text-green-500">Login</strong> below.</h1>
    </div>
</div>

<section class="bg-gray-900">
    <div class="flex justify-center">
        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-1" action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm text-gray-200 dark:text-gray-200">Email Address</label>
                            <input type="text" placeholder="example@example.com" id="email" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="email" required>
                            @if ($errors->has('email'))
                                <span class="bg-danger text-white text-sm">{{ $errors->first('email') }}</span>
                            @endif

                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm text-gray-200 dark:text-gray-200">Password</label>

                            <input type="password" placeholder="Password" id="password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-600 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="password" required>
                            @if ($errors->has('password'))
                                <span class="bg-danger text-white text-sm">{{ $errors->first('password') }}</span>
                            @endif

                    </div>

                    <button type="submit"
                            class="flex mx-auto items-center px-6 py-3 text-sm tracking-wide text-center text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-full hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Login</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button>
                    <a href="{{route('register')}}" class="mx-auto px-2 text-center text-gray-200 bg-green-500 py-2 rounded-full"> Need an account?</a>
                </form>
            </div>
        </div>
    </div>
</section>

<x-layout.footer/>

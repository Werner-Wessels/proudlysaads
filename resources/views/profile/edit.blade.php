@include('layout.main')
<section class="bg-gray-900">
    <div class="flex pt-10 items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
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
            @if(session()->has('success'))
                <div class="text-center p-4 mb-4 text-sm text-white bg-green-700 rounded-lg bg-green-700 text-white">
                    {{ session()->get('success') }}
                </div>
            @endif
            <h1 class="text-2xl font-semibold tracking-wider text-gray-200 capitalize text-white">
                Edit your profile.
            </h1>

            <p class="mt-4 text-gray-500 text-gray-200">
                The below information is extremely important to us. We will not only keep it private, but also require this information to get in touch with you. Because human contact is an integral part of Proudly SA Ads please keep these details up to date.
            </p>





            <form action="{{route('profile.update', $user->profile->id)}}" method="POST" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-1" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Your Name and Surname (Please contact admin to change)</label>
                    <input disabled type="text" id="name" name="name" placeholder="Your Name and Surname" value="@isset($user->name) {{$user->name}} @endisset" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Your Emai (Please contact admin to change)</label>
                    <input disabled type="text" id="email" name="email" placeholder="Your Email" value="@isset($user->email){{$user->email}}@endisset" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Contact Number</label>
                    <input  required type="text" id="contact_number" name="contact_number" placeholder="Your Contact Number" value="@isset($user->profile->contact_number) {{$user->profile->contact_number}}
                        @endisset
                        " class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Address Line 1</label>
                    <input  required type="text" id="address1" name="address1" placeholder="Street Address" value="@isset($user->profile->address1) {{$user->profile->address1}} @endisset
                        " class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Address Line 2</label>
                    <input  required type="text" id="address2" name="address2" placeholder="Town / Complex / Apartment" value="@isset($user->profile->address2) {{$user->profile->address2}}
                        @endisset
                        " class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">City</label>
                    <input  required type="text" id="city" name="city" placeholder="Your City" value="@isset($user->profile->city) {{$user->profile->city}}
                        @endisset
                        " class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Province</label>
                    <input  required type="text" id="province" name="province" placeholder="Your Province" value="@isset($user->profile->province) {{$user->profile->province}}
                        @endisset
                        " class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Copy of South African ID</label>
                    <input  required type="file" id="id_copy" name="id_copy" placeholder="Your Province" value="" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Selfie for comparison with SA Identity Document</label>
                    <input  required type="file" id="selfie" name="selfie" placeholder="Your Province" value="" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>


                <p class="text-white justify-center"><small>By updating your profile and submitting the above documentation for verification, you give Proudly SA Ads the permission to pass these details onto the relevant parties if there is any failure to comply with Proudly South African Ads' Terms and Conditions</small></p>
                <button
                    class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    <span>Submit </span>

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



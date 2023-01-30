@include('layout.main')

<section class="bg-gray-900">
    @if(\Illuminate\Support\Facades\Auth::user()->verified === 0)
        <div class="p-8 mt-12 text-2xl font-bold text-green-500 text-center">
            <h1>Please note that your account has not yet been verified. Please click <a class="font-black underline text-amber-500" href="{{route('profile.show', \Illuminate\Support\Facades\Auth::id())}}">here</a> to edit your profile. Please ensure you have uploaded a clear copy of your South African ID and a Selfie to your profile or we will not be able to verify your account. </h1>
            <br><br>
            <h1>If you have already uploaded the documents and you have not yet been verified within a reasonable amount of time. Please contact us on
                <a class="font-black underline text-amber-500" href="mailto:info@proudlysaads.co.za">info@proudlysaads.co.za</a> and we will assist.</h1>
        </div>
    @else
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
                    Thank you for putting your trust with Proudly SA Ads
                </h1>

                <p class="mt-4 text-gray-200 ">
                    Please complete all the details required below. Once the listing is received we will approve your listing and you will start receiving offers.
                </p>



                <form action="{{route('listings.store')}}" method="POST" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-1" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="title" class="block mb-2 text-sm text-gray-200 text-gray-200">Name of Item</label>
                        <input value="{{old('title')}}" type="text" id="title" name="title" placeholder="The name of your item" class="block w-full px-5 py-3 mt-2 text-gray-200 placeholder-gray-400 border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label for="description" class="block mb-2 text-sm text-gray-200 text-gray-200">Description</label>
                        <textarea class="block w-full px-5 py-3 mt-2 text-white placeholder-gray-400 border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="description" id="description" cols="50" rows="4">{{ old('description') }}</textarea>

                    </div>

                    <div>
                        <label for="condition" class="block mb-2 text-sm text-gray-200 text-gray-200">Condition</label>
                        <select value="{{old('condition')}}" name="condition" id="condition"  required class="block w-full px-5 py-3 mt-2 text-white placeholder-gray-400 border border-gray-200 rounded-md placeholder-gray-600
                        bg-gray-600 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">

                            <option value="New" @if (old('condition') == 'New') selected="selected" @endif>New</option>
                            <option value="Almost New" @if (old('condition') == 'Almost New') selected="selected" @endif>Almost Mew</option>
                            <option value="Used" @if (old('condition') == 'Used') selected="selected" @endif>Used</option>
                            <option value="Repairs Required" @if (old('condition') == 'Repairs Required') selected="selected" @endif>Repairs Required</option>
                        </select>
                    </div>



                   <div>
                       <label for="image_url" class="block mb-2 text-sm text-gray-200 text-gray-200">Select your Image</label>
                       <input type="file" name="images[]" id="image_url" accept="image/*" required multiple class="text-gray-200">
                   </div>

                    <div>
                        <label for="price" class="block mb-2 text-sm text-gray-200 text-gray-200">Price (R)</label>
                        <input type="number" value="{{old('price')}}" name="price" id="price" min="0" step="0.01" placeholder="1000.00" class="block w-full px-5 py-3 mt-2 text-white placeholder-gray-400 border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div class="hidden">
                        <label for="title" class="block mb-2 text-sm text-gray-200 text-gray-200">Category</label>
                        <input value="{{$category->id}}" type="text" id="category_id" name="category_id"  class="block w-full px-5 py-3 mt-2 text-gray-200 placeholder-gray-400 border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    @isset($subcategory)
                        <div class="hidden"><label for="subcategory_id"> Subcategory</label>
                            <input type="text"  value="{{$subcategory->id}}" name="subcategory_id" id="subcategory_id">
                        </div>
                    @endisset

                    <div>
                        <label class="block mb-2 text-sm text-gray-200 text-gray-200">Location</label>
                        <select name="location_id" id="location_id" class="block w-full px-5 py-3 mt-2 text-white placeholder-gray-400 border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                            @foreach($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                            @endforeach
                        </select>
                    </div>

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
    @endif
    </div>
</section>

<x-layout.footer/>

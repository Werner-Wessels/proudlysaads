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
                We see you are looking to make some changes to your listing.
            </h1>
            <p class="mt-4 text-gray-500 text-gray-200">
                Please note that our Proudly SA Staff will be notified of these changes and your listing might need to be verified again.
            </p>
            <form action="{{route('listings.update', $listing->id)}}" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-1" method="post" enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Name of Item</label>
                    <input value="{{$listing->title}}" type="text" id="title" name="title" placeholder="The name of your item" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Description</label>
                    <textarea  placeholder="Tell us more about what you are selling. The more we know the easier we can sell the item." class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" name="description" id="description" cols="50" rows="4">{{$listing->description}}</textarea>

                </div>
                <div>
                    <label for="condition" class="block mb-2 text-sm text-gray-200 text-gray-200">Condition</label>
                    <select name="condition" id="condition"  required class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600
                        bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        <option selected value="{{$listing->condition}}">{{$listing->condition}}</option>
                        <option value="New">New</option>
                        <option value="Almost New">Almost New</option>
                        <option value="Used">Used</option>
                        <option value="Repairs Required">Requires Repairs</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Price (R)</label>
                    <input type="number" value="{{$listing->price}}" name="price" id="price" min="0" step="0.01" placeholder="1000.00" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Category</label>
                    <select name="category_id" id="category_id" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        <option value="{{$listing->category_id}}">Keep existing category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block mb-2 text-sm text-gray-200 text-gray-200">Location</label>
                    <select name="location_id" id="location_id" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md placeholder-gray-600 bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        <option value="{{$listing->location_id}}">Keep existing location</option>
                        @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit"
                    class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    <span>Update</span>
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

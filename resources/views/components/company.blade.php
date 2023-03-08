@foreach($corporates as $corporate)
    <div class="bg-white shadow-2xl rounded-lg py-4">
        <p class="text-xl bg-red-600 text-center font-bold text-white">Premium Listing</p>
        <p class="text-center py-8">
            <img class="flex mx-auto justify-center max-w-sm max-h-52" src="{{ URL::asset('/storage/'.$corporate->logo) }}" alt="company logo" title="Company Logo"/>

            <br><br>
            <span class="text-4xl font-bold mt-4 text-gray-700">
                        {{$corporate->name}}
                    </span>
        </p>
        <ul class="border-t border-gray-300 py-8 space-y-6">
            <li class="flex items-center space-x-2 px-8">
                        <span class="bg-red-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                <span class="text-gray-600"><a href="{{$corporate->website}}">{{$corporate->website}}</a></span>
            </li>
            <li class="flex items-center space-x-2 px-8">
                        <span class="bg-red-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                <span class="text-gray-600"><a href="{{'mailto:'.$corporate->email}}">{{$corporate->email}}</a></span>
            </li>
            <li class="flex items-center space-x-2 px-8">
                        <span class="bg-red-600 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                <span class="text-gray-600"><a href="{{'tel:'.$corporate->contactNumber}}">{{$corporate->contactNumber}}</a></span>
            </li>
        </ul>
    </div>
@endforeach

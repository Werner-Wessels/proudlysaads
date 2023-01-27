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

<div class="">
    <main class="p-8 justify-center align-middle content-center">

    <!-- This is an example component -->

            <div class="flex flex-wrap columns-3">
                <div class="max-w-2xl m-2 mx-auto">
                    <div class="shadow-md rounded-lg max-w-sm bg-gray-800 border-gray-700">

                            @isset($listing->images[0]->img_path)
                                <img class="rounded-t-lg p-8" src="{{ URL::asset('/storage/'.$listing->images[0]->img_path) }}" alt="product image">
                            @endisset

                        <div class="px-5 pb-5">
                                <h3 class="font-bold text-2xl tracking-tight text-white">{{$listing->title}}</h3>
                            <div class="items-center justify-between">
                                <p class="text-xs my-1 text-white"><span class="font-bold text-md">Description: </span>{{$listing->description}} </p>
                                <br>
                                <p class="text-sm my-1 text-white"><strong>Condition: </strong>{{ucfirst(trans($listing->condition))}}</p>
                                <p class="text-sm my-1 text-white"><strong>Created: </strong>{{$listing->created_at->diffForHumans()}}</p>
                                <span class="text-3xl font-bold text-white">R{{ number_format($listing->price, 2, ',', ' ') }}</span>
                            </div>
                            <div class="my-4">
                                <div class="justify-start mb-8 mt-8">
                                    <a class="p-2 text-2xl justify-self-start text-white bg-green-500 font-bold ring-4 ring-green-500 font-medium rounded-lg text-sm text-center break-normal" href="{{ url()->previous() }}">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>

    <main>
        <div class="mt-12">
            <h1 class="text-white text-center font-bold text-xl">More Images of the above Listing:</h1>
            @foreach($listing->images as $image)
                @if ($loop->first) @continue @endif
                <div class="max-w-md flex mx-auto">
                    <img class="rounded-t-lg p-8" src="{{ URL::asset('/storage/'.$image->img_path) }}" alt="product image">
                </div>
            @endforeach
        </div>

    </main>


</div>
<div class="mt-10 grid  justify-content-center justify-center mx-auto">
    <section>
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

        <div>
            <div class="mt-12 px-5 justify-content-center text-center p-8 bg-green-500">
                <h1 class="mt-4 text-xl mb-8 font-bold text-white">Contact the Seller</h1>
                <div class="grid">
                    <form method="POST" action="{{route('email', $listing->user->email)}}">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 pt-4 text-white">Name and Surname (Required)</label>
                            <input required value="{{old('name')}}" id="name" type="text"  placeholder="John Doe" name="name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-white bg-white border border-gray-200 rounded-md bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label for="email" class="block mb-2 pt-4 text-white">Your Email (Required)</label>
                            <input required value="{{old('email')}}" id="email" type="email"  placeholder="example@example.com" name="email" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-white bg-white border border-gray-200 rounded-md bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label for="number" class="block mb-2 pt-4 text-white">Your Contact Number (Required)</label>
                            <input required value="{{old('number')}}" id="number" type="text"  placeholder="082 123 4235" name="number" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-white bg-white border border-gray-200 rounded-md bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div>
                            <label for="message" class="block mb-2 pt-4 text-white">Your Message (Required)</label>
                            <textarea required name="message" id="message" cols="30" rows="10" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-white bg-white border border-gray-200 rounded-md bg-gray-600 text-gray-300 border-gray-700 focus:border-blue-400 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"></textarea>
                        </div>
                        <div class="mt-4">
                            <button
                                class="flex mt-2items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-500 rounded-md hover:bg-black focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                <span>Send </span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>
<x-layout.footer/>


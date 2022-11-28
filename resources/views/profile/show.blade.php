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

<div class="relative pt-10 pb-20 lg:pt-44 bg-gray-900">
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
        <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-lg text-center sm:text-5xl md:text-4xl lg:w-auto xl:text-4xl text-white">Welcome back <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->name}}</span></h1>


    </div>
</div>

<div class="relative bg-gray-900">
    <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">

            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-2xl text-center text-white">Your <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">Details</span></h1>
        <div class="bg-gray-800 border rounded-2xl p-4">
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3  text-lg text-center lg:w-auto text-white">Name: <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->name}}</span></h1>
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3  text-lg text-center lg:w-auto text-white">Email: <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->email}}</span></h1>
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3  text-lg text-center lg:w-auto text-white">Contact Number: <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->profile->contact_number ?? null ?: 'Contact Number Required' }}</span></h1>
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3  text-lg text-center lg:w-auto text-white">Address Line 1: <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->profile->address1 ?? null ?: 'Required' }}</span></h1>
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3  text-lg text-center lg:w-auto text-white">Address Line 2: <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->profile->address2 ?? null ?: 'Required' }}</span></h1>
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3  text-lg text-center lg:w-auto text-white">City: <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->profile->city ?? null ?: 'Required' }}</span></h1>
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3  text-lg text-center lg:w-auto text-white">Province: <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->profile->province ?? null ?: 'Required' }}</span></h1>
            <h1 class="sm:mx-auto sm:w-10/12 md:w-2/3  text-lg text-center lg:w-auto text-white">Member Since: <br class="lg:block hidden"> <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 dark:from-green-400 dark:to-green-500">{{$user->created_at->diffForHumans()}}</span></h1>

            <button class="flex text-center items-center align-middle justify-center mx-auto rounded bg-green-500 m-4 p-2 font-bold text-md text-white"><a href="{{route('profile.edit', $user->id)}}">Edit Profile</a></button>

        </div>


        <h1 class="mx-4 my-8 sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-2xl text-center text-white">Your <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 from-green-400 to-green-500">Listings</span></h1>
        <div>


            <div class="bg-gray-800 border rounded-2xl p-4">
                <table class="mx-auto justify-center">
                    <tr>
                        <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Title</th>
                        <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Created</th>
                        <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Price</th>
                        <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Status</th>
                        <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Visibility</th>
                        <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Action</th>
                    </tr>

                    @forelse ($listings as $listing)
                        <tr>
                            <td>
                                <p class="p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">
                                    {{$listing->title}}</p>
                            </td>
                            <td><p class="p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">
                                    {{$listing->created_at->diffForHumans()}}</p></td>
                            <td><p class="p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">
                                    R {{$listing->price}}</p></td>
                            <td> @if($listing->is_approved)
                                    <p class="p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">
                                        Approved</p>
                                @else
                                    <p class="p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">
                                        Pending</p>
                                @endif</td>
                            <td>@if($listing->is_active)
                                    <p class="p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto  text-white">
                                        Active</p>
                                @else
                                    <p class="p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto   text-white">
                                        Inactive</p>
                                @endif</td>
                            <td>
                                <div class="flex">
                                    <a href="{{route('listings.edit', $listing->id)}}" class="text-white bg-blue-500 rounded-full px-4 py-2">Edit</a>
                                    <form method="post" action="{{ route('listings.destroy', $listing->id) }}">
                                        <!-- here the '1' is the id of the post which you want to delete -->
                                        @csrf
                                        {{ method_field('DELETE') }}

                                        <button onclick="return confirm('Are you sure?')"  class="text-white bg-blue-500 rounded-full px-4 py-2" type="submit">Delete</button>
                                    </form>
                                </div>

                        </tr>
                    @empty
                        <div class="text-center items-center justify-center">
                            <p class="p-2 sm:mx-auto sm:w-10/12 md:w-2/3 text-lg text-center lg:w-auto text-white">You do not have any listings!</p>
                            <button class="rounded bg-green-500 m-4 p-2 font-bold text-md text-white"><a href="{{route('listings.create')}}">Start Selling Now!</a></button>
                        </div>
                    @endforelse
                </table>



            </div>




        </div>
        <h1 class="mx-4 my-8 sm:mx-auto sm:w-10/12 md:w-2/3 font-black  text-2xl text-center text-white">Your <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-500 from-green-400 to-green-500">Offers</span></h1>

        <div class="flex bg-gray-800 border justify-between mx-auto rounded-2xl p-4">
            <table class="mx-auto justify-center">
                <tr>
                    <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Title</th>
                    <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Date</th>
                    <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Offer</th>
                    <th class="underline p-2 sm:mx-auto text-xs md:text-xl sm:w-10/12 md:w-2/3 font-black  text-lg text-center lg:w-auto text-white">Status</th>
                </tr>

            @forelse ($listings as $listing)
                @foreach($listing->offers as $offer)
                    <tr>
                        <td><p class="p-2 sm:mx-auto sm:w-10/12 md:w-2/3 text-xs md:text-xl font-black text-lg text-center lg:w-auto text-white">{{$offer->listing->title}}</p></td>
                        <td><p class="p-2 sm:mx-auto sm:w-10/12 md:w-2/3 text-xs md:text-xl font-black text-lg text-center lg:w-auto text-white">{{$offer->created_at->diffForHumans()}}</p></td>
                        <td><p class="p-2 sm:mx-auto sm:w-10/12 md:w-2/3 text-xs md:text-xl font-black text-lg text-center lg:w-auto text-white">R {{$offer->price}}</p></td>
                        @if($offer->status === 1)
                        <td><p class="p-2 sm:mx-auto sm:w-10/12 md:w-2/3 text-xs md:text-xl font-black text-lg text-center lg:w-auto text-white">Pending</p></td>
                        @elseif($offer->status === 2)
                            <td><p class="p-2 sm:mx-auto sm:w-10/12 md:w-2/3 text-xs md:text-xl font-black text-lg text-center lg:w-auto text-white">Declined</p></td>
                        @else
                            <td><p class="p-2 sm:mx-auto sm:w-10/12 md:w-2/3 text-xs md:text-xl font-black text-lg text-center lg:w-auto text-white">Accepted</p></td>
                        @endif
                    </tr>
                @endforeach

            @empty
                <div class="text-center items-center justify-center">
                    <p class="p-2 sm:mx-auto sm:w-10/12 md:w-2/3 text-lg text-center lg:w-auto text-white">You do not have any offers!</p>
                </div>

            @endforelse
            </table>
        </div>

    </div>
</div>

<x-layout.footer/>




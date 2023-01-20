

<nav class="p-5 bg-gray-800 shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class="text-2xl cursor-pointer">
       <a class="z-10 " href="/" aria-label="logo">
                        <img class=" max-h-52" src="{{ URL::asset('/storage/proudly.png') }}" alt="" title=""/>
       </a>
      </span>

        <span class="text-3xl text-green-500 cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white p-4 w-full left-0 md:w-auto rounded-lg py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-2 my-4 md:my-2">
            <a href="/" class="text-lg hover:text-white text-green-500 hover:bg-green-500 p-2 rounded-lg duration-500">Home</a>
        </li>
        <li class="mx-2 my-4 md:my-2">
            <a href="{{route('listings.create')}}" class="text-lg hover:text-white text-green-500 hover:bg-green-500 p-2 rounded-lg duration-500">Sell</a>
        </li>

        <li class="mx-2 my-4 md:my-2">
            <a href="{{route('listings.index')}}" class="text-lg hover:text-white text-green-500 hover:bg-green-500 p-2 rounded-lg duration-500">Buy</a>
        </li>



{{--        <li class="mx-2 my-4 md:my-2">--}}
{{--            <a href="{{route('about')}}" class="text-lg hover:text-white text-green-500 hover:bg-green-500 p-2 rounded-lg duration-500">Categories</a>--}}
{{--        </li>--}}
{{--        <li class="mx-2 my-4 md:my-2">--}}
{{--            <a href="{{route('application.create')}}" class="text-lg hover:text-white text-green-500 hover:bg-green-500 p-2 rounded-lg duration-500">Regions</a>--}}
{{--        </li>--}}



        <li class="mx-2 my-4 md:my-2">
            <a href="/contact" class="text-lg hover:text-white text-green-500 hover:bg-green-500 p-2 rounded-lg duration-500">Contact</a>
        </li>
        @if(Auth::check())
            @if(Auth::user()->is_admin)
            <a href="{{url('/dashboard/dashboards/main')}}"><button class="bg-green-500 m-1 text-white duration-500 px-6 py-2 mx-2 hover:bg-green-400 rounded ">
                    Admin
                </button></a>
            @elseif(Auth::user()->is_dealer_principal)
            <a href="{{url('/dashboard/dashboards/main')}}"><button class="bg-green-500 m-1 text-white duration-500 px-6 py-2 mx-2 hover:bg-green-400 rounded ">
                    Admin
                </button></a>
        @endif
        @endif
        @guest
            <a href="{{route('register')}}"><button class="bg-green-500 m-1 text-white duration-500 px-6 py-2 mx-2 hover:bg-green-400 rounded ">
                    Sign Up
                </button></a>
            <a href="{{route('user_login')}}"><button class="bg-green-500 m-1 text-white duration-500 px-6 py-2 mx-2 hover:bg-green-400 rounded ">
                    Login
                </button></a>
        @endguest

        @auth
            <a href="{{route('profile.show', Auth::user()->id)}}">
                <button class="bg-green-500 m-1 text-white duration-500 px-6 py-2 mx-2 hover:bg-green-400 rounded ">
                    Account
                </button></a>
            <a href="{{route('logout')}}">
                <button class="bg-green-500 m-1 text-white duration-500 px-6 py-2 mx-2 hover:bg-green-400 rounded ">
                    Logout
                </button></a>
        @endauth
        <h2 class=""></h2>
    </ul>
</nav>





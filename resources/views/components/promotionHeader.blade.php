<div class="bg-gray-700 m-10 rounded">
    <div class="p-8 mx-auto justify-content-center justify-center relative space-y-8 text-center">
        <div class="text-white">
            <h1 class="text-center mb-4 sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-3xl lg:text-5xl text-center md:text-5xl lg:w-auto xl:text-5xl  text-green-500">Promote
                <br><span class="text-green-500">Listings </span>
            </h1>
            <br>
            <div class=" grid text-white justify-content-center justify-center text-center">
                <p class="bg-green-500 p-4 max-w-sm m-4 rounded-lg">Free Ads</p>
                <p class="bg-green-500 p-4 max-w-sm m-4 rounded-lg">Promote for 3 days @ R50,00</p>
                <p class="bg-green-500 p-4 max-w-sm m-4 rounded-lg">Promote for 7 days @ R100,00</p>
            </div>

            <div class="text-white text-2xl">
                <ul>
                    <li class="m-4 font-bold">Free Ads gives you full functionality of the Proudly SA Ads Platform</li>
                    <li class="m-4 font-bold">Promoted Ads will be promoted live on TikTok, Stream Bean Radio and other Social Media Platforms</li>
                </ul>

                @if(Auth::check())
                    <a href="{{route('profile.show', Auth::user()->id)}}">
                        <li class="flex mx-auto p-4 text-center justify-center rounded gap-x-2 gap-y-2 mb-2 bg-green-500">Promote your Ads Now!</li>
                    </a>
                    @endif
            </div>
            <br>
        </div>
    </div>
</div>

@include('layout.main')

<div class="bg-gray-700 m-10 rounded">
    <div class="p-8 mx-auto justify-content-center justify-center relative space-y-8 text-center">
        <div class="text-white">
            <h1 class="text-center mb-4 sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-3xl lg:text-5xl text-center md:text-5xl lg:w-auto xl:text-5xl  text-green-500">Promote Your
                <br><span class="text-green-500">Listing </span>
            </h1>
            <br>
            <div class="text-white text-2xl">
                <ul>
                    <li class="m-4 font-bold">Thank you {{$user->name}} for putting your trust with Proudly SA Ads</li>
                    <li class="m-4 font-bold">Please select one of the below options to promote your Listing.</li>
                </ul>
            </div>
            <div class=" grid text-white justify-content-center justify-center text-center">
                <p class="bg-green-500 p-4 max-w-sm m-4 rounded-lg">Promote for 3 days @ R75,00</p>
                <p class="bg-green-500 p-4 max-w-sm m-4 rounded-lg">Promote for 7 days @ R150,00</p>
            </div>

            <div class="text-white">
                <h3 class=" text-2xl">Banking Details:</h3>
                <p>Account Holder: Proudly SA Ads</p>
                <p>Banking Name: Capitec Bank</p>
                <p>Acount Number: 133 538 7569</p>
                <p>Branch Code: 470010</p>
                <p>Reference Number: Your Email Address</p>
                <br>
                <p class="font-bold">Please send proof of payment to the following email address: <a href="mailto:info@proudlysaads.co.za">info@proudlysaads.co.za</a></p>
            </div>

            <div class="text-white text-2xl">
                <ul>
                    <li class="m-4 font-bold">Promoted Ads will be promoted live on TikTok, Stream Bean Radio and other Social Media Platforms</li>
                </ul>

            </div>
            <br>
        </div>
    </div>
</div>

<x-layout.footer/>

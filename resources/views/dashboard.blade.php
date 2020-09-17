<x-app-layout>
    <x-slot name="header">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
            <div class="contailer">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <!-- <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83785041_498458534411374_6996071532669698048_n.jpg?_nc_ht=instagram.fktm8-1.fna.fbcdn.net&_nc_ohc=bK1pg92HeOYAX9D9jW1&oh=e67279888d6bd2267cf98c0150f15726&oe=5F8AEECD')" title="Woman holding a mug">
        </div> -->
        <div class="p-20">
            <img class="rounded-full " src="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83785041_498458534411374_6996071532669698048_n.jpg?_nc_ht=instagram.fktm8-1.fna.fbcdn.net&_nc_ohc=bK1pg92HeOYAX9D9jW1&oh=e67279888d6bd2267cf98c0150f15726&oe=5F8AEECD" alt="">
        </div>


        <div class=" lg:rounded-r p-20 flex flex-col justify-between leading-normal">
            <div class="mb-8">
            
            <div class="text-gray-900 font-bold text-xl mb-2 flex content-around ">
                <div class="pr-40 ">{{ $user->username }}</div>
                <div class="pl-80 text-blue-700"> <a href="#">Add New Post</a></div>
           
        </div>
            <div class="flex content-around ">
                    <div class="pr-5 ">
                        <div class="text-gray-800 text-center  "><strong>88</strong> posts</div>
                    </div>
                    <div class="pr-5 ">
                        <div class="text-gray-800 text-center "><strong>229</strong> followers</div>
                    </div>
                    <div class="pr-5 ">
                        <div class="text-gray-800 text-center "><strong>1,066</strong> following</div>
                    </div>

            </div>
            
            <div class="pt-4">
                <p class="text-gray-900 leading-none"><strong>{{ $user->profile->title }}</strong></p>
            </div>
            <div>
            <p class="text-gray-600">{{ $user->profile->description }}</p>
            </div>
            <div class="text-blue-700">
                <a href="https://www.google.com.np/"><strong>{{ $user->profile->url }}</strong> </a>
            </div>
            </div>
           
        </div>
        
            </div>

            </div>
        </div>
    </div>
        
    </x-slot>
    @livewireStyles

    @livewire('dashboard')

    @livewireScripts

    
</x-app-layout>

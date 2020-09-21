<x-app-layout>
    @livewireStyles
    <x-slot name="header">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
            <div class="contailer">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <!-- <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83785041_498458534411374_6996071532669698048_n.jpg?_nc_ht=instagram.fktm8-1.fna.fbcdn.net&_nc_ohc=bK1pg92HeOYAX9D9jW1&oh=e67279888d6bd2267cf98c0150f15726&oe=5F8AEECD')" title="Woman holding a mug">
        </div> -->
        <div class="p-20">
            <img class="rounded-full  w-48 " src="{{ $user->profile->profileImage() }}" alt="">
        </div>


        <div class=" lg:rounded-r p-20 flex flex-col justify-between leading-normal">
            <div class="mb-8">
            
            <div class="text-gray-900 font-bold  mb-2 flex content-around ">
                <div class="pr-40 flex">
                    <div class=" text-xl ">
                        {{ $user->username }}   
                    </div>
                    <div>
                       
                       @if ( $follows  == 1)
                            <div class="pl-2">
                                 @livewire('unfollow-button', ['user' => $user ])

                                     </div>
                                @else
                                <div class="pl-2">
                            @livewire('follow-button', ['user' => $user ])

                                     </div>
                                @endif
                    </div>
                   
                    
                </div>

                @can('update', $user->profile)
                <div class="pl text-xl text-blue-700"> <a href="/p/create">Add New Post</a></div>
                @endcan
        </div>
                @can('update', $user->profile)
                <div class="">
                    <div class="text-blue-700 text-left "> <a href="/profile/{{ $user->id }}/edit">Edit Profile</a></div>
                </div>
                @endcan
            <div class="flex content-around ">
                
                    <div class="pr-5 ">
                        <div class="text-gray-800 text-center  "><strong>{{ $postCount  }}</strong> posts</div>
                    </div>
                    <div class="pr-5 ">
                        <div class="text-gray-800 text-center "><strong>{{ $followersCount }}</strong> followers</div>
                    </div>
                    <div class="pr-5 ">
                        <div class="text-gray-800 text-center "><strong>{{ $followingCount }}</strong> following</div>
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

      
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-4 bg-gray-100">
            
                <div class="grid grid-flow-row grid-cols-3 grid-rows-2 p-3 gap-1">
                @foreach($user->posts as $post)
                        <div class="p-4 w-100">
                            <a href="/p/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" alt="">
                            </a>
                               
                        </div>
                @endforeach          
                </div>
          
    </div>




    @livewireScripts

</x-app-layout>

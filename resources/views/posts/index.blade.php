<x-app-layout>
    <x-slot name="header">
    
    </x-slot>
   
@foreach($posts as $post)
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-100 ">
                <div class="col-8 pr-48 pl-48">  
                <div class="pl-20" >
                            <div class="lg:flex pt-10 ">
                                 <img class="rounded-full  w-10 " src="{{ $post->user->profile->profileImage() }}" alt="">
                                 <div class="self-center p-2">
                                    <h3><strong>
                                        <a bg-blue-100 href="/profile/{{ $post->user->id }}">
                                          {{ $post->user->username }}
                                        </a>
                                        </strong>
                            </h3>
                            
                                 </div>
                            </div>
                            <div class="text-blue-700">
                                <strong><a href="/hello/">Follow</a></strong>
                                
                            </div>
                            
                        </div>    
                        <div class="p-50 w-50 h-50 pr-20 pl-20"> 
                        <a href="/profile/{{ $post->user->id }}">
                            <img class="" src="/storage/{{ $post->image }}" alt="">                              
                        </a>                 
                        </div>     
                        <div class="col-4">
                    <div>
                    <div class="pl-20">

                            <p> <span>
                            
                            </span> 
                            {{ $post->caption }} 
                            </p>
                            
                                
                            </div>
                     
                        <br>
                        <hr>
                       
                            
                        </div>
                </div>            
                </div>   
                 
    </div>
@endforeach
        <div class="row">
            <div class="col-12 lg:flex justify-center">
                {{ $posts->links() }}
            </div>
        </div>
    
</x-app-layout>

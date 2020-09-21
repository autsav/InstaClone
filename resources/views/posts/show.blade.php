<x-app-layout>
    <x-slot name="header">
    
    </x-slot>
   
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-100 lg:flex">
                <div class="col-8">      
                        <div class="p-10 w-50 pr-20">                  
                            <img class="" src="/storage/{{ $post->image }}" alt="">                              
                        </div>                
                </div>   
                <div class="col-4">
                    <div>
                        <div >
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
                        <br>
                        <hr>
                        <div>

                        <p> <span>
                            <h3>
                                <strong>
                                     <a href="/profile/{{ $post->user->id }}">
                                        {{ $post->user->username }}
                                    </a>
                                </strong>
                             </h3> 
                           </span> 
                           {{ $post->caption }} 
                        </p>
                           
                            
                        </div>
                            
                        </div>
                </div>   
    </div>
    
  
    
</x-app-layout>

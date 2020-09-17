<x-app-layout>
    <x-slot name="header">
    
    </x-slot>
   
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-100 lg:flex">
                <div class="col-8">      
                        <div class="p-10 w-50">                  
                            <img class="" src="/storage/{{ $post->image }}" alt="">                              
                        </div>                
                </div>   
                <div class="col-4">
                    <div>
                        <h3><strong>{{ $post->user->username }}</strong></h3>
                        <p>{{ $post->caption }}</p>
                    </div>
                </div>   
    </div>
    
  
    
</x-app-layout>

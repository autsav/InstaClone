<x-app-layout>
    <x-slot name="header">
    <form method="POST" action="/p" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                    <h1 class="text-xl font-semibold">Add New Post<h1>
            </div>

            <div class="row">
                <x-jet-label for="caption" value="Caption" />
                <x-jet-input class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" required autofocus autocomplete="caption" />

              <div class="row">
              @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
              </div>
            </div>
           
            <div class="row p-3">
                  <x-jet-label for="image" value="Post Image" />
                    <input type="file", id="image" name="image">
            </div>
            <div>
            @if ($errors->has('image'))
                    <strong>{{ $errors->first('image') }}</strong>
                            @endif
            </div>
          
            <div class="row pt-3">
             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> Add New Post </button>
          
            </div>
        

           
        </form>
    
        
    </x-slot>
    @livewireStyles

    <!-- @livewire('dashboard') -->

    @livewireScripts

    
</x-app-layout>

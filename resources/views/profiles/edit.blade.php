<x-app-layout>
    <x-slot name="header">
    <form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                    <h1 class="text-xl font-semibold">Edit Profile<h1>
            </div>

            <div class="row">
                <x-jet-label for="title" value="Title" />
                <x-jet-input class="block mt-1 w-full" type="text" name="title" :value="old('title') ?? $user->profile->title" required autofocus autocomplete="title" />

              <div class="row">
              @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
              </div>
            </div>

            <div class="row">
                <x-jet-label for="description" value="Description" />
                <x-jet-input class="block mt-1 w-full" type="text" name="description" :value="old('description') ?? $user->profile->description" required autofocus autocomplete="description" />

              <div class="row">
              @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
              </div>
            </div>

            <div class="row">
                <x-jet-label for="url" value="Url" />
                <x-jet-input class="block mt-1 w-full" type="text" name="url" :value="old('url') ?? $user->profile->url" required autofocus autocomplete="url" />

              <div class="row">
              @if ($errors->has('url'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('url') }}</strong>
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
             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> Update Profile</button>
          
            </div>
        

           
        </form>
    
        
    </x-slot>
    @livewireStyles

    <!-- @livewire('dashboard') -->

    @livewireScripts

    
</x-app-layout>

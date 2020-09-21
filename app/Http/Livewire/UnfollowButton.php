<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;

class UnfollowButton extends Component
{   
    // public $user;

    public $user_id;
 
 

    public function mount(User $user)
    {   
        
       $this->user_id = $user->id;
    }

    public function render(User $user )
    {       
       
        // $user = User::whereIn('id', $this->user)->get();

      
       
        
        return view('livewire.unfollow-button',[
            'user_id' => $user->id,           
        ]);
    }
  

}

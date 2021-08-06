<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{   public $logo;
    public function render()
    {   
        return view('livewire.navbar',["logo"=>$this->logo]);
    }
}

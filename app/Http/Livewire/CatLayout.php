<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CatLayout extends Component
{   public $cat ;
    public function render()
    {
        return view('livewire.cat-layout',['cat'=>$this->cat]);
    }
}

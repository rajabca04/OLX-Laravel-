<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardCat extends Component
{   public $category;
    public function render()
    {
        return view('livewire.card-cat',['category'=>$this->category]);
    }
}

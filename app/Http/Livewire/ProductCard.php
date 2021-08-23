<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{   public $pro;
    public function render()
    {   
        return <<<'blade'
            <div>
                <div class="card">
                    <img src="{{asset('products/'.$pro->image)}}", alt="" class="card-img-top" style="height: 230px;">
                    <div class="card-body">
                        <h4>
                            Rs. 688/-
                        </h4>
                        <h6>
                            Title
                        </h6>
                        <a href="" class="nav-link stretched-link"></a>   
                    </div>
                </div>
            </div>
        blade;
    }
}

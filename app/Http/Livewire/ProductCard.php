<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="col-lg-3">
                <div class="card">
                    <img src="" alt="" class="card-img-top">
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
            </div>
        blade;
    }
}

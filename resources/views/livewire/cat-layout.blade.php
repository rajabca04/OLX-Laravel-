<div>
    <div class="container mt-5">
        <div class="row">
            @foreach ($cat as $c )
                @if ($c->child()->count() > 0)   
            <div class="col-lg-3">
                @livewire('card-cat',["category"=>$c]);
            </div>
            @endif
            @endforeach
           
        </div>
    </div>
</div>

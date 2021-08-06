@extends('base')


@section('content')
    <div class="container mt-4">
        <div class="row">
            @foreach ($pro as $item)
                
            
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{asset('products/'.$item->image)}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4>
                            Rs. {{$item->price}}/-
                        </h4>
                        <h6>
                            {{$item->pro_title}}
                        </h6>
                        <a href="{{Route('view',['itemId'=>$item->id, 'catId'=>$item->category_id])}}" class="nav-link stretched-link"></a>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-10 mt-4">
            {{$pro->links()}}
        </div>
    </div>
@endsection
@extends('base')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-lg-12 mt-3">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">Seller Details</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">Seller Name</div>
                                    <div class="col">{{$item->seller_name}}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Seller Contact</div>
                                    <div class="col">{{$item->seller_contact}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border border-muted mt-3 py-1 rounded">
                            <p class="lead">{{$item->address}}({{$item->city}})</p>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-3">
                            <img src="{{asset('products/'.$item->image)}}" alt="" style="object-fit: cover; height:220px" class="card-img-top">
                            </div>
                            <div class="col-lg-9">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h4 class="h6">₹ {{$item->price}} /-</h4>
                                        <h6 class="small text-capitalize font-bolder text-truncate">{{$item->pro_title}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">product Details</div>
                            <div class="card-body">
                                <p class="text-muted">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h6>Related Products : ({{ count($pro) }})</h6>
            </div>
        <div class="col-lg-12 mt-5">
                <div class="row">
                    @foreach ($pro as $item)
                    <div class="col-3">
                        <div class="card mb-3">
                               <img src="{{asset('products/'.$item->image)}}" height="250" alt="" style="object-fit: cover; height:220px" class="card-img-top">
                               <!-- <img src="{{$item->image}}" alt=""  class="card-img-top"> -->
                            <div class="card-body">
                                <h4 class="h6">₹ {{$item->price}} /-</h4>
                                <h6 class="small text-capitalize font-bolder text-">{{$item->pro_title}}</h6>
                                <a href="{{ route('view',['itemId'=>$item->id,'catId'=>$item->category_id]) }}" class="nav-link stretched-link"></a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('insertItem')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">title:</label>
                                <input type="text" name="pro_title" value="{{old("pro_title")}}"class="form-control">
                                @error('pro_title')
                                    <div class="p text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">price:</label>
                                <input type="text" name="price" value="{{old("price")}}" class="form-control">
                                @error('price')
                                    <div class="p text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">seller_name:</label>
                                <input type="text" name="seller_name" value="{{old("seller_name")}}" class="form-control">
                                @error('seller_name')
                                    <div class="p text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">seller_contact:</label>
                                <input type="text" name="seller_contact" value="{{old("seller_contact")}}" class="form-control">
                                @error('seller_contact')
                                    <div class="p text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">description:</label>
                                <input type="text" name="description" value="{{old("description")}}" class="form-control">
                                @error('description')
                                    <div class="p text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">

                                <label for="">category:</label>
                                <select class="form-select" name="category_id">
                                @foreach ($cat as $item )
                                @php
                                    
                                    if($item->parent_id == 0){
                                        $flage= 1;
                                    }
                                    else {
                                        $flage= 0;
                                    }
                                @endphp
                                    <option value="{{$item->id}}" <?= ($flage == 1)? "disabled": ""; ?>>{{$item->title}}</option>
                                @endforeach
                                </select>


                                <a href="#model" class="nav-link" data-bs-toggle="modal">Add category</a>
                                

                            </div>

                            <div class="mb-3">
                                <label for="">address:</label>
                                <input type="text" name="address" value="{{old("address")}}" class="form-control">
                                @error('address')
                                    <div class="p text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">city:</label>
                                <input type="text" name="city" value="{{old("city")}}" class="form-control">
                                @error('city')
                                    <div class="p text-danger small">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Image:</label>
                                <input type="file" name="image" value="{{old("image")}}" class="form-control">
                                @error('image')
                                    <div class="p text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="submit" value="Submit" class="btn btn-success w-100">
                            </div>
                        </form>

                        <div class="modal" id="model">
                                    
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="{{Route('insertCat')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="">Main category</label>
                                                <select name="parent_id" id="" class="form-control">
                                                    <option value="0">Select main category</option>
                                                    @foreach ($main as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Category_title</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <input type="submit" class="btn btn-info w-100">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                    </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    .

@endsection()


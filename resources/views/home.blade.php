@extends('base')

@section('content')
    @livewire("cat-layout",['cat'=>$cat])
    @livewire('product-layout',['pro'=>$product])
@endsection
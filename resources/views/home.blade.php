@extends('base')

@section('content')
    @livewire("cat-layout",['cat'=>$cat])
@endsection
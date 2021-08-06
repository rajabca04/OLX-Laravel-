@extends('base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center text-success text-bold h4">Login</div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">password</label>
                                <input type="text" name="password" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

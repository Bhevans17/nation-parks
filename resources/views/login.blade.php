@extends('layout.layout')

@section('content')

<div class="container vh-100 py-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Login</h1>
        </div>
        <div class="col-md-12 mt-5">
            <form class="mx-auto w-50" action="#">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>
                <button class="btn btn-dark" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
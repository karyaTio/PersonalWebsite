@extends('layouts.dashboard') @section('content')
<div class="container my-5">
    <h3 class="text-center">Login</h3>
    <hr>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="/login">
                @csrf
                <div class="form-group">
                    <label for="name">Email address</label>
                    <input name="email" type="email" class="form-control" id="name" placeholder="Enter email..." required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @include('partials.error')
            </form>
        </div>
    </div>
</div>
@endsection

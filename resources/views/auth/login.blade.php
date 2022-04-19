@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h3>Login</h3>
        </div>
        <div class="col-md-6">
            <form method="post" action="{{ route('login.authenticate') }}">
                @csrf

                @include('layouts.partials.messages')

                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" class="form-control" type="text" name="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>

                <a class="" href="{{ route('register.show') }}">Create acount</a><br>

                <div class="form-group mt-2">
                    <button class="btn btn-warning" type="submit">Login</button>
                </div>

            </form>

        </div>
    </div>
@endsection

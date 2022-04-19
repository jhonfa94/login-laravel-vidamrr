@extends('layouts.app')
@section('title', 'Register')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h3>Registro de usuarios</h3>
        </div>
        <div class="col-12 col-sm-8 col-md-4">
            <form method="post" action="{{ route('register.store') }}">
                @csrf

                @include('layouts.partials.messages')

                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" class="form-control" type="text" name="username" value="{{ old('username') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                    {{-- <div class="alert alert-danger" role="alert">
                        {{ $errors->first('email') }}
                    </div> --}}
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password confirmation</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                </div>

                <a class="" href="{{ route('login.show') }}">Login</a><br>

                <div class="form-group mt-2">
                    <button class="btn btn-primary" type="submit">Registrarse</button>
                </div>
            </form>

        </div>
    </div>

@endsection

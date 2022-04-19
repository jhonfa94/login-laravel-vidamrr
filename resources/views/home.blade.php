@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <h1>Home</h1>

    @auth
        <p>Bienvenido <b>{{ auth()->user()->name ?? auth()->user()->username }}</b>, estás autenticado en la página</p>

        {{-- <p>
            <a href="{{ route('logout.index') }}" class="btn btn-sm btn-danger">Cerrar sessión</a>
        </p> --}}

    @endauth

    @guest
        <p>No estás autenticado en la página, por favor inicia sesión. <br>
        <a href="{{ route('register.show') }}" class="btn btn-sm btn-info">Registrarse</a>
        </p>
    @endguest

@endsection

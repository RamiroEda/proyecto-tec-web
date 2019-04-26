@extends('layouts.layout')

@section('title')
    <title>Login</title>
@endsection

@section('css')
@endsection

@section('popUp')
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                {!!Form::open(array('url'=>'/login','class'=>'sign-box', 'method'=>'post'))!!}
                    <div class="sign-avatar">
                        <img src="{{asset('Template/img/avatar-sign.png')}}" alt="">
                    </div>
                    <header class="sign-title">Iniciar sesión</header>
                    <div class="form-group">
                        {!!Form::text('usuario', null ,['class'=>'form-control', 'placeholder'=>'Usuario', 'id'=>'usuario'])!!}
                    </div>
                    <div class="form-group">

                        {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contreseña', 'id'=>'password'])!!}
                    </div>
                    <button type="submit" class="btn btn-rounded">Iniciar Sesión</button>
                    <p class="sign-note"><a href="sign-up.html">Registrarse</a></p>
                {!!Form::close()!!}
            </div>
        </div>
    </div><!--.page-center-->
@endsection

@section('scripts')
@endsection

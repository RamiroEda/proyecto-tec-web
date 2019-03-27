@extends('layouts.layout')

@section('title')
    <title>Login</title>
@endsection

@section('css')
@endsection

<!body>
@section('content')
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <!form class="sign-box">
                {!!Form::open(array('class'=>'sign-box', 'method'=>'post'))!!}
                    <div class="sign-avatar">
                        <img src="{{asset('/img/avatar-sign.png')}}" alt="">
                    </div>
                    <header class="sign-title">Iniciar sesión</header>
                    <div class="form-group">
                        <!input type="text" class="form-control" placeholder="Usuario"/>
                        {!!Form::text('usuario', null ,['class'=>'form-control', 'placeholder'=>'Usuario', 'id'=>'usuario'])!!}
                    </div>
                    <div class="form-group">
                        <!input type="password" class="form-control" placeholder="Contraseña"/>

                        {!!Form::password('pass', ['class'=>'form-control', 'placeholder'=>'Contreseña', 'id'=>'pass'])!!}
                    </div>
                    <button type="submit" class="btn btn-rounded">Iniciar Sesión</button>
                    <p class="sign-note"><a href="sign-up.html">Registrarse</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                {!!Form::close()!!}
                <!/form>
            </div>
        </div>
    </div><!--.page-center-->
@endsection
<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/tether/tether.min.js"></script>
<script src="js/lib/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>
<!/body>
</html>

@extends('layouts.layout')

@section('title')
    <title>login</title>
@endsection

@section('css')
@endsection

<!body>
@section('popUp')
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <!form class="sign-box">
                {!!Form::open('url'=>'/login', 'class'=>'sign-box', 'method'=>'post')!!}
                    <div class="sign-avatar">
                        <img src="{{asset('/img/avatar-sign.png')}}" alt="">
                    </div>
                    <header class="sign-title">Iniciar Sesión</header>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Usuario"/>
                    </div>
                    <div class="form-group">
                        <!input type="password" class="form-control" placeholder="Contraseña"/>
                        {!!Form::text('contrasena', null, ['class'=>'form-control', 'placeholder'=>'Contraseña', 'id'=>'usuario'])!!}
                    </div>
                    <button type="submit" class="btn btn-rounded">Sign in</button>
                    <p class="sign-note"><a href="sign-up.html">Sign up</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                {!!Form::close!!}
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

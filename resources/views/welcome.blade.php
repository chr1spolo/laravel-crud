@extends('app')

@section('Title', 'Login')

@section('customCss')

    <style>
        body{
            background: url(https://orig00.deviantart.net/00a8/f/2008/296/0/a/0a72ce91e77607214faf9c51691d0301.jpg);  
            color: #fff;
        }
        .vertical-offset-100{
            padding-top:100px;
        }

        .center{
            float:none;
            margin: 0 auto;
        }
        .c-white, .form-check-label{
            color: #0275d8 !important;
            margin: 18px 0px;
        }
        .c-title{
            text-align:left;
            font-size: 16px;
        }
        .card-custom-color{
            background: rgba(10, 24, 78, 0.92);
        }
        .form-custom{
            background: transparent !important;
            border: 1px solid white;
            border-top-color: transparent !important;
            border-left-color: transparent !important;
            border-right-color: transparent !important;
            color: #0675d8 !important;
        }
        .form-custom:active, .form-custom:visited, .form-custom:focus{
            font-family: 'Saira', sans-serif;
            font-style: italic;
        }
        .passNotMatch{
            border-color: red !important;
        }
        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 30px #0a174a inset;
            -webkit-text-fill-color: #0675d8;
        }
    </style>

@endsection
    
@section('Content')

    <div class="row vertical-offset-100">
        <div class="col-md-6 col-lg-4 center">
            <div class="card card-custom-color mb-3">
                <div class="card-block">
                    <h4 class="c-title c-white">{{ $title }}</h4>
                    <h4 class="c-title c-white">Ingresa tus datos</h4>
                    <form action="{{ url('post/'.$action) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" class="form-control form-custom" name="email" placeholder="Ingresa tu email" required>
                            <small id="emailHelp" class="form-text text-muted">No compartiremos tu email.</small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-custom" name="password" placeholder="Ingresa tu contraseña" required>
                        </div>
                        @if ($title === 'Logueate')
                            <div class="form-group">
                                <span>
                                    ¿No tienes cuenta? <br>
                                    <a href="{{ url('/register') }}">
                                    Registrate aquí
                                    </a>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn-block btn-outline-primary btn" value="Iniciar sesion">
                            </div>
                        @else
                           <div class="form-group">
                                <input type="password" name="confirm_password" class="form-control form-custom animated" placeholder="Confirma tu contraseña" required>
                            </div>
                            <div class="form-group">
                                <span>
                                    <a href="{{ url('/') }}">
                                    Volver al inicio
                                    </a>
                                </span>
                            </div>
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="form-group">
                                <input type="submit" class="btn-block btn-outline-primary btn" value="Iniciar sesion">
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@if ($title != 'Logueate')
    @section('customJs')
        <script>
            $(document).ready(function(){
                $('input[name=confirm_password]').on('keyup keydown blur' , function(){
                    if( $(this).val() != $('input[name=password]').val() )
                    {
                        $(this).addClass("passNotMatch")
                    }
                    else if( $(this).val() == 0 || $(this).val() === $('input[name=password]').val() )
                    {
                        $(this).removeClass("passNotMatch")
                    }
                })
            })
        </script>
    @endsection
@endif
@extends('layouts.default', ['title' => 'Babor connexion'])

@section('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<div class="d-none d-sm-block">
    <div class="d-none d-sm-block singin-nav" style="background: #9d1e65;">
        <div class="px-5">
            <nav class="row navbar navbar-expand-sm font-weight-bold">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav col">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="#" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Fr</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="navbar-brand" href="{{route('home')}}" style="color: #fff;"><img src="{{asset('images/Logo45.png')}}"></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav col">
                        <li class="nav-item d-none d-lg-block">
                            <a class="navbar-brand" href="{{route('home')}}" style="color: #fff;"><img src="{{asset('images/Logo45.png')}}"></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item d-sm-none d-md-block">
                            <a class="nav-link" style="color: #fff;">Pas encore membre ?</a>
                        </li>
                        <li class="nav-item d-sm-none d-md-block">
                            <a class="nav-link" href="{{route('sing_up', ['ref' => 'lading'])}}" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Rejoindre Babor</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none">
                            <a class="nav-link" href="{{route('sing_up', ['ref' => 'lading'])}}" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Créer un compte</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 singin-content pb-5">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <h4>Connecte-toi sur Badoo</h4>
                </div>
                <div class="row mr-5">
                    <p>Saisis tes identifiants de connexion. <a href="{{route('sing_up', ['ref' => 'lading'])}}">Inscris-toi ici</a> si ce n'est pas encore fait !</p>
                </div>
                <div class="row">

                    <div class="alert alert-danger" style="display: none"></div>

                    <form class="col-sm-12" method="post" action="" id="singInSubmit">

                        {{csrf_field()}}

                        <div class="form-group row mb-4">
                            <label for="email" class="mr-4">Identifiant</label>
                            <div class="col-md-8 col-sm-12">
                                <input type="text" name="login" class="form-control" id="login"  placeholder="E-mail ou numéro de téléphone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="">Mot de passe</label>
                            <div class="col-md-8 col-sm-12">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                            </div>
                        </div>
                        <div class="form-check my-4" style="margin-left: 100px;">
                            <input class="form-check-input" type="checkbox" name="remember" value="1" id="check">
                            <label class="form-check-label" for="check">
                                Se souvenir de moi
                            </label>
                        </div>
                        <div class="singin-btn-validate" style="margin-left: 100px;">
                            <button type="submit" class="btn font-weight-bold" role="button" id="button">Se connecter</button>
                        </div>
                        <p style="margin-left: 110px;" class="mt-2"><a href="" style="color: #a1a1a1;">Mot de passe oublié ?</a></p>
                    </form>

                </div>
            </div>

            <div class="col-md-3 col-sm-12 box2">
                <p class="my-4 text-center">Se connecter avec :</p>
                <div class="row">
                    <div class="col-md-12 col">
                        <div class="row singin-btn1">
                            <a class="btn mb-3 mx-auto bg-dark" href="#" role="button"><i style="margin-right: 8px;" class="fa fa-facebook-official" aria-hidden="true"></i> <small class="font-weight-bold">Facebook</small></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col">
                        <div class="row singin-btn2">
                            <a class="btn mx-auto bg-warning" href="#" role="button"><i style="margin-left: -10px; margin-right: 10px;" class="fa fa-google" aria-hidden="true"></i> <small class="font-weight-bold">Google</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
        <footer class="row">
            <div class="col-12 bg-white">
                <div class="row">
                    <div class="footerContent">
                        <a href="">A propos</a>
                        <a href="">CGU</a>
                        <a href="">Confidentialité</a>
                        <a href="">Liens rapides</a>
                        <a href="">Aide</a>
                    </div>
                </div>

                <div class="row">
                    <small class="ml-auto pr-4 pb-4 font-weight-bold">2018 © Babor</small>
                </div>
            </div>
        </footer>
    </div>
</div>

<!--singin page on mobile-->
<div class="mobile-bg d-block d-sm-none" style="height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-4">
                        <small><a href="{{route('home')}}">Retour</a></small>
                    </div>

                    <div class="col-8">
                        <div class="ml-auto">
                            <img src="{{asset('images/Logo45.png')}}" style="width: 150px; height: 30px; margin-bottom: 80px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pl-4 wow fadeInUp">

            <div class="alert alert-danger" style="display: none"></div>

            <form class="col-12" method="post" action="" id="singInMobSubmit">

                {{csrf_field()}}

                <div class="form-group row mb-4">
                    <div class="col-12">
                        <input type="text" name="login" class="row form-control" id="loginMob"  placeholder="E-mail ou numéro de téléphone">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <input type="password" name="password" class="row form-control" id="passwordMob" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="form-check my-4">
                    <input class="form-check-input" name="remember" type="checkbox" checked value="1" id="check">
                    <label class="form-check-label" for="check">
                        Se souvenir de moi
                    </label>
                </div>
                <div class="col-10">
                    <div class="row mx-auto">
                        <button class="btn btn-primary w-100" role="button" id="buttonMob">Se connecter</button>
                    </div>
                </div>
                <p class="mx-auto text-center p-2"><a href="" style="color: #b6b6b6;">Mot de passe oublié ?</a></p>
            </form>
        </div>
    </div>
</div>

<script>

    $(function () {

        var idLogin        = $('#login');
        var idPassword     = $('#password');
        var idMobLogin     = $('#loginMob');
        var idMobPassword  = $('#passwordMob');
        var idbutton       = $('#button');
        var idMobbutton    = $('#buttonMob');


        idLogin.add(idMobLogin).focus();

        $(document).on('blur', '#login, #loginMob', function () {

            var login    = idLogin.val();
            var loginMob = idMobLogin.val();

            if(login == ''){

                idbutton.attr('disabled', 'disabled').css('cursor', 'not-allowed');
            }else{

                idbutton.removeAttr('disabled').css('cursor', 'pointer');
            }

            if(loginMob == ''){

                idMobbutton.attr('disabled', 'disabled').css('cursor', 'not-allowed');
            }else{

                idMobbutton.removeAttr('disabled').css('cursor', 'pointer');
            }

        });



        $(document).on('submit', '#singInSubmit, #singInMobSubmit', function (event) {

            event.preventDefault();

            $.ajax({
                url: "{{route('sing_in.check')}}",
                method: 'POST',
                data: $(this).serialize(),
                success: function (result) {

                    if(result != ''){

                        $('.alert').html(result).show();
                        idPassword.add(idMobPassword).val('');
                    }else{
                        window.location = "{{route('home')}}";
                    }
                }
            });


        });
    });
</script>


@stop

@extends('layouts.default', ['title' => 'Babor inscription'])

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
                                <a class="nav-link" style="color: #fff;">Déjà membre ?</a>
                            </li>
                            <li class="nav-item d-sm-none d-md-block">
                                <a class="nav-link" href="{{route('sing_in', ['ref' => 'enjoy'])}}" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">connexion</a>
                            </li>
                            <li class="nav-item d-sm-block d-md-none">
                                <a class="nav-link" href="{{route('sing_in', ['ref' => 'enjoy'])}} style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Connexion</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 singup-content pb-5">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="row">
                        <h3>Crée un nouveau profil</h3>
                    </div>
                    <div class="row mr-5">
                        <p>Rejoins la <strong>communauté des nouveaux amis sur Babor ! Rencontre et chatte.</strong></p>
                    </div>
                    <div class="row mb-5">

                        <form class="col-sm-12" id="ajaxSubmit" method="post" action="">

                            {{csrf_field()}}

                            <div class="form-group row mb-4">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="row form-control" id="name" placeholder="Prénom">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <div class="col-sm-4">
                                    <select class="row form-control" name="day">
                                        <option value="">Jour...</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="row form-control" name="month">
                                        <option value="">Mois...</option>
                                        <option value="1">janvier</option>
                                        <option value="2">février</option>
                                        <option value="3">mars</option>
                                        <option value="4">avril</option>
                                        <option value="5">mai</option>
                                        <option value="6">juin</option>
                                        <option value="7">juillet</option>
                                        <option value="8">août</option>
                                        <option value="9">septembre</option>
                                        <option value="10">octobre</option>
                                        <option value="11">novembre</option>
                                        <option value="12">décembre</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="year" class="row form-control" id="" placeholder="Année...">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <div class="col-sm-12">
                                    <input type="search" name="city" class="row form-control" id="" placeholder="Saisir ton emplacement">
                                    <span class="error"></span>
                                    <small id="emailHelp" class="form-text text-muted ml-3">p. ex. cotonou, Benin</small>
                                </div>
                            </div>
                            <div class="form-check form-check-inline mb-4 mr-5">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="homme">
                                <label class="form-check-label" for="inlineRadio1">Homme</label>
                            </div>
                            <div class="form-check form-check-inline mb-4">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="femme">
                                <label class="form-check-label" for="inlineRadio2">Femme</label>
                            </div>
                            <div class="form-group row mb-4">
                                <div class="col-sm-12">
                                    <input type="email" name="email" class="row form-control" id="email" placeholder="E-mail ou numéro de téléphone">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" name="password" class="row form-control" id="password" placeholder="Crée ton mot de passe">
                                    <span class="error"></span>
                                    <small id="emailHelp" class="form-text text-muted ml-3">Le mot de passe doit comprendre au moins 5 caractères</small>
                                </div>
                            </div>
                            <div class="form-check my-4" style="margin-left: 100px;">
                                <input class="form-check-input" type="checkbox" name="remember" value="1" id="check" checked>
                                <label class="form-check-label" for="check">
                                    Se souvenir de moi
                                </label>
                            </div>
                            <div class="singin-btn-validate" style="margin-left: 100px;">
                                <button type="submit" class="btn col-6 row font-weight-bold" role="button">S'inscrire</button>
                            </div>

                        </form>

                    </div>
                    <small style="font-size: 11px;">En continuant, tu confirmes avoir lu et accepté nos <a href="">Conditions Générales d'Utilisation</a>, notre <a href="">Politique de Confidentialité</a> ainsi que notre <a href="">Politique en matière de Cookies</a></small>
                </div>
                <div class="col-md-3 col-sm-12" style="margin-top: 40px;">
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
                        <small class="ml-auto pr-4 pb-4 font-weight-bold">{{date('Y').' © Babor'}} </small>
                    </div>
                </div>
            </footer>
        </div>
    </div>




    <!--singup page on mobile-->
    <div style="height: 100vh;" class="bg-light">
        <div class="container  d-block d-sm-none">
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

            <div class="row">
                <form class="col-12 px-4" method="post" action="" id="sinUpSumbit">

                    {{csrf_field()}}

                    <div class="stepOne wow fadeInUp">
                        <div class="row">
                            <h4 class="mx-auto text-center">Tu es :</h4>
                        </div>

                        <div class="row bg-white mx-1 rounded mt-5 mb-3 py-1 border">
                            <div class="mx-auto  form-check form-check-hide form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="mob-inlineRadio1" value="homme">
                                <label class="form-check-label" for="mob-inlineRadio1">Homme</label>
                            </div>
                        </div>
                        <div class="row bg-white mx-1 rounded mb-5 py-1 border">
                            <div class="mx-auto form-check form-check-hide form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="mob-inlineRadio2" value="femme">
                                <label class="form-check-label" for="mob-inlineRadio2">Femme</label>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="mx-auto row btn btn-dark w-100 nextForm">Continuer</div>
                        </div>
                    </div>

                        <div class="content-hide">
                    <div class="stepTwo wow fadeInUp">
                        <div class="row">
                            <h4 class="mx-auto text-center">Comment tu t'appelles ?</h4>
                        </div>

                        <div class="form-group my-5">
                            <input type="text" class="row mx-auto form-control" id="yourName" placeholder="Insérer votre Prénom">
                            <small id="passwordHelpBlock" class="text-center form-text text-muted">Your password must be 8-20 characters</small>
                        </div>

                        <div class="mb-5">
                            <div class="mx-auto row btn btn-dark w-100 nextForm">Continuer</div>
                        </div>
                    </div>


                    <div class="stepThree">
                        <div class="row">
                            <h4 class="mx-auto text-center">Salut Prenom ! C'est quoi ta date de naissance ?</h4>
                        </div>
                        <div class="form-group my-5">
                            <input type="date" class="row mx-auto form-control" id="birthday" placeholder="Votre de naissance">
                            <small id="passwordHelpBlock" class="text-center form-text text-muted">Your password must be 8-20 characters</small>
                        </div>

                        <div class="mb-5">
                            <div class="mx-auto row btn btn-dark w-100 nextForm">Continuer</div>
                        </div>
                    </div>


                    <div class="stepFor">
                        <div class="row">
                            <h4 class="mx-auto text-center">Quel est ton emplacement ?</h4>
                        </div>
                        <div class="form-group my-5">
                            <input type="search" class="row mx-auto form-control" id="yourPlace" placeholder="Ville ou pays de residence">
                            <small id="passwordHelpBlock" class="text-center form-text text-muted">Your password must be 8-20 characters</small>
                        </div>

                        <div class="mb-5">
                            <div class="mx-auto row btn btn-dark w-100 nextForm">Continuer</div>
                        </div>
                    </div>


                    <div class="stepFive">
                        <div class="row">
                            <h4 class="mx-auto text-center">C'est quoi ton adresse email ?</h4>
                        </div>
                        <div class="form-group my-5">
                            <input type="email" class="row mx-auto form-control" id="mail" placeholder="Votre email">
                            <small id="passwordHelpBlock" class="text-center form-text text-muted">Your password must be 8-20 characters</small>
                        </div>

                        <div class="mb-5">
                            <div class="mx-auto row btn btn-dark w-100 nextForm">Continuer</div>
                        </div>
                    </div>

                    <div class="stepSix">
                        <div class="row">
                            <h4 class="mx-auto text-center">Choisir un mot de passe</h4>
                        </div>
                        <div class="form-group my-5">
                            <input type="password" class="row mx-auto form-control" id="pw" placeholder="Choisir un mot de passe">
                            <small id="passwordHelpBlock" class="text-center form-text text-muted">Your password must be 8-20 characters</small>
                        </div>

                        <div class="mb-5">
                            <div class="">
                                <input type="submit" class="row w-100 mx-auto btn btn-primary" value="C'est parti!">
                            </div>
                        </div>
                    </div>

                    <div class="stepSeven my-5">
                        <div class="row">
                            <h4 class="mx-auto text-center">Vérifie tes e-mails</h4>
                        </div>
                        <div class="row">
                            <small class="mx-auto text-center text-muted">Consulte l'e-mail que l'on vient de t'envonyer à l'adresse et pense à regarder dans tes spams au cas où !</small>                        </div>
                        <div class="row my-4">
                            <small id="resendMail" class="text-center mx-auto text-muted"><a href="">Renvoyer l'e-mail</a></small>
                        </div>
                    </div>
                        </div>
                </form>
            </div>

            <div class="row">
                <div class="mx-auto"><a href="{{route('home')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
            </div>
            
        </div>
    </div>

    <script src="{{asset('js/sing_up.js')}}"></script>

@stop
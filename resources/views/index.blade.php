@extends('layouts.default', ['title' => 'Babor'])

@section('content')


    <div class="all-content"><!--all content here. Important!-->

        <!--navbar on mobile-->
        <div class="d-none d-sm-block d-md-none">
            <nav class="navbar navbar-expand bg-tranparent font-weight-bold">
                <a class="navbar-brand" href="#" style="color: #fff;"><img src="{{asset('images/Logo45.png')}}"></a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page', ['encounters' => 'encounters'])}}" style="color: #fff;"><span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page', ['dating' => 'dating'])}}" style="color: #fff;"><span><i class="fa fa-globe" aria-hidden="true"></i></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sing_in')}}" style="color: #fff;"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Fr</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!--navbar on large screen-->
        <div class="px-5 d-none d-md-block">
            <nav class="row navbar navbar-expand-md bg-tranparent font-weight-bold">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav col">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Fr</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav col">
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{route('home')}}" style="color: #fff;"><img src="{{asset('images/Logo45.png')}}"></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page', ['encounters' => 'encounters'])}}" style="color: #fff;"><span><i class="fa fa-heart-o" aria-hidden="true"></i></span> <span class="d-md-none d-lg-inline-block">Rencontres</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page', ['dating' => 'dating'])}}" style="color: #fff;"><span><i class="fa fa-globe" aria-hidden="true"></i></span> <span class="d-md-none d-lg-inline-block">Trouver à côté</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border border-light rounded" href="{{route('sing_in')}}" style="color: #fff;">Se connecter</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    <!--All content pour mobile screen-->
    <div class="d-block d-sm-none mobile-bg" style="height: 100vh;">
        <div class="container">
            <div class="row homepage_mob">
                <div class="col-12">
                    <div class="row">
                        <div class="mx-auto mt-4"><img src="{{asset('images/Logo45.png')}}" style="width: 150px; height: 30px; margin-bottom: 100px;"></div>
                    </div>

                    <div class="row">
                        <h3 class="mx-auto mb-4 text-white">Bienvenue sur Babor</h5>
                    </div>

                    <div class="row btn-mob1">
                        <div class="col-10 offset-1">
                            <div class="row">
                                <a class="btn mb-2 btn w-100" href="{{route('sing_up')}}" role="button">Créer un compte</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h5 class="mx-auto mt-1.5 mb-2">ou</h5>
                    </div>

                    <div class="row btn-mob3">
                        <div class="col-10 offset-1">
                            <div class="row">
                                <a class="btn mb-1 w-100" href="#" role="button"><i class="fa fa-facebook-official" aria-hidden="true"></i> Continuer avec Facebook</a>
                            </div>
                        </div>
                    </div>

                    <div class="row btn-mob3">
                        <div class="col-10 offset-1">
                            <div class="row">
                                <a class="btn mb-1 w-100" href="#" role="button"><i class="fa fa-google" aria-hidden="true"></i> Continuer avec Google</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h6 class="my-3 mx-auto text-center"><a href="{{route('sing_in')}}" class=" font-weight-bold">Tu a deja un compte ? Connexion</a></h6>
                    </div>

                    <div class="row">
                        <div class="mx-auto text-muted text-center"><small>Ne t'inquiete pas! Nous ne postons rien sur Facebook</small></div>
                    </div>

                    <div class="row">
                        <a href="" class="mx-auto m-0"><img src="{{asset('images/boton_google_play2.png')}}"></a>
                    </div>

                    <div class="row footer" style="display: inline; font-size: 13px;">
                        <div class="mx-auto text-center text-muted footerbox">
                            <a href="">Renontres</a> - 
                            <a href="">Chatter</a> - </li>
                            <a href="">Langue de l'interface</a> - 
                            <a href="">Confidentialité</a> - 
                            <a href="">Conditions</a> - 
                            <a href="">Aide</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end-->




    <!--content body on desktop-->
    <div class=" d-none d-sm-block mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 homepage ">
                    <div class="row ">
                        <div class="col-12 col-lg-6 firtFace order-sm-last order-lg-first">
                            <div class="row">
                                <div class="col-11" >
                                    <div class="row text-center">
                                        <h3 class="mb-5 col-12">Déjà avec nous! Inscris-toi maintenant, lance-toi !</h3>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row firtFace-btn1">
                                                <a class="btn mb-3 mx-auto" href="#" role="button"><i style="margin-right: 8px;" class="fa fa-facebook-official" aria-hidden="true"></i> <small class="font-weight-bold">Connexion par Facebook</small></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row firtFace-btn2">
                                                <a class="btn mx-auto" href="#" role="button"><i style="margin-left: -10px; margin-right: 10px; color: #d34836;" class="fa fa-google" aria-hidden="true"></i> <small class="font-weight-bold">Connexion par google</small></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <small class="text-muted mx-auto mt-4">Nous ne publions rien sans ton consentement.</small>
                                    </div>
                                </div>
                                <div class="col-1 midleFace d-none d-lg-block">
                                    ou
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 secondFace order-sm-first order-lg-last">
                            <div class="row secondFace-home" style="padding-top: 120px; padding-bottom: 100px;">
                                <div class="col-12">
                                    <div class="row text-center">
                                        <h3 class="mb-4 col-12">Connecte-toi en répondant à quelques questions :</h3>
                                    </div>
                                    <div class="row">
                                        <p class="mb-3 mx-auto text-center">Tu es...</p>
                                    </div>


                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row secondFace-btn1">
                                                <div class="mx-auto btn form-check-hide form-check form-check-inline mb-4 mr-5">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Homme</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row secondFace-btn2">
                                                <div class="mx-auto btn form-check-hide form-check form-check-inline mb-4">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Femme</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-block d-lg-none">
                                        <div class="col-12">
                                            <div class="row">
                                                <p class="my-4 mx-auto font-weight-bold">ou</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row singupPage-home" style="padding-bottom: 50px; padding-top: 50px; padding-left: 50px;">
                                <div class="col-12">
                                    <div class="row mb-4">
                                        <span class="bg-light px-3 py-1 rounded-circle mr-5 go-backHome"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></span>
                                        <h3>Bientôt fini...</h3>
                                    </div>
                                    <div class="row mb-3">
                                        <form class="col-sm-12" method="post" action="">
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12">
                                                  <input type="text" class="row form-control" id="name" placeholder="Prénom">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-4">
                                                    <select class="row form-control">
                                                      <option>Jour...</option>
                                                      <option>01</option>
                                                      <option>02</option>
                                                      <option>03</option>
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
                                                  <select class="row form-control">
                                                    <option>Mois...</option>
                                                    <option>janvier</option>
                                                    <option>février</option>
                                                    <option>mars</option>
                                                    <option>avril</option>
                                                    <option>mai</option>
                                                    <option>juin</option>
                                                    <option>juillet</option>
                                                    <option>août</option>
                                                    <option>septembre</option>
                                                    <option>octobre</option>
                                                    <option>novembre</option>
                                                    <option>décembre</option>
                                                  </select>
                                                </div>
                                                <div class="col-sm-4">
                                                  <input type="text" class="row form-control" id="name" placeholder="Année...">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12">
                                                  <input type="search" class="row form-control" id="name" placeholder="Saisir ton emplacement">
                                                  <small id="emailHelp" class="form-text text-muted ml-3">p. ex. cotonou, Benin</small>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <div class="col-sm-12">
                                                  <input type="email" class="row form-control" id="email" placeholder="E-mail ou numéro de téléphone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                  <input type="password" class="row form-control" id="password" placeholder="Crée ton mot de passe">
                                                  <small id="emailHelp" class="form-text text-muted ml-3">Le mot de passe doit comprendre au moins 5 caractères</small>
                                                </div>
                                            </div>
                                            
                                            <div class="singin-btn-validate">
                                                <button type="submit" class="btn col-12 row text-white font-weight-bold" role="button">Créer un profil</button>
                                            </div>
                                            <p style="margin-left: 90px;" class="mt-2"><a href="" style="color: #b6b6b6;">Mot de passe oublié ?</a></p>
                                        </form>
                                    </div>
                                    <small class="row text-center" style="font-size: 11px; text-align: center;">En continuant, tu confirmes avoir lu et accepté nos <a href="">Conditions Générales d'Utilisation</a>, notre <a href=""> Politique de Confidentialité</a> ainsi que notre <a href=""> Politique en matière de Cookies</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <footer class="row">
                        <div class="col-12">
                            <div class="row">
                                <a class="mx-auto" href="" title="Télécharger babor sur google play"><img src="images/googleplaylogo.png" style="width: 250px; height: 150px;"></a>
                            </div>
                            <hr class="bg-dark">
                        </div>

                        <div class="col-12">
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
                                <small class="ml-auto pr-4 pb-4 font-weight-bold">{{date('Y')}} © Babor</small>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div><!--end all content-->
@stop

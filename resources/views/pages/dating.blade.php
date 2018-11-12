@extends('layouts.default', ['title' => 'Babor'])

@section('content')

<div class="bg-light">
<div class="container">
	<div class="row">
		<div class="col-lg-3 d-none d-lg-block" style="">
			<div class="row pb-5">
				<div class="singupBox_encounters">
					<div class="col-12" >
						<div class="row position-fixed" style="z-index: 10; width: 280px; height: 80px;">
							<div class="col-12 bg-light">
								<div class="row">
									<div class="mx-auto mt-4">
										<a href="{{route('home')}}"><img src="{{asset('images/Logo45.png')}}" style="width: 150px; height: 30px; margin-bottom: 50px;"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding-top: 85px;">
							<div class="col">
								<div class="row singin-btn1">
									<a class="btn mb-3 mx-auto bg-dark" href="#" role="button"><i style="margin-right: 8px;" class="fa fa-facebook-official" aria-hidden="true"></i> <small class="font-weight-bold">Facebook</small></a>
								</div>
							</div>
							<div class="col">
								<div class="row singin-btn2">
									<a class="btn mx-auto bg-warning" href="#" role="button"><i style="margin-left: -10px;" class="fa fa-google" aria-hidden="true"></i> <small class="font-weight-bold"></small></a>
								</div>
							</div>
						</div>

						<div class="row mb-4">
							<h4 class="mx-auto">Crée un profil</h4>
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
								
								<div class="singin-btn-validate" style="margin-left: 50px;">
									<button type="submit" class="btn px-4" role="button">S'inscrire</button>
								</div>
								<p style="margin-left: 50px;" class="mt-2"><a href="" style="color: #b6b6b6;">Mot de passe oublié ?</a></p>
							</form>
						</div>
						<small class="row text-center" style="font-size: 10px; text-align: center;">En continuant, tu confirmes avoir lu et accepté nos Conditions Générales d'Utilisation, notre Politique de Confidentialité ainsi que notre Politique en matière de Cookies</small>

						<div class="row">
							<p class="mx-auto mt-2">Déjà membre ? <a href="singin.php">Connecte-toi</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-9 d-none d-sm-block" style="">
			<div class="row">
				<header class="col-12">
					<div class="row d-none d-sm-block d-lg-none">
						<nav class="col-12 navbar navbar-expand-sm navbar-light">
							<a href=""><img src="{{asset('images/Logo45.png')}}" style="width: 150px; height: 30px;"></a>

						  <div class="collapse navbar-collapse">
						    <div class="nav-item">
						    	<p class="text-navbar d-none d-md-inline-block">Inscris-toi pour voir qui est autour de toi en ce moment !</p>
						    </div>

						    <ul class="navbar-nav ml-auto">
						      <li class="nav-item">
						      		<a class="btn mb-3 bg-dark font-weight-bold text-white" href="singup.php" role="button"><i class="fa fa-envelope-square" aria-hidden="true"></i> Creer un profil</a>
						      </li>
						      <li class="nav-item">
							        <div class="">
										<a class="btn bg-dark mx-2" href="#" role="button"><i style="margin-right: 8px;" class="fa fa-facebook-official" aria-hidden="true"></i>
										</a>
									</div>
						      </li>
						      
						      <li class="nav-item">
							    <div class="">
									<a class="btn bg-warning" href="#" role="button"><i style="margin-left: 10px; margin-right: 10px;" class="fa fa-google" aria-hidden="true"></i>
									</a>
								</div>
						      </li>
						    </ul>
						  </div>
						</nav>
					</div>

					<div class="row">
						<nav class="col-12 navbar navbar-expand-sm navbar-light bg-white encounter py-3">

						    <div class="row collapse navbar-collapse">
							    <ul class="navbar-nav">
							      <li class="nav-item">
							        <h5 style="color: #737373;" class="ml-4">Je suis ici pour sortir avec quelqu'un dans le monde entier</h5>
							      </li>
							    </ul>


							    <ul class="navbar-nav ml-auto scdNav">
							      <li class="nav-item">
							        <a class="nav-link " style="cursor: pointer;"><i class="fa fa-sliders fa-x" aria-hidden="true"></i></a>
							      </li>
							    </ul>
						    </div>
						</nav>
					</div>
				</header>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="row">
							
					</div>

					<hr class="row">
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
		</div>
	</div>
</div>
</div>

@stop
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
                            <a class="nav-link" href="encounters.php" style="color: #fff;"><span><i class="fa fa-heart-o" aria-hidden="true"></i></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #fff;"><span><i class="fa fa-globe" aria-hidden="true"></i></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="singin.php" style="color: #fff;"><i class="fa fa-user-o" aria-hidden="true"></i></a>
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
                            <a class="nav-link" href="encounters.php" style="color: #fff;"><span><i class="fa fa-heart-o" aria-hidden="true"></i></span> <span class="d-md-none d-lg-inline-block">Rencontres</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #fff;"><span><i class="fa fa-globe" aria-hidden="true"></i></span> <span class="d-md-none d-lg-inline-block">Trouver à côté</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border border-light rounded" href="{{route('sing_in')}}" style="color: #fff;">Se connecter</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

@stop

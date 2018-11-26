<form class="col-sm-12" id="ajaxSubmit" method="post" action="{{ route('check') }}">

    {{csrf_field()}}

    <div class="form-group row mb-4">
        <div class="col-sm-12">
            <input type="text" name="name" class="row form-control" id="name" placeholder="Prénom" value="{{ old('name') }}">
        </div>

        <span style="color: red; font-style: italic">
            {{ $errors->first('name') }}
        </span>
    </div>
    <div class="form-group row mb-4">

        @if($errors->first('day'))

            <div class="col-sm-4">
                <select class="row form-control" name="day" style="border-color: red">
                    <option value="">Jour...</option>
                    @for($i = 1; $i < 32; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>

        @else

            <div class="col-sm-4">
                <select class="row form-control" name="day">
                    <option value="">Jour...</option>
                    @for($i = 1; $i < 32; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>

        @endif

        @if($errors->first('month'))

            <div class="col-sm-4">
                <select class="row form-control" name="month" style="border-color: red">
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

        @else

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

        @endif

        @if($errors->first('year'))

            <div class="col-sm-4">
                <input type="text" name="year" class="row form-control" id="" placeholder="Année..." value="{{ old('year') }}" style="border-color: red">
                <span class="error"></span>
            </div>

        @else

            <div class="col-sm-4">
                <input type="text" name="year" class="row form-control" id="" placeholder="Année..." value="{{ old('year') }}">
                <span class="error"></span>
            </div>

        @endif

        <span style="color: red; font-style: italic">
            @if(isset($error))
                {{ $error }}
            @endif
        </span>

    </div>
    <div class="form-group row mb-4">
        <div class="col-sm-12">
            <input type="search" name="city" class="row form-control" id="" placeholder="Saisir ton emplacement" value="{{ old('city') }}">
            <span class="error"></span>
            <small id="emailHelp" class="form-text text-muted ml-3">p. ex. cotonou, Benin</small>
        </div>

        <span style="color: red; font-style: italic">
            {{ $errors->first('city') }}
        </span>
    </div>

    @if($errors->first('gender'))

        <div class="form-check form-check-inline mb-4 mr-5">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="homme">
            <label class="form-check-label" for="inlineRadio1" style="color: red">Homme</label>
        </div>
        <div class="form-check form-check-inline mb-4">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="femme">
            <label class="form-check-label" for="inlineRadio2" style="color: red">Femme</label>
        </div>

    @else

        <div class="form-check form-check-inline mb-4 mr-5">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="homme">
            <label class="form-check-label" for="inlineRadio1">Homme</label>
        </div>
        <div class="form-check form-check-inline mb-4">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="femme">
            <label class="form-check-label" for="inlineRadio2">Femme</label>
        </div>

    @endif

    <div class="form-group row mb-4">
        <div class="col-sm-12">
            <input type="email" name="email" class="row form-control" id="email" placeholder="E-mail ou numéro de téléphone" value="{{ old('email') }}">
            <span class="error"></span>
        </div>

        <span style="color: red; font-style: italic">
            {{ $errors->first('email') }}
        </span>

    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <input type="password" name="password" class="row form-control" id="password" placeholder="Crée ton mot de passe">
            <span class="error"></span>
            <small id="emailHelp" class="form-text text-muted ml-3">Le mot de passe doit comprendre au moins 5 caractères</small>
        </div>

        <span style="color: red; font-style: italic">
            {{ $errors->first('password') }}
        </span>

    </div>
    <div class="form-check my-4" style="margin-left: 100px;">
        <input class="form-check-input" type="checkbox" name="remember" value="1" id="check" checked>
        <label class="form-check-label" for="check">
            Se souvenir de moi
        </label>
    </div>

    <span style="color: red; font-style: italic">
        {{ $errors->first('remember') }}
    </span>

    <div class="singin-btn-validate" style="margin-left: 100px;">
        <button type="submit" class="btn col-6 row font-weight-bold" role="button">S'inscrire</button>
    </div>

</form>
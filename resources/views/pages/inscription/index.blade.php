<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inscription</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .required-field {
            color: red;
        }
        .bg-register-image {
            background-image: url('{{ asset('images/ins.png') }}'); /* Remplacez par le chemin de votre image */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Inscrivez-vous ici!!!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('inscription.register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="prenom">Prénom <span class="required-field">*</span></label>
                                        <input type="text" name="prenom" class="form-control form-control-user" id="prenom" placeholder="Votre prénom" value="{{ old('prenom') }}">
                                        @error('prenom')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="nom">Nom <span class="required-field">*</span></label>
                                        <input type="text" name="nom" class="form-control form-control-user" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                                        @error('nom')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="email">Email <span class="required-field">*</span></label>
                                        <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Votre Email" value="{{ old('email') }}">
                                        @error('email')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="telephone">Téléphone <span class="required-field">*</span></label>
                                        <input type="text" name="telephone" class="form-control form-control-user" id="telephone" placeholder="Votre téléphone" value="{{ old('telephone') }}">
                                        @error('telephone')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="dateNaissance">Date de Naissance <span class="required-field">*</span></label>
                                        <input type="date" name="dateNaissance" class="form-control form-control-user" id="dateNaissance" placeholder="Votre date de naissance" value="{{ old('dateNaissance') }}">
                                        @error('dateNaissance')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="adresse">Adresse <span class="required-field">*</span></label>
                                        <input type="text" name="adresse" class="form-control form-control-user" id="adresse" placeholder="Votre adresse" value="{{ old('adresse') }}">
                                        @error('adresse')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cni">Numéro National d'Identification <span class="required-field">*</span></label>
                                    <input type="text" name="cni" class="form-control form-control-user" id="cni" placeholder="Votre numéro national d'identification" value="{{ old('cni') }}">
                                    @error('cni')
                                        <small style="color: red;">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="password">Mot de Passe <span class="required-field">*</span></label>
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Mot de passe">
                                        @error('password')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="password_confirmation">Confirmer le Mot de Passe <span class="required-field">*</span></label>
                                        <input type="password" name="password_confirmation" class="form-control form-control-user" id="password_confirmation" placeholder="Confirmer le mot de passe">
                                        @error('password_confirmation')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">S'inscrire</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Mot de passe oublié ?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('auth.create') }}">Connectez-vous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>

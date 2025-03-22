@extends('app')

@section('contenu')
    <h1>Gestion des Tontines</h1>

    <!-- Bouton S'inscrire -->
    <div class="text-center mt-4 mb-4">
        <a href="#" class="btn btn-primary">S'inscrire</a>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Carte 1 -->
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top rounded-circle mx-auto d-block mt-3" src="{{ asset('images/foulard.jpeg') }}" alt="Photo de profil" style="width: 100px; height: 100px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tontine Foulard</h5>
                        <p class="card-text">participants</p>
                        <p class="card-text"><strong>30</strong></p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-check-circle text-success mx-1"></i>
                            <i class="fas fa-user-plus text-primary mx-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carte 2 -->
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top rounded-circle mx-auto d-block mt-3" src="{{ asset('images/jean.jpeg') }}" alt="Photo de profil" style="width: 100px; height: 100px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">P2 Référent Digital</h5>
                        <p class="card-text">Coach Moussa Ndiaye</p>
                        <p class="card-text"><strong>30</strong></p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-check-circle text-success mx-1"></i>
                            <i class="fas fa-user-plus text-primary mx-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carte 3 -->
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top rounded-circle mx-auto d-block mt-3" src="{{ asset('path/to/photo3.jpg') }}" alt="Photo de profil" style="width: 100px; height: 100px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">P3 Cloud</h5>
                        <p class="card-text">Coach Moussa Ndiaye</p>
                        <p class="card-text"><strong>40</strong></p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-check-circle text-success mx-1"></i>
                            <i class="fas fa-user-plus text-primary mx-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carte 4 -->
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top rounded-circle mx-auto d-block mt-3" src="{{ asset('path/to/photo4.jpg') }}" alt="Photo de profil" style="width: 100px; height: 100px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">P4 Développeur Mobile</h5>
                        <p class="card-text">Coach Moussa Ndiaye</p>
                        <p class="card-text"><strong>60</strong></p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-check-circle text-success mx-1"></i>
                            <i class="fas fa-user-plus text-primary mx-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top rounded-circle mx-auto d-block mt-3" src="{{ asset('path/to/photo4.jpg') }}" alt="Photo de profil" style="width: 100px; height: 100px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">P4 Développeur Mobile</h5>
                        <p class="card-text">Coach Moussa Ndiaye</p>
                        <p class="card-text"><strong>60</strong></p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-check-circle text-success mx-1"></i>
                            <i class="fas fa-user-plus text-primary mx-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

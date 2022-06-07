@extends('layout.auth')
@section('css')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
@endsection
@section('base')
    <div class="text-center container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <main class="form-signin">
                    <form class="">
                        <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg"
                            alt="" width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Inscription</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Koue max">
                            <label for="floatingInput">Nom et prénom</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe">
                            <label for="floatingPassword">Mot de passe</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPasswordConfirm"
                                placeholder="Confirmation mot de passe">
                            <label for="floatingPasswordConfirm">Confirmation mot de passe</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-dark mt-1" type="submit">Github</button>
                        <button class="w-100 btn btn-lg btn-danger mt-1" type="submit">Gmail</button>
                        <button class="w-100 btn btn-lg btn-secondary mt-1" type="submit">Appel</button>
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Inscription</button>
                    </form>
                </main>
            </div>
            <div class="col-4"></div>
        </div>

    </div>
@endsection

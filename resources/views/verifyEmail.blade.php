@extends('layouts.front')
@section('content')
<div class="container nav-margin">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifiez votre adresse mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           Un E-mail de confirmation vient d'être envoyer à l'adresse mail indiqué
                        </div>
                    @endif

                    Pour commencer, Merci de bien verifier votre E-mail avec le lien envoyé.
                    Si vous n'avez pas reçu le mail.
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Cliquez ici pour renvoyez un nouveau lien.</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

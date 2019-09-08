
@extends('layouts.app')

@section('title')
    2aaz-design Confirmation
@endsection

@section('meta')
    <meta name="robots" content="none,noindex,nofollow">
@endsection

<!-- Lien de la page actuelle -->
@section('link')

    <!-- Style des formulaires -->
    <link rel="stylesheet" href="{{ asset('css/form/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/media.css') }}">

@endsection

@section('content')

    <div class="confirmationPage">
            <h1>Confirmation de l'envoie de votre demande</h1>

            <p>Nous vous confirmons que votre demande à bien était transmise, cette dernière sera traitée le plus rapidement possible</p>

            <p>Pour tout autre demande, question rester en suspend nous vous invitons à téléphoner directement à Mr.Thith au numero inscrit dans le bas de la page</p>

            <p>Merci de votre visite</p>

            <p>Vous allez être redirigé vers la page d'accueil</p>

    </div>

    <input type="hidden" id="redirectTo">
@endsection

{{--Script de la page actuelle--}}
@section('script')

    <script src='{{ asset("js/ajax/form.js") }}'></script>

    {{-- Permet d'utiliser les routes de laravel en javascript --}}
    @routes

@endsection

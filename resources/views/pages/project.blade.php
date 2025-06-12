@extends('layouts.app')

@section('title', 'À Propos')

@section('content')
 <!-- En-tête de Page Début -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Nos Projets</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" wire:navigate href="{{asset(route('home'))}}">Accueil</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Projets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- En-tête de Page Fin -->
@livewire('our-work', ['onlyFeatured' => false])
@endsection
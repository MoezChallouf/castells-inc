@php
use Artesaos\SEOTools\Facades\SEOTools as SEO;

SEO::setTitle('Recrutement chez Castells Inc. - Carrières en Design et Construction à Montréal');
SEO::setDescription('Rejoignez Castells Inc. et contribuez à la création d’espaces luxueux à Montréal. Envoyez votre CV et postulez aux opportunités de carrière.');
SEO::setCanonical(url()->current());
SEO::opengraph()->setUrl(url()->current());
SEO::opengraph()->addProperty('type', 'website');
SEO::opengraph()->setTitle('Recrutement - Castells Inc.');
SEO::opengraph()->setDescription('Postulez dès aujourd’hui pour une carrière chez Castells Inc. à Montréal.');
SEO::twitter()->setSite('@castells_inc');
SEO::jsonLd()->setTitle('Recrutement - Castells Inc.');
SEO::jsonLd()->setDescription('Nous recherchons des talents passionnés par le design, la rénovation et la construction de luxe à Montréal.');
SEO::jsonLd()->addImage(asset('img/castells-1.png'));
@endphp

@extends('layouts.app')

@section('title', 'Recrutement')

@section('content')

<!-- En-tête de Page -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Recrutement</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="{{ route('home') }}">Accueil</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled">Recrutement</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Formulaire de Recrutement -->
<div class="container-fluid bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                    <div class="text-white text-center mb-4">
                        <h4 class="text-uppercase">Faites partie de l’équipe Castells</h4>
                        <p>Nous sommes à la recherche de talents passionnés par l’architecture, le design et la qualité artisanale.</p>
                    </div>
                    <img src="{{ asset('img/castells-1.png') }}" alt="Castells Recrutement" class="img-fluid rounded mx-auto d-block">
                </div>
            </div>
            <div class="col-lg-7 my-lg-5 py-5 pl-lg-5">
                <form id="recrutementForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control p-4" placeholder="Votre nom complet" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control p-4" placeholder="Votre email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control p-4" placeholder="Numéro de téléphone" required />
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control p-4" rows="5" placeholder="Parlez-nous de vous..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cv" class="font-weight-bold">Téléverser votre CV</label>
                        <input type="file" name="cv" id="cv" class="form-control-file border rounded p-2" required />
                    </div>
                    <div>
                        <button class="btn btn-primary py-3 px-5" type="submit">Postuler</button>
                    </div>
                    <div id="formSuccess" class="alert alert-success mt-3 d-none"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    }
});

$('#recrutementForm').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    $.ajax({
        type: "POST",
        url: "{{ route('recrutement.store') }}",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            $('#formSuccess').text(response.message).removeClass('d-none');
            $('#recrutementForm')[0].reset();
            setTimeout(() => {
                $('#formSuccess').addClass('d-none').text('');
            }, 3000); // Disparait après 3 secondes
        },
        error: function (xhr) {
            let errors = xhr.responseJSON.errors;
            alert(Object.values(errors).join("\n"));
        }
    });
});

</script>
@endsection

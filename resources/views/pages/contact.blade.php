@php
use Artesaos\SEOTools\Facades\SEOTools as SEO;

SEO::setTitle('Contactez Castells Inc. - Constructeurs de Luxe à Montréal');
SEO::setDescription('Prenez contact avec Castells Inc. pour vos projets de construction ou rénovation de luxe à Montréal. Adresse, email, téléphone et carte Google inclus.');
SEO::setCanonical(url()->current());
SEO::opengraph()->setUrl(url()->current());
SEO::opengraph()->addProperty('type', 'website');
SEO::opengraph()->setTitle('Contactez Castells Inc.');
SEO::opengraph()->setDescription('Prenez contact avec Castells Inc. à Montréal. Appelez-nous, envoyez un email ou visitez notre bureau.');
SEO::twitter()->setSite('@castells_inc'); // Replace with real handle
SEO::jsonLd()->setTitle('Contactez Castells Inc.');
SEO::jsonLd()->setDescription('Nous sommes basés à Montréal. Contactez-nous pour vos projets de construction ou rénovation.');
SEO::jsonLd()->addImage(asset('img/castells-1.png'));
@endphp

@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <!-- En-tête de Page Début -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Contactez-nous</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" wire:navigate href="{{asset(route('home'))}}">Accueil</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- En-tête de Page Fin -->

    <!-- Contact Début -->
<div class="container-fluid bg-white py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Info Column -->
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="bg-primary text-white rounded-lg shadow p-5 h-100 d-flex flex-column justify-content-center">
                    <div class="text-center mb-4">
                        <img src="{{ asset('img/castells-1.png') }}" alt="" class="img-fluid rounded" style="max-width: 180px; height: auto;">
                    </div>

                    <div class="d-flex align-items-start border border-light rounded p-3 mb-3">
                        <i class="flaticon-office display-4 text-white mr-3"></i>
                        <div>
                            <h5 class="mb-1">Notre Bureau</h5>
                            <p class="mb-0">Montréal, QC, Canada</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start border border-light rounded p-3 mb-3">
                        <i class="flaticon-email display-4 text-white mr-3"></i>
                        <div>
                            <h5 class="mb-1">Envoyez-nous un email</h5>
                            <p class="mb-0" style="word-break: break-word;">contact@castells.ca</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start border border-light rounded p-3">
                        <i class="flaticon-telephone display-4 text-white mr-3"></i>
                        <div>
                            <h5 class="mb-1">Appelez-nous</h5>
                            <p class="mb-0">438-408-1100</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Column -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="bg-light p-5 rounded shadow">
                    <form id="contactForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control py-3" placeholder="Votre Nom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control py-3" placeholder="Votre Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control py-3" placeholder="Sujet" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control py-3" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachments" class="font-weight-bold mb-2">Joindre des Photos</label>
                            <input type="file" name="attachments[]" class="form-control-file border rounded p-2" multiple>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary px-5 py-3" type="submit">Envoyer le message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Fin -->
<!-- Section Certifications -->
<div class="container-fluid py-5  text-white">
    <div class="container text-center">
        <h2 class="mb-3" data-aos="fade-down" data-aos-delay="100">Des certifications qui inspirent confiance</h2>
        <p class="mb-5 text-secondary" data-aos="fade-up" data-aos-delay="200">
            Castells Inc. est fièrement reconnu par les principales instances du secteur de la construction au Québec.
        </p>
        <div class="row justify-content-center align-items-center">
            <div class="col-6 col-sm-3 col-md-2 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{ asset('img/logos/rbq.jpg') }}" class="img-fluid grayscale-hover" alt="RBQ">
            </div>
            <div class="col-6 col-sm-3 col-md-2 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{ asset('img/logos/ccq.jpg') }}" class="img-fluid grayscale-hover" alt="CCQ">
            </div>
            <div class="col-6 col-sm-3 col-md-2 mb-4" data-aos="zoom-in" data-aos-delay="500">
                <img src="{{ asset('img/logos/acq.png') }}" class="img-fluid grayscale-hover" alt="ACQ">
            </div>
            <div class="col-6 col-sm-3 col-md-2 mb-4" data-aos="zoom-in" data-aos-delay="600">
                <img src="{{ asset('img/logos/cnesst.jpg') }}" class="img-fluid grayscale-hover" alt="CNESST">
            </div>
        </div>
    </div>
</div>



      <!-- En-tête de Page avec Fond de Carte Google Début -->
<div class="position-relative" style="height: 500px; overflow: hidden;">
    <!-- Intégration de la Carte Google -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.7913851018593!2d-73.62583071563662!3d45.55452199649598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9192eaf519ff9%3A0x90b63aa6c50f7a2f!2zQm91bCBDcsOpbWF6aWUgRSwgTW9udHLDqWFsLCBRQywgQ2FuYWRh!5e0!3m2!1sfr!2stn!4v1748346356893!5m2!1sfr!2stn" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>

</div>
<!-- En-tête de Page avec Fond de Carte Google Fin -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#contactForm').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        type: "POST",
        url: "{{ route('contact.store') }}",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                $('#formSuccess')
                    .text(response.message)
                    .removeClass('d-none');

                $('#contactForm')[0].reset();

                // Masquer le message de succès après 5 secondes
                setTimeout(() => {
                    $('#formSuccess').addClass('d-none');
                }, 5000);
            }
        },
        error: function (xhr) {
            let errors = xhr.responseJSON.errors;
            alert(Object.values(errors).join("\n"));
        }
    });
});


</script>
@push('scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Castells Inc.",
  "image": "{{ asset('img/castells-1.png') }}",
  "@id": "{{ url('/') }}",
  "url": "{{ url('/contact') }}",
  "telephone": "438-408-1100",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Montréal",
    "addressRegion": "QC",
    "addressCountry": "CA"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 45.5545219,
    "longitude": -73.6258307
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"
    ],
    "opens": "09:00",
    "closes": "17:00"
  },
  "sameAs": [
    "https://www.facebook.com/taylor.martin.castells.TMC",
  ]
}
</script>
@endpush


@endsection
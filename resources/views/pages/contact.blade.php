@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Contact Us</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" wire:navigate href="{{asset(route('home'))}}">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Contact Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5 ">
                       <div class="d-flex justify-content-center mb-4">
                            <img src="{{ asset('img/castells.jpg') }}" alt="" class="img-fluid" style="border-radius: 10px; max-width: 100%; height: auto; margin-top: -20px;">
                        </div>


                        <div class="d-inline-flex border border-secondary p-4 mb-4">
                            <h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Our Office</h4>
                                <p class="m-0 text-white">Montreal, QC, Canada</p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4 mb-4">
                            <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Email Us</h4>
                                <p class="m-0 text-white d-flex flex-wrap align-items-center">contact@castells.com</p>
                            </div>
                        </div>
                
                        <div class="d-inline-flex border border-secondary p-4">
                            <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Call Us</h4>
                                <p class="m-0 text-white">438-408-1100</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="formSuccess" class="alert alert-success mt-3 d-none"></div>
                        <form id="contactForm" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <input type="text" name="name" class="form-control p-4" id="name" placeholder="Your Name" required="required" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="subject" class="form-control p-4" id="subject" placeholder="Subject" required="required" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea name="message" class="form-control p-4" rows="6" id="message" placeholder="Message" required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label for="attachments" class="form-label font-weight-bold mb-2">Attach Files</label>
                            <input type="file" name="attachments[]" id="attachments" class="form-control-file border rounded p-2 " multiple />
                        </div>

                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

      <!-- Page Header with Google Map Background Start -->
<div class="position-relative" style="height: 500px; overflow: hidden;">
    <!-- Google Map Embed -->
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
<!-- Page Header with Google Map Background End -->

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

                // Hide success message after 5 seconds
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


@endsection
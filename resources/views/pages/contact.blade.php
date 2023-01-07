@extends('layouts.app')

@section('content')
    {{-- Header start --}}
    @include('includes.header')
    {{-- Header end --}}
    {{-- Contact Start --}}
    <div class="container-fluid pt-5">
        <div class="text-center mb-5">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row flex-lg-row flex-column-reverse px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                <p>
                    For any general inquiries, please fill in the following contact form.
                </p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store</h5>
                    <div class="mb-2 d-flex">
                        <i class="fa p-0 fa-map-marker-alt text-white d-flex justify-content-center align-items-center bg-primary"
                            style="width: 44px;height: 44px;border-radius: 4px; min-width: 44px;min-height: 44px"></i>
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold">Address :</h6>
                            <p>BUREAU N 3, PLATEFORME N 2 FAISANT PARTIE DU LOT
                                130 ZONE LOGISTIQUE KSAR EL MAJAZ PROVINCE FAHS
                                ANJRA - TANGER</p>
                        </div>
                    </div>
                    <div class="mb-2 d-flex">
                        <i class="fa fa-envelope text-white d-flex justify-content-center align-items-center bg-primary"
                            style="width: 44px;height: 44px;border-radius: 4px;"></i>
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold">Email :</h6>
                            <p>info@example.com</p>
                        </div>
                    </div>
                    <div class="mb-0 d-flex ">
                        <i class="fa fa-phone-alt text-white d-flex justify-content-center align-items-center bg-primary"
                            style="width: 44px;height: 44px;border-radius: 4px;"></i>
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold">Call :</h6>
                            <p>(+34) 653181825</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Contact End --}}
@endsection

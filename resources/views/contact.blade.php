@extends('layouts.layout')


@section('content')
    <div class="container py-5" id="contact-section">
        <div class="row mb-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                <div class="heading-wrap">
                    <h2 class="heading">Prayer Requests</h2>
                </div>


            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                @if (session()->has('success'))
                    <div class="alert alert-success mt-4 ml-4 mr-4 col-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif



                <form action="{{ route('contact.send') }}" method="post" class="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-black" for="fname">First name</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-black" for="lname">Last name</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label class="text-black" for="message">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" ></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Prayer Request</button>
                </form>
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
                {{-- <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-home"></span>
                    <address class="text">
                        155 Market St #101, Paterson, NJ 07505, United States
                    </address>
                </div> --}}
                {{-- <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-phone"></span>
                    <address class="text">
                        +1 202 2020 200
                    </address>
                </div> --}}
                <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-envelope"></span>
                    <address class="text">
                        letuspray@gmail.com
                    </address>
                </div>
            </div>
        </div>
    </div>
@endsection

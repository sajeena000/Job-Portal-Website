@extends('front.layouts.app')

@section('main')

<section class="section-0 lazy d-flex bg-image-style dark align-items-center" data-bg="{{ asset('assets/images/company.jpeg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1>Welcome to Our Company</h1>
                <p>Learn more about who we are and what we do.</p>
                <div class="banner-btn mt-5">
                    <a href="{{ route('about') }}" class="btn btn-primary mb-4 mb-sm-0">About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-about py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Our Mission</h2>
                <p>We are dedicated to providing the best employment opportunities for individuals and connecting them with the right companies. Our mission is to foster a positive and productive environment for both job seekers and employers.</p>
            </div>
            <div class="col-md-6">
                <h2>Our Vision</h2>
                <p>Our vision is to revolutionize the employment industry by leveraging technology to create a seamless and efficient job search experience. We aim to become the go-to platform for anyone looking for their dream job or the perfect candidate.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-team py-5">
    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <img src="{{ asset('assets/images/one.jpeg') }}" alt="Team Member 1">
                    <h3>Xyz Malla</h3>
                    <p>Founder & CEO</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="{{ asset('assets/images/two.jpeg') }}" alt="Team Member 2">
                    <h3>Abc Malla</h3>
                    <p>HR Manager</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="{{ asset('assets/images/three.jpeg') }}" alt="Team Member 3">
                    <h3>Bca Malla</h3>
                    <p>Marketing Director</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

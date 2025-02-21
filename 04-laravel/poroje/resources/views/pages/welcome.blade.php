@extends('layouts.client.app')
@section('title', 'Home Page')
@section('content')
<header class="masthead bg text-white text-center">
            <div class="container   d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.webp" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">{{ $title }} </h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">🌾مزارع طلایی کلزا در آغوش مزرعه باغ، جایی که طبیعت و تلاش در کنار هم می‌درخشند 🌻</p>
            </div>
        </header>
@endsection
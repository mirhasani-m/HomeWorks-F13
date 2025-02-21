@extends('layouts.client.app')
@section('title', 'about Page')
@section('breadcrumb')
@parent
<li class="breadcrumb-item active" aria-current="page">about</li>
@endsection
@section('content')
        <!-- About Section-->
        <section class="page-section mt-5  bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">درباره ما</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">مزرعه گاردن با افتخار یکی از پیشروان در کشت کلزا و تولید محصولات با کیفیت بالا از این گیاه ارزشمند است. ما با بهره‌گیری از روش‌های پیشرفته کشاورزی و تکنولوژی‌های روز دنیا، مزارعی سرسبز و پرمحصول ایجاد کرده‌ایم. هدف ما ارائه محصولات سالم و پایدار است که نه تنها به نیازهای غذایی جامعه پاسخ می‌دهند، بلکه به حفظ محیط زیست نیز کمک می‌کنند</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">در مزرعه گاردن، تعهد به کیفیت و پایداری در هر گام از فرآیند تولید مشهود است. از کاشت و برداشت تا فرآوری و بسته‌بندی، ما با دقت و حرفه‌ای‌گری به جزئیات توجه می‌کنیم. تیم ما از کارشناسان مجرب و متخصص تشکیل شده که با عشق و علاقه به کشاورزی، هر روز در تلاشند تا بهترین محصولات را به بازار عرضه کنند. از مزارع طلایی کلزا تا محصولات نهایی، همواره به دنبال رضایت مشتریان و ایجاد تاثیر مثبت در جامعه هستیم</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                        <i class="fas fa-download me-2"></i>
                        Download Catalog
                    </a>
                </div>
            </div>
            
 
        @endsection
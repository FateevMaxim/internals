@extends('index')

@section('main')
    <!-- About Section -->
    <section id="about" class="about section" >

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            {!! $aboutUsTitle->data !!}
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-5">
                    <div class="about-img">
                        {!! $aboutUsImage->data !!}
                    </div>
                </div>

                <div class="col-lg-7">
                    {!! $aboutUs->data !!}
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                @foreach($partners as $partner)
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <a href="{{ $partner->link }}" target="_blank">
                            <img src="{{ asset('storage/'.$partner->image) }}" class="img-fluid" alt="{{ $partner->title
                            }}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- /Clients Section -->

    <section class="section flex align-items-center">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Сертификаты и лицензии</h2>
        </div><!-- End Section Title -->
        <div class="thumbs">
            @foreach($certificates as $key => $item)
                    <a href="#target{{$key}}"><img src='{{ asset('storage/'.$item['image']) }}' alt='{{ $item['name'] }}'></a>
            @endforeach
        </div>

        <div class="lightbox">
                @php
                    $itemKeys = array_keys($certificates); // Получаем все ключи массива для навигации
                @endphp

                @foreach($certificates as $key => $item)
                    <div class="target" id="target{{ $key }}">
                        @if($key > min($itemKeys))
                            <a href="#target{{ $key - 1 }}" class="bi bi-arrow-left nav" title="previous"></a>
                        @else
                            <span><!-- spacer to keep content centered in the flex container --></span>
                        @endif

                        <div class="content">
                            <img src="{{ asset('storage/'.$item['image']) }}" alt="{{ $item['name'] }}">
                        </div>

                        @if($key < max($itemKeys))
                            <a href="#target{{ $key + 1 }}" class="bi bi-arrow-right nav" title="next"></a>
                        @else
                            <span><!-- spacer to keep content centered in the flex container --></span>
                        @endif
                    </div>
              @endforeach
            <a href="#!" class="bi bi-x-lg close nav"></a>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Связаться с нами</h2>
        </div><!-- End Section Title -->

        <div class="mb-5">
            {!! $contactUs->data !!}
        </div><!-- End Google Maps -->

        <div class="container" data-aos="fade">

            <div class="row gy-5 gx-lg-5">

                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Адрес:</h4>
                            <p>Казахстан, г.Алматы, Микрорайон Жетысу-2, 68а</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p><a href="mailto:">info@internals.kz</a></p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

                <div class="col-lg-4">
                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Телефон:</h4>
                            <p><a href="tel:+77777777777">+7 777 777 7777</a></p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

        </div>

    </section>
@endsection

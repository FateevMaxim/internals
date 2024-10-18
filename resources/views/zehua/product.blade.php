@extends('index')

@section('main')
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">{{ $product->name }}</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('zehua.categories') }}">Zehua</a></li>
                    <li><a href="{{ route('zehua.products', $product->category->slug) }}">{{ $product->category->name }}</a></li>
                    <li class="current">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                @if(count($product->image) > 1)
                                    <!-- Показать навигацию, если больше одного изображения -->
                                    <div class="carousel-indicators">
                                        @foreach($product->image as $index => $image)
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="carousel-inner">
                                    @foreach($product->image as $index => $image)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="{{ $index == 0 ? 10000 : 2000 }}">
                                            <img src="{{ asset('storage/'.$image) }}" class="d-block w-100" alt="{{ $product->name }} {{ $index + 1 }}">
                                        </div>
                                    @endforeach
                                </div>

                                @if(count($product->image) > 1)
                                    <!-- Показать кнопки "prev" и "next", если больше одного изображения -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Пред.</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">След.</span>
                                    </button>
                                @endif
                            </div>

                            <h2 class="title">{{ $product->name }}</h2>

                            <div class="content">
                                {!! $product->description !!}
                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="{{ route('zehua.products', $product->category->slug) }}">{{ $product->category->name }}</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article>

                    </div>
                </section><!-- /Blog Details Section -->

            </div>


        </div>
    </div>
@endsection

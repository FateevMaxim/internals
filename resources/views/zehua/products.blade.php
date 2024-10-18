@extends('index')

@section('main')
    <section id="recent-posts" class="recent-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $categoryName }}</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach($products as $product)
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('storage/'.$product->image[0]) }}" alt="{{ $product->name }}" class="img-fluid">
                            </div>

                            <h2 class="title">
                                <a href="{{ route('zehua.product', $product->slug) }}">{{ $product->name }}</a>
                            </h2>

                        </article>
                    </div><!-- End post list item -->
                @endforeach
            </div><!-- End recent posts list -->

        </div>

    </section><!-- /Recent Posts Section -->
@endsection

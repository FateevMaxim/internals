@extends('index')
@section('main')
    <section id="recent-posts" class="recent-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Продукция Zehua</h2>
            <p>Предоставляемые товары имеются в широком ассортименте и различной комплектации, для более точного подбора оборудования рекомендуем Вам обратиться к менеджеру</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                @foreach($categories as $category)
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}" class="img-fluid">
                            </div>

                            <h2 class="title">
                                <a href="{{ route('zehua.products', $category->slug) }}">{{ $category->name }}</a>
                            </h2>

                        </article>
                    </div><!-- End post list item -->
                @endforeach
            </div><!-- End recent posts list -->
        </div>
    </section><!-- /Recent Posts Section -->
@endsection

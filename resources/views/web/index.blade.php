@extends('web.partials.master')

@section('title', 'Inicio')

@section('content')


    <section>
        <div class="banner_section full_screen staggered-animation-wrap">
            <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2"
                data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active background_bg overlay_bg_50" data-img-src="images/login-bg.jpg">
                        <div class="banner_slide_content banner_content_inner">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 col-md-10">
                                        <div class="banner_content text_white text-center">
                                            <h5 class="mb-3 bg_strip staggered-animation text-uppercase"
                                                data-animation="fadeInDown" data-animation-delay="0.2s">Precios únicos</h5>
                                            <h2 class="staggered-animation" data-animation="fadeInDown"
                                                data-animation-delay="0.3s">Visiuz Bazar</h2>
                                            <p class="staggered-animation" data-animation="fadeInUp"
                                                data-animation-delay="0.4s">Tu mejor opción, precios bajos, tu mejor
                                                elección </p>
                                            <a class="btn btn-white staggered-animation" href="{{ url('/products') }}"
                                                data-animation="fadeInUp" data-animation-delay="0.5s">Ver productos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item background_bg overlay_bg_50" data-img-src="assets/images/banner11.jpg">
                        <div class="banner_slide_content banner_content_inner">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 col-md-10">
                                        <div class="banner_content text_white text-center">
                                            <h5 class="mb-3 staggered-animation font-weight-light"
                                                data-animation="fadeInDown" data-animation-delay="0.2s"> Elige ahora</h5>
                                            <h2 class="staggered-animation" data-animation="fadeInDown"
                                                data-animation-delay="0.3s">Ofertas del mas del 25%</h2>
                                            <a class="btn btn-white staggered-animation" href="shop-left-sidebar.html"
                                                data-animation="fadeInUp" data-animation-delay="0.4s">Compra ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item background_bg overlay_bg_60" data-img-src="assets/images/banner12.jpg">
                        <div class="banner_slide_content banner_content_inner">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 col-md-10">
                                        <div class="banner_content text_white text-center">
                                            <h5 class="mb-3 staggered-animation font-weight-light"
                                                data-animation="fadeInDown" data-animation-delay="0.2s">Visita nuestras
                                                paginas oficiales</h5>
                                            <h2 class="staggered-animation" data-animation="fadeInDown"
                                                data-animation-delay="0.3s">Ropa de temporada</h2>
                                            <p class="staggered-animation" data-animation="fadeInUp"
                                                data-animation-delay="0.4s">Invierno
                                            </p>
                                            <a class="btn btn-white staggered-animation" href="shop-left-sidebar.html"
                                                data-animation="fadeInUp" data-animation-delay="0.4s">Ver ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i
                        class="ion-chevron-left"></i></a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i
                        class="ion-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <section style="color: #0000">
        <div class="section small_pt pb_70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s4 text-center">
                            <h2>Los Mejores Productos</h2>
                        </div>
                        <p class="text-center leads">Encuentra las mejores pestañas perfectas para ti.</p>
                    </div>
                </div>
                <div class="row shop_container">
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="{{ url('product_detail/') }}">
                                    <img class="card-img-top" src="{{ asset('img/Product1.jpg') }}"
                                        style="width: 300px !important; height: 450px !important; border-radius: 5px;">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        {{-- <li><a href="//bestwebcreator.com/shopwise/demo/shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li> --}}
                                        <li><a href="{{ url('product_detail/') }}" class=""><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        {{-- <li><a href="#"><i class="icon-heart"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{ url('product_detail/') }}"></a>
                                </h6>
                                <div class="product_price">
                                    <span class="price">$ MXN</span>
                                    <del>$ </del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:%"></div>
                                    </div>
                                    <span class="rating_num"></span>
                                </div>
                                <div class="pr_desc">
                                    <p></p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="{{ url('add_to_cart/') }}" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Añadir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="{{ url('product_detail/') }}">
                                    <img class="card-img-top" src="{{ asset('img/Product2.jpg') }}"
                                        style="width: 300px !important; height: 450px !important; border-radius: 5px;">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        {{-- <li><a href="//bestwebcreator.com/shopwise/demo/shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li> --}}
                                        <li><a href="{{ url('product_detail/') }}" class=""><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        {{-- <li><a href="#"><i class="icon-heart"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{ url('product_detail/') }}"></a>
                                </h6>
                                <div class="product_price">
                                    <span class="price">$ MXN</span>
                                    <del>$ </del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:%"></div>
                                    </div>
                                    <span class="rating_num"></span>
                                </div>
                                <div class="pr_desc">
                                    <p></p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="{{ url('add_to_cart/') }}" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Añadir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="{{ url('product_detail/') }}">
                                    <img class="card-img-top" src="{{ asset('img/Product3.jpg') }}"
                                        style="width: 300px !important; height: 450px !important; border-radius: 5px;">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        {{-- <li><a href="//bestwebcreator.com/shopwise/demo/shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li> --}}
                                        <li><a href="{{ url('product_detail/') }}" class=""><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        {{-- <li><a href="#"><i class="icon-heart"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="{{ url('product_detail/') }}"></a>
                                </h6>
                                <div class="product_price">
                                    <span class="price">$ MXN</span>
                                    <del>$ </del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:%"></div>
                                    </div>
                                    <span class="rating_num"></span>
                                </div>
                                <div class="pr_desc">
                                    <p></p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="{{ url('add_to_cart/') }}" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Añadir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    @push('script')
        <script>

        </script>
    @endpush

@endsection

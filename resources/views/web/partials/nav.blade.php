<!-- START HEADER -->
<header class="header_wrap fixed-top dd_dark_skin transparent_header">
    <div class="light_skin main_menu_uppercase">
        <div class="navigator">
            <nav class="navbar navbar-expand-lg">
                <a href="{{ URL('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="logo"
                        style="width: auto !important; height: auto !important; max-width: 15%; padding-left: 15px; padding-bottom: 5px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse" style="justify-content: flex-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li align="center"> <a class="nav-link active" href="{{ url('/') }}">Inicio</a></li>

                        <li align="center"> <a class="nav-link" href="{{ URL('/products') }}">Productos</a></li>

                        <li align="center"> <a class="nav-link nav_item" href="{{ URL('contact') }}">Contacto</a></li>


                        @if (Route::has('login'))
                            <li align="center">
                                @auth
                                    <a class="nav-link" href="{{ url('/admin') }}">
                                        Hola, {{ Auth::user()->name }}
                                        <span><i class="linearicons-user"> </i></span>
                                    </a>
                                @else
                                    <a class="nav-link" href="{{ route('login') }}">
                                        Iniciar Sesión
                                    </a>
                                </li>
                                <li align="center">
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">
                                            Registrarse
                                        </a>
                                    @endif
                                @endauth
                            </li>
                        @endif
                        @if (session('cart'))
                        <li align="center" class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                data-toggle="dropdown"><i style="color: #fff" class="linearicons-cart"></i><span
                                    class="cart_count">{{ count(session('cart')) }}</span></a>
                            <div class="cart_box dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach (session('cart') as $id => $product)
                                        <li align="center">
                                            @php
                                                $subtotal = $product['quantity'] * $product['price'];
                                                $total = $subtotal + $total;
                                            @endphp
                                            <a href="{{ url('removeItemCart/' . $id) }}" class="item_remove"><i
                                                    class="ion-close"></i></a>
                                            <a href="#"><img src="{{ $product['img'] }}"
                                                    alt="cart_thumb1">{{ $product['name'] }}</a>
                                            <span class="cart_quantity">{{ $product['quantity'] }} x <span
                                                    class="cart_amount" id="subtotal-{{ $id }}"> <span
                                                        class="price_symbole">$</span></span>{{ $subtotal }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                                class="price_symbole">$</span>{{ $total }}</span></p>
                                    <p class="cart_buttons"><a href="{{ url('checkout') }}"
                                        class="btn btn-fill-out checkout">Ir al Carrito</a></p>
                                </div>
                            </div>
                        </li>
                    @else
                        <li align="center" class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                data-toggle="dropdown"><i class="linearicons-cart"></i><span
                                    class="cart_count">0</span></a>
                        </li>
                    @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>



<!-- END HEADER -->
@push('script')
    <script>

    </script>
@endpush

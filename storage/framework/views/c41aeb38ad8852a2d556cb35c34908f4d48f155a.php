<!-- START HEADER -->
<header class="header_wrap fixed-top dd_dark_skin transparent_header">
    <div class="light_skin main_menu_uppercase">
        <div class="navigator">
            <nav class="navbar navbar-expand-lg">
                <a href="<?php echo e(URL('/')); ?>">
                    <img src="<?php echo e(asset('img/logo.png')); ?>" alt="logo"
                        style="width: auto !important; height: auto !important; max-width: 15%; padding-left: 15px; padding-bottom: 5px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse" style="justify-content: flex-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li align="center"> <a class="nav-link active" href="<?php echo e(url('/')); ?>">Inicio</a></li>

                        <li align="center"> <a class="nav-link" href="<?php echo e(URL('/products')); ?>">Productos</a></li>

                        <li align="center"> <a class="nav-link nav_item" href="<?php echo e(URL('contact')); ?>">Contacto</a></li>


                        <?php if(Route::has('login')): ?>
                            <li align="center">
                                <?php if(auth()->guard()->check()): ?>
                                    <a class="nav-link" href="<?php echo e(url('/admin')); ?>">
                                        Hola, <?php echo e(Auth::user()->name); ?>

                                        <span><i class="linearicons-user"> </i></span>
                                    </a>
                                <?php else: ?>
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>">
                                        Iniciar Sesión
                                    </a>
                                </li>
                                <li align="center">
                                    <?php if(Route::has('register')): ?>
                                        <a class="nav-link" href="<?php echo e(route('register')); ?>">
                                            Registrarse
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                        <?php if(session('cart')): ?>
                        <li align="center" class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                data-toggle="dropdown"><i style="color: #fff" class="linearicons-cart"></i><span
                                    class="cart_count"><?php echo e(count(session('cart'))); ?></span></a>
                            <div class="cart_box dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <?php
                                        $total = 0;
                                    ?>
                                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li align="center">
                                            <?php
                                                $subtotal = $product['quantity'] * $product['price'];
                                                $total = $subtotal + $total;
                                            ?>
                                            <a href="<?php echo e(url('removeItemCart/' . $id)); ?>" class="item_remove"><i
                                                    class="ion-close"></i></a>
                                            <a href="#"><img src="<?php echo e($product['img']); ?>"
                                                    alt="cart_thumb1"><?php echo e($product['name']); ?></a>
                                            <span class="cart_quantity"><?php echo e($product['quantity']); ?> x <span
                                                    class="cart_amount" id="subtotal-<?php echo e($id); ?>"> <span
                                                        class="price_symbole">$</span></span><?php echo e($subtotal); ?></span>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                                class="price_symbole">$</span><?php echo e($total); ?></span></p>
                                    <p class="cart_buttons"><a href="<?php echo e(url('checkout')); ?>"
                                        class="btn btn-fill-out checkout">Ir al Carrito</a></p>
                                </div>
                            </div>
                        </li>
                    <?php else: ?>
                        <li align="center" class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                data-toggle="dropdown"><i class="linearicons-cart"></i><span
                                    class="cart_count">0</span></a>
                        </li>
                    <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>



<!-- END HEADER -->
<?php $__env->startPush('script'); ?>
    <script>

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\Shaq\Vizius_Bazar\resources\views/web/partials/nav.blade.php ENDPATH**/ ?>
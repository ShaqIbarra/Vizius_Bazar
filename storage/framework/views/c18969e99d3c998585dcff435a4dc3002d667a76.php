    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-title">Menú</li>
                <?php if(Auth::user()->hasRole('admin')): ?>

                    <li class="nav-item">
                        <a href="<?php echo e(URL('/admin')); ?>" class="nav-link">
                            <i class="nav-icon icon-speedometer"></i> Dashboard
                        </a>
                    </li>

                    

                   

                    

                <?php elseif(Auth::user()->hasRole('user')): ?>

                <li class="nav-item">
                    <a  href="<?php echo e(URL('/admin')); ?>" class="nav-link">
                      <i class="nav-icon icon-speedometer"></i> Dashboard
                    </a>
                  </li>
                    <li class="nav-item">
                        
                            <i class="nav-icon fas fa-user-edit"></i> Mi cuenta
                        </a>
                    </li>
                    <li class="nav-item">
                        
                            <i class="nav-icon fa fa-file"></i> Mis pedidos
                        </a>
                    </li>
                    <li class="nav-item">
                        
                            <i class="nav-icon fas fa-map-marker"></i> Direcciones
                        </a>
                    </li>

                <?php endif; ?>
            </ul>
        </nav>
    </div>
<?php /**PATH D:\Shaq\Vizius_Bazar\resources\views/admin/partials/menu.blade.php ENDPATH**/ ?>
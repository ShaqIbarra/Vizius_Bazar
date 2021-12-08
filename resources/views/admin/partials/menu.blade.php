    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-title">Menú</li>
                @if (Auth::user()->hasRole('admin'))

                    <li class="nav-item">
                        <a href="{{ URL('/admin') }}" class="nav-link">
                            <i class="nav-icon icon-speedometer"></i> Dashboard
                        </a>
                    </li>

                    {{-- <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon fas fa-layer-group"></i> Cuentas Bancarias</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ route('admin.bank_accounts.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-university"></i> Bancos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.references.index') }}" class="nav-link">
                                    <i class="nav-icon fab fa-cc-visa"></i> Referencias
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon fas fa-users"></i> Usuarios</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ route('admin.users.edit', auth()->user()->id) }}" class="nav-link">
                                    <i class="nav-icon fas fa-user-edit"></i> Editar Perfil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL('admin/users') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user-plus"></i> Administrar
                                </a>
                            </li>
                        </ul>
                    </li> --}}

                   {{-- <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="nav-icon fa fa-file"></i> Pedidos</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ URL('admin/orders') }}" class="nav-link">
                                    <i class="nav-icon fa fa-file"></i> Pedidos de Invitados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL('admin/orders_users') }}" class="nav-link">
                                    <i class="nav-icon fa fa-file"></i> Pedidos de Usuarios
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route('admin.discount.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-percent"></i> Descuento
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL('admin/products') }}" class="nav-link">
                            <i class="nav-icon fas fa-dolly-flatbed"></i> Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL('admin/categories') }}" class="nav-link">
                            <i class="nav-icon fas fas fa-tag"></i> Categorías
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL('admin/indexRules') }}" class="nav-link">
                            <i class="nav-icon fa fa-dollar"></i> Regla de Precios
                        </a>
                    </li>--}}

                    {{-- <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                          <i class="nav-icon fas fa-book-open"></i> Guías</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a  href="{{ URL('admin/guides') }}" class="nav-link">
                                  <i class="nav-icon fas fa-book-reader"></i> Control de guías
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  href="#" class="nav-link">
                                  <i class="nav-icon fas fa-history"></i> Historial de guías
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  href="#" class="nav-link">
                                  <i class="nav-icon fas fa-book-reader"></i> Pedidos sobrepeso
                                </a>
                            </li>
                        </ul>
                    </li> --}}

                @elseif(Auth::user()->hasRole('user'))

                <li class="nav-item">
                    <a  href="{{ URL('/admin') }}" class="nav-link">
                      <i class="nav-icon icon-speedometer"></i> Dashboard
                    </a>
                  </li>
                    <li class="nav-item">
                        {{-- <a href="{{ route('admin.users.edit', auth()->user()->id) }}" class="nav-link"> --}}
                            <i class="nav-icon fas fa-user-edit"></i> Mi cuenta
                        </a>
                    </li>
                    <li class="nav-item">
                        {{-- <a href="{{ URL('admin/orders') }}" class="nav-link"> --}}
                            <i class="nav-icon fa fa-file"></i> Mis pedidos
                        </a>
                    </li>
                    <li class="nav-item">
                        {{-- <a href="{{ route('admin.adresses.index') }}" class="nav-link"> --}}
                            <i class="nav-icon fas fa-map-marker"></i> Direcciones
                        </a>
                    </li>

                @endif
            </ul>
        </nav>
    </div>

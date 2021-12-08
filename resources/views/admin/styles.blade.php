<!DOCTYPE html>

<html lang="es">
  <head>
    <base href="./">
    <meta charset="utf-8">

    <title>Panel - Moonline</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <!-- Icons-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link href="{{ asset('coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/font-awesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/font-awesome/css/brands.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/font-awesome/css/solid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('css/style 2.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    {{-- DataTable Styles --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.standalone.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <style>
        :root {
            --main-color: #00abff;
            --hover-color: #006cff;
        }

        table th, td {
            text-align: center;
        }

        .dropbtn {
            background-color: var(--main-color);
            color: white;
            border: none;
            width: 100%;
            min-width: 180px;
            font-size: 14px;
            border-radius: 3px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: whitesmoke;
            min-width: 160px;
            -webkit-box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            -moz-box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: rgb(224, 224, 224);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: var(--hover-color);
            color: whitesmoke;
        }

        .dropdown .dropbtn:focus {
            background-color: var(--hover-color);
            color: whitesmoke;
        }
    </style>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('admin.partials.header')
    <div class="app-body">
        @include('admin.partials.menu')
        <main class="main">

        @yield('content')

        </main>
        @include('admin.partials.aside')
    </div>

    @include('admin.partials.footer')

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('coreui/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('coreui/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('coreui/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('coreui/pace-progress/pace.min.js') }}"></script>
    <script src="{{ asset('coreui/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('coreui/coreui/dist/js/coreui.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('coreui/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js') }}"></script>
    <script src="{{asset('src/js/main.js')}}"></script>
    {{-- DataTable Scripts --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5a13b5fda8.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es-mx.min.js" integrity="sha512-Qy4cmZ6v7vnVEc0cn/BIj9q15eB98do4hMvu8xtc/H+v+YYpdpDrB35flHS3NPLbZUpe1npSYY/u+Gi3UB61vw==" crossorigin="anonymous"></script>
    <script>
        // var dt_lang = "{{ App::isLocale('es')? '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json' : '//cdn.datatables.net/plug-ins/1.10.21/i18n/English.json' }}";
        var main_height = $( 'main' ).height() - 400

        function setDtConfig() {
            if (typeof ($.fn.dataTable) === 'undefined') { return }

            $.extend( true, $.fn.dataTable.defaults, {
                "language": {
                    "url": "{{ App::isLocale('es')? '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json' : '//cdn.datatables.net/plug-ins/1.10.21/i18n/English.json' }}",
                },
                lengthMenu: [[10, 25, 50, 100, 500, 1000, -1], [10, 25, 50, 100, 500, 1000, "Todos"]],
                pageLength: 25,
                responsive: true,
                scrollY: main_height,
                buttons: [
                    { extend: 'copy' },
                    { extend: 'excelHtml5', title: 'Reporte ' + moment().format('ll') },
                    { extend: 'print', title: 'Reporte ' + moment().format('ll') },
                    { extend: 'csvHtml5', title: 'Reporte ' + moment().format('ll') },
                    {
                        text: 'reload',
                        action: function ( e, dt, node, config ) {
                            dt.ajax.reload()
                        }
                    },
                ],
            })

            $('.drop-tools').on('click', 'a', (e) => {
                e.preventDefault()
                let action = $(e.currentTarget).attr('data-action');
                $('table').DataTable().button(action).trigger()
            })
        }

        setDtConfig()
    </script>
    @stack('script')
</body>
</html>







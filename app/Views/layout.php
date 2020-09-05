<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?=base_url('assets/img/icon.ico')?>" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?=base_url('assets/js/plugin/webfont/webfont.min.js')?>"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?=base_url('assets/css/fonts.min.css')?>']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/atlantis.min.css')?>">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?=base_url('assets/css/demo.css')?>">
</head>
<div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="#" class="logo text-white">
                    <h4><i style="font-size: 50px;" class="fab fa-php"> </i>CODEIGNITER</h4>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
                </div>
            </div>
            <!-- End Logo Header -->
            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
        
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="<?=base_url('assets/img/profile.jpg')?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="<?=base_url('assets/img/profile.jpg')?>" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?= strtoupper(session('nombre')) ?></h4>
                                                <p class="text-muted"><?= session('correo') ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a style="font-size: 15px;" class="btn btn-outline-danger btn-sm" href="<?=base_url('LoginController/logout')?>"><i class="fas fa-sign-out-alt"></i> Salir</a>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?=base_url('assets/img/profile.jpg')?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                <?= strtoupper(session('nombre')) ?>
                                </span>
                            </a>
                            <div class="clearfix"></div>     
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a  href="<?php base_url('ProductosController/index') ?>" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <span class="caret"></span>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                            <h4 class="text-section">COMPONENTES</h4>
                        </li>
                        <li class="nav-item">
                            <a  href="<?= base_url('usuarios') ?>">
                                <i class="fas fa-users"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('home') ?>">
                                <i class="fas fa-store"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('categorias') ?>">
                                <i class="fas fa-store"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a  href="#" class="collapsed" aria-expanded="false">
                                <i class="fas fa-graduation-cap"></i>
                                <p>ADSI</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">
			<div class="content">
				<div class="page-inner">
                <?= $this->renderSection('content') ?>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
                                <a type="button"   class="btn btn-icon btn-round btn-primary p-2" href="https://www.facebook.com/luifer.almendrales">
                                    <i style="font-size: 25px;"  class="fab fa-facebook-f"></i>
                                </a>
                                 <samp>Luis Fernando Almendrales</samp>    
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						Agosto 2020, SENA ADSI-1834480 <i class="fa fa-heart heart text-danger"></i>
					</div>				
				</div>
			</footer>
		</div>
        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">PERSONALIZAR</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <h4>LOGO HEADER</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                            <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                            <br/>
                            <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>NAVBAR HEADER</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeTopBarColor" data-color="dark"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="green"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange"></button>
                            <button type="button" class="changeTopBarColor" data-color="red"></button>
                            <button type="button" class="changeTopBarColor" data-color="white"></button>
                            <br/>
                            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                            <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="green2"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                            <button type="button" class="changeTopBarColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>SIDEBAR</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>BACKGROUND</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                            <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                            <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                            <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-toggle">
                <i class="flaticon-settings"></i>
            </div>
        </div>
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->

    <script src="<?=base_url('assets/js/core/jquery.3.2.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/core/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/core/bootstrap.min.js')?>"></script>

    <!-- jQuery U../I -->
    <script src="<?=base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')?>"></script>
    <script src="<?=base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')?>"></script>

    <!-- jQuery S../crollbar -->
    <script src="<?=base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')?>"></script>

    <!-- Chart JS../ -->
    <script src="<?=base_url('assets/js/plugin/chart.js/chart.min.js')?>"></script>
    <script src="<?=base_url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')?>"></script>
    <script src="<?=base_url('assets/js/plugin/chart-circle/circles.min.js')?>"></script>
    <script src="<?=base_url('assets/js/plugin/datatables/datatables.min.js')?>"></script>
    <!-- <script src="<?=base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')?>"></script> -->
    <script src="<?=base_url('assets/js/plugin/jqvmap/jquery.vmap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')?>"></script>
    <script src="<?=base_url('assets/js/plugin/sweetalert/sweetalert.min.js')?>"></script>
    <script src="<?=base_url('assets/js/atlantis.min.js')?>"></script>
    <script src="<?=base_url('assets/js/setting-demo.js')?>"></script>
    <script src="<?=base_url('assets/js/demo.js')?>"></script>
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    });
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "language": { 
                "sProcessing": "Procesando...", 
                "sLengthMenu": "Mostrar _MENU_ registros", 
                "sZeroRecords": "No se encontraron resultados", 
                "sEmptyTable": "Ningún dato disponible en esta tabla", 
                "sInfo":   "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros", 
                "sInfoEmpty":  "Mostrando registros del 0 al 0 de un total de 0 registros", 
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)", 
                "sInfoPostFix": "", 
                "sSearch":  "Buscar:", 
                "sUrl":   "", 
                "sInfoThousands": ",", 
                "sLoadingRecords": "Cargando...", 
                "oPaginate": { 
                "sFirst": "Primero", 
                "sLast": "Último", 
                "sNext": "Siguiente", 
                "sPrevious": "Anterior" 
                }, 
                "oAria": { 
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente", 
                "sSortDescending": ": Activar para ordenar la columna de manera descendente" 
                } 
                } 
            }); 

            var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>
    
    <script>
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>
    <script>
        function mayus(e) {
        e.value = e.value.toUpperCase();
        }
    </script>

</html>
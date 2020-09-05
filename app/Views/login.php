<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login - ADSI</title>
  <!-- Custom fonts for this template-->
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
<body class="bg-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-xl my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block text-center">
                <img style="width: 450px;" src="<?=base_url('assets/img/foto-2.jpg')?>" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">PROJET CODEIGNITER!</h1>
                  </div>
                  <form method="POST" action="<?=base_url('LoginController')?>" class="user">
                    <div class="form-group">
                      <input type="correo" class="form-control form-control-user" id="email" name="correo" aria-describedby="emailHelp" placeholder="Ingrese el Email...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="contraseña" placeholder="Ingrese el Password">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Ingresar
                    </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php  if (isset($mensaje)) { ?>
                <div id="success-alert" class="alert alert-warning text-center bg-danger-gradient text-white bg-info" role="alert">
                    <h4><?=$mensaje?></h4>
                </div>
        <?php }?>
        <script>
            setTimeout(function(){
                    $(".alert").each(function(index){
                        $(this).delay(200*index).fadeTo(1500,0).slideUp(500,function(){
                            $(this).remove();
                        });
                    });
                },2000);
        </script>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
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
</body>
</html>
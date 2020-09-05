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
<body>
    <div class="container p-5 text-center">
    <h1>PRUEBA CODEIGNITER</h1>
    </div>
    <div class="container">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $value) { ?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['nombre']?></td>
                <td><?=$value['descripcion']?></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>
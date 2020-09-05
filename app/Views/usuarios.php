<?= $this->extend('Views/layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
                    <?php  if (isset($mensaje)) { ?>
                            <div id="success-alert" class="alert alert-success text-center text-white bg-info-gradient" role="alert">
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
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">USUARIOS</h4>
                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Agregar Usuario
                    </button>
                </div>
            </div>
            <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header no-bd">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">
                                    Registrar </span>
                                    <span class="fw-light">
                                        Usuarios
                                    </span>
                                </h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('UsuariosController/create')?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Nombre del Usuario</label>
                                                <input id="nombre" name="nombre" type="text" class="form-control"  placeholder="Ingresa el Nombre" require>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Telfono</label>
                                                <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Ingresa el Telefono" require>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Correo</label>
                                                <input id="correo" name="correo" type="email" class="form-control" placeholder="Ingresa el Correo" require>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Contraseña</label>
                                                <input id="contraseña" name="contraseña" type="text" class="form-control" placeholder="Ingresa una Contraseña" require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"  class="btn btn-primary">Registrar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 2%">ID</th>
                                <th>NOMBRE</th>
                                <th>CORREO</th>
                                <th>TELEFONO</th>
                                <th style="width: 2%">ACCION</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>CORREO</th>
                                <th>TELEFONO</th>
                                <th>ACCION</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $num = 0;
                            foreach ($usuarios as $usuario) {
                                $num++;    
                            ?>
                            
                                <tr>
                                <td><?=$usuario['id']?></td>
                                <td><?=strtoupper($usuario['nombre'])?></td>
                                <td><?=strtoupper($usuario['correo'])?></td>
                                <td><?=$usuario['telefono']?></td>
                                <td>
                                
                                    <div class="form-button-action">
                                        <button type="button"  title="EDITAR" class="btn btn-icon btn-round btn-success"  data-toggle="modal" data-target="#editar<?=$num?>">
                                                <i style="font-size: 20px;" class="fa fa-edit"></i>
                                         </button>

                                         <button type="button" title="" class="btn btn-icon btn-round btn-danger" data-toggle="modal" data-target="#eliminar<?=$num?>">
                                                <i style="font-size: 20px;" class="far fa-trash-alt"></i>
                                         </button>
                                    
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal EDITAR -->
                            <div class="modal fade" id="editar<?=$num?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                Editar </span>
                                                <span class="fw-light">
                                                    Usuario
                                                </span>
                                            </h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?=base_url('UsuariosController/update')?>" method="POST">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="hidden" name="id" class="form-control"
                                                                value="<?=$usuario['id']?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Nombre del Usuario</label>
                                                            <input id="nombre" name="nombre" type="text" class="form-control" value="<?=$usuario['nombre']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-0">
                                                        <div class="form-group form-group-default">
                                                            <label>Telfono</label>
                                                            <input id="telefono" name="telefono" type="text" class="form-control" value="<?=$usuario['telefono']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-0">
                                                        <div class="form-group form-group-default">
                                                            <label>Correo</label>
                                                            <input id="correo" name="correo" type="text" class="form-control" value="<?=$usuario['correo']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Contraseña</label>
                                                            <input id="contraseña" name="contraseña" type="text" class="form-control" value="<?= myEncryptor('decrypt',$usuario['contraseña'] ) ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit"  class="btn btn-success">Actualizar</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal ELIMINAR -->
                            <div class="modal fade" id="eliminar<?=$num?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                <div class="text-center">
                                 <i class="fas fa-exclamation-circle" style="font-size: 120px; color:darkred"></i>
                                </div>
                                <div class="modal-body">
                                    <h4>Esta seguro que desea eliminar este Usuario que tiene como nombre</h4>
                                    <h3 style="color: black;"><?=$usuario['nombre']?>...!!!</h3>
                                </div>
                                <div class="modal-footer text-center">   
                                    <a href="<?= base_url(); ?>/UsuariosController/delete?id=<?php echo myEncryptor('encrypt',$usuario['id'] ); ?>" class="btn btn-danger btn-block" role="button" >Eliminar</a><br>
                                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancelar</button>                                  
                                </div>
                                </div>
                            </div>
                            </div>
                           <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
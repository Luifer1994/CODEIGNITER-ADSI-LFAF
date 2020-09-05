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
                    <h4 class="card-title">CATEGORIAS</h4>
                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Agregar Categoria
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
                                        CATEGORIA
                                    </span>
                                </h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('CategoriasController/create')?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Nombre de la Categoria</label>
                                                <input  id="nombre" name="nombre" type="text" class="form-control" placeholder="Escribe el Nombre" require>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Descripcion de la Categoria</label>
												<input id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Descripcion del Producto" require>
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
                                <th>DESCRIPCION</th>
                                <th style="width: 2%">ACCION</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCION</th>
                                <th>ACCION</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $num = 0;
                            foreach ($categorias as $categoria) {
                                $num++;    
                            ?>
                            
                                <tr>
                                <td><?=$categoria['id']?></td>
                                <td><?=strtoupper($categoria['nombre'])?></td>
                                <td><?=strtoupper($categoria['descripcion'])?></td>
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
                                                    CATEGORIA
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?=base_url('CategoriasController/update')?>" method="POST">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="hidden" name="id" class="form-control"
                                                                value="<?=$categoria['id']?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Nombre de la Categoria</label>
                                                            <input id="nombre" name="nombre" type="text" class="form-control" value="<?=$categoria['nombre']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Descripcion de la Categoria</label>
                                                            <input id="descripcion" name="descripcion" type="text" class="form-control" value="<?=$categoria['descripcion']?>">
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
                                    <h4>Esta seguro que desea eliminar esta Categoria que tiene como nombre</h4>
                                    <h3 style="color: black;"><?=$categoria['nombre']?>...!!!</h3>
                                </div>
                                <div class="modal-footer text-center">   
                                    <a href="<?= base_url(); ?>/CategoriasController/delete?id=<?php echo myEncryptor('encrypt',$categoria['id']); ?>" class="btn btn-danger btn-block" role="button" >Eliminar</a><br>
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
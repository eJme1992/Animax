<!-- DF -->
                  <!-- Modal Editar-->
                  <div id="edit<?=$key->id;?>" class="modal fade " role="dialog">
                     <div class="modal-dialog" style="margin-top:10vw;">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Editar capitulo</h4>
                           </div>
                           <div class="modal-body">
                              <form id="editart<?=$key->id;?>" onsubmit="realizaProceso(
                                 $('#id<?=$key->id;?>').val() 
                                 );return false; ">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <label>Numero</label>
                                       <input type="number" name="numero" id="numero" required="" class="form-control" placeholder="Numero">
                                       <label>Nombre</label>
                                       <input type="text" name="nombre" id="nombre" required="" class="form-control" placeholder="Ej: Venganza">
                                       <label>Duración (En minutos)</label>
                                       <input type="number" name="duracion" id="duracion" required="" class="form-control" >
                                       <label>Fecha de estreno</label>
                                       <input type="date" name="fecha_estreno" id="fecha_estreno" required="" class="form-control" >
                                       <label>Temporada</label>
                                       <select id="temporada" name="temporada" class="form-control" required="">
                                          <?php foreach ($temporada as $key ) { ?>
                                          <option value="<?=$key->id;?>"><?=$key->numero; ?></option>
                                          <?php  } ?>
                                       </select>
                                    </div>
                                    <div class="col-md-12" id="resultado3<?=$key->id;?>" style="margin-top:15px;"></div>
                                    <div class="col-sm-12" style="margin-top:20px;">
                                       <button class="btn btn-lg btn-block btn-primary" type="submit">
                                       Editar
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Modal ELIMINAR -->
                  <div id="delete<?=$key->id;?>" class="modal fade " role="dialog">
                     <div class="modal-dialog" style="margin-top:10vw;">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-body text-center">
                              <h3> ¿Esta Seguro que desea eliminar el capitulo numero: <b><?=$key->numero;?></b>?</h3>
                           </div>
                           <div class="modal-footer">
                              <a href="<?=base_url();?>capitulo/eliminar_capitulo/<?=$key->id;?>/<?=$serie->id;?>"><button type="button" class="btn btn-danger">Si</button></a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">no</button>
                           </div>
                        </div>
                     </div>
                  </div>
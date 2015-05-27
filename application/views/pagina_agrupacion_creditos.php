<html>
    <body>
      <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
        <!-- Main Menu -->
        <?php $this->load->view('menu_arriba');?>
      </div>
      <div id="cl-wrapper">
        <div class="cl-sidebar">
          <!-- Sidebar Menu -->
          <?php $this->load->view('menu_left');?>
        </div>
      <div id="pcont" class="container-fluid">
      <div class="cl-mcont">
        <div class="row">
          <div class="col-sm-12">
            <div class="block-flat profile-info">
            <?php foreach ($datos_clientes as $data_cliente) {?>
              <div class="row">
                <div class="col-sm-2">
                  <div class="avatar"><img src="<?=base_url('assets/img/bajo-riesgo.png')?>" width="130" class="profile-avatar"></div>
                </div>
                <div class="col-sm-7">
                  <div class="personal">
                    <h1 class="name"><?php echo $data_cliente['T1']." ".$data_cliente['T2']." ".$data_cliente['T3'] ?></h1>
                    <p class="description"><?php if ($data_cliente['T52']){ echo 'CURP: '.$data_cliente['T52'];} ?></p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <table class="no-border no-strip skills">
                    <tbody class="no-border-x no-border-y">
                      <tr>
                        <td style="width:45%;"><strong>STATUS</strong></td>
                        <td>
                          <?php echo $data_cliente['estado'];?>
                        </td>
                      </tr>
                      <tr>
                        <td><strong>TIPO</strong></td>
                        <td>
                          <?php echo $data_cliente['tipo'];?>
                        </td>
                      </tr>
                      <tr>
                        <td><strong>RFC</strong></td>
                        <td>
                          <?php echo $data_cliente['T19'];?>
                        </td>
                      </tr>
                    </tbody>
                    <?php };?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="tab-container">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Crédito</a></li>
                <li><a data-toggle="tab" href="#friends">Bitacora de Movimientos</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane active cont">
                  <div class="row">
                    <div class="col-md-12">
                      <table id="datatable-creditos" class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Crédito</th>
                            <th>Monto</th>
                            <th>Moneda</th>
                            <th>Inicio</th>
                            <th>Termino</th>
                            <th>Tipo Crédito</th>
                            <th>Limite Cuota</th>

                            <th></th>                          
                          </tr>
                        </thead>
                        <tbody>
                           
                          <tr class="odd gradeX">
                          <?php foreach ($clientes_creditos as $data_creditos) {?>

                            <td><?php echo $data_creditos['no_credito'];?></td>
                            <td><?php echo number_format ($data_creditos['T1'],2);?></td>
                            <td><?php echo $data_creditos['tipo_moneda'];?></td>
                            <td class="center"><?php echo $data_creditos['T3'];?></td>
                            <td class="center"><?php echo $data_creditos['T4'];?></td>
                            <td class="center"><?php echo $data_creditos['tipo_credito'];?></td>
                            <td class="center"><?php echo number_format ($data_creditos['T2'],2);?></td>

                            <td class="center"><button data-modal="form-primary-creditos" class="btn btn-primary  btn-sm md-trigger"><i class="fa fa-folder-open"></i></button></td>
                          </tr>
                          <?php };?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div id="friends" class="tab-pane cont">
                  <table id="datatable-movimientos" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Tipo Cargo</th>
                        <th>Origen Cargo</th>
                        <th>Monto</th>
                        <th>Moneda</th>
                        <th>Observaciones</th>              
                        <th></th>                          
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td>1</td>
                        <td>25-05-2015</td>
                        <td>PAGO DE CUOTA</td>
                        <td class="center"> TRANSFERENCIAS</td>
                        <td class="center"> 73,725.67</td>
                        <td class="center"> MXN</td>
                        <td class="center"> </td>
                        <td class="center"><button data-modal="form-primary-movimientos" class="btn btn-primary btn-sm md-trigger"><i class="fa fa-pencil"></i></button></td>
                      </tr>
                      <tr class="even gradeC">
                        <td>2</td>
                        <td>25-05-2015</td>
                        <td>PAGO DE CUOTA</td>
                        <td class="center"> TRANSFERENCIAS</td>
                        <td class="center"> 6,236.91</td>
                        <td class="center"> MXN</td>
                        <td class="center"> </td>
                        <td class="center"><button data-modal="form-primary-movimientos" class="btn btn-primary btn-sm md-trigger"><i class="fa fa-pencil"></i></button></td>
                      </tr>
                    </tbody>
                  </table>                    
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <div class="block-transparent">                
              <div class="block-flat">
                <div class="header">
                  <h3>Análisis de Movimientos</h3>
                </div>
                <div class="content">
                  <div id="site_statistics" style="height: 180px; padding: 0px; position: relative;"></div>
                </div>
              </div>
            </div>
            <div class="block-transparent">
              <div class="header">
                <h4>Análisis de riesgo</h4>
              </div>
              <div class="list-group todo list-widget">
                <li href="#" class="list-group-item"><span class="date"> 1</span> Riesgo geográfico - DF</li>
                <li href="#" class="list-group-item"><span class="date"> 1</span> Riesgo país - MEXICO</li>
                <li href="#" class="list-group-item"><span class="date"> 3</span> Riesgo actividad - SERVICIOS DE ADMINISTRACIÓN PÚBLICA, DEFENSA Y SEGURIDAD SOCIAL</li>
                <li href="#" class="list-group-item"><span class="date"> 2</span> Riesgo tipo persona - FISICA</li>                
                <li href="#" class="list-group-item"><span class="date"> <strong>7</strong></span> <strong>Total</strong></li>
              </div>
            </div>
            <div class="block widget-notes">
              <div class="header dark">
                <h4>Observaciones</h4>
              </div>
              <div class="content">
                <div contenteditable="true" class="paper">
                  Crédito finalizado
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="block-flat bars-widget">
              <div class="spk4 pull-right spk-widget"></div>
              <h4>Total Alertas</h4>
              <p>Operaciones Inusuales</p>
              <h3>1</h3>
            </div>
            <div class="block-flat bars-widget">
              <div class="spk5 pull-right spk-widget"></div>
              <h4>Total Alertas</h4>
              <p>Operaciones Relevantes</p>
              <h3>1</h3>
            </div>
            <div class="block-flat bars-widget">
              <div class="spk4 pull-right spk-widget"></div>
              <h4>Total Alertas</h4>
              <p>Operaciones Internas Preocupantes</p>
              <h3>0</h3>
            </div>
            <div class="block-flat bars-widget">
              <div class="spk5 pull-right spk-widget"></div>
              <h4>Total Alertas</h4>
              <p>Operaciones Reportes Urgentes de 24hrs</p>
              <h3>0</h3>
            </div>              
          </div>
        </div>         

      </div>
    </div>
    <!-- Nifty Modal Creditos-->
    <div id="form-primary-creditos" class="md-modal colored-header custom-width-creditos md-effect-8">
      <div class="md-content">
        <div class="modal-header">

          <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
        <form id="form-creditos">
          <div class="modal-body form">
            <div class="row">
              <div class="col-sm-6 col-md-12">
                <div class="tab-container">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#Credito" data-toggle="tab">Crédito</a></li>
                    <li><a href="#profile" data-toggle="tab">Reporte de entrevista</a></li>                  
                  </ul>
                  <div class="tab-content">
                    <div id="Credito" class="tab-pane active cont">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>No Crédito</label>
                            <input type="text" name="no_credito" id="no_credito" placeholder="No Crédito" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Frecuancia de pago</label>
                            <select name="unidad_credito" id="unidad_credito" class="form-control">
                              <option value=""></option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Monto del crédito</label>
                            <input type="text" name="T1" id="T1" placeholder="Frecuancia de pago" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Monto cuota pactado interes</label>
                            <input type="text" name="limite_cuota" value="0" id="limite_cuota" placeholder="Monto cuota pactado interes" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Tipo de Crédito</label>
                            <select name="tipo_credito" id="tipo_credito" class="form-control">
                              <option value=""></option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Divisa</label>
                            <select name="tipo_moneda" id="tipo_moneda" class="form-control">
                              <option value=""></option>
                              <option value="MXN">MXN</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Monto de cuota pactado</label>
                            <input type="text" name="T2" id="T2" placeholder="Monto de cuota pactado" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="profile" class="tab-pane cont">
                      <div class="row">

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Fecha de inicio</label>
                            <input type="date" name="T3" id="T3" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Fecha de termino</label>
                            <input type="date" name="T4" id="T4" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Nombre del ejecutivo quien entrevisto</label>
                            <input type="text" name="T6" id="T6" placeholder="Nombre del ejecutivo quien entrevisto" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Fecha de la entrevista</label>
                            <input type="date" name="T7" id="T7" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Ingresos reportados (mensuales)</label>
                            <input type="text" name="T8" id="T8" placeholder="Ingresos reportados (mensuales)" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Otros ingresos reportados</label>
                            <input type="text" name="T9" id="T9" placeholder="Otros ingresos reportados" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Comentarios</label>
                            <textarea name="T10" id="T10" placeholder="Comentarios" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>              
              </div>            
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancelar</button>
          <button type="button" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Guardar</button>
        </div>
      </div>
    </div>
    <!-- Nifty Modal Movimientos-->
    <div id="form-primary-movimientos" class="md-modal colored-header custom-width md-effect-11">
      <div class="md-content">
        <div class="modal-header">
          <h3>Editar datos del movimiento</h3>
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
        <form id="form-movimientos">
          <div class="modal-body form">
            <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <label>No Crédito</label>
                  <input type="text" placeholder="No Crédito" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Origen de Pago</label>
                  <select name="origen_pago" id="origen_pago" class="form-control">
                    <option value=""></option>                
                  </select>
                </div>
                <div class="form-group">
                  <label>Tipo de Cargo</label>
                  <select name="tipo_cargo" id="tipo_cargo" class="form-control">
                    <option value=""></option>                
                  </select>
                </div>
                <div class="form-group">
                  <label>Divisa</label>
                  <select name="tipo_moneda" id="tipo_moneda" class="form-control">
                    <option value=""></option>                
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Monto pagado</label>
                  <input type="text" name="T1" id="T1" placeholder="Monto pagado" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fecha de Movimineto</label>
                  <input type="date" name="T2" id="T2" class="form-control">
                </div>
                <div class="form-group">
                  <label>Comentarios</label>
                  <textarea name="T3" id="T3" class="form-control"></textarea>
                </div>

              </div>
            </div>          
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancel</button>
          <button type="button" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Proceed</button>
        </div>
      </div>
    </div>
    <!-- Nifty Modal Alertas-->
    <div id="form-primary-alertas" class="md-modal colored-header custom-width-alertas md-effect-11">
      <div class="md-content">
        <div class="modal-header">
          <h3>Responder Alerta</h3>
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
        </div>
        <form id="form-alertas">
          <div class="modal-body form">
            <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tipo de alerta</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Número de alerta</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Fecha y hora de la alerta</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Descripción de la alerta</label>
                  <textarea name="" id="" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Origen de la alerta</label>
                  <input type="text" name="T1" id="T1" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Estado de la alerta</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Crédito</label>
                  <input type="text" placeholder="OI" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Comentarios y Seguimiento</label>
                  <textarea name="comentarios" class="form-control"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">


                  <label class="radio-inline">
                    <input type="radio" id="RadioButton1" name="R1" class="icheck"> Pendiente
                  </label>
                  <label class="radio-inline">
                    <input type="radio" id="RadioButton2" name="R1" class="icheck"> En proceso de resolución
                  </label>
                  <label class="radio-inline">
                    <input type="radio" id="RadioButton3" name="R1" class="icheck"> Resuelta
                  </label>
                  <label class="radio-inline">
                    <input type="radio" id="RadioButton4" name="R1" class="icheck"> Para envío en reporte PLD
                  </label>

                </div>
              </div>
            </div>        
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancel</button>
          <button type="button" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Proceed</button>
        </div>
      </div>
    </div>
    <div class="md-overlay"></div>
  </div>     
    </body>
</html>
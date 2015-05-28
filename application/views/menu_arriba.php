<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="fa fa-gear"></span> </button>
      <a class="navbar-brand" href="#"><span>ProPLD</span></a></div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
       
        </li>
        <li class="active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu col-menu-2">
            <li class="col-sm-6 no-padding">
              <ul>
                <li class="dropdown-header"><i class="fa fa-group"></i>Usuarios</li>
                <li><a href="#">Cambio de Contraseña</a></li>
                <li><a href="#">Perfil de Usuario</a></li>
                <li><a href="#">Algo más aquí</a></li>
                <li class="dropdown-header"><i class="fa fa-question-circle"></i>Información</li>
                <li><a href="#">Listas Peps y Negras</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Buzón</a></li>
              </ul>
            </li>
            <li  class="col-sm-6 no-padding">
              <ul>
                <li class="dropdown-header"><i class="fa fa-gear"></i>Matriz de Riesgo</li>
                <li><a href="#" data-modal="form-primary-datos" class="md-trigger">Datos Generales</a></li>
                <li><a href="#" data-modal="form-primary-productos" class="md-trigger">Productos</a></li>
                <li><a href="#" data-modal="form-primary-frecuencia" class="md-trigger">Frecuencia de Pagos</a></li>
                <li><a href="#" data-modal="form-primary-transaccionalidad" class="md-trigger">Transaccionalidad</a></li>
                <li><a href="#" data-modal="form-primary-geografico" class="md-trigger">Riesgo geográfico</a></li>
                <li><a href="#" data-modal="form-primary-actividad" class="md-trigger">Riesgo por actividad</a></li>                
                <li><a href="#" data-modal="form-primary-persona" class="md-trigger">Tipo de persona</a></li>
                <li><a href="#" data-modal="form-primary-nopersonas" class="md-trigger">Número de personas</a></li>
                <li><a href="#" data-modal="form-primary-movimientos" class="md-trigger">Tipo de movimientos</a></li>

              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="dropdown profile_menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo 'MIKE'; ?><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Mi Cuenta</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Mnsajes</a></li>
            <li class="divider"></li>
            <li><a href="#">Cerrar Sistema</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right not-nav">
        <li class="button dropdown"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class=" fa fa-comments"></i></a>
          <ul class="dropdown-menu messages">
            <li>
              <div class="nano nscroller">
                <div class="content">
                  <ul>
                    <li> <a href="#"> <img src="<?= base_url('assets/images/blue.jpg')?>" alt="avatar" /><span class="date pull-right">8 May.</span> <span class="name">Blue Demon</span> Blue Demon esta fuera del Perfil Transaccional Permitido. </a> </li>
                    <li> <a href="#"> <img src="<?= base_url('assets/images/atlantis.jpg')?>" alt="avatar" /><span class="date pull-right">9 May.</span><span class="name">Atlantis</span>Realizo Pago en efectivo mayor a 300,000 pesos permitido para  Persona Fisica.</a> </li>
                  </ul>
                </div>
              </div>
              <ul class="foot">
                <li><a href="#">Ver más Mensajes.</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="button dropdown"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="bubble">2</span></a>
          <ul class="dropdown-menu">
            <li>
              <div class="nano nscroller">
                <div class="content">
                  <ul>
                    <li><a href="#"><i class="fa fa-credit-card danger"></i> <b>Atlantis</b> Realizo un pago en efectivo. <span class="date">1 hour ago.</span></a></li>
                  </ul>
                </div>
              </div>
              <ul class="foot">
                <li><a href="#">Ver más </a></li>
              </ul>
            </li>
          </ul>
        </li>
        
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</div>
<!-- Nifty Modal Datos Generales-->
<div id="form-primary-datos" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Datos Generales</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-alertas">
      <div class="modal-body form">
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre o razon Social</label>
              <input type="text" placeholder="Nombre o razon Social" class="form-control">
            </div>
            <div class="form-group">
              <label>Clave CASFIM</label>
              <input type="text" placeholder="Clave CASFIM" class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección completa</label>
              <input type="text" placeholder="Dirección completa" class="form-control">
            </div>
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" placeholder="Codigo Postal" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del operador del sistema</label>
              <input type="text" name="T1" id="T1" placeholder="Nombre del operador del sistema" class="form-control">
            </div>
            <div class="form-group">
              <label>Correo electronico del operador del sistema</label>
              <input type="text" placeholder="Correo electronico del operador del sistema" class="form-control">
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
<!-- Nifty Modal Productos-->
<div id="form-primary-productos" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Productos</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-productos">
      <div class="modal-body form">
      <h4><a href="#" data-modal="form-primary-newproducto" class="md-trigger">Agregar nuevo producto</a></h4>
        <div class="row">
          <div class="col-md-12">
            <table id="datatable-creditos" class="table table-bordered">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Tolerancia de Cuota</th>
                  <th>Tolerancia de Cuota interes</th>
                  <th>Min. de credito</th>
                  <th>Max. de credito</th>
                  <th></th>               
                </tr>
              </thead>
              <tbody>                           
                <tr class="odd gradeX">
                  <td>SIMPLE INDIVIDUAL</td>
                  <td>2.99</td>
                  <td>0.00</td>
                  <td class="center">$4,000.00</td>
                  <td class="center">$100,000.00</td>
                  <td class="center"><button data-modal="form-primary-creditos" class="btn btn-primary  btn-sm md-trigger"><i class="fa fa-folder-open"></i></button></td>
                </tr>                          
              </tbody>
            </table>
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
<!-- Nifty Modal Frecuencia Pagos-->
<div id="form-primary-frecuencia" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Frecuencia de Pagos</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-alertas">
      <div class="modal-body form">
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre o razon Social</label>
              <input type="text" placeholder="Nombre o razon Social" class="form-control">
            </div>
            <div class="form-group">
              <label>Clave CASFIM</label>
              <input type="text" placeholder="Clave CASFIM" class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección completa</label>
              <input type="text" placeholder="Dirección completa" class="form-control">
            </div>
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" placeholder="Codigo Postal" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del operador del sistema</label>
              <input type="text" name="T1" id="T1" placeholder="Nombre del operador del sistema" class="form-control">
            </div>
            <div class="form-group">
              <label>Correo electronico del operador del sistema</label>
              <input type="text" placeholder="Correo electronico del operador del sistema" class="form-control">
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
<!-- Nifty Modal Transaccionalidad-->
<div id="form-primary-transaccionalidad" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Transaccionalidad</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-alertas">
      <div class="modal-body form">
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre o razon Social</label>
              <input type="text" placeholder="Nombre o razon Social" class="form-control">
            </div>
            <div class="form-group">
              <label>Clave CASFIM</label>
              <input type="text" placeholder="Clave CASFIM" class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección completa</label>
              <input type="text" placeholder="Dirección completa" class="form-control">
            </div>
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" placeholder="Codigo Postal" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del operador del sistema</label>
              <input type="text" name="T1" id="T1" placeholder="Nombre del operador del sistema" class="form-control">
            </div>
            <div class="form-group">
              <label>Correo electronico del operador del sistema</label>
              <input type="text" placeholder="Correo electronico del operador del sistema" class="form-control">
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
<!-- Nifty Modal Riesgo Geográfico-->
<div id="form-primary-geografico" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Riesgo Geográfico</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-alertas">
      <div class="modal-body form">
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre o razon Social</label>
              <input type="text" placeholder="Nombre o razon Social" class="form-control">
            </div>
            <div class="form-group">
              <label>Clave CASFIM</label>
              <input type="text" placeholder="Clave CASFIM" class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección completa</label>
              <input type="text" placeholder="Dirección completa" class="form-control">
            </div>
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" placeholder="Codigo Postal" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del operador del sistema</label>
              <input type="text" name="T1" id="T1" placeholder="Nombre del operador del sistema" class="form-control">
            </div>
            <div class="form-group">
              <label>Correo electronico del operador del sistema</label>
              <input type="text" placeholder="Correo electronico del operador del sistema" class="form-control">
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
<!-- Nifty Modal Riesgo Actividad-->
<div id="form-primary-actividad" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Riesgo por Actividad</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-alertas">
      <div class="modal-body form">
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre o razon Social</label>
              <input type="text" placeholder="Nombre o razon Social" class="form-control">
            </div>
            <div class="form-group">
              <label>Clave CASFIM</label>
              <input type="text" placeholder="Clave CASFIM" class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección completa</label>
              <input type="text" placeholder="Dirección completa" class="form-control">
            </div>
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" placeholder="Codigo Postal" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del operador del sistema</label>
              <input type="text" name="T1" id="T1" placeholder="Nombre del operador del sistema" class="form-control">
            </div>
            <div class="form-group">
              <label>Correo electronico del operador del sistema</label>
              <input type="text" placeholder="Correo electronico del operador del sistema" class="form-control">
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
<!-- Nifty Modal Tipo de Persona-->
<div id="form-primary-persona" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Tipo de Persona</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-alertas">
      <div class="modal-body form">
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre o razon Social</label>
              <input type="text" placeholder="Nombre o razon Social" class="form-control">
            </div>
            <div class="form-group">
              <label>Clave CASFIM</label>
              <input type="text" placeholder="Clave CASFIM" class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección completa</label>
              <input type="text" placeholder="Dirección completa" class="form-control">
            </div>
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" placeholder="Codigo Postal" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del operador del sistema</label>
              <input type="text" name="T1" id="T1" placeholder="Nombre del operador del sistema" class="form-control">
            </div>
            <div class="form-group">
              <label>Correo electronico del operador del sistema</label>
              <input type="text" placeholder="Correo electronico del operador del sistema" class="form-control">
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
<!-- Nifty Modal Número de  Personas-->
<div id="form-primary-nopersonas" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Número de Personas</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-alertas">
      <div class="modal-body form">
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre o razon Social</label>
              <input type="text" placeholder="Nombre o razon Social" class="form-control">
            </div>
            <div class="form-group">
              <label>Clave CASFIM</label>
              <input type="text" placeholder="Clave CASFIM" class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección completa</label>
              <input type="text" placeholder="Dirección completa" class="form-control">
            </div>
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" placeholder="Codigo Postal" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del operador del sistema</label>
              <input type="text" name="T1" id="T1" placeholder="Nombre del operador del sistema" class="form-control">
            </div>
            <div class="form-group">
              <label>Correo electronico del operador del sistema</label>
              <input type="text" placeholder="Correo electronico del operador del sistema" class="form-control">
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
<!-- Nifty Modal Movimientos-->
<div id="form-primary-movimientos" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Tipo de Movimientos</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-alertas">
      <div class="modal-body form">
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre o razon Social</label>
              <input type="text" placeholder="Nombre o razon Social" class="form-control">
            </div>
            <div class="form-group">
              <label>Clave CASFIM</label>
              <input type="text" placeholder="Clave CASFIM" class="form-control">
            </div>
            <div class="form-group">
              <label>Dirección completa</label>
              <input type="text" placeholder="Dirección completa" class="form-control">
            </div>
            <div class="form-group">
              <label>Codigo Postal</label>
              <input type="text" placeholder="Codigo Postal" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del operador del sistema</label>
              <input type="text" name="T1" id="T1" placeholder="Nombre del operador del sistema" class="form-control">
            </div>
            <div class="form-group">
              <label>Correo electronico del operador del sistema</label>
              <input type="text" placeholder="Correo electronico del operador del sistema" class="form-control">
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
<!-- Formulario para agregar un nuevo producto -->
<!-- Nifty Modal Productos-->
<div id="form-primary-newproducto" class="md-modal colored-header-encabezado custom-width-productos md-effect-12">
  <div class="md-content">
    <div class="modal-header">
      <h3>Nuevo Producto</h3>
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
    </div>
    <form id="form-productos">
      <div class="modal-body form">
      
        <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombre del Producto</label>
              <input type="text" placeholder="Nombre del Producto" class="form-control">
            </div>
            <div class="form-group">
              <label>Tolerancia de Cuota</label>
              <input type="text" placeholder="Tolerancia de Cuota" class="form-control">
            </div>
            <div class="form-group">
              <label>Tolerancia de Cuota interes</label>
              <input type="text" placeholder="Tolerancia de Cuota interes" class="form-control">
            </div>
            <div class="form-group">
              <label>Min Monto del credito</label>
              <input type="text" placeholder="Min Monto del credito" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Max. Monto de credito.</label>
              <input type="text" name="T1" id="T1" placeholder="Max. Monto de credito." class="form-control">
            </div>
            <div class="form-group">
              <label>Min.Plazo de credito en meses</label>
              <input type="text" placeholder="Min.Plazo de credito en meses" class="form-control">
            </div>
            <div class="form-group">
              <label>Max.Plazo de credito en meses</label>
              <input type="text" placeholder="Max.Plazo de credito en meses" class="form-control">
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
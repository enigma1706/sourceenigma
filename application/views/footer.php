<html>
<body>
<script src="<?= base_url('js/jquery.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.nanoscroller/jquery.nanoscroller.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.sparkline/jquery.sparkline.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.easypiechart/jquery.easy-pie-chart.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/behaviour/general.js')?>"></script>
<script src="<?= base_url('js/jquery.ui/jquery-ui.js')?>" type="text/javascript"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.nestable/jquery.nestable.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/bootstrap.switch/bootstrap-switch.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.select2/select2.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/bootstrap.slider/js/bootstrap-slider.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.gritter/js/jquery.gritter.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.datatables/jquery.datatables.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.datatables/bootstrap-adapter/js/datatables.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.gritter/js/jquery.gritter.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery.niftymodals/js/jquery.modalEffects.js')?>"></script>   


    <script type="text/javascript">
      //Add dataTable Functions
      /*
      var functions = $('<div class="btn-group"><button class="btn btn-default btn-xs" type="button">Actions</button><button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" class="dropdown-menu pull-right"><li><a href="#">Edit</a></li><li><a href="#">Copy</a></li><li><a href="#">Details</a></li></ul></div>');
      $("#datatable tbody tr td:last-child").each(function(){
        $(this).html("");
        functions.clone().appendTo(this);
      });
      
      /*Add dataTable Icons
      var functions = $('<a class="btn btn-primary btn-xs edit" data-modal="modal-tab"   href="" data-original-title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> ');
      $("#datatable-icons tbody tr td:last-child").each(function(){
        $(this).html("");
        functions.clone().appendTo(this);
      });*/
      
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();

       

        $(document).on('click','#editar',function(){
        //this = es el elemento sobre el que se hizo click en este caso el boton
        //obtengo el id que guardamos en data-id
        var id= $(this).attr('data-id');
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id=id);
        console.log(params.persona=persona);
        console.log(params.action=action);
        $('.modal-body').load('get_Formulario_update', params,function(){
         
        })  
    })

        $(document).on('click','#new',function(){
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-new');
        params={};
        params.persona=persona;
        $('.modal-body').load('get_Formulario_nuevo', params,function(){
         
        })  
      
    })
        
         $(document).on('click','#new_moral',function(){
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-new');
        params={};
        console.log(params.persona=persona);
        $('.modal-body').load('get_Formulario_nuevo', params,function(){
         
        })  
      
    })

       /* Formating function for row details */
        function fnFormatDetails ( oTable, nTr )
        {
            var aData = oTable.fnGetData( nTr );
            var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
            sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
            sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
            sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
            sOut += '</table>';
             
            return sOut;
        }
       
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement( 'th' );
        var nCloneTd = document.createElement( 'td' );
        nCloneTd.innerHTML = '<img class="toggle-details" src="<?php echo base_url()?>images/plus.png" />';
        nCloneTd.className = "center";
         
        $('#datatable2 thead tr').each( function () {
            this.insertBefore( nCloneTh, this.childNodes[0] );
        } );
         
        $('#datatable2 tbody tr').each( function () {
            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
        } );
         
        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#datatable2').dataTable( {
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 0 ] }
            ],
            "aaSorting": [[1, 'asc']]
        });
         
        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#datatable2').delegate('tbody td img','click', function () {
            var nTr = $(this).parents('tr')[0];
            if ( oTable.fnIsOpen(nTr) )
            {
                /* This row is already open - close it */
                this.src = "<?php echo base_url()?>images/plus.png";
                oTable.fnClose( nTr );
            }
            else
            {
                /* Open this row */
                this.src = "images/minus.png";
                oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
            }
        } );
        
      $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
      $('.dataTables_length select').addClass('form-control');    

        //Horizontal Icons dataTable
        $('#datatable-icons').dataTable();
      });
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="<?= base_url('js/behaviour/voice-commands.js')?>"></script>
  <script src="<?= base_url('js/bootstrap/dist/js/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('js/jquery.flot/jquery.flot.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('js/jquery.flot/jquery.flot.pie.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('js/jquery.flot/jquery.flot.resize.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('js/jquery.flot/jquery.flot.labels.js')?>"></script>

  </body>
</html>

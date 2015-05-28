var App = (function () {

  App.dataTables = function(a){
    'use strict'
 console.log(a);


    //Basic Instance
    $("#datatable").dataTable();
    $("#datatable-expedientes").dataTable();
    $("#datatable-clientes").dataTable();
    $("#datatable-creditos").dataTable();
    $("#datatable-movimientos").dataTable();
    $("#datatable-alertas").dataTable();
    
    //Search input style
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Buscar');
    $('.dataTables_length select').addClass('form-control');  

    //Add dataTable Functions
    var functions = $('<div class="btn-group"><button class="btn btn-default btn-xs" type="button">Actions</button><button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" class="dropdown-menu pull-right"><li><a href="#">Edit</a></li><li><a href="#">Copy</a></li><li><a href="#">Details</a></li><li class="divider"></li><li><a href="#">Remove</a></li></ul></div>');
    $("#datatable tbody tr td:last-child").each(function(){
      $(this).html("");
      functions.clone().appendTo(this);
    });
    
    //Add dataTable Icons
    var functions = $('<a class="btn btn-default btn-xs" href="#" data-original-title="Open" data-toggle="tooltip"><i class="fa fa-file"></i></a> <a class="btn btn-primary btn-xs" href="#" data-original-title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="#" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a>');
    $("#datatable-icons tbody tr td:last-child").each(function(){
      $(this).html("");
      functions.clone().appendTo(this);
    });

    
    

     /* Formating function for row details */
      function fnFormatDetails ( oTable, nTr )
      {
                    var aData = oTable.fnGetData( nTr );
                    var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
                    sOut +='<thead>';
                    sOut +='<tr>';
                    sOut +='<th>Crédito</th>';
                    sOut +='<th>Monto</th>';
                    sOut +='<th>Moneda</th>';
                    sOut +='<th>Inicio</th>';
                    sOut +='<th>Termino</th>';
                    sOut +='<th>Tipo Crédito</th>';
                    sOut +='<th>Limite Cuota</th>';                         
                    sOut +='</tr>';
                    sOut +='</thead>';
                    sOut +='<tbody>';
                    sOut +='<tr>';
                    sOut +='<td>'+aData[2]+'</td>';
                    sOut +='<td></td>';
                    sOut +='<td></td>';
                    sOut +='<td></td>';
                    sOut +='<td></td>';
                    sOut +='<td></td>';
                    sOut +='<td></td>';
                    sOut +='<td></td>';
                    sOut +='</tr>';
                    sOut +='</tbody>';
                    sOut +='</table>';
          return sOut;
      }
     
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement( 'th' );
      var nCloneTd = document.createElement( 'td' );
      nCloneTd.innerHTML = '<img class="toggle-details" src="' +'/enigma' + '/' +'assets/img'+ '/plus.png" />';
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
              this.src = '/enigma' + '/' + 'assets/img' + "/plus.png";
              oTable.fnClose( nTr );
          }
          else
          {
              /* Open this row */
              this.src ='/enigma' + '/' + 'assets/img' + "/minus.png";
              oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
          }
      } );
      
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Buscar');
    $('.dataTables_length select').addClass('form-control');    

    //Horizontal Icons dataTable
    $('#datatable-icons').dataTable();

  };

  return App;
})(App || {});

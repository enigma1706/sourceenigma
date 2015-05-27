<html>
<body>
    <script type="text/javascript" src="<?= base_url('assets/lib/jquery/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/cleanzone.js')?>"></script>
    <script src="<?=base_url('assets/lib/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/voice-recognition.js')?>"></script>
    <script src="<?=base_url('assets/lib/jquery.niftymodals/js/jquery.modalEffects.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.crop/js/jquery.Jcrop.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.sparkline/jquery.sparkline.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.upload/js/jquery.iframe-transport.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.upload/js/jquery.fileupload.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-profile.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-charts.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.easypiechart/jquery.easypiechart.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.pie.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.resize.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-charts.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.datatables/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-data-tables.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.niftymodals/js/jquery.modalEffects.js')?>" type="text/javascript"></script>
    <script type="text/javascript"> 
    $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
        App.pageProfile();
        App.charts();
        $('.md-trigger').modalEffects();
            ////////////eventos de expedientes///////////////
        $("#frminformacion").submit(function() {
              var formulario=$("#frminformacion").serializeArray();
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_Insert_formularios",
                    data: formulario,
        })
                //return false;
    });        
    $(document).on('click','#editar',function(){
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
        console.log(params.persona=persona);
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
        ///////////////fin de eventos expedientes////////////////
        //////////////Eventos Clientes//////////////////////////
    $(document).on('click','#id_credito',function(){
        var id= $(this).attr('data-id');
        var url='mostrar_agrupacion_creditos?v='.concat(id);
        document.location=(url);
    }) 
});
</script>

  
  </body>
</html>

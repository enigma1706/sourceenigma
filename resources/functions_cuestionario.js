// JavaScript Document
$(document).ready(function(){
	
	 $('#new_producto').live('click',function(){
        params={};
        params.action="new_producto";
         $('#popupboxproducto').load('templates_cuestionario/formulario_pregunta_3.php', params,function(){
            $('#block_producto').show();
            $('#popupboxproducto').show();
		 })
    })
	
	
	$('#producto').live('submit',function(){
		var params={};
       		params.action='saveproducto';
			params.id_producto=$('#id_producto').val();
	   		params.T1=$('#T1').val();
	    	params.T2=$('#T2').val();
	    	params.T3=$('#T3').val();
	   	 	params.T4=$('#T4').val();
		 	params.T5=$('#T5').val();
		 	params.T6=$('#T6').val();
		 	params.T7=$('#T7').val();
        $.post('index13.php',params,function(){
			 $('#block_producto').hide();
       		 $('#popupboxproducto').hide();
			 location.reload();
			 	
        })
        return false;
    })
	
	
	
	 $('.consultaProducto').live('click',function(){
        
        var id_producto=$(this).attr('data-id_producto');
	
        params={};
       	params.id_producto=id_producto;
        params.action="editproducto";
        $('#popupboxproducto').load('index13.php', params,function(){
            $('#block_producto').show();
            $('#popupboxproducto').show();
        })

    })
	
	/// RIESGO DE TIPO PERSONAS 
	
	$('#new_persona').live('click',function(){
        params={};
        params.action="new_persona";
         $('#popupboxproducto').load('templates_cuestionario/formulario_pregunta_9.php', params,function(){
            $('#block_producto').show();
            $('#popupboxproducto').show();
		 })
    })
	$('#personas').live('submit',function(){
		var params={};
       		params.action='savepersonas';
			params.id_persona=$('#id_persona').val();
	   		params.T1=$('#T1').val();
	    	params.T2=$('#T2').val();
	    	 $.post('index19.php',params,function(){
			 $('#block_producto').hide();
       		 $('#popupboxproducto').hide();
			 location.reload();
			 	
        })
        return false;
    })
	///// Registro de origen de pago
	
	$('#new_origenpago').live('click',function(){
        params={};
        params.action="new_persona";
         $('#popupboxproducto').load('templates_cuestionario/formulario_pregunta_11.php', params,function(){
            $('#block_producto').show();
            $('#popupboxproducto').show();
		 })
    })
	
	$('#origende_pago').live('submit',function(){
		var params={};
       		params.action='saveorigenpago';
	   		params.etiqueta=$('#etiqueta').val();
	    	params.calificacion=$('#calificacion').val();
	    	 $.post('index21.php',params,function(){
			 $('#block_producto').hide();
       		 $('#popupboxproducto').hide();
			 location.reload();
			 	
        })
        return false;
    })
	
	
	
		
		$('#cancel_producto').live('click',function(){
        $('#block_producto').hide();
        $('#popupboxproducto').hide();
    })
		
		$('#cuestionario').live('submit',function(){
		var params={};
       		params.action='savecuestionario';
			params.id_cuestionario=$('#id_cuestionario').val();
	   		params.T1=$('#T1').val();
	    	params.T2=$('#T2').val();
	    	params.T3=$('#T3').val();
	   	 	params.T4=$('#T4').val();
		 	params.T5=$('#T5').val();
		 	params.T6=$('#T6').val();
		 	params.T7=$('#T7').val();
        $.post('index13.php',params,function(){
			 $('#block_producto').hide();
       		 $('#popupboxproducto').hide();
			 location.reload();
			 	
        })
        return false;
    })
	
	/*
	$('#riesgoestado').live('submit',function(){
		var params={};
       		console.log(params.action='save_riegoestado');
	   		console.log(params.id_estado=$('#id_estado').val());
	    	console.log(params.clasificacion_riesgo=$('#clasificacion_riesgo').val());
        $.post('index16.php',params,function(){
			 //location.reload();
			 	
        })
        return false;
    })
	*/
	
		
		
			
})
	
	
	
	
	
	

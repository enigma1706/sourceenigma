$(document).ready(function(){ //cuando el html fue cargado iniciar

    //añado la posibilidad de editar al presionar sobre edit
    $('.edit').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
		var persona=$(this).attr('data-persona');
        //preparo los parametros
        params={};
       	params.id=id;
	   	console.log(params.persona=persona);
        params.action="editClient";
        $('#popupbox').load('index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })

    })

    $('.delete').live('click',function(){
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="deleteClient";
        $('#popupbox').load('index.php', params,function(){
            $('#content').load('index.php',{action:"refreshGrid"});
        })

    })

    $('#new').live('click',function(){
        params={};
        params.action="newClient";
        $('#popupbox').load('index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
    })

	
 $('.new_credit').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id_expediente=$(this).attr('data-id_expediente');
        //preparo los parametros
        params={};
       	params.id_expediente=id_expediente;
        params.action="new_creditos";
        $('#popupboxcredit').load('index3.php', params,function(){
            $('#blockcredit').show();
            $('#popupboxcredit').show();
        })

    })
	
$('#client').live('submit',function(){
	/*
	if (client.T1.value.length==0){
        alert("Ingresa Nombre o Razón Social del Cliente.")
        client.T1.focus()
        return (false)
	}
	if (client.T2.value.length==0){
        alert("Ingresa Apellido Paterno del Cliente.")
        client.T2.focus()
        return (false)
	}
	if (client.T3.value.length==0){
        alert("Ingresa Apellido Materno del Cliente.")
        client.T3.focus()
        return (false)
	}
	if (client.T40.value.length==0){
        alert("Ingresa No Pasaporte.")
        client.T40.focus()
        return (false)
	}
	if (client.R14.selectedIndex==0){
       alert("Selecciona Tipo de Documento Migratorio.")
       client.R14.focus()
       return (false)
    }
	if (client.T43.value.length==0){
        alert("Ingresa Domicilio en Pais de Origen.")
        client.T43.focus()
        return (false)
	}
	if (client.T4.value.length==0){
        alert("Ingresa Nombre de la Calle del Domicilio del Cliente.")
        client.T4.focus()
        return (false)
	}
	if (client.T5.value.length==0){
        alert("Ingresa Numero del Domicilio del Cliente.")
        client.T5.focus()
        return (false)
	}
	if (client.userInput.value.length==0){
        alert("Ingresa CP.")
        client.userInput.focus()
        return (false)
	}
	if (client.modelo.selectedIndex==0){
       alert("Selecciona una Colonia.")
       client.modelo.focus()
       return (false)
    }
	if (client.T12.value.length==0){
        alert("Ingresa Fecha de Nacimiento o Fecha de Constitucion.")
        client.T12.focus()
        return (false)
	}
	if (client.T13.value.length==0){
        alert("Ingresa Nacionalidad del Cliente.")
        client.T13.focus()
        return (false)
	}
	if (client.T15.value.length==0){
        alert("Ingresa Ocupasion o Profesion del Cliente.")
        client.T15.focus()
        return (false)
	}
	if (client.T16.value.length==0){
        alert("Ingresa Actividad o Giro del Negocio donde Trabaja el Cliente.")
        client.T16.focus()
        return (false)
	}
	if (client.T17.value.length==0){
        alert("Ingresa Numero Telefonico del Cliente.")
        client.T17.focus()
        return (false)
	}
	if (client.T19.value.length==0){
        alert("Ingresa RFC del Cliente.")
        client.T19.focus()
        return (false)
	}
	if (client.T52.value.length==0){
        alert("Ingresa CURP del Cliente.")
        client.T52.focus()
        return (false)
	}*/
	
	    var params={};
        params.action='saveClient';
		params.id=$('#id').val();
        params.D1=$('#D1').val();
		params.GENERO=$('#GENERO').val();
     	console.log(params.T1=$('#T1').val());
        params.T2=$('#T2').val();
        params.T3=$('#T3').val();
        params.T4=$('#T4').val();
        params.T5=$('#T5').val();
        params.T6=$('#T6').val();
        params.T7=$('#T7').val();
        params.T8=$('#T8').val();
        params.T9=$('#T9').val();
        params.T10=$('#T10').val();
        params.T11=$('#T11').val();
        params.T12=$('#T12').val();
        params.T13=$('#T13').val();
        params.T14=$('#T14').val();
        params.T15=$('#T15').val();
      	params.T16=$('#T16').val();
        params.T17=$('#T17').val();
        params.T18=$('#T18').val();
        params.T19=$('#T19').val();
        params.T52=$('#T52').val();
        params.T20=$('#T20').val();
        params.T21=$('#T21').val();
        params.R1=$('#R1').val();
        params.T22=$('#T22').val();
        params.T23=$('#T23').val();
        params.T24=$('#T24').val();
        params.T25=$('#T25').val();
        params.T26=$('#T26').val();
        params.T27=$('#T27').val();
        params.T28=$('#T28').val();
        params.T29=$('#T29').val();
        params.T30=$('#T30').val();
        params.T31=$('#T31').val();
        params.T32=$('#T32').val();
        params.T33=$('#T33').val();
        params.T34=$('#T34').val();
        params.R2=$('#R2').val();
        params.T35=$('#T35').val();
        params.R3=$('#R3').val();
        params.T36=$('#T36').val();
        params.R4=$('#R4').val();
        params.T37=$('#T37').val();
        params.R5=$('#R5').val();
        params.T38=$('#T38').val();
        params.R6=$('#R6').val();
        params.T39=$('#T39').val();
        params.R7=$('#R7').val();
        params.R8=$('#R8').val();
		params.T40=$('#T40').val();
		params.T41=$('#T41').val();
		params.T42=$('#T42').val();
		params.T43=$('#T43').val();
		params.T44=$('#T44').val();
		params.T45=$('#T45').val();
		params.T46=$('#T46').val();
		params.T47=$('#T47').val();
		params.T48=$('#T48').val();
		params.T49=$('#T49').val();
		params.R9=$('#R9').val();
		params.R10=$('#R10').val();
		params.R11=$('#R11').val();
		params.R12=$('#R12').val();
		params.R13=$('#R13').val();
		params.R14=$('#R14').val();
		params.R15=$('#R15').val();
		params.R16=$('#R16').val();
		params.R17=$('#R17').val();
		params.R18=$('#R18').val();
		params.R19=$('#R19').val();
		params.R20=$('#R20').val();
		params.R21=$('#R21').val();
		params.R30=$('#R30').val();
		params.T50=$('#T50').val();
		params.T51=$('#T51').val();
		params.estado=$('#estado').val();
		
			params.tabla=$('#tabla').val();

        $.post('index.php',params,function(){
            //$('#block').hide();
            //$('#popupbox').hide();
            $('#content').load('index.php',{action:"refreshGrid"});
        })
        return false;
    })
	
$('#client_coacreditado').live('submit',function(){
	/*
	if (client.T1.value.length==0){
        alert("Ingresa Nombre o Razón Social del Cliente.")
        client.T1.focus()
        return (false)
	}
	if (client.T2.value.length==0){
        alert("Ingresa Apellido Paterno del Cliente.")
        client.T2.focus()
        return (false)
	}
	if (client.T3.value.length==0){
        alert("Ingresa Apellido Materno del Cliente.")
        client.T3.focus()
        return (false)
	}
	if (client.T40.value.length==0){
        alert("Ingresa No Pasaporte.")
        client.T40.focus()
        return (false)
	}
	if (client.R14.selectedIndex==0){
       alert("Selecciona Tipo de Documento Migratorio.")
       client.R14.focus()
       return (false)
    }
	if (client.T43.value.length==0){
        alert("Ingresa Domicilio en Pais de Origen.")
        client.T43.focus()
        return (false)
	}
	if (client.T4.value.length==0){
        alert("Ingresa Nombre de la Calle del Domicilio del Cliente.")
        client.T4.focus()
        return (false)
	}
	if (client.T5.value.length==0){
        alert("Ingresa Numero del Domicilio del Cliente.")
        client.T5.focus()
        return (false)
	}
	if (client.userInput.value.length==0){
        alert("Ingresa CP.")
        client.userInput.focus()
        return (false)
	}
	if (client.modelo.selectedIndex==0){
       alert("Selecciona una Colonia.")
       client.modelo.focus()
       return (false)
    }
	if (client.T12.value.length==0){
        alert("Ingresa Fecha de Nacimiento o Fecha de Constitucion.")
        client.T12.focus()
        return (false)
	}
	if (client.T13.value.length==0){
        alert("Ingresa Nacionalidad del Cliente.")
        client.T13.focus()
        return (false)
	}
	if (client.T15.value.length==0){
        alert("Ingresa Ocupasion o Profesion del Cliente.")
        client.T15.focus()
        return (false)
	}
	if (client.T16.value.length==0){
        alert("Ingresa Actividad o Giro del Negocio donde Trabaja el Cliente.")
        client.T16.focus()
        return (false)
	}
	if (client.T17.value.length==0){
        alert("Ingresa Numero Telefonico del Cliente.")
        client.T17.focus()
        return (false)
	}
	if (client.T19.value.length==0){
        alert("Ingresa RFC del Cliente.")
        client.T19.focus()
        return (false)
	}
	if (client.T52.value.length==0){
        alert("Ingresa CURP del Cliente.")
        client.T52.focus()
        return (false)
	}*/
	
	    var params={};
        params.action='saveClient';
		params.id=$('#id_coa').val();
        params.D1=$('#D1_coa').val();
		params.GENERO_=$('#GENERO_coa').val();
     	console.log(params.T1=$('#T1_coa').val());
        console.log(params.T2=$('#T2_coa').val());
        params.T3=$('#T3_coa').val();
        params.T4=$('#T4').val();
        params.T5$('#T5_coa').val();
        params.T6=$('#T6_coa').val();
        params.T7=$('#T7_coa').val();
        params.T8=$('#T8_coa').val();
        params.T9=$('#T9_coa').val();
        params.T10=$('#T10_coa').val();
        params.T11=$('#T11_coa').val();
        params.T12=$('#T12_coa').val();
        params.T13=$('#T13_coa').val();
        params.T14=$('#T14_coa').val();
        params.T15=$('#T15_coa').val();
        params.T16=$('#T16_coa').val();
        params.T17=$('#T17_coa').val();
        params.T18=$('#T18_coa').val();
        params.T19=$('#T19_coa').val();
        params.T52=$('#T52_coa').val();
        params.T20=$('#T20_coa').val();
        params.T21=$('#T21_coa').val();
        params.R1=$('#R1_coa').val();
        params.T22=$('#T22_coa').val();
        params.T23=$('#T23_coa').val();
        params.T24=$('#T24_coa').val();
        params.T25=$('#T25_coa').val();
        params.T26=$('#T26_coa').val();
        params.T27=$('#T27_coa').val();
        params.T28=$('#T28_coa').val();
        params.T29=$('#T29_coa').val();
        params.T30=$('#T30_coa').val();
        params.T31=$('#T31_coa').val();
        params.T32=$('#T32_coa').val();
        params.T33=$('#T33_coa').val();
        params.T34=$('#T34_coa').val();
        params.R2=$('#R2_coa').val();
        params.T35=$('#T35_coa').val();
        params.R3=$('#R3_coa').val();
        params.T36=$('#T36_coa').val();
        params.R4=$('#R4_coa').val();
        params.T37=$('#T37_coa').val();
        params.R5=$('#R5_coa').val();
        params.T38=$('#T38_coa').val();
        params.R6=$('#R6_coa').val();
        params.T39=$('#T39_coa').val();
        params.R7=$('#R7_coa').val();
        params.R8=$('#R8_coa').val();
		params.T40=$('#T40_coa').val();
		params.T41=$('#T41_coa').val();
		params.T42=$('#T42_coa').val();
		params.T43=$('#T43_coa').val();
		params.T44=$('#T44_coa').val();
		params.T45=$('#T45_coa').val();
		params.T46=$('#T46_coa').val();
		params.T47=$('#T47_coa').val();
		params.T48=$('#T48_coa').val();
		params.T49=$('#T49_coa').val();
		params.R9=$('#R9_coa').val();
		params.R10=$('#R10_coa').val();
		params.R11=$('#R11_coa').val();
		params.R12=$('#R12_coa').val();
		params.R13=$('#R13_coa').val();
		params.R14=$('#R14_coa').val();
		params.R15=$('#R15_coa').val();
		params.R16=$('#R16_coa').val();
		params.R17=$('#R17_coa').val();
		params.R18=$('#R18_coa').val();
		params.R19=$('#R19_coa').val();
		params.R20=$('#R20_coa').val();
		params.R21=$('#R21_coa').val();
		params.R30=$('#R30_coa').val();
		params.T50=$('#T50_coa').val();
		params.T51=$('#T51_coa').val();
		params.estado_coa=$('#estado_coa').val();
		console.log(params.tabla_acreditado=$('#tabla_acreditado').val());
        $.post('index.php',params,function(){
            //$('#block').hide();
            //$('#popupbox').hide();
            $('#content').load('index.php',{action:"refreshGrid"});
        })
        return false;
    })	
	
	
	$('#credit').live('submit',function(){
		
		/*if (credit.no_credito.value.length==0){
        alert("Ingresa Numero de Credito.")
        credit.no_credito.focus()
        return (false)
	}
	if (credit.tipo_credito.selectedIndex==0){
       alert("Selecciona Tipo de Credito.")
       credit.tipo_credito.focus()
       return (false)
    }
	if (credit.unidad_credito.selectedIndex==0){
       alert("Selecciona Unidad de Credito.")
       credit.unidad_credito.focus()
       return (false)
    }
	if (credit.tipo_moneda.selectedIndex==0){
       alert("Selecciona Tipo de Divisa.")
       credit.tipo_moneda.focus()
       return (false)
    }
	if (credit.T1.value.length==0){
        alert("Ingresa Monto de Credito.")
        credit.T1.focus()
        return (false)
	}
	if (credit.T2.value.length==0){
        alert("Ingresa Monto de Cuota Pactada.")
        credit.T2.focus()
        return (false)
	}
	if (credit.T3.value.length==0){
        alert("Ingresa Fechad de Inicio.")
        credit.T3.focus()
        return (false)
	}
		if (credit.T4.value.length==0){
        alert("Ingresa Fechad de Final.")
        credit.T4.focus()
        return (false)
	}
	if (credit.T4.value.length==0){
        alert("Ingresa Fechad de Final.")
        credit.T4.focus()
        return (false)
	}
	if (credit.T6.value.length==0){
        alert("Ingresa Nombre de Ejecutivo que Entrevisto.")
        credit.T6.focus()
        return (false)
	}
	if (credit.T7.value.length==0){
        alert("Ingresa Fecha de Entrevista con el Ejecutivo.")
        credit.T7.focus()
        return (false)
	}
	if (credit.T8.value.length==0){
        alert("Ingresos Mensuales Reportados.")
        credit.T8.focus()
        return (false)
	}*/
       
		var params={};
       	params.action='saveCredit';
        params.id_credito=$('#id_credito').val();
	   	expediente=params.id_expediente=$('#id_expediente').val();
       	params.no_credito=$('#no_credito').val();
       	params.tipo_credito=$('#tipo_credito').val();
       	params.unidad_credito=$('#unidad_credito').val();
       	params.tipo_moneda=$('#tipo_moneda').val();
	   	params.T1=$('#T1').val();
	   	params.T2=$('#T2').val();
	   	params.T3=$('#T3').val();
	   	params.T4=$('#T4').val();
		params.T6=$('#T6').val();
		params.T7=$('#T7').val();
		params.T8=$('#T8').val();
		params.T9=$('#T9').val();
		params.T10=$('#T10').val();
		params.limite_cuota=$('#limite_cuota').val();
        $.post('index3.php',params,function(){
            $('#blockcredit').hide();
            $('#popupboxcredit').hide();
         	location.reload();
        })
        return false;
    })
	
	
	
	$('.consultaCliente').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id_expediente=$(this).attr('data-id_expediente');
        //preparo los parametros
        params={};
       	params.id_expediente=id_expediente;
        params.action="consulta_cliente";
        $('#popupboxClient').load('index2.php', params,function(){
            $('#blockClient').show();
            $('#popupboxClient').show();
        })


    })
	
	
	
	
	$('.consultaCredito').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id_expediente=$(this).attr('data-id_expediente');
		var id_credito=$(this).attr('data-id_credito');
        //preparo los parametros
        params={};
       	params.id_expediente=id_expediente;
		params.id_credito=id_credito;
        params.action="consultaCredito";
        $('#popupboxClient').load('index.php', params,function(){
            $('#blockClient').show();
            $('#popupboxClient').show();
        })

    })
	
	$('.consultadatosCredito').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
		var id_credito=$(this).attr('data-id_credito');
        //preparo los parametros
        params={};
		params.id_credito=id_credito;
        params.action="consultadatosCredito";
        $('#popupboxcredit').load('index4.php', params,function(){
            $('#blockcredit').show();
            $('#popupboxcredit').show();
        })

    })
////Movimientos
 $('.new_move').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id_credito=$(this).attr('data-id_credito');
		 var num_credito=$(this).attr('data-num_credito');
        //preparo los parametros
        params={};
       	params.id_credito=id_credito;
		params.num_credito=num_credito;
        params.action="new_move";
        $('#popupboxmove').load('index4.php', params,function(){
            $('#blockmove').show();
            $('#popupboxmove').show();
        })

    })
	
	$('#movimiento').live('submit',function(){
		
		
		/*
	if (movimiento.origen_pago.selectedIndex==0){
       alert("Selecciona Origen de Pago.")
       movimiento.origen_pago.focus()
       return (false)
    }
	if (movimiento.tipo_cargo.selectedIndex==0){
       alert("Selecciona Tipo de Cargo.")
       movimiento.tipo_cargo.focus()
       return (false)
    }
	if (movimiento.tipo_moneda.selectedIndex==0){
       alert("Selecciona Tipo de Divisa.")
       movimiento.tipo_moneda.focus()
       return (false)
    }*/
	if (movimiento.T1.value.length==0){
        alert("Ingresa Monto a Pagar.")
        movimiento.T1.focus()
        return (false)
	}
	if (movimiento.T2.value.length==0){
        alert("Ingresa Fecha de Movimiento.")
        movimiento.T2.focus()
        return (false)
	}
       
		var params={};
       	params.action='save_move';
		params.id_movimiento=$('#id_movimiento').val();
        params.id_credito=$('#id_credito').val();
		params.no_credito=$('#no_credito').val();
       	params.origen_pago=$('#origen_pago').val();
       	params.tipo_cargo=$('#tipo_cargo').val();
       	params.tipo_moneda=$('#tipo_moneda').val();
	   	params.T1=$('#T1').val();
	   	params.T2=$('#T2').val();
	   	params.T3=$('#T3').val();
	   	params.T4=$('#T4').val();
        $.post('index4.php',params,function(){
            $('#blockmove').hide();
            $('#popupboxmove').hide();
         	location.reload();
        })
        return false;
    })

$('.consultamovimieto').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
		var id_movimiento=$(this).attr('data-id_movimiento');
        //preparo los parametros
        params={};
		params.id_movimiento=id_movimiento;
        params.action="consultamovimieto";
        $('#popupboxmove').load('index4.php', params,function(){
            $('#blockmove').show();
            $('#popupboxmove').show();
        })

    })






	
	
    // boton cancelar, uso live en lugar de bind para que tome cualquier boton
    // nuevo que pueda aparecer
    $('#cancel').live('click',function(){
        $('#block').hide();
        $('#popupbox').hide();
    })

 $('#cancel_credit').live('click',function(){
		$('#blockcredit').hide();
		$('#popupboxcredit').hide();
	})
	
	$('#cancel_consultacredito').live('click',function(){
		$('#blockClient').hide();
		$('#popupboxClient').hide();
	})	
	$('#cancel_move').live('click',function(){
		$('#blockmove').hide();
		$('#popupboxmove').hide();
	})			
	
})


 


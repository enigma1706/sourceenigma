// JavaScript Document

///*******localidad para persona Fisica*****************////
$(document).ready(function(){
   $("#userInput").change(function () {
           $("#userInput ").each(function () {
            elegido1=$(this).val();
            $.post("clase.php", { elegido1: elegido1 }, function(data){
			$("#modelo").html(data);
            });            	
        });
   })
});

$(document).ready(function(){
        $("#modelo").change(function(){
   		var elegido2 = $("#modelo option:selected").val();
		$.post("clase.php", { elegido2: elegido2}, function(data){
		$("#modelo1").html(data);
        });            
    //alert(elegido2);
     });
});

///**********localidad para coacreditados******////

$(document).ready(function(){
   $("#userInput1").change(function () {
           $("#userInput1 ").each(function () {
            elegido1=$(this).val();
            $.post("clase.php", { elegido1: elegido1 }, function(data){
			$("#modelos").html(data);
            });            	
        });
   })
});

$(document).ready(function(){
        $("#modelos").change(function(){
   		var elegido2 = $("#modelos option:selected").val();
		$.post("clase.php", { elegido2: elegido2}, function(data){
		$("#modelos1").html(data);
        });            
    //alert(elegido2);
     });
});





$(document).ready(function(){
        $("#modelo_localidad").change(function(){
   		var codigo_eleccion = $("#modelo_localidad option:selected").val();
		$.post("clase_cuestionario.php", { codigo_eleccion: codigo_eleccion}, function(data){
		$("#modelo_codigo").html(data);
        });            
    //alert(elegido2);
     });
});


 $(document).ready(function(){
   $("#userInput1").change(function () {
           $("#userInput1 ").each(function () {
            elegido3=$(this).val();
            $.post("clase.php", { elegido3: elegido3 }, function(data){
			$("#modelo2").html(data);
            });            
        });
   })
});

$(document).ready(function(){
        $("#modelo2").change(function(){
   		var elegido4 = $("#modelo2 option:selected").val();
		$.post("clase.php", { elegido4: elegido4}, function(data){
		$("#modelo3").html(data);
        });            
    //alert(elegido2);
     });
});
$(document).ready(function(){
        $("#D1").change(function(){
   		var elegido5 = $("#D1 option:selected").val();
		$.post("clase.php", { elegido5: elegido5}, function(data){
		$("#formularios").html(data);
        });            
    //alert(elegido2);
     });
});


function check(browser)
  {
  document.getElementById("R1").value=browser;
  }
  function check1(browser1)
  {
  document.getElementById("R2").value=browser1;
  }
  function check2(browser2)
  {
  document.getElementById("R3").value=browser2;
  }
  function check3(browser3)
  {
  document.getElementById("R4").value=browser3;
  }
  function check4(browser4)
  {
  document.getElementById("R5").value=browser4;
  }
  function check5(browser5)
  {
  document.getElementById("R6").value=browser5;
  }
   function check6(browser6)
  {
  document.getElementById("R7").value=browser6;
  }
  function check7(browser7)
  {
  document.getElementById("R8").value=browser7;
  }
  function check8(browser8)
  {
  document.getElementById("R9").value=browser8;
  }
  function check9(browser9)
  {
  document.getElementById("R10").value=browser9;
  }
  function check10(browser10)
  {
  document.getElementById("R11").value=browser10;
  }
   function check11(browser11)
  {
  document.getElementById("R12").value=browser11;
  }
   function check12(browser12)
  {
  document.getElementById("R13").value=browser12;
  }
  function check13(browser13)
  {
  document.getElementById("R16").value=browser13;
  }
  function check14(browser14)
  {
  document.getElementById("R17").value=browser14;
  }
  function check15(browser15)
  {
  document.getElementById("R18").value=browser15;
  }
  function check16(browser16)
  {
  document.getElementById("R19").value=browser16;
  }
  function check17(browser17)
  {
  document.getElementById("R20").value=browser17;
  }
  function check18(browser18)
  {
  document.getElementById("R21").value=browser18;
  }
  
  ///////// cheked de documentos para expedientes
  
  $(document).ready(function(){  
  $(coacreditado).hide();
    $("#checkme_coacreditado").click(function() {  
        if($("#checkme_coacreditado").is(':checked')) {  
			alert("Está activado el formulario de Coacreditado");  
            $(coacreditado).show();
			
        } else {  
            alert("No está activado el formulario de Coacreditado");  
        	$(coacreditado).hide();
		}  
    });  
  
});


 $(document).ready(function(){  
  $(o_solidario).hide();
    $("#checkme_o_solidario").click(function() {  
        if($("#checkme_o_solidario").is(':checked')) {  
            $(o_solidario).show();
			alert("Está activado el formulario de Obligado Solidario");  
        } else {  
            alert("No está activado el formulario de Obligado Solidario");  
        	$(o_solidario).hide();
		}  
    });  
  
});    

$(document).ready(function(){  
  $(t_solidario).hide();
    $("#checkme_t_solidario").click(function() {  
        if($("#checkme_t_solidario").is(':checked')) {  
            $(t_solidario).show();
			alert("Está activado el formulario de Tercero Solidario");  
        } else {  
            alert("No está activado el formulario de Tercero Solidario");  
        	$(t_solidario).hide();
		}  
    });  
  
});    
 
 
$(document).ready(function(){  
  $(beneficiarios).hide();
    $("#checkme_beneficiarios").click(function() {  
        if($("#checkme_beneficiarios").is(':checked')) {  
            $(beneficiarios).show();
			alert("Está activado el formulario de Beneficiario");  
        } else {  
            alert("No está activado el formulario de Beneficiario");  
        	$(beneficiarios).hide();
		}  
    });  
  
});     

$(document).ready(function(){  
  $(apoderado).hide();
    $("#checkme_apoderado").click(function() {  
        if($("#checkme_apoderado").is(':checked')) {  
            $(apoderado).show();
			alert("Está activado el formulario de Apoderado");  
        } else {  
            alert("No está activado el formulario de Apoderado");  
        	$(apoderado).hide();
		}  
    });  
  
});

$(document).ready(function(){  
  $(p_real).hide();
    $("#checkme_p_real").click(function() {  
        if($("#checkme_p_real").is(':checked')) {  
            $(p_real).show();
			alert("Está activado el formulario de Propietario Real");  
        } else {  
            alert("No está activado el formulario de Propietario Real");  
        	$(p_real).hide();
		}  
    });  
  
});




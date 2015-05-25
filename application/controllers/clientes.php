<?php
class Clientes extends CI_Controller{

    public function mostrar_pagina_clientes(){
        $this->load->model('expedientes_model/expediente_model');
        $listadoEmpleados = $this->expediente_model->get_Expedientes();
        $listado_total_clientes= $this->expediente_model->get_Numero_total();
        $listado_fisicas=$this->expediente_model->get_Empleados_fisica();
        $listado_moral=$this->expediente_model->get_Empleados_moral(); 
        $data = array(
        'empleados' => $listadoEmpleados
        );
        $data['count_clientes']=$listado_total_clientes;
        $data['count_personas_fisica'] = $listado_fisicas;
        $data['count_personas_moaral']=$listado_moral;
        $this->load->view('header');
        $this->load->view('pagina_clientes', $data);
        $this->load->view('footer');
    }
    public function get_Formulario_nuevo(){
        $tipo_persona=$this->input->post('persona');
        if($tipo_persona=='FISICA'){
        $this->load->view('form_persona_fisica');}
        if($tipo_persona=='MORAL'){
        $this->load->view('form_persona_moral');}
    }  
    
    public function get_Formulario_update(){
        $id_cliente=$this->input->post('id');
        $tipo_formulario=$this->input->post('persona');
        $this->load->model('expedientes_model/expediente_model');
        $listadoEmpleados = $this->expediente_model->get_Expedientes();
        foreach ( $datos_empleados as $item_cliente) {
            $data['Id']=$item_cliente['Id'];
            $data['tipo']=$item_cliente['tipo'];
            $data['R30']=$item_cliente['R30'];
            $data['GENERO']=$item_cliente['GENERO'];
            $data['nombre']=$item_cliente['T1'];
            $data['T2']=$item_cliente['T2'];
            $data['T3']=$item_cliente['T3'];
            $data['T4']=$item_cliente['T4'];
            $data['T5']=$item_cliente['T5'];
            $data['T6']=$item_cliente['T6'];

          }
        if($tipo_formulario=='FISICA'){
        $this->load->view('form_persona_fisica',$data);
        }
        if($tipo_formulario=='MORAL'){
        $this->load->view('form_persona_moral',$data);}
        }      
}
?>
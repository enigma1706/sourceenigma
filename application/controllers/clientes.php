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
    public function mostrar_agrupacion_creditos(){
        $id_cliente=$this->input->get('v');
        $this->load->model('expedientes_model/expediente_model');
        $datos_clientes=$this->expediente_model->get_Consulta_formularios($id_cliente);
        $data['datos_clientes'] = $datos_clientes;
        $this->load->model('creditos_model');
        $listadoCreditos= $this->creditos_model->get_Creditos_cliente($id_cliente);
        $data['clientes_creditos'] = $listadoCreditos;
        $this->load->view('header');
        $this->load->view('pagina_agrupacion_creditos',$data);
        $this->load->view('footer');
    }   
}
?>
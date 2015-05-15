<?php
class Creditos extends CI_Controller{

    public function mostrar_pagina_creditos(){
        $this->load->model('creditos_model');
        $listadoCreditos = $this->creditos_model->get_Creditos();
        $listado_total_creditos= $this->creditos_model->get_Numero_total();
        $listado_creditos_activos=$this->creditos_model->get_Activos();
        $listado_creditos_finalizados=$this->creditos_model->get_Finalizados();
        $data = array(
        'creditos' => $listadoCreditos
        );
        $data['count_creditos']=$listado_total_creditos;
        $data['count_creditos_activos'] = $listado_creditos_activos;
        $data['count_creditos_finalizados']=$listado_creditos_finalizados;
        $this->load->view('header');
        $this->load->view('pagina_creditos', $data);
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
        $this->load->model('empleados_model');
        $datos_empleados=$this->empleados_model->get_Consulta_formularios($id_cliente);
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
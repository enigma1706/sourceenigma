<?php
class Creditos_model extends CI_Model{

    function __construct()
    {
        $this->load->database();
    }
    public function get_Creditos(){
        $query = $this->db->get('book_creditos');
        return $query->result_array();
    }
    public function get_Numero_total(){
    	return  $this->db->count_all('book_creditos');
    }
    public function get_Activos(){
    	$this->db->like('Estado','ACTIVO');
		$this->db->from('book_creditos');
		return $this->db->count_all_results();
    }
    public function get_Finalizados(){
    	$this->db->like('Estado','FINALIZADO');
		$this->db->from('book_clientes');
		return $this->db->count_all_results();
    }
    public function get_Consulta_formularios($id){

    	 $query = $this->db->get_where('book_clientes', array('Id' => $id));
    	 return $query->result_array();
    }
}
?>
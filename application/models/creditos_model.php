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
    public function get_Creditos_cliente($id){
        $query = $this->db->query("SELECT Id,no_credito,T1,tipo_moneda,T3,T4,tipo_credito,T2,@rownum:=@rownum+1 as num_credito,Estado  FROM book_creditos,(SELECT @rownum:=0)R where id_expediente=$id order by Id desc;");
        return $query->result_array();
    }
    public function get_Catalogotipocredito(){
        $query = $this->db->get('cat_tipocredito');
        return $query->result_array();
    }
    public function  get_Frecuenciapago(){
        $query = $this->db->get('cat_unidadcredito');
        return $query->result_array();
    }
    public function get_Divisa(){
        $query = $this->db->get("cat_divisas");
        return $query->result_array();
    }
    public function get_Insert_tabla_creditos($data){
        $this->db->insert('book_creditos',$data); 
    }
}
?>
<?php

class Datasource extends CI_Model {

    public function get_all($table) {
        
        $result=$this->db->get($table)->result_array();
        return $result;
    }

    
   
    
    
    public function insert_data($table, $field) {
        $this->db->insert($table, $field);
    }

    public function delete_data($table, $condition) {
        $this->db->delete($table, $condition);
    }

    public function select_where($table,$condition) {
        $this->db->where($condition);
        $q=$this->db->get($table)->result_array();
        return $q;
    }
    
    public function select_where_from($table,$field,$condition){
        $this->db->select($field);
        $q=$this->db->get_where($table,$condition);
        return $q->result();  
    }
    
    
    public function update($table,$val,$cdtn){
			 
			$field=array();
			
			$condition=array();
			
			 foreach($val as $k=>$v){ 
				 array_push($field,$k."='".$v."'");	
				}
				
				 $f=implode(" , ",$field);
				
				
				foreach($cdtn as $a=>$b){ 
				 array_push($condition,$a."='".$b."'");	
				} 
				
				 $c=implode(" and ",$condition);
				 
				 
				 
				 $q="update ".$table." set ".$f." where ".$c;
				 
				 mysql_query($q);				 
			 } 
    

}
?>

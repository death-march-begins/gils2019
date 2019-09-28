<?php
    class Inmodel extends CI_Model
    {
        public function getData($id){
            $this->db->select('*');
            $this->db->from('chamber');
            $this->db->where('chamber.id', $id);  
            $query = $this->db->get();    
            if($query->num_rows() > 0){
                $rows = $query -> row_array();
                return $rows;
            }
                
        }

}

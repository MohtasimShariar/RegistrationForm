<?php

class Data_model extends CI_Model{

    //insert data
    // public function add_user() {
    //     $this->db->insert('registrationform');
    // }
    function insert_data($table, $data) {
        //insert
        $this->db->insert($table, $data);
    }
    //fetched data
    function get_table_data($table) {
        $res=$this->db->get($table);
        return $res->result_array();
    }
    //delete
    function remove_record($table,$id){
        $this->db->where('id',$id);
        $this->db->delete($table);
    }

    //update record
    function get_modify_data($table,$id){
        $this->db->where('id',$id);
        $res=$this->db->get($table);
        $data= $res->result_array();
        return $data[0];
    }
    
    function update_data($table,$data,$id){
        $this->db->where('id',$id);
        $this->db->update($table,$data);
    }

    
    // // fetch data
    // public function getUsers() {
    //     $users = $this->db->get('users')->result_array();
    //     return $users;
    // }

}
?>
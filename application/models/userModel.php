<?php

class UserModel extends CI_Model {
    // table name
    private $table_name= 'user';
 
    function User(){
        parent::Model();
    }
    // get number of persons in database
    function count_all(){
        return $this->db->count_all($this->table_name);
    }
    // get persons with paging
    function get_paged_list($limit = 10, $offset = 0){
        $this->db->order_by('id','asc');
        return $this->db->get($this->table_name, $limit, $offset);
    }
    // get person by id
    function get_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get($this->table_name);
    }
    
    function get_by_email_and_password($email,$password){
        $this->db->where(array('email' => $email, 'password' => $password));
        return $this->db->get($this->table_name);
    }
    
    // add new person
    function save($entity){
        $this->db->insert($this->table_name, $entity);
        return $this->db->insert_id();
    }
    // update person by id
    function update($id, $entity){
        $this->db->where('id', $id);
        $this->db->update($this->table_name, $entity);
    }
    // delete person by id
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table_name);
    }
}
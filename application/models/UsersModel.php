<?php
class UsersModel extends CI_Model{
    var $table = 'user';
    var $key = 'id';

    public function login($email, $password){

        $this->db->where('email',$email);
        $this->db->where('password', md5($password));
        $this->db->from($this->table);

        return $this->db->get();
    }

    function get_all(){
        $this->db->order_by('id DESC');
        return $this->db->get($this->table);
    }

    function get_detail($id){
        $this->db->where('id', $id);
        $this->db->from($this->table);

        return $this->db->get();
    }

    function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data){
        $this->db->where('id',$id);
        $this->db->update($this->table, $data);
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }
}
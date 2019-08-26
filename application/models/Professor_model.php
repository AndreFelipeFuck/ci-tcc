<?php
/**
 * Created by PhpStorm.
 * User: Pichau
 * Date: 06/07/2019
 * Time: 20:34
 */

class Professor_model extends CI_Model
{
    var $table = 'professores';
    public function __construct()
    {
        $this->load->database();
    }

    ///////////////////////////////////////////CRUD////////////////////////////////////////

    public function get_all_professor()
    {
        $this->db->from('professores');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_by_id($codProfessor)
    {
        $this->db->from($this->table);
        $this->db->where('codProfessor',$codProfessor);
        $query = $this->db->get();
        return $query->row();
    }

    public function professor_add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function professor_update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($codProfessor)
    {
        $this->db->where('codProfessor', $codProfessor);
        $this->db->delete($this->table);
    }

    public function get_by_login($email, $senha){
             $this->db->select('codProfessor, email, senha')->from('professores')->where("email = '$email' and senha = '$senha'");
             $query = $this->db->get();
             return $query;
        }
}
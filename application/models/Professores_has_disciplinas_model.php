<?php

class Professores_has_disciplinas_model extends CI_Model
{
    var $table = 'professores_has_disciplinas';
    public function __construct()
    {
        $this->load->database();
    }
     public function get_all_prof_disc()
    {
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }

    public function get_by_id($codDisciplina){
      $this->db->from($this->table);
      $this->db->where('codDisciplina',$codDisciplina);
      $query = $this->db->get();
      return $query->row();
    }

    public function prof_disc_add($data)
    {
     $this->db->insert($this->table, $data);
     return $this->db->insert_id();
    }

    public function prof_disc_update($where, $data){
      $this->db->update($this->table, $data, $where);
      return $this->db->affected_rows();
    }

    public function delete_by_id($codProfessor){
       $this->db->where('professores_codProfessor', $codProfessor);
       $this->db->delete($this->table);
       // "DELETE FROM `professores_has_disciplinas` WHERE `professores_has_disciplinas`.`professores_codProfessor` = 15 AND `professores_has_disciplinas`.`disciplina_codDisciplina` = 11"
    }
    


}

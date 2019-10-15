<?php

class Disciplina_model extends CI_Model
{
    var $table = 'disciplinas';
    public function __construct()
    {
        $this->load->database();
    }
     public function get_all_disciplinas()
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

    public function get_by_nome($nomeDisciplina){
      $this->db->select('codDisciplina');
      $this->db->from($this->table);
      $this->db->where('nomeDisciplina',$nomeDisciplina);
      $query = $this->db->get();
      return $query->row();
    }

    public function listar_artigos($codDisciplina){
      $this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, professores_codProfessor, alunos_codAluno, nomeAluno, dataArtigo')->from('disciplinas, artigos, alunos')->where("codDisciplina = disciplina_codDisciplina and codDisciplina = '$codDisciplina' and alunos_codAluno = codAluno");
       $query = $this->db->get();
      return $query->result();
    }

    public function listar_artigos_professor($codDisciplina){
      $this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, professores_codProfessor, nomeProfessor, nomeProfessor, dataArtigo')->from('disciplinas, artigos, professores')->where("codDisciplina = disciplina_codDisciplina and codDisciplina = '$codDisciplina' and professores_codProfessor = codProfessor");
       $query = $this->db->get();
      return $query->result();
    }

    public function disciplina_add($data)
    {
     $this->db->insert($this->table, $data);
     return $this->db->insert_id();
    }

    public function disciplina_update($where, $data){
      $this->db->update($this->table, $data, $where);
      return $this->db->affected_rows();
    }

    public function delete_by_id($codDisciplina){
       $this->db->where('codDisciplina', $codDisciplina);
       $this->db->delete($this->table);
    }
    


}

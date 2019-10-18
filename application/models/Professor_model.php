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
        $this->db->select('codProfessor`, imgProfessor, email, miniCurriculo, instituicao, dataNasc, senha, nomeProfessor, nomeDisciplina, codDisciplina')->from('professores_has_disciplinas, disciplinas, professores')->where("professores_codProfessor = codProfessor and disciplina_codDisciplina = codDisciplina and codProfessor ='$codProfessor'");
        $this->db->where('codProfessor',$codProfessor);
        $query = $this->db->get();
        return $query->row();
    }

    /*public function get_by_id($codProfessor)
    {
       $this->db->select('codProfessor, codArtigo ,imgProfessor, nomeCompleto, miniCurriculo, email, institucao, dataNasc, titulo, imgArtigo')->from('artigos ,professores')->where("codProfessor = '$codProfessor' and professores_codProfessor = codProfessor");
            $query = $this->db->get();
            return $query->row();
    }*/

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

    public function delete_img($codProfessor){
        $this->db->set('imgProfessor', null); 
        $this->db->where ( 'codProfessor', $codProfessor); 
        $this->db->update ($this->table);
    }

    public function get_img($codProfessor){
        $this->db->select('imgProfessor')->from($this->table)->where("codProfessor = '$codProfessor'");
        $query = $this->db->get();
        return $query->row();
    }

    public function delete_by_id($codProfessor){
        $this->db->where('codProfessor', $codProfessor);
        $this->db->delete($this->table);
    }

    public function get_by_login($nomeProfessor, $senha){
             $this->db->select('codProfessor, nomeProfessor, senha')->from('professores')->where("nomeProfessor = '$nomeProfessor' and senha = '$senha' and tipo = 1");
             $query = $this->db->get();
             return $query->row();
    }

    public function check_email($email){
        $marcador = null;
        $this->db->select('email');
        $this->db->where('email',$email);
        $retorno = $this->db->get('professores')->num_rows();

        if($retorno > 0 ){
             return $marcador = TRUE;
        }else{ 
            return $marcador = FALSE;
        }
    }

}
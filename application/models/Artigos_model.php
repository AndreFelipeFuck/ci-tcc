<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Artigos_model extends CI_Model{
        var $table = 'artigos';
        public function __construct()
        {
            $this->load->database();

        }

        ///////////////////////////////////////////CRUD////////////////////////////////////////

        /*public function get_all_artigos($limit, $start){
            $this->db->limit($limit, $start);
            $this->db->from('artigos');
            $query=$this->db->get();
            return $query->result();
        }
        public function get_by_id_aluno($codArtigo){
            $this->db->select('codArtigo, titulo, corpo, imgArtigo , nomeCompleto')->from('artigos ,professores, alunos')->where("codArtigo = '$codArtigo' and alunos_codAluno = codAluno");
            $query = $this->db->get();
            return $query->row();
        }

        public function get_by_id_simples($codArtigo)
        {
            $this->db->from($this->table);
            $this->db->where('codArtigo',$codArtigo);
            $query = $this->db->get();
            return $query->row();
        }

        */
        public function get_all_artigos()
        {
            $this->db->from($this->table);
            $query=$this->db->get();
            return $query->result();
        }

        public function listar_artigos(){
            $this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, alunos_codAluno, nomeAluno')->from('artigos, alunos')->where("alunos_codAluno = codAluno");
            $query = $this->db->get();
            return $query->result();
        }

        public function listar_artigos_professor(){
          $this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, professores_codProfessor, nomeProfessor')->from('artigos, professores')->where('professores_codProfessor = codProfessor');
           $query = $this->db->get();
          return $query->result();
        }

        public function get_artigos_by_data(){
           $this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, professores_codProfessor, nomeProfessor')->from('artigos, professores')->where('professores_codProfessor = codProfessor')->order_by('dataArtigo DESC')->limit(5);
            $query=$this->db->get();
            return $query->result();
        }

        public function get_count() {
            return $this->db->count_all($this->table);
        }

        public function get_count_professor($codProfessor){
              $this->db->select('COUNT(codArtigo) as resultado')->from('professores, artigos')->where("professores_codProfessor = codProfessor and codProfessor = '$codProfessor'");
                $query=$this->db->get();
                return $query->result();
        }

        public function get_by_id($codArtigo){
            
            $this->db->select('codArtigo, resumo, titulo, corpo, uploadArtigo, imgArtigo ,nomeProfessor, nomeDisciplina, dataArtigo, professores_codProfessor, disciplina_codDisciplina')->from('artigos ,professores, disciplinas')->where("codArtigo = '$codArtigo' and professores_codProfessor = codProfessor and disciplina_codDisciplina = codDisciplina");
            $query = $this->db->get();
            return $query->row();
        }

        public function get_by_id_aluno($codArtigo){
            
            $this->db->select('codArtigo, resumo, titulo, corpo, uploadArtigo, imgArtigo ,nomeAluno, nomeDisciplina, dataArtigo, alunos_codAluno, disciplina_codDisciplina')->from('artigos ,alunos, disciplinas')->where("codArtigo = '$codArtigo' and alunos_codAluno = codAluno and disciplina_codDisciplina = codDisciplina");
            $query = $this->db->get();
            return $query->row();
        }

        public function get_all_id_aluno($codAluno){
            $this->db->select('codArtigo, resumo, titulo, alunos_codAluno, corpo, imgArtigo, dataArtigo')->from('artigos ,alunos')->where("alunos_codAluno = '$codAluno' and alunos_codAluno = codAluno");
            $query = $this->db->get();
            return $query->result();
        }

        public function get_all_id_professor($codProfessor){
            $this->db->select('codArtigo, resumo, titulo, professores_codProfessor, corpo, imgArtigo, dataArtigo')->from('artigos ,professores')->where("professores_codProfessor = '$codProfessor' and professores_codProfessor = codProfessor");
            $query = $this->db->get();
            return $query->result();
        }

        public function analise($codArtigo){
            $this->db->select('alunos_codAluno')->from($this->table)->where("codArtigo = '$codArtigo'");
            $query = $this->db->get();
            return $query->row();
        }

    

        public function artigo_add($data){
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }

        public function artigo_add_disciplinas($data){
            $this->db->insert("artigos_has_disciplinas", $data);
        }

        public function artigo_update($where, $data){
            $this->db->update($this->table, $data, $where);
            return $this->db->affected_rows();
        }

        public function delete_by_id($codArtigo){
            $this->db->where('codArtigo', $codArtigo);
            $this->db->delete($this->table);
        }

        public function delete_all_aluno($alunos_codAluno){
            $this->db->where('alunos_codAluno', $alunos_codAluno);
            $this->db->delete($this->table);
        }

        public function delete_all_professor($professores_codProfessor){
            $this->db->where('professores_codProfessor', $professores_codProfessor);
            $this->db->delete($this->table);
        }

        public function get_by_login($titulo, $corpo){
            $this->db->select('codArtigo, titulo, corpo')->from('artigos')->where("titulo = '$titulo' and corpo = '$corpo'");
            $query = $this->db->get();
             return $query;
        }

    }




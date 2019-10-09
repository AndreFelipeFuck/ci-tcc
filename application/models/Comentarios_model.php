<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Comentarios_model extends CI_Model{
    	 var $table = 'comentarios';
        public function __construct()
        {
            $this->load->database();
        }

        public function comentarios_listar($codArtigo)
        {
            $this->db->select('codAluno, nomeAluno, imgAluno, comentario, codComentario')->from('alunos, comentarios, artigos')->where("codArtigo = artigo_codArtigo and com_alunos_codAluno = codAluno and codArtigo = '$codArtigo'");
            $query=$this->db->get();
            return $query->result();
        }

        public function comentarios_listar_professor($codArtigo)
        {
            $this->db->select('codProfessor, nomeProfessor, imgProfessor, comentario, codComentario')->from('professores, comentarios, artigos')->where("codArtigo = artigo_codArtigo and com_professores_codProfessor = codProfessor and codArtigo = '$codArtigo'");
            $query=$this->db->get();
            return $query->result();
        }

        public function get_by_id($codComentario)
        {
            $this->db->from($this->table);
            $this->db->where('codComentario',$codComentario);
            $query = $this->db->get();
            return $query->row();
        }

        public function comentario_add($data)
        {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }

        public function comentario_update($where, $data)
        {
            $this->db->update($this->table, $data, $where);
            return $this->db->affected_rows();
        }
        public function delete_by_id($codComentario)
        {
            $this->db->where('codComentario', $codComentario);
            $this->db->delete($this->table);
        }
        public function delete_all_aluno($com_alunos_codAluno)
        {
            $this->db->where('com_alunos_codAluno', $com_alunos_codAluno);
            $this->db->delete($this->table);
        }
    }

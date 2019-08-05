<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Aluno_model extends CI_Model{
        var $table = 'alunos';
        public function __construct()
        {
            $this->load->database();

        }

        ///////////////////////////////////////////CRUD////////////////////////////////////////

        public function get_all_alunos()
        {
            $this->db->from('alunos');
            $query=$this->db->get();
            return $query->result();
        }

        public function get_by_id($codAluno)
        {
            $this->db->from($this->table);
            $this->db->where('codAluno',$codAluno);
            $query = $this->db->get();
            return $query->row();
        }

        public function aluno_add($data)
        {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }

        public function aluno_update($where, $data)
        {
            $this->db->update($this->table, $data, $where);
            return $this->db->affected_rows();
        }

        public function delete_by_id($codAluno)
        {
            $this->db->where('codAluno', $codAluno);
            $this->db->delete($this->table);
        }


    }







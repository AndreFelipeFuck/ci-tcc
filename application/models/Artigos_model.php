<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Artigos_model extends CI_Model{
        var $table = 'artigos';
        public function __construct()
        {
            $this->load->database();

        }

        ///////////////////////////////////////////CRUD////////////////////////////////////////

        public function get_all_artigos(){
            $this->db->from('artigos');
            $query=$this->db->get();
            return $query->result();
        }

        public function get_by_id($codArtigo)
        {
            $this->db->from($this->table);
            $this->db->where('codArtigo',$codArtigo);
            $query = $this->db->get();
            return $query->row();
        }

        public function artigo_add($data)
        {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }

        public function artigo_update($where, $data){
            $this->db->update($this->table, $data, $where);
            return $this->db->affected_rows();
        }

        public function delete_by_id($codArtigo){
            $this->db->where('codArtigo', $codArtigo);
            $this->db->delete($this->table);
        }
    }







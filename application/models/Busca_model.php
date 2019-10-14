<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Busca_model extends CI_Model{
    	public function buscar($busca){
    		if (empty($busca)) {
    			return array();
    		}else{
    			$this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, alunos_codAluno, nomeAluno, dataArtigo');
    			$this->db->from('artigos, alunos');
    			$this->db->where("alunos_codAluno = codAluno");
    			$this->db->like('titulo', $busca);
    			$query = $this->db->get();
    			return $query->result();
    		}
    	}

    	public function buscar_professor($busca){
    		if (empty($busca)) {
    			return array();
    		}else{
    			$this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, professores_codProfessor, nomeProfessor, dataArtigo');
    			$this->db->from('artigos, professores');
    			$this->db->where("professores_codProfessor = codProfessor");
    			$this->db->like('titulo', $busca);
    			$query = $this->db->get();
    			return $query->result();
    		}
    	}

    	public function autocomplete($busca){
    		$this->db->select('titulo');
    		$this->db->from('artigos');
    		$this->db->like('titulo', $busca);
			$this->db->order_by('titulo', 'ASC');
			$this->db->limit(10);
			$query = $this->db->get();
    		return $query->result();
    	}

		    
    } 	
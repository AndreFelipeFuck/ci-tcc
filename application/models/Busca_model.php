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
    		   $response = array();

               // Select record
               $this->db->select('titulo');
               $this->db->like("titulo",$busca);

               $records = $this->db->get('artigos')->result();

               foreach($records as $row ){
                  $response[] = array($row->titulo);
               }

            
             return $response;
          
    	}

		    
    } 	
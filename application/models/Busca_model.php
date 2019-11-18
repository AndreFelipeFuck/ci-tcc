<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Busca_model extends CI_Model{
    	public function buscar($busca){
    		if (empty($busca)) {
    			return array();
    		}else{
    			$this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, alunos_codAluno, nomeAluno, dataArtigo, nomeDisciplina , codDisciplina');
    			$this->db->from('artigos, alunos, disciplinas');
    			$this->db->where("alunos_codAluno = codAluno and codDisciplina =  disciplina_codDisciplina");
    			$this->db->like('titulo', $busca);
    			$query = $this->db->get();
    			return $query->result();
    		}
    	}

    	public function buscar_professor($busca){
    		if (empty($busca)) {
    			return array();
    		}else{
    			$this->db->select('codArtigo, resumo, corpo, titulo, imgArtigo, professores_codProfessor, nomeProfessor, dataArtigo, nomeDisciplina  , codDisciplina');
    			$this->db->from('artigos, professores, disciplinas');
    			$this->db->where("professores_codProfessor = codProfessor and codDisciplina =  disciplina_codDisciplina");
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
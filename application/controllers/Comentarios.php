<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
		$this->load->model('comentarios_model');
		
	}
	 public function index(){

	 }

	 public function comentario_add(){
	 	$url = "?codArtigo=".$this->input->post("artigo_codArtigo");
		if ($this->input->post('professores_codProfessor') == 0) {
		 	$data = array(
		 		'comentario' => $this->input->post("comentario"),
		 		'artigo_codArtigo' => $this->input->post("artigo_codArtigo"),
		 		'alunos_codAluno' => $this->input->post("alunos_codAluno"),
		 		'dataComentario' => date("Y-m-d")
		 	);
		}if($this->input->post('alunos_codAluno') == 0){
			$data = array(
		 		'comentario' => $this->input->post("comentario"),
		 		'artigo_codArtigo' => $this->input->post("artigo_codArtigo"),
		 		'dataComentario' => date("Y-m-d")
		 	);
		}
		$insert = $this->comentarios_model->comentario_add($data);
		echo "Teste";
		redirect ("artigos/artigo_page/$url");
	 }

}
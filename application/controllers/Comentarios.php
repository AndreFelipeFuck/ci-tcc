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
		if ($this->input->post('com_professores_codProfessor') == 0) {
		 	$data = array(
		 		'comentario' => $this->input->post("comentario"),
		 		'artigo_codArtigo' => $this->input->post("artigo_codArtigo"),
		 		'com_alunos_codAluno' => $this->input->post("com_alunos_codAluno"),
		 		'dataComentario' => date("Y-m-d H:i:s", time())
		 	);
		}if($this->input->post('com_alunos_codAluno') == 0){
			$data = array(
		 		'comentario' => $this->input->post("comentario"),
		 		'artigo_codArtigo' => $this->input->post("artigo_codArtigo"),
		 		'com_professores_codProfessor' => $this->input->post("com_professores_codProfessor"),
		 		'dataComentario' => date("Y-m-d H:i:s", time())
		 	);
		}
		$insert = $this->comentarios_model->comentario_add($data);
		echo json_encode(array("status" => TRUE));
	 }

	 public function ajax_edit($codComentario)
	{
		$data = $this->artigos_model->get_by_id_simples($codComentario);
		echo json_encode($data);
	}

	 public function comentario_update()
	{
		$data = array(
			'comentario' => $this->input->post("comentario"),
		 	'dataComentario' => date("Y-m-d H:i:s", time())	
			);
		$this->comentarios_model->comentario_update(array('codComentario' => $this->input->post('codComentario')), $data);

		echo json_encode(array("status" => TRUE));

	}

	public function comentario_delete($codComentario)
	{
		$this->comentarios_model->delete_by_id($codComentario);
		echo json_encode(array("status" => TRUE));
	}
}
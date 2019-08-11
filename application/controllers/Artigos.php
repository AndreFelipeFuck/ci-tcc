<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artigos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('artigos_model');
	}

	public function index()
    {
        $data['artigos'] = $this->artigo_model->get_all_artigos();
        $this->load->view('', $data);
    }

	public function artigo_add()
	{
		$data = array(
		'titulo' => $this->input->post('titulo'),
		'corpo' => $this->input->post('corpo')
		);

		
		$insert = $this->artigo_model->artigo_add($data);
		redirect('home/artigo_view');
		
	}

	public function ajax_edit($codArtigo)
	{
		$data = $this->artigo_model->get_by_id($codArtigo);
		echo json_encode($data);
	}

	public function artigo_update()
	{
		$data = array(

			'nomeCompleto' => $this->input->post('nomeCompleto'),
			'dataNasc' => $this->input->post('dataNasc'),
			'imgAluno' => $this->input->post('imgAluno'),
			'anoLetivo' => $this->input->post('anoLetivo'),
			'curso' => $this->input->post('curso'),
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha'),
			
		);
		$this->artigo_model->artigo_update(array('codArtigo' => $this->input->post('codArtigo')), $data);

		echo json_encode(array("status" => TRUE));
	}

	public function artigo_delete($codArtigo)
	{
		$this->artigo_model->delete_by_id($codArtigo);
		echo json_encode(array("status" => TRUE));
	}

	

}





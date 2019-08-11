<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
		$this->load->model('aluno_model');

		    $aluno = $this->session->userdata("alunos");
		//Verificação se está logado    
		if (empty($aluno)){
		    redirect("home/login_home");
        }





	}

	public function index()
    {
        $data['alunos'] = $this->aluno_model->get_all_alunos();
        $this->load->view('aluno_view', $data);

    }

	public function aluno_add()
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

		
		$insert = $this->aluno_model->aluno_add($data);
		redirect('home/aluno_view');
		
	}

	public function ajax_edit($codAluno)
	{
		$data = $this->aluno_model->get_by_id($codAluno);
		echo json_encode($data);
	}

	public function aluno_update()
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
		$this->aluno_model->aluno_update(array('codAluno' => $this->input->post('codAluno')), $data);

		echo json_encode(array("status" => TRUE));
	}

	public function aluno_update_perfil()
	{
		$data = array(
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha'),
		);
		$this->aluno_model->aluno_update(array('codAluno' => $this->input->post('codAluno')), $data);

		echo json_encode(array("status" => TRUE));
	}

	public function aluno_delete($codAluno)
	{
		$this->aluno_model->delete_by_id($codAluno);
		echo json_encode(array("status" => TRUE));//Peguntar para o professor
	}

	public function aluno_perfil(){
		$codAluno = $this->input->get('codAluno');
		$aluno['perfil'] = $this->aluno_model->get_by_id($codAluno);
		$this->load->view('aluno_perfil', $aluno);
		print_r($aluno);
	}


}




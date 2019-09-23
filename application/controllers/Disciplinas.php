<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplinas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
		$this->load->model('disciplina_model');
		$this->load->model('artigos_model');
	}
	public function index(){
        $data['disciplinas'] = $this->disciplina_model->get_all_disciplinas();
        $this->load->view('disciplinas', $data);
    }

    public function disciplina_view(){
		$codDisciplina = $this->input->get('codDisciplina');
		$disciplina['disciplinas'] = $this->disciplina_model->get_by_id($codDisciplina);
		$disciplina['artigos'] = $this->disciplina_model->listar_artigos($codDisciplina);
		$disciplina['artigosProfessor'] = $this->disciplina_model->listar_artigos_professor($codDisciplina);
		$this->load->view('disciplina_view', $disciplina);
	}
}
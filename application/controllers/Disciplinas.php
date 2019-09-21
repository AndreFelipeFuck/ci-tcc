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
}
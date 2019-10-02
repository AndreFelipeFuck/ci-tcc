<?php
/**
 * Created by PhpStorm.
 * User: Pichau
 * Date: 19/06/2019
 * Time: 19:14
 */

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('artigos_model');
    }

    public function index(){
        $data = array(
            'artigos' => null
        );
        $data['artigos'] = $this->artigos_model->listar_artigos();
        $data['artigosProfessor'] = $this->artigos_model->listar_artigos_professor();
        $this->load->view('home', $data);
    }
    
    public function add(){
        $this->load->view('aluno_add');
    }

    public function login_home(){
            $this->load->view('login');
    }
    public function aluno_view(){
        $this->load->view('aluno_view');
    }

    public function aluno_editar(){
        $this->load->view('aluno_editar');
    }

    public function opiCad(){
        $this->load->view('opiCad');
    }

    public function aluno_add(){
        $this->load->view('aluno_add');
    }

    public function professor_add(){
        $this->load->view('professor_add');
    }

    public function artigo_page(){
        $this->load->view('artigo_page');
    }

    public function disciplina_view(){
        $this->load->view('disciplinas.php');
    }
    
    public function sobre(){
        $this->load->view('sobre_view');
    }

}

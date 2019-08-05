<?php
/**
 * Created by PhpStorm.
 * User: Pichau
 * Date: 19/06/2019
 * Time: 19:14
 */

class Home extends CI_Controller
{
    public function add(){
        $this->load->view('aluno_add');
    }

    public function login_home(){

            $this->load->view('login');

    }
    public function view_aluno(){
        $this->load->view('aluno_view');
    }

    public function aluno_editar(){
        $this->load->view('aluno_editar');
    }

    public function opiCad(){
        $this->load->view('opiCad');
    }

    public function opiCadAluno(){
        $this->load->view('cadastroAluno');
    }

    public function opiCadProfessor(){
        $this->load->view('cadastroProf');
    }

}
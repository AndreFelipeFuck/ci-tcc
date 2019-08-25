<?php
/**
 * Created by PhpStorm.
 * User: Pichau
 * Date: 06/07/2019
 * Time: 20:41
 */
 defined('BASEPATH') OR exit('No direct script access allowed');

class Professores extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('professor_model');

        $professor = $this->session->userdata("professores");
        if (empty($professor)) {
            redirect("home/login_home");
        }

    }
    public function index()
    {
        $data['professores'] = $this->professor_model->get_all_professor();
        $this->load->view('professor_view', $data);
    }

    
    public function professor_add()
    {
        $data = array(

            'nomeCompleto' => $this->input->post('nomeCompleto'),
            'dataNasc' => $this->input->post('dataNasc'),
            'imgProfessor' => $this->input->post('imgProfessor'),
            'miniCurriculo' => $this->input->post('miniCurriculo'),
            'institucao' => $this->input->post('institucao'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),

        );

        $insert = $this->professor_model->professor_add($data);
        $this->load->view('home');
    }

    public function ajax_edit($codProfessor)
    {
        $data = $this->professor_model->get_by_id($codProfessor);
        echo json_encode($data);
    }

    public function professor_update()
    {
        $data = array(

            'nomeCompleto' => $this->input->post('nomeCompleto'),
            'dataNasc' => $this->input->post('dataNasc'),
            'imgProfessor' => $this->input->post('imgProfessor'),
            'miniCurriculo' => $this->input->post('miniCurriculo'),
            'institucao' => $this->input->post('institucao'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),

        );
        $this->professor_model->professor_update(array('codProfessor' => $this->input->post('codProfessor')), $data);

        echo json_encode(array("status" => TRUE));
    }

    public function professor_update_perfil()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
        );
        $this->professor_model->professor_update(array('codProfessor' => $this->input->post('codProfessor')), $data);

        echo json_encode(array("status" => TRUE));
    }

    public function professor_delete($codProfessor)
    {
        $this->professor_model->delete_by_id($codProfessor);
        echo json_encode(array("status" => TRUE));
        $this->session->set_userdata("professores", "");
    }

    public function professor_perfil(){
        $codProfessor = $this->input->get('codProfessor');
        $professor['perfil'] = $this->professor_model->get_by_id($codProfessor);
        $this->load->view('professor_perfil', $professor);
        print_r($professor);
    }

}
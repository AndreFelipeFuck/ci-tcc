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

        /*$professor = $this->session->userdata("professores");
        if (empty($professor)) {
            redirect("home/login_home");
        }*/

    }
    public function index()
    {
        $professor = $this->session->userdata("professores");
        if (empty($professor)) {
            redirect("home/login_home");
        }

        $data['professores'] = $this->professor_model->get_all_professor();
        $this->load->view('professor_view', $data);
    }

    
    public function professor_add()
    {
        //VALIDAR FORMULARIO
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nomeCompleto', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));
        $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[8]', array('required' => 'Você deve preencher a %s.'));
        $this->form_validation->set_rules('senhaconf', 'Confirmar Senha', 'required|matches[senha]', array('required' => 'O campo Confirmar senha é obrigatorio'));
        
        if ($this->form_validation->run() == FALSE) {
          $erros = array('mensagens' => validation_errors());
           $this->load->view('professor_add', $erros);

        } else {
              echo "Formulário enviado com sucesso.";
               //ENVIANDO IMAGEM PRO BANCO
               $imgProfessor = $_FILES['imgProfessor'];
               $config = array(
                'upload_path' => './upload/',
                'allowed_types' => 'jpg',//Arrumar essa parte
                'file_name' => md5(time()),
                'max_size' => '500'
               );
               /*
               CONFIGURAÇÔES PARA UPLOAD DE IMAGEM
               max_width:
               max_height:
               */

                $this->load->library('upload');
               $this->upload->initialize($config);

               if ($this->upload->do_upload('imgProfessor')){
                    echo 'Arquivo salvo com sucesso.';
                    $data = array(
                        'nomeCompleto' => $this->input->post('nomeCompleto'),
                        'dataNasc' => $this->input->post('dataNasc'),
                        'imgProfessor' => $config['file_name'].".jpg",
                        'miniCurriculo' => $this->input->post('miniCurriculo'),
                        'institucao' => $this->input->post('institucao'),
                        'email' => $this->input->post('email'),
                        'senha' => md5($this->input->post('senha')),

                    );

                    $insert = $this->professor_model->professor_add($data);
                    $this->db->where('email', $data['email']);
                       $this->db->where('senha', $data['senha']);
                        $query = $this->db->get('professores');

                        if ($query->num_rows() == 1){
                            $professor = $query->row();
                            $this->session->set_userdata("professores", $professor->nomeCompleto);
                            $codProfessor = $this->professor_model->get_by_login($email, $senha);
                            $url = "?codProfessor=".$professor->codProfessor;
                           redirect ("professores/professor_perfil/$url");
                        }    
                }else{
                    echo $this->upload->display_errors();
                }
        }
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
            'senha' => md5($this->input->post('senha')),

        );
        $this->professor_model->professor_update(array('codProfessor' => $this->input->post('codProfessor')), $data);

        echo json_encode(array("status" => TRUE));
    }

    public function professor_update_perfil()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'senha' => md5($this->input->post('senha')),
        );
        $this->professor_model->professor_update(array('codProfessor' => $this->input->post('codProfessor')), $data);

        echo json_encode(array("status" => TRUE));
    }

    public function professor_delete($codProfessor)
    {
        $this->professor_model->delete_by_id($codProfessor);
        echo json_encode(array("status" => TRUE));
        $this->session->set_userdata('professores');
    }

    public function professor_perfil(){
        $codProfessor = $this->input->get('codProfessor');
        $professor['perfil'] = $this->professor_model->get_by_id($codProfessor);
        $this->load->view('professor_perfil', $professor);
        print_r($professor);
    }

}
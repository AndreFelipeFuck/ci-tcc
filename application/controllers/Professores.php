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
         $this->load->model('artigos_model');
          $this->load->model('professores_has_disciplinas_model');

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

    
    public function professor_add(){
        $this->load->library('form_validation');
        //VERIFICA EMAIL
            $marcador['email'] = $this->professor_model->check_email($this->input->post('email'));
            if ($marcador['email'] == FALSE) {
                $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));
            }
            
        //
        $imgProfessor = $_FILES['imgProfessor'];
         ///
            $ponto_img = explode(".", $imgProfessor['name']);
            @$ponto_img = $ponto_img[1];
        //

        //VALIDAR FORMULARIO
        $this->form_validation->set_rules('nomeProfessor', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
        $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[8]', array('required' => 'Você deve preencher a %s.'));
        $this->form_validation->set_rules('senhaconf', 'Confirmar Senha', 'required|matches[senha]', array('required' => 'O campo Confirmar senha é obrigatorio'));
        //VERIFICA SE O EMAIL È IGAUL
        if ($marcador['email'] == TRUE) {
            if ($this->form_validation->run() == TRUE) {
                $this->load->view('professor_add', $marcador);
            }      
        }else{
            if ($this->form_validation->run() == FALSE) {
            
                $this->load->view('professor_add', $marcador);

            }else{
                //SE O PROFESSOR NÂO QUISER ENVIAR UMA FOTO DE PERFIL
                if($imgProfessor['name'] == null) {
                    //ENVIAR PARA O BANCO
                        $data = array(
                            'nomeProfessor' => $this->input->post('nomeProfessor'),
                            'dataNasc' => $this->input->post('dataNasc'),
                            'miniCurriculo' => $this->input->post('miniCurriculo'),
                            //'institucao' => $this->input->post('institucao'),
                            'email' => $this->input->post('email'),
                            'senha' => md5($this->input->post('senha')),
                            'tipo' => 1,
                        );
                        $insert = $this->professor_model->professor_add($data);
                        $this->db->where('email', $data['email']);
                        $this->db->where('senha', $data['senha']);
                        $query = $this->db->get('professores');

                        if ($query->num_rows() == 1){
                            $professor = $query->row();
                            $this->session->set_userdata("professores", $professor->codProfessor);
                             $this->session->set_userdata("imgProfessor", null);
                            $codProfessor = $this->professor_model->get_by_login($professor->email, $professor->senha);
                            ////
                            $data_prof_disc = array(
                                'professores_codProfessor' => $professor->codProfessor,
                                'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina')
                            );
                             $insert = $this->professores_has_disciplinas_model->prof_disc_add($data_prof_disc);
                             ////
                            $url = "?codProfessor=".$professor->codProfessor;
                           redirect ("professores/professor_perfil/$url");
                        }
                //SE O PROFESSOR QUISER ENVIAR UMA FOTO DE PERFIL
                }elseif(!empty($imgProfessor['name'])){
                     echo "Formulário enviado com sucesso.";
                   //ENVIANDO IMAGEM PRO BANCO
                   $config = array(
                    'upload_path' => './upload/professores',
                    'allowed_types' => 'gif|jpg|png',//Arrumar essa parte
                    'file_name' => md5(time()),
                    'max_size' => '3000'
                   );
                   $this->load->library('upload');
                   $this->upload->initialize($config);

                   if ($this->upload->do_upload('imgProfessor')){
                        echo 'Arquivo salvo com sucesso.';
                        $data = array(
                            'nomeProfessor' => $this->input->post('nomeProfessor'),
                            'dataNasc' => $this->input->post('dataNasc'),
                            'imgProfessor' => $config['file_name'].".".$ponto_img,
                            'miniCurriculo' => $this->input->post('miniCurriculo'),
                            //'institucao' => $this->input->post('institucao'),
                            'email' => $this->input->post('email'),
                            'senha' => md5($this->input->post('senha')),
                            'tipo' => 1,
                        );

                        $insert = $this->professor_model->professor_add($data);

                        $this->db->where('email', $data['email']);
                        $this->db->where('senha', $data['senha']);
                        $query = $this->db->get('professores');

                        if ($query->num_rows() == 1){
                            $professor = $query->row();
                            $this->session->set_userdata("professores", $professor->codProfessor);
                             $this->session->set_userdata("imgProfessor", $data['imgProfessor']);
                            $codProfessor = $this->professor_model->get_by_login($professor->email, $professor->senhaconf);
                             ////
                            $data_prof_disc = array(
                                'professores_codProfessor' => $professor->codProfessor,
                                'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina')
                            );
                             $insert = $this->professores_has_disciplinas_model->prof_disc_add($data_prof_disc);
                             ////
                            $url = "?codProfessor=".$professor->codProfessor;
                           redirect ("professores/professor_perfil/$url");
                            
                        }
                    }
                }  
            }
        }
        
        
    }

    public function ajax_edit($codProfessor)
    {
        $data = $this->professor_model->get_by_id($codProfessor);
        echo json_encode($data);
    }

    public function professor_update_perfil(){
        $url = "?codProfessor=".$this->input->post('codProfessor');
        $imgProfessor = $_FILES['imgProfessor'];
        $vereficaSenha = $this->input->post('senha');
         ///
            $ponto_img = explode(".", $imgProfessor['name']);
            $ponto_img = $ponto_img[1];
        //

        //SE O PROFESSOR NÂO TROCAR A SENHA
        if($vereficaSenha == null) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nomeProfessor', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));

            if ($this->form_validation->run() == FALSE) {
                 $erros = array('mensagens' => validation_errors());
                $this->load->view('professor_editar', $erros);
            }else{
                //SE O PROFESSOR NÂO QUISER TROCAR DE FOTO DE PERFIL
                if($imgProfessor['name'] == null) {
                    $data = array(
                       'nomeProfessor' => $this->input->post('nomeProfessor'),
                        'dataNasc' => $this->input->post('dataNasc'),
                        'miniCurriculo' => $this->input->post('miniCurriculo'),
                        //'institucao' => $this->input->post('institucao'),
                        'email' => $this->input->post('email'),
                    );
                    $this->professor_model->professor_update(array('codProfessor' => $this->input->post('codProfessor')), $data);
                    ////
                        $data_prof_disc = array(
                            'professores_codProfessor' => $this->input->post('codProfessor'),
                            'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina')
                        );
                        $this->professores_has_disciplinas_model->prof_disc_update(array('professores_codProfessor' => $this->input->post('codProfessor')), $data_prof_disc);
                    ////

                    echo json_encode(array("status" => TRUE));
                    //ENVIAR PARA A PAGINA PERFIL
                    redirect ("professores/professor_perfil/$url");

                //SE O PROFESSOR QUISER TROCAR A FOTO DE PERFIL
                }elseif(!empty($imgProfessor['name'])){
                    //EXCLUINDO A FOTO DE PERFIL ANTERIOR
                    $professor = $this->professor_model->get_img($this->input->post('codProfessor'));
                    $img = $professor->imgProfessor;    
                    $caminho = "upload/professores/$img";
                    $this->professor_model->delete_img($this->input->post('codProfessor'));
                    echo json_encode(array("status" => TRUE));
                    unlink($caminho);
                    ///
                    $config = array(
                    'upload_path' => './upload/professores',
                    'allowed_types' => 'gif|jpg|png',//Arrumar essa parte
                    'file_name' => md5(time()),
                    'max_size' => '3000'
                    );
                    $this->load->library('upload');
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('imgProfessor')){
                        echo 'Arquivo salvo com sucesso.';
                        $data = array(
                            'nomeProfessor' => $this->input->post('nomeProfessor'),
                            'dataNasc' => $this->input->post('dataNasc'),
                            'imgProfessor' => $config['file_name'].".".$ponto_img,
                            'miniCurriculo' => $this->input->post('miniCurriculo'),
                            //'institucao' => $this->input->post('institucao'),
                            'email' => $this->input->post('email'),
                        );
                        $this->professor_model->professor_update(array('codProfessor' => $this->input->post('codProfessor')), $data);
                        $this->session->set_userdata('imgProfessor', $data['imgProfessor']);

                        ////
                        $data_prof_disc = array(
                            'professores_codProfessor' => $this->input->post('codProfessor'),
                            'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina')
                        );
                         $this->professores_has_disciplinas_model->prof_disc_update(array('professores_codProfessor' => $this->input->post('codProfessor')), $data_prof_disc);
                         ////

                        echo json_encode(array("status" => TRUE));

                        //ENVIAR PARA A PAGINA PERFIL
                            redirect ("professores/professor_perfil/$url");
                    }else{
                         redirect ("professores/professor_perfil/$url");
                    }
                }
            }
            //SE O PROFESSOR QUISER TROCAR A SENHA
        }elseif($vereficaSenha != null){
                $this->load->library('form_validation');

                $this->form_validation->set_rules('nomeProfessor', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
                $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));
                $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[8]', array('required' => 'Você deve preencher a %s.'));
                $this->form_validation->set_rules('senhaconf', 'Confirmar Senha', 'required|matches[senha]', array('required' => 'O campo Confirmar senha é obrigatorio'));

                if ($this->form_validation->run() == FALSE) {
                     $erros = array('mensagens' => validation_errors());
                     redirect ("professores/professor_perfil/$url");
                }else{
                    if($imgProfessor['name'] == null) {
                        $data = array(
                            'nomeProfessor' => $this->input->post('nomeProfessor'),
                            'dataNasc' => $this->input->post('dataNasc'),
                            'miniCurriculo' => $this->input->post('miniCurriculo'),
                            'institucao' => $this->input->post('institucao'),
                            'email' => $this->input->post('email'),
                            'senha' => md5($this->input->post('senha')),
                        );
                        $this->professor_model->professor_update(array('codProfessor' => $this->input->post('codProfessor')), $data);

                        echo json_encode(array("status" => TRUE));
                        //ENVIAR PARA A PAGINA PERFIL
                        redirect ("professores/professor_perfil/$url");

                    //SE O PROFESSOR QUISER TROCAR A FOTO DE PERFIL
                    }elseif(!empty($imgProfessor['name'])){
                         //EXCLUINDO A FOTO DE PERFIL ANTERIOR
                            $professor = $this->professor_model->get_img($this->input->post('codProfessor'));
                            $img = $professor->imgProfessor;    
                            $caminho = "upload/professores/$img";
                            $this->professor_model->delete_img($this->input->post('codProfessor'));
                            echo json_encode(array("status" => TRUE));
                            unlink($caminho);
                            ///
                        $config = array(
                        'upload_path' => './upload/professores',
                        'allowed_types' => 'gif|jpg|png',//Arrumar essa parte
                        'file_name' => md5(time()),
                        'max_size' => '3000'
                        );
                        $this->load->library('upload');
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('imgProfessor')){
                            echo 'Arquivo salvo com sucesso.';
                            $data = array(
                               'nomeProfessor' => $this->input->post('nomeProfessor'),
                                'dataNasc' => $this->input->post('dataNasc'),
                                'imgProfessor' => $config['file_name'].".".$ponto_img,
                                'miniCurriculo' => $this->input->post('miniCurriculo'),
                                //'institucao' => $this->input->post('institucao'),
                                'email' => $this->input->post('email'),
                                'senha' => md5($this->input->post('senha')),
                            );
                            $this->professor_model->professor_update(array('codProfessor' => $this->input->post('codProfessor')), $data);
                            $this->session->set_userdata('imgProfessor', $data['imgProfessor']);
                            echo json_encode(array("status" => TRUE));

                            //ENVIAR PARA A PAGINA PERFIL
                                redirect ("professores/professor_perfil/$url");
                        }else{
                             redirect ("professores/professor_perfil/$url");
                        }
                   }
                }   
        }
    }

    public function professor_delete_img($codProfessor)
    {
        $professor = $this->professor_model->get_img($codProfessor);
        $img = $professor->imgProfessor;    
        $caminho = "upload/professores/$img";
        $this->professor_model->delete_img($codProfessor);
        echo json_encode(array("status" => TRUE));
        unlink($caminho);
        $this->session->set_userdata('imgProfessor', '');
    }

    public function professor_delete($codProfessor)
    {
        $this->professores_has_disciplinas_model->delete_by_id($codProfessor);
        $this->artigos_model->delete_all_professor($codProfessor);
        $this->professor_model->delete_by_id($codProfessor);
        echo json_encode(array("status" => TRUE));
        $this->session->set_userdata('professores');
    }

    public function professor_perfil(){
        $codProfessor = $this->input->get('codProfessor');
        $professor['perfil'] = $this->professor_model->get_by_id($codProfessor);
        $professor['artigos'] = $this->artigos_model->get_all_id_professor($codProfessor);
        $this->load->view('professor_perfil', $professor);
        //print_r($professor);
    }

    public function professor_editar(){
        $codProfessor = $this->input->get('codProfessor');
        $professor['perfil'] = $this->professor_model->get_by_id($codProfessor);
        $this->load->view('professor_editar', $professor);
    }

    public function artigos_add(){
         $codProfessor = $this->input->get('codProfessor');
        $professor['perfil'] = $this->professor_model->get_by_id($codProfessor);
        $this->load->view('artigo_add', $professor);
    }

    public function artigos_view(){
        $codProfessor = $this->input->get('codProfessor');
        $professor['artigos'] = $this->professor_model->get_by_id($codProfessor);
        $professor['artigos'] = $this->artigos_model->get_all_artigos();
        $professor['contar'] = $this->artigos_model->get_count_professor($codProfessor);
        $this->load->view('artigos_view_professor', $professor);
    }

}
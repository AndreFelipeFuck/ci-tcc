<?php
/**
 * Created by PhpStorm.
 * User: Pichau
 * Date: 25/06/2019
 * Time: 18:44
 */

class Login extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
                $this->load->database();
                $this->load->library('session');
                $this->load->model('aluno_model');
                 $this->load->model('professor_model');
        }
    public function entrar(){
       
        $tipo = $this->input->post("tipo");
        $senha = $this->input->post("senha");
        $email = $this->input->post("email");

        if($tipo == 0){//login aluno
            $this->db->where('email', $email);
            $this->db->where('senha', $senha);
            $query = $this->db->get("alunos");

            if ($query->num_rows() == 1){
                $aluno = $query->row();
                $this->session->set_userdata("alunos", $aluno->nomeCompleto);
                $codAluno = $this->aluno_model->get_by_login($email, $senha);
                $url = "?codAluno=".$aluno->codAluno;
               redirect ("alunos/aluno_perfil/$url");
                
            }else{
                redirect('home/login_home');
            }
        }if($tipo == 1){//login professor
            $this->db->where('email', $email);
            $this->db->where('senha', $senha);
            $query = $this->db->get("professores");

            if ($query->num_rows() == 1){
                $professor = $query->row();
                $this->session->set_userdata("professores", $professor->nomeCompleto);
                $codAluno = $this->aluno_model->get_by_login($email, $senha);
                $url = "?codProfessor=".$aluno->codProfessor;
               redirect ("professores/professor_perfil/$url");
            }else{
                redirect('home/login_home');
            }
        }

    }

    public function sair (){
        $this->session->set_userdata("alunos", "");
        redirect("home/login_home");
    }

    public function sairProf (){
        $this->session->set_userdata("professores", "");
        redirect("home/login_home");
    }
}

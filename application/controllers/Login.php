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
        $senha = md5($this->input->post("senha"));
        $email = $this->input->post('email');


        if($tipo == 0){//login aluno
            $this->db->where('email', $email);
            $this->db->where('senha', $senha);
            $query = $this->db->get("alunos");

            if ($query->num_rows() == 1){
                $aluno = $query->row();
                $this->session->set_userdata("alunos", $aluno->codAluno);
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
                $this->session->set_userdata("professores", $professor->codProfessor);
                $codProfessor = $this->professor_model->get_by_login($email, $senha);
                $url = "?codProfessor=".$professor->codProfessor;
               redirect ("professores/professor_perfil/$url");
            }else{
                redirect('home/login_home');
            }
        }

    }

    public function perfilAluno(){
        
        redirect ("alunos/aluno_perfil");
    }

    public function perfilProfessor(){

    }
    
    public function sair (){
        $this->session->unset_userdata('alunos', '');
        redirect("home");
    }

    public function sairProf (){
        $this->session->unset_userdata('professores', '');
        redirect("home");
    }
}

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
                //$codAluno = $this->db->select('codAluno, email, senha')->from('alunos')->where("email = '$email' and senha = '$senha'");
                redirect( "alunos");
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
                redirect( "professores");
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

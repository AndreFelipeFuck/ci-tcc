<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
		$this->load->model('aluno_model');
	}

	public function index()
    {
 		$aluno = $this->session->userdata("alunos");
		if(empty($aluno)){
		    redirect("home/login_home");
       	}
        //Teste
        $data['alunos'] = $this->aluno_model->get_all_alunos();
        $this->load->view('aluno_view', $data);
    }

	public function aluno_add(){
		//VALIDAR FORMULARIO
		$this->load->library('form_validation');

    	$this->form_validation->set_rules('nomeCompleto', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
    	$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));
     	$this->form_validation->set_rules('senha', 'Senha', 'required|min_length[8]', array('required' => 'Você deve preencher a %s.'));
     	$this->form_validation->set_rules('senhaconf', 'Confirmar Senha', 'required|matches[senha]', array('required' => 'O campo Confirmar senha é obrigatorio'));
    	
    	if ($this->form_validation->run() == FALSE) {
          $erros = array('mensagens' => validation_errors());
           $this->load->view('aluno_add', $erros);

	    } else {
	           echo "Formulário enviado com sucesso.";
	           //ENVIANDO IMAGEM PRO BANCO
	           $imgAluno = $_FILES['imgAluno'];
	           $config = array(
	           	'upload_path' => './upload/alunos',
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

	           if ($this->upload->do_upload('imgAluno')){
        			echo 'Arquivo salvo com sucesso.';

	        		//ENVIAR PARA O BANCO
		           	$data = array(
						'nomeCompleto' => $this->input->post('nomeCompleto'),
						'dataNasc' => $this->input->post('dataNasc'),
						'imgAluno' => $config['file_name'].".jpg",
						'anoLetivo' => $this->input->post('anoLetivo'),
						'curso' => $this->input->post('curso'),
						'email' => $this->input->post('email'),
						'senha' => md5($this->input->post('senha')),
					);
					$insert = $this->aluno_model->aluno_add($data);

					//ENVIAR PARA A PAGINA PERFIL
					  	$this->db->where('email', $data['email']);
			           	$this->db->where('senha', $data['senha']);
			            $query = $this->db->get('alunos');

			            if ($query->num_rows() == 1){
			                $aluno = $query->row();
			                $this->session->set_userdata("alunos", $aluno->nomeCompleto);
			                $codAluno = $this->aluno_model->get_by_login($email, $senha);
			                $url = "?codAluno=".$aluno->codAluno;
			               redirect ("alunos/aluno_perfil/$url");
			            }

    			}else{
         			echo $this->upload->display_errors();
         		}
	    }
	     
    }

	public function ajax_edit($codAluno)
	{
		$data = $this->aluno_model->get_by_id($codAluno);
		echo json_encode($data);
	}

	public function aluno_update_perfil()
	{
		$vereficaSenha = $this ->input->post('senha');
		if ($vereficaSenha == null) {
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nomeCompleto', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
    		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));

    		if ($this->form_validation->run() == FALSE) {
         		 $erros = array('mensagens' => validation_errors());
          		$this->load->view('aluno_editar', $erros);
          	}else{
				$data = array(
					'nomeCompleto' => $this->input->post('nomeCompleto'),
					'dataNasc' => $this->input->post('dataNasc'),
					'anoLetivo' => $this->input->post('anoLetivo'),
					'curso' => $this->input->post('curso'),
					'email' => $this->input->post('email'),
				);
				$this->aluno_model->aluno_update(array('codAluno' => $this->input->post('codAluno')), $data);

				echo json_encode(array("status" => TRUE));

				//ENVIAR PARA A PAGINA PERFIL
					$this->db->where('email', $data['email']);
			        $this->db->where('senha', $data['senha']);
			        $query = $this->db->get('alunos');
			        $url = "?codAluno=".$this->input->post('codAluno');
			        redirect ("alunos/aluno_perfil/$url");
			}

		}elseif ($vereficaSenha != null) {
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nomeCompleto', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
    		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));
    		$this->form_validation->set_rules('senha', 'Senha', 'required|min_length[8]', array('required' => 'Você deve preencher a %s.'));
     		$this->form_validation->set_rules('senhaconf', 'Confirmar Senha', 'required|matches[senha]', array('required' => 'O campo Confirmar senha é obrigatorio'));

    		if ($this->form_validation->run() == FALSE) {
         		 $erros = array('mensagens' => validation_errors());
          		$this->load->view('aluno_editar', $erros);
          	}else{
				$data = array(
					'nomeCompleto' => $this->input->post('nomeCompleto'),
					'dataNasc' => $this->input->post('dataNasc'),
					'senha' => $this->input->post('senha'),
					'anoLetivo' => $this->input->post('anoLetivo'),
					'curso' => $this->input->post('curso'),
					'email' => $this->input->post('email'),
				);
				$this->aluno_model->aluno_update(array('codAluno' => $this->input->post('codAluno')), $data);

				echo json_encode(array("status" => TRUE));

				//ENVIAR PARA A PAGINA PERFIL
					$this->db->where('email', $data['email']);
			        $this->db->where('senha', $data['senha']);
			        $query = $this->db->get('alunos');
			        $url = "?codAluno=".$this->input->post('codAluno');
			        redirect ("alunos/aluno_perfil/$url");
			}
		}
		
	}

	public function aluno_delete($codAluno)
	{
		$this->aluno_model->delete_by_id($codAluno);
		echo json_encode(array("status" => TRUE));
		$this->session->set_userdata('alunos');
	}

	public function aluno_perfil(){
		$codAluno = $this->input->get('codAluno');
		$aluno['perfil'] = $this->aluno_model->get_by_id($codAluno);
		$this->load->view('aluno_perfil', $aluno);
		//print_r($aluno);
	}

	public function aluno_editar(){
		$codAluno = $this->input->get('codAluno');
        $aluno['perfil'] = $this->aluno_model->get_by_id($codAluno);
        $this->load->view('aluno_editar', $aluno);
        //print_r($artigo);
	}


}




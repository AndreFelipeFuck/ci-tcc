<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
		$this->load->model('aluno_model');
		$this->load->model('artigos_model');
		$this->load->model('comentarios_model');

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
		 $this->load->helper('language');
		 $imgAluno = $_FILES['imgAluno'];
		 ///
			$ponto_img = explode(".", $imgAluno['name']);
			@$ponto_img = $ponto_img[1];
		//

		//VALIDAR FORMULARIO
		$this->load->library('form_validation');

    	$this->form_validation->set_rules('nomeAluno', 'Nome Completo', 'min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
    	$this->form_validation->set_rules('email', 'E-mail', 'valid_email', array('required' => 'O campo E-mail é obrigatorio.'));
     	$this->form_validation->set_rules('senha', 'Senha', 'min_length[8]', array('required' => 'Você deve preencher a %s.'));
     	$this->form_validation->set_rules('senhaconf', 'Confirmar Senha', 'matches[senha]', array('required' => 'O campo Confirmar senha é obrigatorio'));
    	
    	if ($this->form_validation->run() == FALSE) {
          //$erros = array('mensagens' => validation_errors());
           $this->load->view('aluno_add');

	    }else{
	    	//SE O ALUNO NÂO QUISER ENVIAR UMA FOTO DE PERFIL
          	if($imgAluno['name'] == null) {
          		//ENVIAR PARA O BANCO
		           	$data = array(
						'nomeAluno' => $this->input->post('nomeAluno'),
						'dataNasc' => $this->input->post('dataNasc'),
						'anoLetivo' => $this->input->post('anoLetivo'),
						'curso' => $this->input->post('curso'),
						'email' => $this->input->post('email'),
						'senha' => md5($this->input->post('senha')),
						'tipo' => 0,
					);
					$insert = $this->aluno_model->aluno_add($data);

					//ENVIAR PARA A PAGINA PERFIL
					  	$this->db->where('email', $data['email']);
			           	$this->db->where('senha', $data['senha']);
			            $query = $this->db->get('alunos');

			            if ($query->num_rows() == 1){
			                $aluno = $query->row();
			                $this->session->set_userdata("alunos", $aluno->codAluno);
			                $codAluno = $this->aluno_model->get_by_login($email, $senha);
			                $url = "?codAluno=".$aluno->codAluno;
			               redirect ("alunos/aluno_perfil/$url");
			            }
			//SE O ALUNO QUISER ENVIAR UMA FOTO DE PERFIL
          	}elseif(!empty($imgAluno['name'])){
          		 echo "Formulário enviado com sucesso.";
	           //ENVIANDO IMAGEM PRO BANCO
          		$ponto = explode(".", $imgAluno['name']);
	           $config = array(
	           	'upload_path' => './upload/alunos',
	             'allowed_types' =>  'gif|jpg|png',//Arrumar essa parte
	           	'file_name' => md5(time()),
	           	'max_size' => '3000'
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
						'nomeAluno' => $this->input->post('nomeAluno'),
						'dataNasc' => $this->input->post('dataNasc'),
						'imgAluno' => $config['file_name'].".".$ponto_img,
						'anoLetivo' => $this->input->post('anoLetivo'),
						'curso' => $this->input->post('curso'),
						'email' => $this->input->post('email'),
						'senha' => md5($this->input->post('senha')),
						'tipo' => 0,
					);
					$insert = $this->aluno_model->aluno_add($data);

					//ENVIAR PARA A PAGINA PERFIL
					  	$this->db->where('email', $data['email']);
			           	$this->db->where('senha', $data['senha']);
			            $query = $this->db->get('alunos');

			            if ($query->num_rows() == 1){
			                $aluno = $query->row();
			                $this->session->set_userdata("alunos", $aluno->codAluno);
			                $codAluno = $this->aluno_model->get_by_login($email, $senha);
			                $url = "?codAluno=".$aluno->codAluno;
			               redirect ("alunos/aluno_perfil/$url");
			            }

    			}else{
         			echo $this->upload->display_errors();
         		}
          	}
	          
	    }
	     
    }

	public function ajax_edit($codAluno)
	{
		$data = $this->aluno_model->get_by_id($codAluno);
		echo json_encode($data);
	}

	public function aluno_update_perfil(){
		$url = "?codAluno=".$this->input->post('codAluno');
		$imgAluno = $_FILES['imgAluno'];
		$vereficaSenha = $this ->input->post('senha');
		///
			$ponto_img = explode(".", $imgAluno['name']);
			$ponto_img = $ponto_img[1];
		//

		//SE O ALUNO NÂO TROCAR A SENHA
		if ($vereficaSenha == null) {
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nomeAluno', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
    		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));

    		if ($this->form_validation->run() == FALSE) {
         		 $erros = array('mensagens' => validation_errors());
          		$this->load->view('aluno_editar', $erros);
          	}else{
          		//SE O ALUNO NÂO QUISER TROCAR DE FOTO DE PERFIL
          		if($imgAluno['name'] == null) {
          			$data = array(
					'nomeAluno' => $this->input->post('nomeAluno'),
					'dataNasc' => $this->input->post('dataNasc'),
					'anoLetivo' => $this->input->post('anoLetivo'),
					'curso' => $this->input->post('curso'),
					'email' => $this->input->post('email'),
					);
					$this->aluno_model->aluno_update(array('codAluno' => $this->input->post('codAluno')), $data);

					echo json_encode(array("status" => TRUE));
					//ENVIAR PARA A PAGINA PERFIL
					redirect ("alunos/aluno_perfil/$url");

        		//SE O ALUNO QUISER TROCAR A FOTO DE PERFIL
        		}elseif(!empty($imgAluno['name'])){
        			//EXCLUIR FOTO ANTIGA DE PERFIL
        			$aluno = $this->aluno_model->get_img($this->input->post('codAluno'));
					$img = $aluno->imgAluno;	
					$caminho = "upload/alunos/$img";
					$this->aluno_model->delete_img($this->input->post('codAluno'));
					echo json_encode(array("status" => TRUE));
					unlink($caminho);
					///
	        		echo "Formulário enviado com sucesso.";
		           //ENVIANDO IMAGEM PRO BANCO
		           $config = array(
		           	'upload_path' => './upload/alunos',
		             'allowed_types' =>  'gif|jpg|png',//Arrumar essa parte
		           	'file_name' => md5(time()),
		           	'max_size' => '3000'
		           );

		           /*
		           CONFIGURAÇÔES PARA UPLOAD DE IMAGEM
		           max_width:
		           max_height:
		           */

		           $this->load->library('upload');
		           $this->upload->initialize($config);

		           if($this->upload->do_upload('imgAluno')){
	        			echo 'Arquivo salvo com sucesso.';

		        		//ENVIAR PARA O BANCO
			           	$data = array(
							'nomeAluno' => $this->input->post('nomeAluno'),
							'dataNasc' => $this->input->post('dataNasc'),
							'imgAluno' => $config['file_name'].".".$ponto_img,
							'anoLetivo' => $this->input->post('anoLetivo'),
							'curso' => $this->input->post('curso'),
							'email' => $this->input->post('email'),
							
						);
						$this->aluno_model->aluno_update(array('codAluno' => $this->input->post('codAluno')), $data);
						$this->session->set_userdata('imgAluno', $data['imgAluno']);

						echo json_encode(array("status" => TRUE));

						//ENVIAR PARA A PAGINA PERFIL
					        redirect ("alunos/aluno_perfil/$url");
        			}else{
        				 redirect ("alunos/aluno_perfil/$url");
        			}
        		}
			}

		//SE O ALUNO TROCAR A SENHA
		}elseif ($vereficaSenha != null){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nomeAluno', 'Nome Completo', 'required|min_length[3]|max_length[20]', array('required' => 'O campo Nome Completo é obrigatorio.'));
    		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email', array('required' => 'O campo E-mail é obrigatorio.'));
    		$this->form_validation->set_rules('senha', 'Senha', 'required|min_length[8]', array('required' => 'Você deve preencher a %s.'));
     		$this->form_validation->set_rules('senhaconf', 'Confirmar Senha', 'required|matches[senha]', array('required' => 'O campo Confirmar senha é obrigatorio'));

    		if ($this->form_validation->run() == FALSE) {
         		 $erros = array('mensagens' => validation_errors());
          		 redirect ("alunos/aluno_perfil/$url");
          	}else{
				if($imgAluno['name'] == null) {
          			$data = array(
					'nomeAluno' => $this->input->post('nomeAluno'),
					'dataNasc' => $this->input->post('dataNasc'),
					'anoLetivo' => $this->input->post('anoLetivo'),
					'curso' => $this->input->post('curso'),
					'email' => $this->input->post('email'),
					'senha' => md5($this->input->post('senha')),
					);
					$this->aluno_model->aluno_update(array('codAluno' => $this->input->post('codAluno')), $data);

					echo json_encode(array("status" => TRUE));
					//ENVIAR PARA A PAGINA PERFIL
					redirect ("alunos/aluno_perfil/$url");

        		//SE O ALUNO QUISER TROCAR A FOTO DE PERFIL
        		}elseif(!empty($imgAluno['name'])){
        			 echo "Formulário enviado com sucesso.";
        			 //EXCLUIR FOTO ANTIGA DE PERFIL
        			$aluno = $this->aluno_model->get_img($this->input->post('codAluno'));
					$img = $aluno->imgAluno;	
					$caminho = "upload/alunos/$img";
					$this->aluno_model->delete_img($this->input->post('codAluno'));
					echo json_encode(array("status" => TRUE));
					unlink($caminho);
					///
		           //ENVIANDO IMAGEM PRO BANCO
	          		$ponto = explode(".", $imgAluno['name']);
		           $config = array(
		           	'upload_path' => './upload/alunos',
		             'allowed_types' =>  'gif|jpg|png',//Arrumar essa parte
		           	'file_name' => md5(time()),
		           	'max_size' => '3000'
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
							'nomeAluno' => $this->input->post('nomeAluno'),
							'dataNasc' => $this->input->post('dataNasc'),
							'imgAluno' => $config['file_name'].".".$ponto_img,
							'anoLetivo' => $this->input->post('anoLetivo'),
							'curso' => $this->input->post('curso'),
							'email' => $this->input->post('email'),
							'senha' => md5($this->input->post('senha')),
						);
						
						$this->aluno_model->aluno_update(array('codAluno' => $this->input->post('codAluno')), $data);
						$this->session->set_userdata('imgAluno', $data['imgAluno']);

						echo json_encode(array("status" => TRUE));

						//ENVIAR PARA A PAGINA PERFIL
					        redirect ("alunos/aluno_perfil/$url");
        			}else{
        				 redirect ("alunos/aluno_perfil/$url");
        			}
        		}
			}
		}
		
	}

	public function aluno_delete_img($codAluno){
		$aluno = $this->aluno_model->get_img($codAluno);
		$img = $aluno->imgAluno;	
		$caminho = "upload/alunos/$img";
		$this->aluno_model->delete_img($codAluno);
		echo json_encode(array("status" => TRUE));
		unlink($caminho);
	}

	public function aluno_delete($codAluno){
		$this->comentarios_model->delete_all_aluno($codAluno);
		$this->artigos_model->delete_all_aluno($codAluno);
		$this->aluno_model->delete_by_id($codAluno);
		echo json_encode(array("status" => TRUE));
		$this->session->set_userdata('alunos');
	}

	public function aluno_perfil(){
		$codAluno = $this->input->get('codAluno');
		$aluno['perfil'] = $this->aluno_model->get_by_id($codAluno);
		$aluno['artigos'] = $this->artigos_model->get_all_id_aluno($codAluno);
		$this->load->view('aluno_perfil', $aluno);
	}

	public function aluno_editar(){
		$codAluno = $this->input->get('codAluno');
        $aluno['perfil'] = $this->aluno_model->get_by_id($codAluno);
        $this->load->view('aluno_editar', $aluno);
	}

	 public function artigos_add(){
         $codAluno = $this->input->get('codAluno');
        $aluno['perfil'] = $this->aluno_model->get_by_id($codAluno);
        $this->load->view('artigo_add_aluno', $aluno);
    }

    public function artigos_view(){
        $codAluno = $this->input->get('codAluno');
        $aluno['artigos'] = $this->artigos_model->get_all_id_aluno($codAluno);
        $this->load->view('artigos_view_aluno', $aluno);
    }


}




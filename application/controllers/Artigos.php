<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artigos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('artigos_model');
        $this->load->library('pagination');
	}

	public function index()
    {
    	// $professor = $this->session->userdata("professores");
    	// $aluno = $this->session->userdata("alunos");
     //    if (empty($professor) and empty($aluno)) {
     //        redirect("home/login_home");
     //    }

        
    }

    public function artigos_listar(){
    	/*$config['base_url'] = base_url('artigos/artigos_listar');
    	$config['total_rows'] = $this->artigos_model->get_count();
		$config ["per_page"] = 2;
        $config ["uri_segment"] = 1;
		
		 $this->pagination->initialize($config);

        $page = ($this->uri->segment(1))? $this->uri->segment(1):0;

        $data["links"] = $this->pagination->create_links();*/

        //$data['artigos'] = $this->artigos_model->get_all_artigos($config["per_page"], $page);
     	$data['artigos'] = $this->artigos_model->listar_artigos();
		$data['artigosProfessor'] = $this->artigos_model->listar_artigos_professor();
        $data['contar'] = $this->artigos_model->get_count();

        $this->load->view('artigos_view', $data);
    }

    public function artigos_listar_by_data(){
    	$data['artigos'] = $this->artigos_model->get_artigos_by_data();
        $this-> load->view('artigos_view', $data);
    }

    public function artigos_listar_perfil(){
    	$data['artigos'] = $this->artigos_model->get_all_artigos_professor();
        $this->load->view('professor_perfil', $data);
    }

	public function artigo_add(){
		$imgArtigo = $_FILES['imgArtigo'];
		$pdfArtigo = $_FILES['uploadArtigo'];
		//DANDO NOME AO ARQUIVO PDF
			$titulo_pdf = explode(" ", $this->input->post('titulo'));
			$titulo_pdf = implode("_", $titulo_pdf);
			$titulo_pdf = $titulo_pdf."_".date("Y-m-d");
		///
		if($imgArtigo['name'] == null){
			if ($pdfArtigo['name'] != null) {
					$config_pdf = array(
			           	'upload_path' => './upload/pdf',
			           	'allowed_types' => 'pdf',
			           	'file_name' => $titulo_pdf.".pdf",
			           	'max_size' => '3000');
	           		$this->load->library('upload');
	           		$this->upload->initialize($config_pdf);

	           if ($this->upload->do_upload('uploadArtigo')){
	           		echo 'Arquivo salvo com sucesso.';

        			if($this->input->post('alunos_codAluno') == 0){
						$data = array(
							'titulo' => $this->input->post('titulo'),
							'corpo' => $this->input->post('corpo'),
							'professores_codProfessor' => $this->input->post('professores_codProfessor'),
							'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
							'resumo' => $this->input->post('resumo'),
							'dataArtigo' => date("Y-m-d"),
							'uploadArtigo' => $config_pdf['file_name'],
						);

					}if ($this->input->post('professores_codProfessor') == 0) {
						$data = array(
								'titulo' => $this->input->post('titulo'),
								'corpo' => $this->input->post('corpo'),
								'alunos_codAluno' => $this->input->post('alunos_codAluno'),
								'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
								'resumo' => $this->input->post('resumo'),
								'dataArtigo' => date("Y-m-d"),
								'uploadArtigo' => $config_pdf['file_name'],
						);
					}

					$insert = $this->artigos_model->artigo_add($data);

					$titulo = $this->db->where('titulo', $data['titulo']);
		           	$corpo = $this->db->where('corpo', $data['corpo']);
		            $query = $this->db->get('artigos');
					$codArtigo = $this->artigos_model->get_by_login($titulo, $corpo);
				    //Defenindo a disciplina do artigo	
		            if ($query->num_rows() == 1){
		                $artigo = $query->row();
		                $url = "?codArtigo=".$artigo->codArtigo;
		               redirect ("artigos/artigo_page/$url");
		               
		            }

		        }else{
		         	echo $this->upload->display_errors();
		        }
			}else{
					echo 'Arquivo salvo com sucesso.';

        			if($this->input->post('alunos_codAluno') == 0){
						$data = array(
							'titulo' => $this->input->post('titulo'),
							'corpo' => $this->input->post('corpo'),
							'professores_codProfessor' => $this->input->post('professores_codProfessor'),
							'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
							'resumo' => $this->input->post('resumo'),
							'dataArtigo' => date("Y-m-d"),
						);

					}if ($this->input->post('professores_codProfessor') == 0) {
						$data = array(
								'titulo' => $this->input->post('titulo'),
								'corpo' => $this->input->post('corpo'),
								'alunos_codAluno' => $this->input->post('alunos_codAluno'),
								'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
								'resumo' => $this->input->post('resumo'),
								'dataArtigo' => date("Y-m-d"),
						);
					}

					$insert = $this->artigos_model->artigo_add($data);

					$titulo = $this->db->where('titulo', $data['titulo']);
		           	$corpo = $this->db->where('corpo', $data['corpo']);
		            $query = $this->db->get('artigos');
					$codArtigo = $this->artigos_model->get_by_login($titulo, $corpo);
				    //Defenindo a disciplina do artigo	
		            if ($query->num_rows() == 1){
		                $artigo = $query->row();
		                $url = "?codArtigo=".$artigo->codArtigo;
		               //redirect ("artigos/artigo_page/$url");
		                print_r($_FILES);
		            }

			}//
			
		        /*echo "Deu errado ";
		        echo "$titulo_pdf";
		        print_r($_FILES);*/
			
		}elseif(!empty($imgArtigo['name'])){
			/////
				if ($pdfArtigo['name'] != null) {
						$config_pdf = array(
				           	'upload_path' => './upload/pdf',
				           	'allowed_types' => 'pdf',
				           	'file_name' => $titulo_pdf.".pdf",
				           	'max_size' => '3000');
		           		$this->load->library('upload');
		           		$this->upload->initialize($config_pdf);

		           if ($this->upload->do_upload('uploadArtigo')){
		           		 //ENVIANDO IMAGEM PRO BANCO
			           $config = array(
			           	'upload_path' => './upload/artigos',
			           	'allowed_types' => 'jpg',//Arrumar essa parte
			           	'file_name' => md5(time()),
			           	'max_size' => '500'
			           );
			           $this->load->library('upload');
			           $this->upload->initialize($config);

			           if ($this->upload->do_upload('imgArtigo')){
		        			echo 'Arquivo salvo com sucesso.';

			        		//ENVIAR PARA O BANCO
			        		if($this->input->post('alunos_codAluno') == 0){
					           	$data = array(
									'titulo' => $this->input->post('titulo'),
									'corpo' => $this->input->post('corpo'),
									'imgArtigo' => $this->input->post('imgArtigo'),
									'professores_codProfessor' => $this->input->post('professores_codProfessor'),
									'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
									'resumo' => $this->input->post('resumo'),
									'imgArtigo' => $config['file_name'].".jpg",
									'dataArtigo' => date("Y-m-d"),
									'uploadArtigo' => $config_pdf['file_name'],
								);
							}if ($this->input->post('professores_codProfessor') == 0) {
								 	$data = array(
									'titulo' => $this->input->post('titulo'),
									'corpo' => $this->input->post('corpo'),
									'imgArtigo' => $this->input->post('imgArtigo'),
									'alunos_codAluno' => $this->input->post('alunos_codAluno'),
									'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
									'resumo' => $this->input->post('resumo'),
									'imgArtigo' => $config['file_name'].".jpg",
									'dataArtigo' => date("Y-m-d"),
									'uploadArtigo' => $config_pdf['file_name'],
								);
							}
							$insert = $this->artigos_model->artigo_add($data);

							//ENVIAR PARA A PAGINA PERFIL
							  	$this->db->where('titulo', $data['titulo']);
			           			$this->db->where('corpo', $data['corpo']);
			            		$query = $this->db->get('artigos');

			            	if ($query->num_rows() == 1){
			               		 $artigo = $query->row();
			               		 $codArtigo = $this->artigos_model->get_by_login($titulo, $corpo);
			                	$url = "?codArtigo=".$artigo->codArtigo;
			                	//Defenindo a disciplina do artigo
			               		redirect ("artigos/artigo_page/$url");
			                
			            	}

		    			}else{
		         			echo $this->upload->display_errors();
		         		}
		            }

		        }else{
					 	///ENVIANDO IMAGEM PRO BANCO
				           $config = array(
				           	'upload_path' => './upload/artigos',
				           	'allowed_types' => 'jpg',//Arrumar essa parte
				           	'file_name' => md5(time()),
				           	'max_size' => '500'
				           );
				           $this->load->library('upload');
				           $this->upload->initialize($config);

				           if ($this->upload->do_upload('imgArtigo')){
			        			echo 'Arquivo salvo com sucesso.';

				        		//ENVIAR PARA O BANCO
				        		if($this->input->post('alunos_codAluno') == 0){
						           	$data = array(
										'titulo' => $this->input->post('titulo'),
										'corpo' => $this->input->post('corpo'),
										'imgArtigo' => $this->input->post('imgArtigo'),
										'professores_codProfessor' => $this->input->post('professores_codProfessor'),
										'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
										'resumo' => $this->input->post('resumo'),
										'imgArtigo' => $config['file_name'].".jpg",
										'dataArtigo' => date("Y-m-d")
									);
								}if ($this->input->post('professores_codProfessor') == 0) {
									 	$data = array(
										'titulo' => $this->input->post('titulo'),
										'corpo' => $this->input->post('corpo'),
										'imgArtigo' => $this->input->post('imgArtigo'),
										'alunos_codAluno' => $this->input->post('alunos_codAluno'),
										'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
										'resumo' => $this->input->post('resumo'),
										'imgArtigo' => $config['file_name'].".jpg",
										'dataArtigo' => date("Y-m-d")
									);
								}
								$insert = $this->artigos_model->artigo_add($data);

								//ENVIAR PARA A PAGINA PERFIL
								  	$this->db->where('titulo', $data['titulo']);
				           			$this->db->where('corpo', $data['corpo']);
				            		$query = $this->db->get('artigos');

				            	if ($query->num_rows() == 1){
				               		 $artigo = $query->row();
				               		 $codArtigo = $this->artigos_model->get_by_login($titulo, $corpo);
				                	$url = "?codArtigo=".$artigo->codArtigo;
				                	//Defenindo a disciplina do artigo
				               		redirect ("artigos/artigo_page/$url");
				                
				            	}

			    			}else{
			         			echo $this->upload->display_errors();
			         		}
		        }
		}	

	}

	public function ajax_edit($codArtigo)
	{
		$data = $this->artigos_model->get_by_id_simples($codArtigo);
		echo json_encode($data);
	}

	public function artigo_update()
	{
		$url = "?codArtigo=".$this->input->post('codArtigo');
		$imgArtigo = $_FILES['imgArtigo'];
		$pdfArtigo = $_FILES['uploadArtigo'];
		//DANDO NOME AO ARQUIVO PDF
			$titulo_pdf = explode(" ", $this->input->post('titulo'));
			$titulo_pdf = implode("_", $titulo_pdf);
			$titulo_pdf = $titulo_pdf."_".date("Y-m-d");
		///
		
		//SE O USUARIO NÃO QUISER TROCAR A FOTO DO ARTIGO	
		if($imgArtigo['name'] == null) {
			if ($pdfArtigo['name'] != null) {
				$config_pdf = array(
			    'upload_path' => './upload/pdf',
			     'allowed_types' => 'pdf',
			     'file_name' => $titulo_pdf.".pdf",
			     'max_size' => '3000');
				 $this->load->library('upload'); 
				 	$this->upload->initialize($config_pdf);
				if ($this->upload->do_upload('uploadArtigo')){
		           	$data = array(
						'titulo' => $this->input->post('titulo'),
						'corpo' => $this->input->post('corpo'),
						'resumo' => $this->input->post('resumo'),
						'uploadArtigo' => $config_pdf['file_name'],
						'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),		
						);
					$this->artigos_model->artigo_update(array('codArtigo' => $this->input->post('codArtigo')), $data);

					echo json_encode(array("status" => TRUE));

					redirect ("artigos/artigo_page/$url");
				}else{
					echo $this->upload->display_errors();	
				}
			}else{
				$data = array(
				'titulo' => $this->input->post('titulo'),
				'corpo' => $this->input->post('corpo'),
				'resumo' => $this->input->post('resumo'),
				'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'));
				$this->artigos_model->artigo_update(array('codArtigo' => $this->input->post('codArtigo')), $data);

				echo json_encode(array("status" => TRUE));

				redirect ("artigos/artigo_page/$url");
			}

			// SE O USUARIO QUISER TROCAR A FOTO DO ARTIGO
		}elseif(!empty($imgArtigo['name'])){
			//EXCLUIR FOTO ANTIGA DE PERFIL
        			$artigo = $this->artigos_model->get_img($this->input->post('codArtigo'));
					$img = $artigo->imgArtigo;	
					$caminho = "upload/artigos/$img";
					//echo json_encode(array("status" => TRUE));
					unlink($caminho);
			///
			if ($pdfArtigo['name'] != null) {
				$config_pdf = array(
			    'upload_path' => './upload/pdf',
			     'allowed_types' => 'pdf',
			     'file_name' => $titulo_pdf.".pdf",
			     'max_size' => '3000');
				 ///	
				
	             $this->load->library('upload');
	              $this->upload->initialize($config_pdf);
	              ///
	                    if ($this->upload->do_upload('uploadArtigo')){
	                    	$config = array(
			                'upload_path' => './upload/artigos',
			                'allowed_types' => 'jpg',//Arrumar essa parte
			                 'file_name' => md5(time()),
			                 'max_size' => '500');
	                    	 $this->upload->initialize($config);
	                    	if ($this->upload->do_upload('imgArtigo')){
		                    	$data = array(
									'titulo' => $this->input->post('titulo'),
									'corpo' => $this->input->post('corpo'),
									'imgArtigo' => $config['file_name'].".jpg",
									'uploadArtigo' => $config_pdf['file_name'],
									'resumo' => $this->input->post('resumo'),
									'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina')
								);
								$this->artigos_model->artigo_update(array('codArtigo' => $this->input->post('codArtigo')), $data);

								echo json_encode(array("status" => TRUE));

					 			redirect ("artigos/artigo_page/$url");
	                    	}else{
	                    		echo $this->upload->display_errors();
	                    		echo "IMG";	
	                    	}
	                    }else{
							echo $this->upload->display_errors();
							echo "PDF";	
						}
	                   
	        }else{
		        $config = array(
		            'upload_path' => './upload/artigos',
		            'allowed_types' => 'jpg',//Arrumar essa parte
		            'file_name' => md5(time()),
		            'max_size' => '500');
		            $this->load->library('upload');
		            $this->upload->initialize($config);
	            if ($this->upload->do_upload('imgArtigo')){
		            $data = array(
						'titulo' => $this->input->post('titulo'),
						'corpo' => $this->input->post('corpo'),
						'imgArtigo' => $config['file_name'].".jpg",
						'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'));
					$this->artigos_model->artigo_update(array('codArtigo' => $this->input->post('codArtigo')), $data);

					echo json_encode(array("status" => TRUE));

					redirect ("artigos/artigo_page/$url");
	            }else{
	            	echo $this->upload->display_errors();	
	            }
	        }
		}
	}

	public function artigo_delete($codArtigo)
	{
		$this->artigos_model->delete_by_id($codArtigo);
		echo json_encode(array("status" => TRUE));
	}

	/*public function artigo_page(){
        $codArtigo = $this->input->get('codArtigo');
        $artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
        $this->load->view('artigo_page', $artigo);
    }*/

    public function artigo_page(){
        $codArtigo = $this->input->get('codArtigo');
        $analise = $this->artigos_model->analise($codArtigo);
        if ($analise->alunos_codAluno == null) {
        	//PROFESSOR
        	//echo "professor";
        	$artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
        	$this->load->view('artigo_page', $artigo);
        }if($analise->alunos_codAluno != null){
        	//ALUNO
        	//echo "ALUNO";
        	$artigo['perfil'] = $this->artigos_model->get_by_id_aluno($codArtigo);
        	$this->load->view('artigo_page', $artigo);
        }
        
      
       
        /*$artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
        $this->load->view('artigo_page', $artigo);	*/
    }

    public function artigo_editar(){
        $codArtigo = $this->input->get('codArtigo');
        $analise = $this->artigos_model->analise($codArtigo);
        if ($analise->alunos_codAluno == 0) {
        	//PROFESSOR
        	$artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
        	$this->load->view('artigo_editar', $artigo);
        }if($analise->alunos_codAluno > 0){
        	//ALUNO
        	$artigo['perfil'] = $this->artigos_model->get_by_id_aluno($codArtigo);
        	$this->load->view('artigo_editar', $artigo);
        }
    }
	

}





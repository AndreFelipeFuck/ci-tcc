<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artigos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('artigos_model');
        $this->load->model('aluno_model');
        $this->load->model('professor_model');
        $this->load->model('comentarios_model');
        // $this->load->library('pagination');
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
    	$this->load->library('pagination');
    	$config = array(
			"base_url" => "http://localhost/ci_tcc/index.php/artigos/artigos_listar",
			"per_page" => 10,
			"num_links" => 3,
			"uri_segment" => 3,
			"total_rows" => $this->artigos_model->get_count(),
			"full_tag_open" => "<ul class='pagination'>",
			"full_tag_close" => "</ul>",
			"first_link" => FALSE,
			"last_link" => FALSE,
			"first_tag_open" => "<li>",
			"first_tag_close" => "</li>",
			"prev_link" => "Anterior",
			"prev_tag_open" => "<li class='prev'>",
			"prev_tag_close" => "</li>",
			"next_link" => "Próxima",
			"next_tag_open" => "<li class='next'>",
			"next_tag_close" => "</li>",
			"last_tag_open" => "<li>",
			"last_tag_close" => "</li>",
			"cur_tag_open" => "<li class='active'><a href='#'>",
			"cur_tag_close" => "</a></li>",
			"num_tag_open" => "<li>",
			"num_tag_close" => "</li>"
		);
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		///
     	$artigo_aluno = $this->artigos_model->listar_artigos($config['per_page'],$offset);
		$artigo_professor = $this->artigos_model->listar_artigos_professor($config['per_page'],$offset);
		if ($artigo_professor == null) {
			$artigo_aluno = $this->artigos_model->listar_artigos(20,$offset);
			$config['per_page'] = 20;
		}elseif($artigo_aluno == null){
			$artigo_professor = $this->artigos_model->listar_artigos_professor(20,$offset);
			$config['per_page'] = 20;
		}
		///

		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();


		$data['artigos'] = array_merge($artigo_aluno, $artigo_professor);
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
		//
			$ponto_img = explode(".", $imgArtigo['name']);
			@$ponto_img = $ponto_img[1];
		//
			$codProfessor = $this->input->post('professores_codProfessor');
			$codAluno = $this->input->post('alunos_codAluno');
			if(!empty($codProfessor) ){
				$url = "professores/artigos_add?codProfessor=".$codProfessor;
			}elseif(!empty($codAluno)){
				$url = "alunos/artigos_add?codAluno=".$codAluno;
			}

			
		//SEM IMAGEM
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
							'dataArtigo' => date("Y-m-d H:i:s"),
							'uploadArtigo' => $config_pdf['file_name'],
						);

					}if ($this->input->post('professores_codProfessor') == 0) {
						$data = array(
								'titulo' => $this->input->post('titulo'),
								'corpo' => $this->input->post('corpo'),
								'alunos_codAluno' => $this->input->post('alunos_codAluno'),
								'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
								'resumo' => $this->input->post('resumo'),
								'dataArtigo' => date("Y-m-d H:i:s"),
								'uploadArtigo' => $config_pdf['file_name'],
						);
					}

					$insert = $this->artigos_model->artigo_add($data);

					$titulo = $this->db->where('titulo', $data['titulo']);
		           	$corpo = $this->db->where('corpo', $data['corpo']);
		           	$dataArtigo = $this->db->where('dataArtigo', $data['dataArtigo']);
		            $query = $this->db->get('artigos');
					$codArtigo = $this->artigos_model->get_by_login($titulo, $corpo ,$dataArtigo);
				    //Defenindo a disciplina do artigo	
		            if ($query->num_rows() == 1){
		                $artigo = $query->row();
		                $url = "?codArtigo=".$artigo->codArtigo;
		               redirect ("artigos/artigo_page/$url");
		               
		            }

		        }else{
		         	//echo $this->upload->display_errors();
		         	$titulo = $this->input->post('titulo');
		         	$corpo = $this->input->post('corpo');
		         	$resumo =  $this->input->post('resumo');
		         	$upload_erro_pdf = $this->upload->display_errors();
                    $this->session->set_flashdata('upload_erro_pdf', "$upload_erro_pdf");
                    $this->session->set_flashdata('titulo', "$titulo");
                    $this->session->set_flashdata('corpo', "$corpo");
                     $this->session->set_flashdata('resumo', "$resumo");
		           	redirect("$url");
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
							'dataArtigo' => date("Y-m-d H:i:s"),
						);

					}if ($this->input->post('professores_codProfessor') == 0) {
						$data = array(
								'titulo' => $this->input->post('titulo'),
								'corpo' => $this->input->post('corpo'),
								'alunos_codAluno' => $this->input->post('alunos_codAluno'),
								'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
								'resumo' => $this->input->post('resumo'),
								'dataArtigo' => date("Y-m-d H:i:s"),
						);
					}

					$insert = $this->artigos_model->artigo_add($data);

					$titulo = $this->db->where('titulo', $data['titulo']);
		           	$corpo = $this->db->where('corpo', $data['corpo']);
		           	$dataArtigo = $this->db->where('dataArtigo', $data['dataArtigo']);
		            $query = $this->db->get('artigos');
					$codArtigo = $this->artigos_model->get_by_login($titulo, $corpo, $dataArtigo);
				    //Defenindo a disciplina do artigo	
		            if ($query->num_rows() == 1){
		                $artigo = $query->row();
		                $url = "?codArtigo=".$artigo->codArtigo;
		               redirect ("artigos/artigo_page/$url");
		            }

			}//
			
		        /*echo "Deu errado ";
		        echo "$titulo_pdf";
		        print_r($_FILES);*/
		//COM IMAGEM
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
			           	'allowed_types' => 'gif|jpg|png',//Arrumar essa parte
			           	'file_name' => md5(time()),
			           	'max_size' => '3000'
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
									'imgArtigo' => $config['file_name'].".".$ponto_img,
									'dataArtigo' => date("Y-m-d H:i:s"),
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
									'imgArtigo' => $config['file_name'].".".$ponto_img,
									'dataArtigo' => date("Y-m-d H:i:s"),
									'uploadArtigo' => $config_pdf['file_name'],
								);
							}
							$insert = $this->artigos_model->artigo_add($data);

							//ENVIAR PARA A PAGINA PERFIL
							  	$this->db->where('titulo', $data['titulo']);
			           			$this->db->where('corpo', $data['corpo']);
			           			$this->db->where('dataArtigo', $data['dataArtigo']);
			            		$query = $this->db->get('artigos');
			            		$codArtigo = $this->artigos_model->get_by_login($titulo, $corpo, $dataArtigo);

			            	if ($query->num_rows() == 1){
			               		 $artigo = $query->row();
			                	$url = "?codArtigo=".$artigo->codArtigo;
			                	//Defenindo a disciplina do artigo
			               		redirect ("artigos/artigo_page/$url");
			                
			            	}

		    			}else{
		         			//echo $this->upload->display_errors();
		         			$titulo = $this->input->post('titulo');
		         			$upload_erro_pdf = $this->upload->display_errors();
                    		$this->session->set_flashdata('upload_erro_pdf', "$upload_erro_pdf");
                    		$this->session->set_flashdata('titulo', "$titulo");
                    		$this->session->set_flashdata();
		           			redirect("$url");
		         		}
		            }else{
		            	///echo $this->upload->display_errors();
		            	$titulo = $this->input->post('titulo');
			         	$corpo = $this->input->post('corpo');
			         	$resumo =  $this->input->post('resumo');
			         	$upload_erro = $this->upload->display_errors();
	                    $this->session->set_flashdata('upload_erro', "$upload_erro");
	                    $this->session->set_flashdata('titulo', "$titulo");
	                    $this->session->set_flashdata('corpo', "$corpo");
	                     $this->session->set_flashdata('resumo', "$resumo");
			           	redirect("$url");
		            }

		        }else{
					 	///ENVIANDO IMAGEM PRO BANCO
				           $config = array(
				           	'upload_path' => './upload/artigos',
				           	'allowed_types' => 'gif|jpg|png',//Arrumar essa parte
				           	'file_name' => md5(time()),
				           	'max_size' => '3000'
				           );
				           $this->load->library('upload');
				           $this->upload->initialize($config);

				           if ($this->upload->do_upload('imgArtigo')){
			        			echo "Teste";

				        		//ENVIAR PARA O BANCO
				        		if($this->input->post('alunos_codAluno') == 0){
						           	$data = array(
										'titulo' => $this->input->post('titulo'),
										'corpo' => $this->input->post('corpo'),
										'imgArtigo' => $this->input->post('imgArtigo'),
										'professores_codProfessor' => $this->input->post('professores_codProfessor'),
										'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
										'resumo' => $this->input->post('resumo'),
										'imgArtigo' => $config['file_name'].".".$ponto_img,
										'dataArtigo' => date("Y-m-d H:i:s")
									);
								}if ($this->input->post('professores_codProfessor') == 0) {
									 	$data = array(
										'titulo' => $this->input->post('titulo'),
										'corpo' => $this->input->post('corpo'),
										'imgArtigo' => $this->input->post('imgArtigo'),
										'alunos_codAluno' => $this->input->post('alunos_codAluno'),
										'disciplina_codDisciplina' => $this->input->post('disciplina_codDisciplina'),
										'resumo' => $this->input->post('resumo'),
										'imgArtigo' => $config['file_name'].".".$ponto_img,
										'dataArtigo' => date("Y-m-d H:i:s")
									);
								}
								$insert = $this->artigos_model->artigo_add($data);

								//ENVIAR PARA A PAGINA PERFIL
								  	$this->db->where('titulo', $data['titulo']);
				           			$this->db->where('corpo', $data['corpo']);
				           			$this->db->where('dataArtigo', $data['dataArtigo']);
				            		$query = $this->db->get('artigos');
				            		$codArtigo = $this->artigos_model->get_by_login($titulo, $corpo,$dataArtigo);

				            	if ($query->num_rows() == 1){
				               		 $artigo = $query->row();
				                	$url = "?codArtigo=".$artigo->codArtigo;
				                	//Defenindo a disciplina do artigo
				               		redirect ("artigos/artigo_page/$url");
				                
				            	}

			    			}else{

			    				$titulo = $this->input->post('titulo');
					         	$corpo = $this->input->post('corpo');
					         	$resumo =  $this->input->post('resumo');
					         	$upload_erro = $this->upload->display_errors();
			                    $this->session->set_flashdata('upload_erro', "$upload_erro");
			                    $this->session->set_flashdata('titulo', "$titulo");
			                    $this->session->set_flashdata('corpo', "$corpo");
			                     $this->session->set_flashdata('resumo', "$resumo");
					           	redirect("$url");
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
			$ponto_img = explode(".", $imgArtigo['name']);
			$ponto_img = $ponto_img[1];
		//
		
		//SE O USUARIO NÃO QUISER TROCAR A FOTO DO ARTIGO	
		if($imgArtigo['name'] == null) {
			if ($pdfArtigo['name'] != null) {
				$artigo = $this->artigos_model->get_pdf($this->input->post('codArtigo'));
				$pdf = $artigo->uploadArtigo;	
				$caminho = "upload/pdf/$pdf";
				unlink($caminho);

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
				$artigo = $this->artigos_model->get_pdf($this->input->post('codArtigo'));
				$pdf = $artigo->uploadArtigo;	
				$caminho = "upload/pdf/$pdf";
				unlink($caminho);

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
			                'allowed_types' => 'gif|jpg|png',//Arrumar essa parte
			                 'file_name' => md5(time()),
			                 'max_size' => '3000');
	                    	 $this->upload->initialize($config);
	                    	if ($this->upload->do_upload('imgArtigo')){
		                    	$data = array(
									'titulo' => $this->input->post('titulo'),
									'corpo' => $this->input->post('corpo'),
									'imgArtigo' => $config['file_name'].".".$ponto_img,
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
		            'allowed_types' => 'gif|jpg|png',//Arrumar essa parte
		            'file_name' => md5(time()),
		            'max_size' => '3000');
		            $this->load->library('upload');
		            $this->upload->initialize($config);
	            if ($this->upload->do_upload('imgArtigo')){
		            $data = array(
						'titulo' => $this->input->post('titulo'),
						'corpo' => $this->input->post('corpo'),
						'imgArtigo' => $config['file_name'].".".$ponto_img,
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

	public function artigo_delete_img($codArtigo){
		$artigo = $this->artigos_model->get_img($codArtigo);
		$img = $artigo->imgArtigo;	
		$caminho = "upload/artigos/$img";
		$this->artigos_model->delete_img($codArtigo);
		echo json_encode(array("status" => TRUE));
		unlink($caminho);
	}

	public function artigo_delete_pdf($codArtigo){
		$artigo = $this->artigos_model->get_pdf($codArtigo);
		$pdf = $artigo->uploadArtigo;	
		$caminho = "upload/pdf/$pdf";
		$this->artigos_model->delete_pdf($codArtigo);
		echo json_encode(array("status" => TRUE));
		unlink($caminho);
	}

	public function artigo_delete($codArtigo)
	{
		$artigo_img = $this->artigos_model->get_img($codArtigo);
		$artigo_pdf = $this->artigos_model->get_pdf($codArtigo);
		if (isset($artigo_img->imgArtigo)) {
			$img = $artigo_img->imgArtigo;	
			$caminho = "upload/artigos/$img";
			unlink($caminho);
		}

		if (isset($artigo_pdf->uploadArtigo)) {
			$pdf = $artigo_pdf->uploadArtigo;
			$caminho = "upload/pdf/$pdf";
			unlink($caminho);
		}
		$this->comentarios_model->delete_all_artigos($codArtigo);
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
        $teste = 1;
        
        if (isset($_SESSION['alunos']) == TRUE ) {
	        	if ($analise->alunos_codAluno == null) {
	        	$artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
	        	$artigo['comentarios'] = $this->comentarios_model->comentarios_listar($codArtigo);
	        	$artigo['comentarios_professor'] = $this->comentarios_model->comentarios_listar_professor($codArtigo);
	        	$artigo['aluno'] = $this->aluno_model->get_by_id($_SESSION['alunos']);
	        
        		$this->load->view('artigo_page', $artigo);
	        }if($analise->alunos_codAluno != null){
	        	//ALUNO
	        	$artigo['perfil'] = $this->artigos_model->get_by_id_aluno($codArtigo);
	        	$artigo['comentarios'] = $this->comentarios_model->comentarios_listar($codArtigo);
	        	$artigo['comentarios_professor'] = $this->comentarios_model->comentarios_listar_professor($codArtigo);
	        	$artigo['aluno'] = $this->aluno_model->get_by_id($_SESSION['alunos']);
	        	 $this->load->view('artigo_page', $artigo);
	        }
	    }if(isset($_SESSION['professores']) == TRUE){
	        	if ($analise->alunos_codAluno == null) {
	        	//PROFESSOR
	        	//echo "professor";
	        	$artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
	        	$artigo['comentarios'] = $this->comentarios_model->comentarios_listar($codArtigo);
	        	$artigo['comentarios_professor'] = $this->comentarios_model->comentarios_listar_professor($codArtigo);
	        	$artigo['professor'] = $this->professor_model->get_by_id($_SESSION['professores']);
        		$this->load->view('artigo_page', $artigo);
	        }if($analise->alunos_codAluno != null){
	        	//ALUNO
	        	 $artigo['perfil'] = $this->artigos_model->get_by_id_aluno($codArtigo);
	        	 $artigo['comentarios'] = $this->comentarios_model->comentarios_listar($codArtigo);
	        	$artigo['comentarios_professor'] = $this->comentarios_model->comentarios_listar_professor($codArtigo);
	        	$artigo['comentarios'] = $this->comentarios_model->comentarios_listar($codArtigo);
	        	$artigo['professor'] = $this->professor_model->get_by_id($_SESSION['professores']);
	        	 $this->load->view('artigo_page', $artigo);
	        }
	    }elseif(isset($_SESSION['professores']) == FALSE && isset($_SESSION['alunos']) == FALSE){
        	if ($analise->alunos_codAluno == null) {
	        	//PROFESSOR
	        	//echo "professor";
	        	$artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
	        	$artigo['comentarios'] = $this->comentarios_model->comentarios_listar($codArtigo);
	        	$artigo['comentarios_professor'] = $this->comentarios_model->comentarios_listar_professor($codArtigo);
        		$this->load->view('artigo_page', $artigo);
	        }if($analise->alunos_codAluno != null){
	        	//ALUNO
	        	$artigo['perfil'] = $this->artigos_model->get_by_id_aluno($codArtigo);
	        	$artigo['comentarios'] = $this->comentarios_model->comentarios_listar($codArtigo);
	        	$artigo['comentarios_professor'] = $this->comentarios_model->comentarios_listar_professor($codArtigo);
	        	$this->load->view('artigo_page', $artigo);
	        }
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





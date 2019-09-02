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
    	$config['base_url'] = base_url('artigos/artigos_listar');
    	$config['total_rows'] = $this->artigos_model->get_count();
		$config ["per_page"] = 2;
        $config ["uri_segment"] = 1;
		
		 $this->pagination->initialize($config);

        $page = ($this->uri->segment(1))? $this->uri->segment(1):0;

        $data["links"] = $this->pagination->create_links();

        $data['artigos'] = $this->artigos_model->get_all_artigos($config["per_page"], $page);

        $this-> load->view('artigos_view', $data);
    }

	public function artigo_add()
	{
		$data = array(
		'titulo' => $this->input->post('titulo'),
		'corpo' => $this->input->post('corpo'),
		'imgArtigo' => $this->input->post('imgArtigo')
		);

		
		$insert = $this->artigos_model->artigo_add($data);
		//redirect('home/artigo_view');
		$this->db->where('titulo', $data['titulo']);
           $this->db->where('corpo', $data['corpo']);
            $query = $this->db->get('artigos');

            if ($query->num_rows() == 1){
                $artigo = $query->row();
                $this->session->set_userdata("artigos", $artigo->titulo);
                $codArtigo = $this->artigos_model->get_by_login($titulo, $corpo);
                $url = "?codArtigo=".$artigo->codArtigo;
               redirect ("artigos/artigo_page/$url");
                
            }else{
                redirect('home/login_home');
            }
		
	}

	public function ajax_edit($codArtigo)
	{
		$data = $this->artigos_model->get_by_id($codArtigo);
		echo json_encode($data);
	}

	public function artigo_update()
	{
		$data = array(
		'titulo' => $this->input->post('titulo'),
		'corpo' => $this->input->post('corpo')			
		);
		$this->artigos_model->artigo_update(array('codArtigo' => $this->input->post('codArtigo')), $data);

		echo json_encode(array("status" => TRUE));
	}

	public function artigo_delete($codArtigo)
	{
		$this->artigos_model->delete_by_id($codArtigo);
		echo json_encode(array("status" => TRUE));
	}

	public function artigo_page(){
        $codArtigo = $this->input->get('codArtigo');
        $artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
        $this->load->view('artigo_page', $artigo);
        print_r($artigo);
    }

    public function artigo_editar(){
        $codArtigo = $this->input->get('codArtigo');
        $artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
        $this->load->view('artigo_editar', $artigo);
        print_r($artigo);
    }
	

}





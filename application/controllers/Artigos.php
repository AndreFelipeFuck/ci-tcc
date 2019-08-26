<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artigos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('artigos_model');
	}

	public function index()
    {
    	$professor = $this->session->userdata("professores");
        if (empty($professor)) {
            redirect("home/login_home");
        }

        $data['artigos'] = $this->artigos_model->get_all_artigos();
        $this->load->view('artigos_view', $data);
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
		$data = $this->artigo_model->get_by_id($codArtigo);
		echo json_encode($data);
	}

	public function artigo_update()
	{
		$data = array(
		'titulo' => $this->input->post('titulo'),
		'corpo' => $this->input->post('corpo')			
		);
		$this->artigo_model->artigo_update(array('codArtigo' => $this->input->post('codArtigo')), $data);

		echo json_encode(array("status" => TRUE));
	}

	public function artigo_delete($codArtigo)
	{
		$this->artigo_model->delete_by_id($codArtigo);
		echo json_encode(array("status" => TRUE));
	}

	public function artigo_page(){
        $codArtigo = $this->input->get('codArtigo');
        $artigo['perfil'] = $this->artigos_model->get_by_id($codArtigo);
        $this->load->view('artigo_page', $artigo);
        print_r($artigo);
    }
	

}





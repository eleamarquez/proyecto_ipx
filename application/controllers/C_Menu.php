<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Menu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['page'] = 'Menu/blank.php';
$this->load->view('Menu/Vmenu', $data + array('error' => ' ' ));  
	}


	public function usuarios()

 {
  if (!isset($this->session->cedula)) {
    redirect('Start', 'refresh');
  }else{
  	//$this->load->model('Encuesta_model');
  	//$data['encuesta'] = $this->Encuesta_model ->get_encuesta();  
   $data['page'] = 'Usuarios/Vusuarios';
$this->load->view('Menu/Vmenu', $data + array('error' => ' ' ));  
  }

}

public function clientes()

 {
  if (!isset($this->session->cedula)) {
    redirect('Start', 'refresh');
  }else{
  	//$this->load->model('Encuesta_model');
  	//$data['encuesta'] = $this->Encuesta_model ->get_encuesta();  
   $data['page'] = 'Clientes/Vclientes';
$this->load->view('Menu/Vmenu', $data + array('error' => ' ' ));  
  }

}

}

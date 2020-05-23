<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('encrypt');
	}

	public function index()
	{
		$this->load->view('Login/Vlogin');
	}

	 public function LoginUser()
    {
        $this->load->model('User_model');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');
        if ($this->form_validation->run() == false) {
        $this->load->view('Login/Vlogin');
        } else {

            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $options = array("cost" => 4);
            $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);
            $checkEmail = $this->User_model->checkDuplicate($email);

            if ($checkEmail == 1) {

                $getUserDetails = $this->User_model->userExist($email);

                if (password_verify($password, $getUserDetails['password'])) {

                    $this->session->set_userdata($getUserDetails);
                    $estado = $this->session->estado;
                    //print_r($estado);

                    if ($estado == '0') {

                        $data['errorMsg'] = "El Usuario se encuentra Inactivo, verifica";

                        $this->load->view('Login/Vlogin', $data);

                    } else {


                        redirect('C_Menu', 'refresh');

                    }

                } else {

                    $data['errorMsg'] = "El email o la contraseña estan errados, verifica";

                    $this->load->view('Login/Vlogin', $data);

                }

            } else {

                $data['errorMsg'] = 'Usuario no existe';

                $this->load->view('Login/Vlogin', $data);

            }

        }

    }

 
    public function logout()
    {

        $this->session->sess_destroy();

        redirect('Login', 'refresh');
        

        //  redirect('http://www.qrd.com.co/logout.php', 'refresh');

    }

}

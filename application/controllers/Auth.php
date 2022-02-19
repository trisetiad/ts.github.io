<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data['partial'] = 'login';
		$this->load->view('template', $data);
	}
    public function login()
    {
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == false){
            //jika validasi ada yang salah
			$data['partial'] = 'login';
			$this->load->view('template', $data);
		}else{
            //jika validasi benar 
				$email= $this->input->post('email');
				$password= $this->input->post('password');

			$checkLogin = $this->UsersModel->login($email,$password)->row();
            if(!empty($checkLogin)){
                $userdata = [
                    'id' => $checkLogin->id,
                    'nama' => $checkLogin->nama,
                    'email' => $checkLogin->email,
                    'status_login' => TRUE,
                ];
                $this->session->set_userdata($userdata);
                redirect('users');
            }else{
                redirect('auth');
            }

        }
    }
        public function logout(){
            $this->session->sess_destroy();
            redirect('auth');
        } 
    
}

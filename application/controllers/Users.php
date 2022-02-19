<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status_login') == FALSE) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['list_data'] = $this->UsersModel->get_all()->result();
		$data['partial'] = 'users_page/list';
		$this->load->view('template', $data);
	}

	public function form()
	{
		$data['partial'] = 'users_page/form';
		$this->load->view('template', $data);
	}

	public function save(){
		$this->form_validation->set_rules('nama', 'Nama', 'required',['required'=> 'Nama Harus Diisi']);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false){
			$data['partial'] = 'user_page/form';
			$this->load->view('template', $data);
		}else{
			$param=[
				'nama'=> $this->input->post('nama'),
				'email'=> $this->input->post('email'),
				'password'=> MD5($this->input->post('password')),
			];
			$this->UsersModel->insert($param);
			redirect('users');
		}
	}

public function form_update($id)
{
	$data['detail_data'] = $this->UsersModel->get_detail($id)->row();
	$data['partial'] =  'users_page/form_update';
	$this->load->view('template', $data);

}

public function update()
{
		$this->form_validation->set_rules('nama', 'Nama', 'required',['required'=> 'Nama Harus Diisi']);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$id = $this->input->post('id');
		if ($this->form_validation->run() == false){
			$data['detail_data'] = $this->UsersModel->get_detail($id)->row();
			$data['partial'] = 'user_page/form_update';
			$this->load->view('template', $data);
		}else{
		$param=[
			'nama'=> $this->input->post('nama'),
			'email'=> $this->input->post('email'),
		];
		$this->UsersModel->update($id, $param);
		redirect('users');
		}
	}
public function delete($id){
	$this->UsersModel->delete($id);
	redirect('users');
}

}

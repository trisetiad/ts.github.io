<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shopping extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status_login') == FALSE) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['list_data'] = $this->shoppingModel->get_all()->result();
		$data['partial'] = 'shopping_page/list';
		$this->load->view('template', $data);
	}

	public function form()
	{
		$data['users'] = $this->UsersModel->get_all()->result();
		$data['partial'] = 'shopping_page/form';
		$this->load->view('template', $data);
	}
	
	public function save()
{
		$this->form_validation->set_rules('Id', 'Id', 'required|integer');
		$this->form_validation->set_rules('Nama', 'Nama', 'required');
		$this->form_validation->set_rules('CreatedDate', 'CreatedDate', 'required');
		if ($this->form_validation->run() == false){
			$data['partial'] = 'shopping_page/form';
			$this->load->view('template', $data);
		}else{
			$param=[
				'Id'=> $this->input->post('id'),
				'Nama'=> $this->input->post('nama'),
				'CreatedDate'=> $this->input->post('createddate'),	
			];
			$this->shoppingModel->insert($param);
			redirect('shopping');
		}
	}

public function shopping_update($id){
	$data['users'] = $this->UsersModel->get_all()->result();
	$data['detail_data'] = $this->shoppingModel->get_detail($id)->row();
	$data['partial'] =  'shopping_page/shopping_update';
	$this->load->view('template', $data);

}

public function update()
{
		$this->form_validation->set_rules('user_id', 'User_id', 'required|integer');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('createddate', 'CreatedDate', 'required');
		$id = $this->input->post('id');
		if ($this->form_validation->run() == false){
			$data['partial'] = 'shopping_page/shopping_update';
			$this->load->view('template', $data);
		}else{
			$param=[
				'Id'=> $this->input->post('id'),
				'Nama'=> $this->input->post('nama'),
				'CreatedDate'=> $this->input->post('createddate'),
			];
		$this->shoppingModel->update($id, $param);
		redirect('shopping');
	}
}

public function delete($id){
	$this->shoppingModel->delete($id);
	redirect('shopping');
	}
}
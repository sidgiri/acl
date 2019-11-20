<?php
class User extends CI_Controller{
	function create(){
		$this->load->model('User');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('role_id','Role','required');



		if ($this->form_validation->run() == false){
			$this->load->view('create');
		}else{
			//save user to database
			$formArray =array();
			$formArray['name']=$this->input->post('name');
			$formArray['password']=$this->input->post('password');

			$this->User->create($formArray);
			$this->session->set_flashdata('success','record added successfully');
			redirect(base_url().'user/');
		}



	}



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	// read_data
	public function index()
	{
		
        $this->load->view('templates/header');
        $this->load->model('crud_model');
       $data['reg_data']=$this->crud_model->getAllData();
		$this->load->view('crud_view',$data);
    }
    
    // insert data
    public function insertData(){
		$this->form_validation->set_rules('fullname','full name','trim|required');
		$this->form_validation->set_rules('dob','date of birth','trim|required');
        $this->form_validation->set_rules('gender','gender','trim|required');
        $this->form_validation->set_rules('pob','place of birth','trim|required');
		$this->form_validation->set_rules('fname','father name','trim|required');
		$this->form_validation->set_rules('mname','mother name','trim|required');
		$this->form_validation->set_rules('peraddr','permanent address','trim|required');
		$this->form_validation->set_rules('preaddr','present address','trim|required');
		$this->form_validation->set_rules('monumber','mobile number','trim|required');

		if($this->form_validation->run()==false){

			$data_error=[
				'error'=>validation_errors()
			];

			$this->session->set_flashdata($data_error);
		}
		else{
			$this->load->model('crud_model');
			$result=$this->crud_model->insertDatta([               
				'full_name'=>$this->input->post('fullname'),
				'd_o_b'=>$this->input->post('dob'),
                'gender'=>$this->input->post('gender'),
                'p_o_b'=>$this->input->post('pob'),
				'f_name'=>$this->input->post('fname')  ,
				'm_name'=>$this->input->post('mname'),
				' permanent_addr'=>$this->input->post('peraddr'),
				'present_addr'=>$this->input->post('preaddr'),
				'mo_number'=>$this->input->post('monumber')
			]);
			if($result){
				$this->session->set_flashdata('inserted','Data has been added!!');
			}
		}
		redirect('crud');
	}
	
	// public function deleteData($si){
	// 	$this->load->model('crud_model');
	// 	$result=$this->crud_model->deleteItem($si);
	// 	if($result==true){
	// 		$this->session->set_flashdata('deleted','Data has been deleted!!');
	// 	}
	// 	redirect('crud');
	// }


	public function editData($si){
		$this->load->view('templates/header');
		$this->load->model('crud_model');
		$data['singleData']=$this->crud_model->getsingleData($si);
		$this->load->view('edit_view',$data);
		$this->load->view('templates/footer');
	}

	public function update($si){
		$this->form_validation->set_rules('fullname','full name','trim|required');
		$this->form_validation->set_rules('dob','date of birth','trim|required');
        $this->form_validation->set_rules('gender','gender','trim|required');
        $this->form_validation->set_rules('pob','place of birth','trim|required');
		$this->form_validation->set_rules('fname','father name','trim|required');
		$this->form_validation->set_rules('mname','mother name','trim|required');
		$this->form_validation->set_rules('peraddr','permanent address','trim|required');
		$this->form_validation->set_rules('preaddr','present address','trim|required');
		$this->form_validation->set_rules('monumber','mobile number','trim|required');

		if($this->form_validation->run()==false){

			$data_error=[
				'error'=>validation_errors()
			];

			$this->session->set_flashdata($data_error);
		}
		else{
			$this->load->model('crud_model');
			$result=$this->crud_model->updateDatta([
				'full_name'=>$this->input->post('fullname'),
				'd_o_b'=>$this->input->post('dob'),
                'gender'=>$this->input->post('gender'),
                'p_o_b'=>$this->input->post('pob'),
				'f_name'=>$this->input->post('fname')  ,
				'm_name'=>$this->input->post('mname'),
				' permanent_addr'=>$this->input->post('peraddr'),
				'present_addr'=>$this->input->post('preaddr'),
				'mo_number'=>$this->input->post('monumber')

			], $si);
			if($result){
				$this->session->set_flashdata('updated','Data has been updated!!');
			}
		}
		redirect('crud');
	}
}

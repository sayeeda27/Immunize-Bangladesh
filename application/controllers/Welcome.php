<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	   public function __construct()
	    {
			parent::__construct();
			if($this->session->userdata('id_user'))
				{
				redirect('private_area');
				}
	  	    $this->load->library('session');
			$this->load->library('encryption');
			$this->load->model('Regi_model');

	    }
	
	public function index()
	{
		
		 $this->load->view('templates/header');

		 $this->load->view('reg-log');
		 $this->load->view('templates/footer');
		
	}

	 function validation(){
		$this->form_validation->set_rules('user_name','Name','required|trim');
		$this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email|is_unique[tbl_user.us_email]');
		$this->form_validation->set_rules('user_password','Password','required');
		if($this->form_validation->run()){
			  $verification_key=md5(rand());
			  $encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));
			  $data=array(
				  'us_name'=> $this->input->post('user_name'),
				  'us_email'=> $this->input->post('user_email'),
				  'us_password'=> $encrypted_password,
				  'us_verification_key'=>$verification_key
			  );
			  $id=$this->Regi_model->insert($data);
			  if($id>0){
				  $subject="please verify email for login";
				  $message="<p>Hi ".$this->input->post('user_name')."</p>
				  <p>This is email verification mail from codeigniter login register system.For complete registration and login into system,
				  first you want to verify your email by click this <a href='".base_url()."Welcome/verify_email/".$verification_key."'>link</a></p>
				  <p>once you click this link your email will be varified and you can login into system.</p>
				  <p>Thanks</p>
				  ";

				$config = array(
					'protocol'  => 'smtp',
					'smtp_host' => 'smtp.gmail.com',
					'smtp_port' => 587, //if 80 dosenot work use 24 or 21
					'smtp_user'  => 'chowdhurysayeda05@gmail.com',  //give your user mail from which mail will be sent
					 'smtp_pass'  => 'sayeda_05',  // smtp_user password
					 '_smtp_auth' => true,
					 'smtp_crypto' => 'tls',
					 'protocol' => 'smtp',
					'mailtype'  => 'html', 
					'charset'    => 'iso-8859-1',
								  'wordwrap'   => TRUE
				   );
				   $this->load->library('email', $config);
				   $this->email->set_newline("\r\n");
				   $this->email->from('chowdhurysayeda05@gmail.com');  //same email u use for smtp_user 
				   $this->email->to($this->input->post('user_email'));
				   $this->email->subject($subject);
				   $this->email->message($message);
					
				   if($this->email->send())
				   {
					$this->session->set_flashdata('signup_message', 'Check in your email for email verification mail');
					$this->session->flashdata('signup_message');
					redirect('welcome');
			   
				   }
				   else{
					 echo "mail not send";
				   }
				} 


				 
			  }
		
		else{
			$this->index();
		}
	}
	function verify_email(){
		if($this->uri->segment(3))
		{
			$verification_key=$this->uri->segment(3);
			//print_r($verification_key);
			if($this->Regi_model->verify_email($verification_key))
			{
				$data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'Login">here</a></h1>';
			}
			else{
				$data['message']='<h1 style="align:center;">Invalid Link</h1>';
			}
			$this->load->view('verification', $data);
		}
	}
	
}

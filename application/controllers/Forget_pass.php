<?php 
class Forget_pass extends CI_Controller 
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
		$this->load->library('session');
		/*load Model*/
		//$this->load->library('email', NULL, 'ci_email');
		$this->load->library('encryption');
	}
	
   public function forgot_pass()
	{
		$this->load->view('templates/header');
		$this->load->view('forgetpass');
	

	}
	public function resetlink(){
		$email=$this->input->post('user_email');
		$result=$this->db->query("SELECT * FROM tbl_user WHERE us_email='".$email."'")->result_array();
		if(count($result)>0){
			  
			  $tokan= rand(1000,9999);
			  $this->db->query("update tbl_user set us_password='".$tokan."' where us_email='".$email."' ");
			  $message="please click on password reset link ,<br> <a href='".base_url('Forget_pass/reset?tokan=').$tokan."'>Reset Password</a>";
			  //$this->Email($email,'Reset password link','');
			  //$this->ci_email->from('chowdhurysayeda05@gmail.com','John Q Public');
			  //$this->ci_email->to($email,'Reset password link','');
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
			    $this->email->from('chowdhurysayeda05@gmail.com', 'Your Name');
				$this->email->to($email);
				
				$this->email->subject('Reset password link');
				$this->email->message($message);
				if($this->email->send()){
					//var_dump($this->session);
					$this->session->set_flashdata('confirmation_message', 'Check in your email for reset password');
					$this->session->flashdata('confirmation_message');
					redirect(base_url('Forget_pass/forgot_pass'));
				}

		}
		else{
		   
			$this->session->set_flashdata('message',"Email not registered");
			redirect(base_url('Forget_pass/forgot_pass'));
		}
	}
	public function reset(){
		$data['tokan']=$this->input->get('tokan');
		$_SESSION['tokan']=$data['tokan'];
		$this->load->view('templates/header');
		$this->load->view('resetpass');
	}
	public function updatepass(){
		// $_SESSION['tokan'];
		$data=$this->input->post();
		if($data['user_password']==$data['us_password']){
	
			$encrypted_password = $this->encryption->encrypt($data['user_password']);
			$this->db->query("UPDATE tbl_user SET us_password='".$encrypted_password."' WHERE id_user='".$data['userid']."'");
			redirect('login');
		}
	}
	            
}
?>
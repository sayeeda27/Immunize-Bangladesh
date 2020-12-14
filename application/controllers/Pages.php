<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function home()
	{
        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('feature');
        $this->load->view('service');
        $this->load->view('vaccine');
       // $this->load->view('reg');
        $this->load->view('news');
        $this->load->view('bg_image');
        $this->load->view('templates/footer');
		
	}
	public function feature()
	{
        $this->load->view('templates/header');
        $this->load->view('feature');
        $this->load->view('templates/footer');	
       }
    public function service()
	{
        $this->load->view('templates/header');
        $this->load->view('service');
        $this->load->view('templates/footer');	
        }
        public function viewservice()
	{
        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('view_service');
        $this->load->view('templates/footer');	
        }
        public function news()
	{
        $this->load->view('templates/header');
        $this->load->view('news');
        $this->load->view('templates/footer');	
        }
        public function viewnews()
	{
        $this->load->view('templates/header');
        $this->load->view('view_news');
        $this->load->view('templates/footer');	
        }
        public function alert()
	{
                $this->load->view('templates/header');
                $this->load->view('alert');
                $this->load->view('templates/footer');	
        }
        public function regi()
	{
          $this->load->view('templates/header');
         $this->load->view('reg');
        $this->load->view('templates/footer');
        }
        public function vaccine()
	{
          $this->load->view('templates/header');
         $this->load->view('vaccine');
         $this->load->view('templates/footer');
       	
	}
}

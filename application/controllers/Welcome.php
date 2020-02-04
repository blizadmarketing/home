<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	

	public function index()
	{
		$data['title'] = 'home';

		$this->load->view('templates/header', $data);
		$this->load->view('index', $data);
		$this->load->view('templates/footer', $data);
	}

		public function about(){
		$data ['page'] = 'about';
		$this->load->view('templates/header', $data);
		$this->load->view('about', $data);
		$this->load->view('templates/footer', $data);
		}

		public function service(){
		$data ['page'] = 'services';
		$this->load->view('templates/header', $data);
		$this->load->view('service', $data);
		$this->load->view('templates/footer', $data);
		}

		public function portfolio(){
		$data ['page'] = 'portfolio';
		$this->load->view('templates/header', $data);
		$this->load->view('portfolio', $data);
		$this->load->view('templates/footer', $data);
		}

		public function contact(){
		$data ['page'] = 'contact';
		$this->load->view('templates/header', $data);
		$this->load->view('contact', $data);
		$this->load->view('templates/footer', $data);
		}
	}
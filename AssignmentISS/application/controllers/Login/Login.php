<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->config->load();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index(){
		$this->load->view('Login/index');
	}
	
	public function process(){
		if(isset($_POST)){
			session_start();
			$userName = isset($_POST["username"])?$_POST["username"]:"";
			$password = isset($_POST["password"])?$_POST["password"]:"";
			
			$_SESSION["username"] = $userName;
			$_SESSION["password"] = $password;
			//check user name and password here
			
			//load main view based on username
			$usernamePrefix = substr($userName, 0, 2);
			switch ($usernamePrefix){
				//sinh vien
				case "sv":
					$data["type"] = 0;
					$this->load->view("Student/index", $data);
					break;
				//nguoi than
				case "nt":
					$data["type"] = 1;
					$this->load->view("Relative/index", $data);
					break;
				//gv
				case "gv":
					$data["type"] = 2;
					$this->load->view("Teacher/index", $data);
					break;
				//gvcn
				case "cn":
					$data["type"] = 3;
					$this->load->view("MainTeacher/index", $data);
					break;
				//cnbm
				case "bm":
					$data["type"] = 4;
					$this->load->view("Subject/index", $data);
					break;
				//truong khoa
				case "tk":
					$data["type"] = 5;
					$this->load->view("Faculity/index", $data);
					break;
				//can bo pdt
				case "cb":
					$data["type"] = 6;
					$this->load->view("Elearning/index", $data);
					break;
				//
				default:
					$this->session->set_flashdata('Error', 'The information you entered not correct');
					redirect(base_url()."index.php/Login/Login/index");
					break;
			}
		}
	}
}
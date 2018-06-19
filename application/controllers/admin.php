<?php
class admin extends MY_Controller
{
	public function welcome()
	{
			
		$this->load->model('loginmodel','ar');
		$articles=$this->ar->articlelist();
		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}
	public function adduser(){

	}
	public function edituser(){
		
	}
	
	public function deluser(){
		
	}
	public function __construct() {
		parent::__construct();
		if( ! $this->session->userdata('id') )
			return redirect('login'); 
		
	}	
	public function logout() {
		$this->session->unset_userdata('id');
		return redirect('login');
	}
	public function sendemail()
	{
		$this->form_validation->set_rules('uname','username','required|alpha');
		$this->form_validation->set_rules('pass','password','required|max_length[12]');
		$this->form_validation->set_rules('fname','firstname','required|alpha');
		$this->form_validation->set_rules('lname','lastname','required|alpha');
		$this->form_validation->set_rules('email','email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()) {
			$this->load->library('email');
			$this->email->from(set_value('email'),set_value('fname'));
			$this->email->to("er.er.prachisharma10@gmail.com");
			$this->email->subject("Registration greeting..");
			$this->email->message("Thank you for registration");
			$this->email->set_newline("\r\n");
			$this->email->send();
			if(!$this->email->send()){
				show_error($this->email->print_debugger());
				}
			else {
				echo"Your email has been sent";
			}
		}
		else {
			$this->load->view('admin/register');
		}
	}
	public function register()
	{
		$this->load->view('admin/register');
	}
}
?>
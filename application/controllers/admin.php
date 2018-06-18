<?php
class admin extends MY_Controller
{
	public function login() {
		$this->form_validation->set_rules('uname','username','required|alpha');
		$this->form_validation->set_rules('pass','password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$login_id=$this->loginmodel->isvalidate($uname,$pass);
			if($login_id){
				$this->session->set_userdata('id',$login_id);
				return redirect('admin/welcome');
			}
			else{
				echo "detail not matched";
			}
		}
		else{
			$this->load->view('admin/login');
		}

	}


	public function welcome()
	{
		if( ! $this->session->userdata('id') )
			return redirect('admin/login'); 	
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

	public function logout() {
		$this->session->unset_userdata('id');
		return redirect('admin/login');
	}
	
	/*public function __construct() {
		parent::__construct();
		if( ! $this->session->userdata('id') )
			return redirect('admin/login'); 
		
	}	*/

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
<?php
class Auth extends CI_Controller {

	public function index()
	{
		$pass = htmlspecialchars($this->input->post('pass'));
		if ($pass == 'b1s4411d') {
			
		} else {
			$this->load->view('password');		
		}
	}
}
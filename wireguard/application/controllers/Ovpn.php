<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ovpn extends CI_Controller {

	public function index()
	{
		$pass = htmlspecialchars($this->input->post('pass'));
			$name = htmlspecialchars($this->input->post('name', True));
			$name = str_replace(" ", "", $name);
			$option = htmlspecialchars($this->input->post('action', True));
		if ($pass == 'b1s4411d') {
			
			if ($name) {
				$data = $this->db->get_where('wireguard', [ 'name' => $name ])->row_array();
				if ($data) {
					$title['msg'] = '<div class="badge badge-danger">Name VPN Wireguard Exists !</div>';
					$this->load->view('create', $title);
				} else {
					$insert = [
						'name' => $name,
						'action' => 1
					];
					$this->db->insert('wireguard', $insert);
					$title['msg'] = '<a class="badge badge-success" href="data/'.$name.'.conf">Get File</a>';
					$this->load->view('create', $title);
				}
			} else {
				$title['msg'] = 'Name Not Exists !';
				$this->load->view('create', $title);
			}


		} else {
			$title['msg'] = '';
			$this->load->view('create', $title);
		}

	}
}

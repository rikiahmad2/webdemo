<?php
class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function test()
	{
		echo "RIKI";
	}

}
?>
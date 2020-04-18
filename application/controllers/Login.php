<?php
/**
 *
 */
class Login extends CI_Controller
{
  // function __construct(argument)
  // public function view($page = 'login')
  // {
  //   // code...
  // }

  public function index()
	{
		// $this->load->view('admin/overview');
    $this->load->view('admin/login');
	}
}

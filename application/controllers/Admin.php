<?php
/**
 *
 */
class Admin extends CI_Controller
{
  // function __construct(argument)
  // public function view($page = 'login')
  // {
  //   // code...
  // }

  public function dashboard()
	{
		// $this->load->view('admin/overview');
    $this->load->view('admin/header');
    $this->load->view('admin/dashboard');
    $this->load->view('admin/footer');
	}

  public function employee()
	{
		// $this->load->view('admin/overview');
    $this->load->view('admin/header');
    $this->load->view('admin/data_employee');
    $this->load->view('admin/footer');
	}

  public function log()
	{
    $this->load->view('admin/login');
	}
}

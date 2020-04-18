<?php

/**
 *
 */
class Form extends CI_Controller
{

  public function index()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/form');
    $this->load->view('admin/footer');
  }

}

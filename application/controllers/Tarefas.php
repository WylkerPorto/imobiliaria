<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->load->vars();
		$this->load->view('header');
		$this->load->view('tarefas/home');
		$this->load->view('footer');
	}
}

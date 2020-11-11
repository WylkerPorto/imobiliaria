<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $dados = [
            'title' => 'imóveis',
        ];
        $this->load->vars($dados);
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
}

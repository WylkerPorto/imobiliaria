<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tipos extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
	    $tipos = $this->tipos_model->find_all();
        $dados = [
            'title' => 'imóveis - Tipos',
            'tipos' => $tipos,
        ];
        $this->load->vars($dados);
		$this->load->view('header');
		$this->load->view('tipos/home');
		$this->load->view('footer');
	}

	public function init()
	{
	    /* Regras de validação */
        $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[4]|max_length[100]|is_unique[tipos.nome]');

        if ($dados_form = $this->input->post()) {
            $dados_form = (object)$dados_form;
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                $dados_ini = [
                    'id' => 0,
                    'nome' => $dados_form->nome,
                ];
                if (!$this->tipos_model->update($dados_ini)) {
                    set_msg('Erro ao inserir dados code:TPINIT');
                }
            }
        }
        $dados = [
            'title' => 'imóveis - Tipos',
        ];
        $this->load->vars($dados);
		$this->load->view('header');
		$this->load->view('tipos/init');
		$this->load->view('footer');
	}

	public function edit($id)
	{
        $tipo = $this->tipos_model->find_all($id)[0];
	    /* Regras de validação */
        $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[4]|max_length[100]');

        if ($dados_form = $this->input->post()) {
            $dados_form = (object)$dados_form;
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                $dados_ini = [
                    'id' => $id,
                    'nome' => $dados_form->nome,
                ];
                if (!$this->tipos_model->update($dados_ini)) {
                    set_msg('Erro ao atualizar dados code:TPINIT');
                }
            }
        }
        $dados = [
            'title' => 'imóveis - Tipos',
            'tipo' => $tipo,

        ];
        $this->load->vars($dados);
		$this->load->view('header');
		$this->load->view('tipos/edit');
		$this->load->view('footer');
	}

    public function get()
    {
        if ($id = $this->input->get('id')) {
            $tipo = (object) $this->tipos_model->find_all($id)[0];
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($tipo));
        } else {
            $this->output->set_status_header(401);
        }
    }
}

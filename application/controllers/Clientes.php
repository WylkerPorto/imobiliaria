<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = [
            'title' => 'Imóveis - Clientes',
            'clientes' => $this->clientes_model->find_all(),
        ];
        $this->load->vars($dados);
        $this->load->view('header');
        $this->load->view('clientes/home');
        $this->load->view('footer');
    }

    public function init()
    {
        /* Regras de validação */
        $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[10]|max_length[150]');
        $this->form_validation->set_rules('cpf', 'cpf', 'trim|integer|required|min_length[11]|max_length[11]|is_unique[clientes.cpf]');
        $this->form_validation->set_rules('rg', 'rg', 'trim|integer|required|min_length[9]|max_length[9]|is_unique[clientes.rg]');
        $this->form_validation->set_rules('telefone', 'telefone', 'trim|integer|required|min_length[10]|max_length[11]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[10]|max_length[150]');
        $this->form_validation->set_rules('cep', 'cep', 'trim|integer|required|min_length[8]|max_length[8]');
        $this->form_validation->set_rules('endereco', 'endereco', 'trim|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('cidade', 'cidade', 'trim|min_length[3]|max_length[200]');
        $this->form_validation->set_rules('estado', 'estado', 'trim|min_length[2]|max_length[200]');
        $this->form_validation->set_rules('bairro', 'bairro', 'trim|min_length[2]|max_length[200]');
        $this->form_validation->set_rules('numero', 'numero', 'trim|integer|required|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('complemento', 'complemento', 'trim|min_length[1]|max_length[45]');

        if ($dados_form = (object)$this->input->post()) {
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                $dados_ini = [
                    'id' => 0,
                    'nome' => $dados_form->nome,
                    'cpf' => $dados_form->cpf,
                    'rg' => $dados_form->rg,
                    'telefone' => $dados_form->telefone,
                    'email' => $dados_form->email,
                    'cep' => $dados_form->cep,
                    'endereco' => $dados_form->endereco,
                    'cidade' => $dados_form->cidade,
                    'estado' => $dados_form->estado,
                    'bairro' => $dados_form->bairro,
                    'numero' => $dados_form->numero,
                    'complemento' => $dados_form->complemento,
                ];
                if (!$this->clientes_model->update($dados_ini)) {
                    set_msg('Erro ao inserir informação code:CINIT');
                }
            }
        }

        $dados = [
            'title' => 'Imóveis - Clientes',
        ];
        $this->load->vars($dados);
        $this->load->view('header');
        $this->load->view('clientes/init');
        $this->load->view('footer');
    }

    public function edit($id)
    {
        $cliet = (object) $this->clientes_model->find_all($id)[0];

        /* Regras de validação */
        $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[10]|max_length[150]');
        $this->form_validation->set_rules('cpf', 'cpf', 'trim|integer|required|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('rg', 'rg', 'trim|integer|required|min_length[9]|max_length[9]');
        $this->form_validation->set_rules('telefone', 'telefone', 'trim|integer|required|min_length[10]|max_length[11]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[10]|max_length[150]');
        $this->form_validation->set_rules('cep', 'cep', 'trim|integer|required|min_length[8]|max_length[8]');
        $this->form_validation->set_rules('endereco', 'endereco', 'trim|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('cidade', 'cidade', 'trim|min_length[3]|max_length[200]');
        $this->form_validation->set_rules('estado', 'estado', 'trim|min_length[2]|max_length[200]');
        $this->form_validation->set_rules('bairro', 'bairro', 'trim|min_length[2]|max_length[200]');
        $this->form_validation->set_rules('numero', 'numero', 'trim|integer|required|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('complemento', 'complemento', 'trim|min_length[1]|max_length[45]');

        if ($dados_form = (object)$this->input->post()) {
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                $dados_ini = [
                    'id' => $id,
                    'nome' => $dados_form->nome,
                    'cpf' => $dados_form->cpf,
                    'rg' => $dados_form->rg,
                    'telefone' => $dados_form->telefone,
                    'email' => $dados_form->email,
                    'cep' => $dados_form->cep,
                    'endereco' => $dados_form->endereco,
                    'cidade' => $dados_form->cidade,
                    'estado' => $dados_form->estado,
                    'bairro' => $dados_form->bairro,
                    'numero' => $dados_form->numero,
                    'complemento' => $dados_form->complemento,
                ];
                if (!$this->clientes_model->update($dados_ini)) {
                    set_msg('Erro ao inserir informação code:CEDIT');
                }
            }
        }

        $dados = [
            'title' => 'Imóveis - Clientes',
            'cliente' => $cliet,
        ];
        $this->load->vars($dados);
        $this->load->view('header');
        $this->load->view('clientes/edit');
        $this->load->view('footer');
    }

    public function get()
    {
        if ($id = $this->input->get('id')) {
            $cliet = (object) $this->clientes_model->find_all($id)[0];
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($cliet));
        } else {
            $this->output->set_status_header(401);
        }
    }
}

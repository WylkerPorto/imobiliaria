<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Imoveis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $imoveis = $this->imoveis_model->find_all();
        if ($imoveis) {
            foreach ($imoveis as $imovel) {
                $imovel->tipo = $this->tipos_model->find_all($imovel->tipo)[0]->nome;
                $imovel->cliente = $this->clientes_model->find_all($imovel->cliente)[0]->nome;
            }
        }
        $dados = [
            'title' => 'Imóveis - Imóvel',
            'imoveis' => $imoveis,
        ];
        $this->load->vars($dados);
        $this->load->view('header');
        $this->load->view('imoveis/home');
        $this->load->view('footer');
    }

    public function init()
    {
        $tipos = $this->tipos_model->find_all();
        $clientes = $this->clientes_model->find_all();

        /* Regras de validação */
        $this->form_validation->set_rules('nome', 'nome', 'trim|min_length[3]|max_length[150]|required');
        $this->form_validation->set_rules('quartos', 'quartos', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('banheiros', 'banheiros', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('terreno', 'terreno', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('salas', 'salas', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('garagens', 'garagens', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('suites', 'suites', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('valor', 'valor', 'trim|min_length[1]|max_length[11]|required');
        $this->form_validation->set_rules('construida', 'construida', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('cep', 'cep', 'trim|min_length[8]|max_length[8]|required');
        $this->form_validation->set_rules('cidade', 'cidade', 'trim|min_length[3]|max_length[200]');
        $this->form_validation->set_rules('estado', 'estado', 'trim|min_length[2]|max_length[200]');
        $this->form_validation->set_rules('endereco', 'endereco', 'trim|min_length[5]|max_length[250]');
        $this->form_validation->set_rules('bairro', 'bairro', 'trim|min_length[3]|max_length[200]');
        $this->form_validation->set_rules('numero', 'numero', 'trim|min_length[1]|max_length[11]|required');
        $this->form_validation->set_rules('complemento', 'complemento', 'trim|min_length[1]|max_length[45]');
        $this->form_validation->set_rules('cliente', 'cliente', 'trim|required');

        if ($dados_form = $this->input->post()) {
            $dados_form = (object)$dados_form;
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                $dados_ini = [
                    'id' => 0,
                    'nome' => $dados_form->nome,
                    'quartos' => $dados_form->quartos,
                    'banheiros' => $dados_form->banheiros,
                    'terreno' => $dados_form->terreno,
                    'salas' => $dados_form->salas,
                    'garagens' => $dados_form->garagens,
                    'suites' => $dados_form->suites,
                    'valor' => $dados_form->valor,
                    'construida' => $dados_form->construida,
                    'cep' => $dados_form->cep,
                    'cidade' => $dados_form->cidade,
                    'estado' => $dados_form->estado,
                    'bairro' => $dados_form->bairro,
                    'endereco' => $dados_form->endereco,
                    'numero' => $dados_form->numero,
                    'complemento' => $dados_form->complemento,
                    'cliente' => $dados_form->cliente,
                    'usuario' => get_sts(false)->id,
                    'tipo' => $dados_form->tipo,
                    'status' => 1,
                ];
                if (!$this->imoveis_model->update($dados_ini)) {
                    set_msg('erro ao inserir dados code:IINIT');
                }
            }
        }

        $dados = [
            'title' => 'Imóveis - Imóvel',
            'tipos' => $tipos,
            'clientes' => $clientes,
        ];
        $this->load->vars($dados);
        $this->load->view('header');
        $this->load->view('imoveis/init');
        $this->load->view('footer');
    }

    public function edit($id)
    {
        $tipos = $this->tipos_model->find_all();
        $clientes = $this->clientes_model->find_all();
        $imovel = $this->imoveis_model->find_all($id)[0];

        /* Regras de validação */
        $this->form_validation->set_rules('nome', 'nome', 'trim|min_length[3]|max_length[150]|required');
        $this->form_validation->set_rules('quartos', 'quartos', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('banheiros', 'banheiros', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('terreno', 'terreno', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('salas', 'salas', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('garagens', 'garagens', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('suites', 'suites', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('valor', 'valor', 'trim|min_length[1]|max_length[11]|required');
        $this->form_validation->set_rules('construida', 'construida', 'trim|min_length[1]|max_length[11]');
        $this->form_validation->set_rules('cep', 'cep', 'trim|min_length[8]|max_length[8]|required');
        $this->form_validation->set_rules('cidade', 'cidade', 'trim|min_length[3]|max_length[200]');
        $this->form_validation->set_rules('estado', 'estado', 'trim|min_length[2]|max_length[200]');
        $this->form_validation->set_rules('endereco', 'endereco', 'trim|min_length[5]|max_length[250]');
        $this->form_validation->set_rules('bairro', 'bairro', 'trim|min_length[3]|max_length[200]');
        $this->form_validation->set_rules('numero', 'numero', 'trim|min_length[1]|max_length[11]|required');
        $this->form_validation->set_rules('complemento', 'complemento', 'trim|min_length[1]|max_length[45]');
        $this->form_validation->set_rules('cliente', 'cliente', 'trim|required');

        if ($dados_form = $this->input->post()) {
            $dados_form = (object)$dados_form;
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                $dados_ini = [
                    'id' => $id,
                    'nome' => $dados_form->nome,
                    'quartos' => $dados_form->quartos,
                    'banheiros' => $dados_form->banheiros,
                    'terreno' => $dados_form->terreno,
                    'salas' => $dados_form->salas,
                    'garagens' => $dados_form->garagens,
                    'suites' => $dados_form->suites,
                    'valor' => $dados_form->valor,
                    'construida' => $dados_form->construida,
                    'cep' => $dados_form->cep,
                    'cidade' => $dados_form->cidade,
                    'estado' => $dados_form->estado,
                    'bairro' => $dados_form->bairro,
                    'endereco' => $dados_form->endereco,
                    'numero' => $dados_form->numero,
                    'complemento' => $dados_form->complemento,
                    'cliente' => $dados_form->cliente,
                    'usuario' => get_sts(false)->id,
                    'tipo' => $dados_form->tipo,
                    'status' => 1,
                ];
                if (!$this->imoveis_model->update($dados_ini)) {
                    set_msg('erro ao inserir dados code:IEDIT');
                }
            }
        }

        $dados = [
            'title' => 'Imóveis - Imóvel',
            'imovel' => $imovel,
            'tipos' => $tipos,
            'clientes' => $clientes,
        ];
        $this->load->vars($dados);
        $this->load->view('header');
        $this->load->view('imoveis/edit');
        $this->load->view('footer');
    }

    public function view($id)
    {
        $dados = [
            'title' => 'Imóveis - Imóvel',
            'imovel' => $this->imoveis_model->find_all($id)[0],
            'fotos' => null,
        ];
        $this->load->vars($dados);
        $this->load->view('header');
        $this->load->view('imoveis/view');
        $this->load->view('footer');
    }

    public function get()
    {
        if ($id = $this->input->get('id')) {
            $imovel = (object) $this->imoveis_model->find_all($id)[0];
            if ($this->input->get('detalhado')) {
                $imovel->cliente = $this->clientes_model->find_all($imovel->cliente)[0]->nome;
                $imovel->tipo = $this->tipos_model->find_all($imovel->tipo)[0]->nome;
            }
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($imovel));
        } else {
            $this->output->set_status_header(401);
        }
    }
}

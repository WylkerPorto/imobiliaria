<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $usuarios = $this->usuarios_model->find_all();
        if ($usuarios) {
            foreach ($usuarios as $usuario) {
                $usuario->senha = false;
            }
        }
        $dados = [
            'title' => 'Imóveis - Usúarios',
            'usuarios' => $usuarios,
        ];
        $this->load->vars($dados);
		$this->load->view('header');
		$this->load->view('usuarios/home');
		$this->load->view('footer');
	}

	public function init()
	{
	    /* Regras de validação */
        $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[3]|max_length[150]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[7]|max_length[50]|is_unique[usuarios.email]');
        $this->form_validation->set_rules('senha', 'senha', 'trim|required|min_length[5]|max_length[200]');
        $this->form_validation->set_rules('telefone', 'telefone', 'trim|min_length[10]|max_length[11]');

        if ($dados_form = $this->input->post()) {
            $dados_form = (object)$dados_form;
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                $dados_ini = [
                    'id' => 0,
                    'nome' => $dados_form->nome,
                    'email' => $dados_form->email,
                    'senha' => password_hash($dados_form->senha, PASSWORD_DEFAULT),
                    'telefone' => $dados_form->telefone,
                    'status' => 1,
                ];
                if (!$this->usuarios_model->update($dados_ini)) {
                    set_msg('Erro ai inserir dados code:UINIT');
                } else {
                    set_msg('Dados inseridos com sucesso');
                }
            }
        }

        $dados = [
            'title' => 'Imóveis - Usúarios',
        ];
        $this->load->vars($dados);
		$this->load->view('header');
		$this->load->view('usuarios/init');
		$this->load->view('footer');
	}

	public function edit($id)
	{
        $usuario = $this->usuarios_model->find_all($id)[0];

	    /* Regras de validação */
        $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[3]|max_length[150]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[7]|max_length[50]');
        $this->form_validation->set_rules('senha', 'senha', 'trim|min_length[5]|max_length[200]');
        $this->form_validation->set_rules('telefone', 'telefone', 'trim|min_length[10]|max_length[11]');

        if ($dados_form = $this->input->post()) {
            $dados_form = (object)$dados_form;
            if ($usuario->email != $dados_form->email) {
                $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[7]|max_length[50]|is_unique[usuarios.email]');
            }
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                $dados_ini = [
                    'id' => $id,
                    'nome' => $dados_form->nome,
                    'email' => $dados_form->email,
                    'senha' => ($dados_form->senha) ? password_hash($dados_form->senha, PASSWORD_DEFAULT) : $usuario->senha,
                    'telefone' => $dados_form->telefone,
                    'status' => 1,
                ];
                if (!$this->usuarios_model->update($dados_ini)) {
                    set_msg('Erro ai inserir dados code:UINIT');
                } else {
                    set_msg('Dados inseridos com sucesso');
                }
            }
        }

        $dados = [
            'title' => 'Imóveis - Usúarios',
            'usuario' => $usuario,
        ];
        $this->load->vars($dados);
		$this->load->view('header');
		$this->load->view('usuarios/edit');
		$this->load->view('footer');
	}

    public function get()
    {
        if ($id = $this->input->get('id')) {
            $usuario = (object) $this->usuarios_model->find_all($id)[0];
            $usuario->senha = null;
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($usuario));
        } else {
            $this->output->set_status_header(401);
        }
    }

    public function login()
    {
        /* Regras de validação */
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('senha', 'senha', 'trim|required');

        if ($dados_form = $this->input->post()) {
            $dados_form = (object)$dados_form;
            if (!$this->form_validation->run($dados_form)) {
                set_msg(validation_errors());
            } else {
                if (!$usuario = $this->usuarios_model->getByEmail($dados_form->email)) {
                    set_msg('Email invalido');
                } else {
                    $usuario = (object)$usuario;
                    if (!password_verify($dados_form->senha, $usuario->senha)) {
                        set_msg('Senha invalida');
                    } else {
                        $session = [
                            'id' => $usuario->id,
                            'nome' => $usuario->nome,
                            'email' => $usuario->email,
                        ];
                        set_sts($session);
                        redirect('painel');
                    }
                }
            }
        }
        $dados = [
            'title' => 'Imóveis - Login',
        ];
        $this->load->vars($dados);
        $this->load->view('header');
        $this->load->view('usuarios/login');
        $this->load->view('footer');
    }

    public function logout()
    {
        del_ses(true);
        redirect('login');
    }
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session', 'form_validation', 'upload');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'file', 'form', 'funcoes');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('clientes_model', 'imoveis_model', 'tarefas_model', 'usuarios_model', 'tipos_model');

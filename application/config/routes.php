<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'usuarios/login';
$route['logout'] = 'usuarios/logout';
$route['cliente'] = 'clientes';
$route['cliente/cinit'] = 'clientes/init';
$route['cliente/cedit/(:num)'] = 'clientes/edit/$1';
$route['cliente/cget']['get'] = 'clientes/get';
$route['usuario'] = 'usuarios';
$route['usuario/uinit'] = 'usuarios/init';
$route['usuario/uedit/(:num)'] = 'usuarios/edit/$1';
$route['usuario/uget']['get'] = 'usuarios/get';
$route['tipo'] = 'tipos';
$route['tipo/tinit'] = 'tipos/init';
$route['tipo/tedit/(:num)'] = 'tipos/edit/$1';
$route['tipo/tget']['get'] = 'tipos/get';
$route['imovel'] = 'imoveis';
$route['imovel/iinit'] = 'imoveis/init';
$route['imovel/iedit/(:num)'] = 'imoveis/edit/$1';
$route['imovel/iview/(:num)'] = 'imoveis/view/$1';
$route['imovel/iget']['get'] = 'imoveis/get';

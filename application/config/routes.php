<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'LoginController';
$route['404_override'] = 'PaginaNaoEncontradaController';
$route['translate_uri_dashes'] = FALSE;

// Rotas Autentificação
$route['usuario']       ='LoginController';
$route['usuario/logar'] ='LoginController/logar';

$route['usuario'] ='UsuarioController';
$route['usuario/adicionar']='UsuarioController/adicionar';
$route['usuario/listar']='UsuarioController/listar';


// Sair
$route['sair'] = 'LogountController/sair';

// Rota Panel adiministrativo
$route['panel'] ='panelController';



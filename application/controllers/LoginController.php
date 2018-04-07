<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('UsuarioModel');
    $this->verifica_login();
  }

  public function verifica_login() {
    if ($this->session->userdata('logado') == TRUE):
      redirect(base_url('/panel'));
    endif;
  }

  public function index() {

    $data['title'] = 'Login';
    $data['author'] = 'Heuder Rodrigues de Sena';
    $data['description'] = 'Tela de Login';
    $this->load->view('backend/LoginView', $data);
  }

  public function logar() {        
    $data['title'] = 'Login';
    $data['author'] = 'Heuder Rodrigues de Sena';
    $data['description'] = 'Tela de Login';

    $this->load->library('form_validation');
    $this->form_validation->set_rules('usuario', 'Usuário', 'required|trim');
    $this->form_validation->set_rules('password', 'Senha', 'required|trim|min_length[6]|max_length[8]');

    if ($this->form_validation->run() == TRUE): 

      $usuario['usuario'] = $this->UsuarioModel->usuarioLogar($this->input->post('usuario'),md5($this->input->post('password')));            
       if(count($usuario['usuario']) == 1):              
         $_SESSION['logado'] = $usuario['usuario'];
         redirect(base_url('panel')); 
       endif;

   else:
    $this->load->view('backend/LoginView', $data);
   endif;
}

}

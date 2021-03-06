<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaNaoEncontradaController extends CI_Controller {

	function __construct() {
        parent::__construct();
        //$this->verifica_login();
        $this->load->model('UsuarioModel');       
        
    }

	public function index()
	{
	
		$data['author'] = 'Heuder Rodrigues de Sena';
        $data['description'] = 'Tela de Login';
        $data['title'] = 'Panel adiminstrativo';   
           
        $data['permissaoAcesso'] = $this->UsuarioModel->verifica_permissao_de_acesso($_SESSION['logado'][0]->id_usuario);
        $this->load->view('backend/template/html-header', $data);
        $this->load->view('errors/PaginaNaoEncontradaView');
        $this->load->view('backend/template/html-footer');			
	}

}

/* End of file PaginaNaoEncontradaController.php */
/* Location: ./application/controllers/PaginaNaoEncontradaController.php */
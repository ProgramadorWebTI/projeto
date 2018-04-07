<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->verifica_login();
		$this->load->model('UsuarioModel');

	}
	public function verifica_login() {
		if ($this->session->userdata('logado') == FALSE):
			redirect(base_url('/'));
		endif;
	}

	public function index()
	{
		$this->load->model('UsuarioModel');  
		$data['permissaoAcesso'] = $this->UsuarioModel->verifica_permissao_de_acesso($_SESSION['logado'][0]->id_usuario);
		$data['author'] = 'Heuder Rodrigues de Sena';
		$data['description'] = 'Tela de Login';
		$data['title'] = 'Panel adiminstrativo';
		$data['info'] = ''; 

		$this->load->view('backend/template/html-header', $data);
		$this->load->view('usuario/adiciona_usuario_view');
		$this->load->view('backend/template/html-footer');
		
	}

	public function adicionar()
	{

		$this->load->library('form_validation');
        $this->form_validation->set_rules('primeiro_usuario', 'Primeiro nome', 'required|trim');
        $this->form_validation->set_rules('segundo_usuario', 'Segundo nome', 'required|trim');
        $this->form_validation->set_rules('logar_usuario', 'Usuário', 'required|trim');
        $this->form_validation->set_rules('senha_usuario', 'Senha', 'required|trim|min_length[6]|max_length[8]');
        $this->form_validation->set_rules('cpf_usuario', 'cpf', 'required|trim|valid_cpf');
        $this->form_validation->set_rules('permissao_usuario', 'Permissão', 'required|trim');
        $this->form_validation->set_rules('estato_usuario', 'Status', 'required|trim');
        
    if ($this->form_validation->run() == TRUE):    	

    	// Recuperando os calores vindo do formulário;
    	$inserir = array(
    		'primeiro_usuario' 			    =>  $this->input->post('primeiro_usuario'),
	    	'segundo_usuario '  			=>  $this->input->post('segundo_usuario'),
	    	'logar_usuario   '              =>  $this->input->post('logar_usuario'),
	    	'senha_usuario   '              =>  md5($this->input->post('senha_usuario')),
	    	'recupera_senha_usuario'        =>  $this->input->post('senha_usuario'),
	    	'cpf_usuario     '		        =>  $this->input->post('cpf_usuario'),
	    	'permissao_usuario	' 		    =>  $this->input->post('permissao_usuario'),
	    	'estato_usuario  '  			=>  $this->input->post('estato_usuario'),
	    	'key_usuario     '  			=>  gerarkey()
    	);

		    	if(count($this->UsuarioModel->cadastrar_novo_usuario($inserir))):
		    		$data['permissaoAcesso'] = $this->UsuarioModel->verifica_permissao_de_acesso($_SESSION['logado'][0]->id_usuario);
					$data['author'] = 'Heuder Rodrigues de Sena';
					$data['description'] = 'Tela de Login';
					$data['title'] = 'Panel adiminstrativo';
					$data['info'] = ''; 

					$this->load->view('backend/template/html-header', $data);
			        $this->load->view('usuario/adiciona_usuario_view');
			        $this->load->view('backend/template/html-footer');

		    		$this->session->set_flashdata('msg', 'cadastrado com successo!');
		    		redirect(base_url('usuario'));
		    	endif;
   


   else:
      	  
		$data['permissaoAcesso'] = $this->UsuarioModel->verifica_permissao_de_acesso($_SESSION['logado'][0]->id_usuario);
		$data['author'] = 'Heuder Rodrigues de Sena';
		$data['description'] = 'Tela de Login';
		$data['title'] = 'Panel adiminstrativo';
		$data['info'] = ''; 

		$this->load->view('backend/template/html-header', $data);
        $this->load->view('usuario/adiciona_usuario_view');
        $this->load->view('backend/template/html-footer');
  endif;
	}


	public function listar()
	{

		$data['permissaoAcesso'] = $this->UsuarioModel->verifica_permissao_de_acesso($_SESSION['logado'][0]->id_usuario);
		$data['usuarios'] = $this->UsuarioModel->listar_todos_usuarios();
		$data['author'] = 'Heuder Rodrigues de Sena';
		$data['description'] = 'Tela de Login';
		$data['title'] = 'Panel adiminstrativo';
		$data['info'] = 'Lista usuario'; 

		$this->load->view('backend/template/html-header', $data);
		$this->load->view('usuario/listar_usuario_view');
		$this->load->view('backend/template/html-footer');
	}

}

/* End of file UsuarioController.php */
/* Location: ./application/controllers/UsuarioController.php */
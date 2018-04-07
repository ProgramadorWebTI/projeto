<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {


     public function cadastrar_novo_usuario($inserir)
     {
        // $primeiro_usuario,$segundo_usuario,$logar_usuario,$senha_usuario,$recupera_senha_usuario,$cpf_usuario,$permissao_usuario,$estato_usuario,$key_usuario,
        $this->db->insert('usuario',$inserir);        
     }



    public function usuarioLogar($usuario, $password) {
        
        $this->db->select('*');
        $this->db->where('logar_usuario', $usuario);
        $this->db->where('senha_usuario', $password);
        $this->db->where('estato_usuario', 1);
        return $this->db->get('usuario')->result();
        
    }
    
    public function verifica_permissao_de_acesso($id_usuario){
        $this->db->select('permissao_usuario');
        $this->db->where('id_usuario',$id_usuario);
        return $this->db->get('usuario')->result();
    }


     public function listar_todos_usuarios(){
         return $this->db->get('usuario')->result();
     }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LogountController extends CI_Controller {

	public function sair() {
		unset($_SESSION['logado']);
		redirect('/');
	}

}

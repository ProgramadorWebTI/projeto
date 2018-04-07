-- ==================================================== --
-- Author: Heuder Rodrigues de Sena
-- E-mail: heuderrodriguesdesena@gmail.com
-- Phone:  (61)9 9302-9884 -whatsapp-
-- ==================================================== --

-- ==================================================== --
-- CRIAR A TABELA DE USUÁRIO ( AUTENTICAÇÃO NO SISTEMA ) --
-- ==================================================== --
-- ` ` --
-- 672354c31e43465f91e17c1ab8abef8df6c01e7b --
CREATE TABLE IF NOT EXISTS `usuario`
(
		`id_usuario` INT(11) AUTO_INCREMENT,
		`primeiro_usuario` VARCHAR(100) NULL,
		`segundo_usuario`  VARCHAR(100) NULL,
		`logar_usuario` VARCHAR(15) NOT NULL,
		`senha_usuario` VARCHAR(255) NOT NULL,
		`recupera_senha_usuario` VARCHAR(255) NOT NULL,
		`cpf_usuario` VARCHAR(30) NULL UNIQUE,
		`estato_usuario` VARCHAR(2) NULL DEFAULT '0' ,
		`permissao_usuario` VARCHAR(2) NULL DEFAULT '0' ,
		`key_usuario` VARCHAR(255) NULL,
		PRIMARY KEY(`id_usuario`)	

)ENGINE=InnoDB DEFAULT COLLATE='utf8_general_ci' AUTO_INCREMENT=2;
-- ********************************************************** --
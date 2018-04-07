<div class="row">
	<form method="post" action="<?php echo site_url('usuario/adicionar'); ?>">
		<div class="panel panel-primary">

			<div class="panel-heading">
				<h3>Adicionar novo usuário</h3>
			</div>	
			<div class="panel-body">

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="primeiro_usuario">Primeiro Nome:</label>
							<input value="<?php echo set_value('primeiro_usuario'); ?>" type="text" class="form-control" name="primeiro_usuario">
							 <?php echo form_error('primeiro_usuario'); ?>
						</div>	
						<div class="col-md-6">
							<label for="segundo_usuario">Segundo Nome:</label>
							<input value="<?php echo set_value('segundo_usuario'); ?>" type="text" class="form-control" name="segundo_usuario">
							 <?php echo form_error('segundo_usuario'); ?>
						</div>
					</div>
					<br> <br>
					<div class="row">
						<div class="col-md-3">
							<label for="logar_usuario">Login:</label>
							<input value="<?php echo set_value('logar_usuario'); ?>" type="text" class="form-control" name="logar_usuario">
							<?php echo form_error('logar_usuario'); ?>
						</div>
						<div class="col-md-3">
							<label for="senha_usuario">Senha:</label>
							<input type="text" class="form-control" name="senha_usuario">
							<?php echo form_error('senha_usuario'); ?>
						</div>
						<div class="col-md-3">
							<label for="cpf_usuario">CPF:</label>
							<input value="<?php echo set_value('cpf_usuario'); ?>" type="text" class="form-control cpf" name="cpf_usuario">
							<?php echo form_error('cpf_usuario'); ?>
						</div>
						<div class="col-md-3">
							<label for="permissao_usuario">Permissão:</label>
							<select name="permissao_usuario" class="form-control">
								<option value="">Selecione uma permissão</option>
								<option value="1">Administrador</option>
								<option value="0">Comum</option>
							</select>
							<?php echo form_error('permissao_usuario'); ?>
						</div>
							
					</div>	
					<br> <br>
					<div class="row">
						<div class="col-md-5">
							<label for="estato_usuario">Status</label>
							<select name="estato_usuario" class="form-control">
								<option value="">Selecione uma ação</option>
								<option value="1">ativo</option>
								<option value="0">inativo</option>
							</select>
							<?php echo form_error('estato_usuario'); ?>
						</div>
					</div>
					<hr>			
				</div>


			</div> <!-- ./panel-body -->
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary pull-right">cadastrar</button>
					</div>
				</div>
			</div>
		</div> <!-- ./panel-defaul -->
	</form>
</div>
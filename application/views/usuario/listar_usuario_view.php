<div class="row">
		
		<table class="table table-bordered table-condensed">
			<tr style="background-color: #003d8b; color: #f1f1f1; font-weight: bold;">
				<td>Nome:</td>
				<td>Login</td>
				<td style="width: 130px;">CPF:</td>
				<td style="width: 100px;">Status:</td>
				<td style="width: 120px;">Permissão:</td>
				<td style="width: 80px;" class="text-center">Ações:</td>
			</tr>
			<?php foreach($usuarios as $user): ?>
			<tr>
				<th><?=$user->primeiro_usuario?> <?=$user->segundo_usuario?></th>
				<th><?=$user->logar_usuario?></th>
				<th><?=$user->cpf_usuario?></th>
				<th>
					<?php 
						if($user->estato_usuario == 1):
							echo '<div class="label label-xs label-success">Ativo</div>';
						else:
							echo '<div class="label label-danger">Inativo</div>';
						endif;
					?>		
				</th>
				<th>
					<?php 
						if($user->permissao_usuario == 1):
							echo "Administrador";
						else:
							echo "Funcionário";
						endif;
					?>				
				</th>
				<th style="font-size: 16px;" class="text-center">
					<a href="">
						<i style="color:green" class="fa fa-check-square-o"></i>
					</a>
					<a href="<?php echo site_url('usuario/ver/'); ?><?php echo $user->key_usuario ?>"><i style="color:red" class="fa fa-bitbucket"></i></a>
				</th>
			</tr>	
			<?php endforeach; ?>	
		</table>
	

</div>
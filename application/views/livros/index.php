<h1>Lista de Livros</h1>

		<table border="2" >
			<h2><center>Livros</center></h2>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($livros as $row): ?>
						<tr>
							<td><?= $row['nome'] ?></td>
							<td><?= $row['username'] ?></td>
				
						</tr>
					<?php endforeach; ?>
				
			</tbody>
		</table>
		<a href="<?php echo base_url();?>index.php/auth/logout">Logout</a>
<?php
?>

<?php

?>
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="card col-md-10 p-sm-5">
			<h1 class="text-center"><?=$title?></h1>
			<table class="table">
				<thead>
				<tr>
					<th></th>
					<th>Nom</th>
					<th>Valeur</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($devise as $d): ?>
					<tr>
						<td></td>
						<td><?=$d['nom']?></td>
						<td><?=$d['value']?></td>
						<td>
							<a href="<?=base_url('devise/delete/'.$d['id'])?>">
								<button class="btn btn-danger">
									Supprimer
								</button>
							</a>
						</td>
						<td>
							<a href="<?=base_url('devise/modif/'.$d['id'])?>">
								<button class="btn btn-primary">Modifier</button>
							</a>
						</td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>



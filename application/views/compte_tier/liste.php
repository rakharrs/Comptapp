<?php

?>
<div class="container">
	<div class="row d-flex justify-content-end">
		<div class="card col-md-10 p-sm-5">
			<h1 class="text-center"><?=$title?></h1>
			<table class="table">
				<thead>
				<tr>
					<th></th>
					<th>Type</th>
					<th>Numéro</th>
					<th>Intitulé du compte</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($compte as $c): ?>
					<tr>
						<td></td>
						<td><?=$c['type']?></td>
						<td><?=$c['numero']?></td>
						<td><?=$c['intitule']?></td>
						<td>
							<a href="<?=base_url('compte_tier/delete/'.$c['id'])?>">
								<button class="btn btn-danger">
									Supprimer
								</button>
							</a>
						</td>
						<td>
							<a href="<?=base_url('compte_tier/modif/'.$c['id'])?>">
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


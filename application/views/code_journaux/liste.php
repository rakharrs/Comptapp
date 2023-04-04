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
						<th>Code</th>
						<th>Intitulé du journal</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($code as $c): ?>
						<tr>
							<td></td>
							<td><?=$c['code']?></td>
							<td><?=$c['intitule']?></td>
							<td>
								<a href="<?=base_url('code_journaux/delete/'.$c['id'])?>">
									<button class="btn btn-danger">
										Supprimer
									</button>
								</a>
							</td>
							<td>
								<a href="<?=base_url('code_journaux/modif/'.$c['id'])?>">
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

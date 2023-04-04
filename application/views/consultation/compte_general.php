<?php
$this->load->view('formulaire/compte_generale');
?>
<hr>
<form id="my_form" method="post" action="<?=base_url('welcome/update_cg')?>" style="display: none">
	<input type="text" name="id_cg" id="form_id_cg">
	<input type="text" name="numero" id="form_numero">
	<input type="text" name="intitule" id="form_intitule">
</form>
<form id="search_form" method="get" action="<?=base_url('welcome/search_cg')?>" style="display: none">
	<input type="text" name="id" id="search_id">
	<input type="text" name="intitule_search" id="search_intitule">
</form>
<div class="container">
	<div class="row d-flex justify-content-end">
		<div class="col-8">
			<table class="table table-striped">
				<thead class="table-dark">
				<tr>
					<th>
						NUMERO DE COMPTE
					</th>
					<th>
						INTITULÉ
					</th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<th>
						<input class="form-control" type="number" name="id" id="id">
					</th>
					<th>
						<input class="form-control" type="text" name="intitule" id="intitule1">
					</th>
					<th>
						<button class="btn btn-primary w-100" type="submit" onclick="test()">
							Rechercher
						</button>
					</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($lines as $line){ ?>
					<input type="text" style="display: none" name="id_cg" id="id_cg<?=$line['id']?>" value="<?=$line['id']?>" disabled>
					<tr>
								<td><input class="form-control" style="background: transparent; border: none" type="text" id="numero<?=$line['id']?>" name="numero" value="<?=$line['id']?>"></td>
								<td><input class="form-control" style="background: transparent; border: none;" type="text" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['intitule']?>"></td>
								<td>
									<button class="btn btn-dark d-block w-100 mb-3" type="submit" onclick="submitForm(`id_cg<?=$line['id']?>`, `numero<?=$line['id']?>`, `intitule<?=$line['id']?>`)">
										Modifier
									</button>
								</td>
						<td>
							<a style="text-decoration: none" href="<?=base_url()?>welcome/delete_cg?id_cg=<?=$line['id']?>">
								<button class="btn btn-danger d-block w-100 mb-3">
									Supprimer
								</button>
							</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

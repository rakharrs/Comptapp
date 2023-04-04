
<div class="container">
	<div class="row d-flex justify-content-end">
		<div class="card col-md-10 p-1">
			<h1 class="text-center"><?=$title?></h1>
			<form class="col-md" method="post" action="<?=base_url('operation/insert')?>">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Date</th>
							<th scope="col">Code journal</th>
							<th scope="col">Numéro piece</th>
							<th scope="col">Numéro compte</th>
							<th scope="col">Compte tière</th>
							<th scope="col">Libellé écriture</th>
							<th scope="col">Débit</th>
							<th scope="col">Crédit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input class="form-control" type="date" name="date" id="date"></td>
							<td>
								<select class="form-select" name="code_journal" id="code_journal">
									<?php foreach($code as $c): ?>
										<option value="<?=$c['id']?>"><?=$c['code']?></option>
									<?php endforeach; ?>
								</select>
							</td>
							<td><input class="col-lg-5 form-control" type="text" name="numero_piece" id="numero_piece"></td>
							<td>
								<select class="form-select" name="numero_compte" id="code_journal">
									<?php foreach($compte_general as $c): ?>
										<option value="<?=$c['id']?>"><?=$c['id']?> : <?=$c['intitule']?></option>
									<?php endforeach; ?>
								</select>
							</td>
							<td>
								<select class="form-select" name="compte_tiere" id="code_journal">
									<?php foreach($compte_tier as $c): ?>
										<option value="<?=$c['id']?>"><?=$c['type']?> : <?=$c['intitule']?></option>
									<?php endforeach; ?>
								</select>
							</td>
							<td><input class="form-control" type="text" name="libelle" id="libelle_ecriture"></td>
							<td><input class="form-control" type="text" name="debit" id="debit"></td>
							<td><input class="form-control" type="text" name="credit" id="credit"></td>
						</tr>
					</tbody>
				</table>
				<div class="row justify-content-center mb-4">
					<input class="btn btn-dark w-50" type="submit" value="Validez" id="valid">
				</div>
			</form>
		</div>
	</div>
</div>

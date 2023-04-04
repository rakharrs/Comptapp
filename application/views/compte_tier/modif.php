<div class="container">
	<div class="row d-flex justify-content-end">
		<div class="card col-md-10 p-sm-5">
			<h1 class="text-center"><?=$title?></h1>
			<form class="col-md" method="post" action="<?=base_url('compte_tier/confirm')?>">
				<input type="hidden" name="id" value="<?=$compte['id']?>">
				<div class="container justify-content-between">
					<label class="w-100" for="numero">Numéro :</label>
					<input class="mb-3 mt-1 w-100 form-control" type="text" name="numero" id="numero" value="<?=$compte['numero']?>">
				</div>
				<div class="container justify-content-between">
					<label class="w-100" for="type">Type :</label>
					<select class="form-select" id="type" name="type">
						<?php foreach($type as $t):
							if ($t['id'] == $compte['id_type']){
								$selected = 'selected';
							} else {
								$selected = '';
							} ?>
							<option value="<?=$t['id']?>" <?=$selected?>><?=$t['intitule']?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="container justify-content-between">
					<label class="w-100" for="intitule">Intitulé du compte :</label>
					<input class="mb-3 mt-1 w-100 form-control" type="text" name="intitule" id="intitule" value="<?=$compte['intitule']?>">
				</div>
				<div class="row justify-content-center">
					<input class="btn btn-dark w-50" type="submit" value="Validez" id="valid">
				</div>
			</form>
		</div>
	</div>
</div>

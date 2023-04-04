<?php
?>
<div class="container w-50 pt-4">
	<div class="row d-flex justify-content-end">
		<div class="card col-md-10 p-sm-5">
			<h1 class="text-center"><?=$title?></h1>
			<form class="col-md" method="post" action="<?=base_url('compte_tier/insert')?>">
				<div class="container justify-content-between">
					<label class="w-100" for="numero">Numéro :</label>
					<input class="mb-3 mt-1 w-100 form-control" type="text" name="numero" id="numero">
				</div>
				<div class="container justify-content-between">
					<label class="w-100" for="type">Type :</label>
					<select class="mb-3 mt-1 w-100 form-control form-select" id="type" name="type">
						<?php foreach($type as $t): ?>
							<option value="<?=$t['id']?>"><?=$t['intitule']?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="container justify-content-between">
					<label class="w-100" for="intitule">Intitulé du compte :</label>
					<input class="mb-3 mt-1 w-100 form-control" type="text" name="intitule" id="intitule">
				</div>
				<div class="row justify-content-center">
					<input class="btn btn-dark w-50" type="submit" value="Validez" id="valid">
				</div>
			</form>
		</div>
	</div>
</div>

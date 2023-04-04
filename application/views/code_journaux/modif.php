<?php
?>

<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="card col-md-10 p-sm-5">
			<h1 class="text-center"><?=$title?></h1>
			<form class="col-md" method="post" action="<?=base_url('code_journaux/confirm')?>">
				<input type="hidden" name="id" value="<?=$code['id']?>">
				<div class="container justify-content-between">
					<label class="w-100" for="nom-societe">Code :</label>
					<input class="mb-3 mt-1 w-100 form-control" type="text" name="code" id="nom-societe" value="<?=$code['code']?>">
				</div>
				<div class="container justify-content-between">
					<label class="w-100" for="intitule">Intitulé du journal :</label>
					<input class="mb-3 mt-1 w-100 form-control" type="text" name="intitule" value="<?=$code['intitule']?>" id="intitule">
				</div>
				<div class="row justify-content-center">
					<input class="btn btn-dark w-50" type="submit" value="Validez" id="valid">
				</div>
			</form>
		</div>
	</div>
</div>

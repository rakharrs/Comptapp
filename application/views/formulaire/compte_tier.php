
<section class="position-relative pt-4">
	<div class="container">
		<div class="row justify-content-end">
			<h4 class="text-decoration-underline text-center mb-2">Insertion plan tier</h4>
			<div class="col-lg-5 col-sm-12">
				<div class="card">
					<div class="card-body">
						<form method="post" action="<?=base_url('compte_tier/insert')?>">
							<div class="row mb-3">
								<div class="col-4 form-floating">
									<input class="form-control" type="text" name="numero" id="numero" autocomplete="off" name="numero" placeholder="Id...">
									<label for="numero" class="p-3">Numéro de compte</label>
								</div>
								<div class="col-4 form-floating">
									<input class="form-control" type="text" name="intitule" id="intitule" autocomplete="off" placeholder="intutle...">
									<label for="intitule" class="p-3">Intitulé</label>
								</div>
								<div class="col-4 h-100">
									<select class="form-control form-select p-3" id="type" name="type">
										<?php foreach($type as $t): ?>
											<option value="<?=$t['id']?>"><?=$t['intitule']?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div>
								<button class="btn btn-dark d-block w-100 mb-3" type="submit">
									Insert
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12">
				<div class="card">
					<div class="card-body">
						<form method="post" action="<?=base_url()?>welcome/import_cg" enctype="multipart/form-data">
							<div class="mb-1">
								<label for="formFile" class="form-label">Import csv file</label>
								<input class="form-control" name="file[]" multiple type="file" id="formFile">
							</div>
							<div>
								<button class="btn btn-dark d-block w-100 mb-3" type="submit">
									Import
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</section>


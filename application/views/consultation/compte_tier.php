<?php
$this->load->view('formulaire/compte_tier');
?>
<hr>
<form id="my_form" method="post" action="<?=base_url('compte_tier/confirm')?>" style="display: none">
	<input type="text" name="id" id="form_id">
	<input type="text" name="form_numero" id="form_numero">
	<input type="text" name="form_intitule" id="form_intitule">
	<input type="text" name="form_type" id="form_type">
</form>
<div class="container">
	<div class="row justify-content-end">
		<div class="col-lg-8 col-sm-12">
			<table class="table table-striped">
				<thead class="table-dark">
				<tr>
					<th>
						TYPE
					</th>
					<th>
						NUMÉRO
					</th>
					<th>
						INTITULÉ
					</th>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($lines as $line){ ?>
					<input type="text" style="display: none" name="id_cg" id="id_ct<?=$line['id']?>" value="<?=$line['id']?>" disabled>
					<tr>
								<td>
									<select class="form-control form-select w-75" style="border: 0; background-color: transparent" id="type<?=$line['id']?>" name="type">
										<?php foreach($type as $t): ?>
											<option value="<?=$t['id']?>" <?php if($t['id']==$line['id_type']){echo "selected";}?>><?=$t['intitule']?></option>
										<?php endforeach; ?>
									</select>
								</td>
								<td><input class="form-control" style="background: transparent; border: none;" type="text" name="numero" id="numero<?=$line['id']?>" value="<?=$line['numero']?>"></td>
								<td><input class="form-control" style="background: transparent; border: none;" type="text" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['intitule']?>"></td>
								<td>
									<button class="btn d-block w-100 mb-3" onclick="submitForm('id_ct<?=$line['id']?>', `type<?=$line['id']?>`, `numero<?=$line['id']?>`, `intitule<?=$line['id']?>`)">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
											<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
										</svg>
									</button>
								</td>
						<td>
							<a style="text-decoration: none" href="<?=base_url('compte_tier/delete')?>/<?=$line['id']?>">
								<button class="btn btn-danger d-block w-100 mb-3">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
										<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
									</svg>
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
<script>
	function submitForm(input_id, input1, input2, input3) {
		// Get the values of the input fields you want to insert into the form
		var input1Value = document.getElementById(input1).value;
		console.log(input1)
		console.log(input2)
		console.log(input3)
		var input2Value = document.getElementById(input2).value;
		var input3Value = document.getElementById(input3).value;
		var input_idValue = document.getElementById(input_id).value;
		console.log(input1Value)
		console.log(input2Value)
		console.log(input3Value)

		// Get a reference to the form you want to submit
		var form = document.getElementById("my_form");

		// Set the values of the hidden input fields in the form
		document.getElementById("form_id").value = input_idValue;
		document.getElementById("form_type").value = input1Value;
		document.getElementById("form_numero").value = input2Value;
		document.getElementById("form_intitule").value = input3Value;

		// Submit the form
		form.submit();
	}
</script>

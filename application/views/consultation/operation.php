<?php
$this->load->view('operation/formulaire');
?>
<hr>
<form id="my_form" method="post" action="<?=base_url('welcome/update_cg')?>" style="display: none">
	<input type="text" name="id_cg" id="form_id_cg">
	<input type="text" name="numero" id="form_numero">
	<input type="text" name="intitule" id="form_intitule">
</form>
<div class="container">
	<div class="row d-flex justify-content-end">
		<div class="col-10">
			<table class="table table-striped">
				<thead class="table-dark">
				<tr class="fw-light">
					<th style="font-size: 1.5ch">
						N° COMPTE
					</th>
					<th style="font-size: 1.5ch">
						LIBELLÉ
					</th>
					<th style="font-size: 1.5ch">
						CODE JOURNAL
					</th>
					<th style="font-size: 1.5ch">
						N° PIECE
					</th>
					<th style="font-size: 1.5ch">
						DATE
					</th>
					<th style="font-size: 1.5ch">
						CREDIT
					</th>
					<th style="font-size: 1.5ch">
						DEBIT
					</th>
					<th style="font-size: 1.5ch"></th>
					<th style="font-size: 1.5ch"></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($lines as $line){ ?>
					<input type="text" style="display: none" name="id_cg" id="id_cg<?=$line['id']?>" value="<?=$line['id']?>" disabled>
					<tr>
						<td><input class="form-control" style="background: transparent; border: none" type="text" id="numero<?=$line['id']?>" name="numero" value="<?=$line['numero_compte']?>"></td>
						<td><input class="form-control" style="background: transparent; border: none;" type="text" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['libelle']?>"></td>
						<td><input class="form-control" style="background: transparent; border: none;" type="text" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['code_journal']?>"></td>
						<td><input class="form-control" style="background: transparent; border: none;" type="text" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['numero_piece']?>"></td>
						<td><input class="form-control" style="background: transparent; border: none;" type="text" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['date_operation']?>"></td>
						<td><input class="form-control" style="background: transparent; border: none;" type="number" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['debit']?>"></td>
						<td><input class="form-control" style="background: transparent; border: none;" type="number" name="intitule" id="intitule<?=$line['id']?>" value="<?=$line['credit']?>"></td>
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
<script>
	function submitForm(input1, input2, input3) {
		// Get the values of the input fields you want to insert into the form
		var input1Value = document.getElementById(input1).value;
		console.log(input1)
		console.log(input2)
		console.log(input3)
		var input2Value = document.getElementById(input2).value;
		var input3Value = document.getElementById(input3).value;
		console.log(input1Value)
		console.log(input2Value)
		console.log(input3Value)

		// Get a reference to the form you want to submit
		var form = document.getElementById("my_form");

		// Set the values of the hidden input fields in the form
		document.getElementById("form_id_cg").value = input1Value;
		document.getElementById("form_numero").value = input2Value;
		document.getElementById("form_intitule").value = input3Value;

		// Submit the form
		form.submit();
	}
</script>

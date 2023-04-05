<section class="position-relative pt-4">
<div class="container">
	<div class="row justify-content-end">
		<div class="col-lg-10 col-sm-12">
			<table class="table table-striped" id="myTable">
				<thead class="table-light">
				<tr>
					<th scope="col">Date</th>
					<th scope="col">Code</th>
					<th scope="col">Numéro piece</th>
					<th scope="col">Numéro compte</th>
					<th scope="col">Compte tier</th>
					<th scope="col">Libellé</th>
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
					<td><input class="form-control" type="text" name="numero_piece" id="numero_piece"></td>
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
			<button onclick="addRow()">Add Row</button>
		</div>
	</div>
</div>
</section>

<script>
	function addRow() {
		var table = document.querySelector(".table tbody");
		var row = table.insertRow();

		var dateCell = row.insertCell(0);
		dateCell.innerHTML = '<input class="form-control" type="date" name="date" id="date" value="' + document.querySelector('.table tbody tr:first-child td:first-child input[type="date"]').value + '">';

		var codeCell = row.insertCell(1);
		codeCell.innerHTML = `
    <select class="form-select" name="code_journal" id="code_journal">
      <?php foreach($code as $c): ?>
        <option value="<?=$c['id']?>"><?=$c['code']?></option>
      <?php endforeach; ?>
    </select>
  `;

		var numeroPieceCell = row.insertCell(2);
		numeroPieceCell.innerHTML = '<input class="form-control" type="text" name="numero_piece" id="numero_piece" value="' + document.querySelector('.table tbody tr:first-child td:nth-child(3) input[type="text"]').value + '">';

		var numeroCompteCell = row.insertCell(3);
		numeroCompteCell.innerHTML = `
    <select class="form-select" name="numero_compte" id="code_journal">
      <?php foreach($compte_general as $c): ?>
        <option value="<?=$c['id']?>"><?=$c['id']?> : <?=$c['intitule']?></option>
      <?php endforeach; ?>
    </select>
  `;

		var compteTierCell = row.insertCell(4);
		compteTierCell.innerHTML = `
    <select class="form-select" name="compte_tiere" id="code_journal">
      <?php foreach($compte_tier as $c): ?>
        <option value="<?=$c['id']?>"><?=$c['type']?> : <?=$c['intitule']?></option>
      <?php endforeach; ?>
    </select>
  `;

		var libelleCell = row.insertCell(5);
		libelleCell.innerHTML = '<input class="form-control" type="text" name="libelle" id="libelle_ecriture" value="' + document.querySelector('.table tbody tr:first-child td:nth-child(6) input[type="text"]').value + '">';

		var debitCell = row.insertCell(6);
		debitCell.innerHTML = '<input class="form-control" type="text" name="debit" id="debit" value="' + document.querySelector('.table tbody tr:first-child td:nth-child(7) input[type="text"]').value + '">';

		var creditCell = row.insertCell(7);
		creditCell.innerHTML = '<input class="form-control" type="text" name="credit" id="credit" value="' + document.querySelector('.table tbody tr:first-child td:nth-child(8) input[type="text"]').value + '">';
	}

</script>

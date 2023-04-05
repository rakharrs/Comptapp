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
function search() {
	var inputType = document.getElementById("type_s").value;
	var inputNumero = document.getElementById("numero_s").value;
	var intitule = document.getElementById("intitule_s").value;

	console.log(inputType);
	console.log(intitule);
	console.log(inputNumero);

	var form = document.getElementById("search_form");

	document.getElementById("search_numero").value = inputNumero;
	document.getElementById("search_intitule").value = intitule;
	document.getElementById("search_type").value = inputType;

	form.submit();
}

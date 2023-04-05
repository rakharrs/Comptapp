
	function test(){
		var intitule = document.getElementById("intitule1").value;
		var inputId = document.getElementById("id").value;
		console.log(inputId);
		console.log(intitule);
		var form = document.getElementById("search_form");

		document.getElementById("search_id").value = inputId;
		document.getElementById("search_intitule").value = intitule;

		form.submit();
	}
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

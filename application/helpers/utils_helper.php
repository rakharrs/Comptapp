<?php

/**
 * @throws Exception
 */

	function check_solde($credits, $debits){
		$credit = 0; $debit = 0;
		foreach ($credits as $c){
			$credit += intval($c);
		}
		foreach ($debits as $d){
			$debit += intval($d);
		}
		return $credit == $debit;
	}
	function read_csv($csv_path){
		if(get_file_extension($csv_path) != "csv")
			throw new Exception();
		$file = fopen($csv_path, 'r');
		$line = array();
		if(isset($file)) {
			while (!feof($file))
				$line[] = fgetcsv($file);
			fclose($file);
		}
		return $line;
	}

	function get_file_extension($file_path){
		return pathinfo($file_path, PATHINFO_EXTENSION);
	}



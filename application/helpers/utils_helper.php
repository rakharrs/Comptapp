<?php

/**
 * @throws Exception
 */
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



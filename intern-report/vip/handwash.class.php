<?php
class HandWash {
    
	function handwashArray($data) {

		if (gettype($data) == 'array') {
			foreach($data as $key => $value){

				if (gettype($value) == 'string') {
					$value = strip_tags($value);
					$value = str_replace('">', '', $value);
					$data[$key] = htmlspecialchars($value);
				}
			}
		}
		return $data;
	}

	function handwashString($string, $level = 'none') {

		// use $level to limit certain character
		// only use in sensitive area
		switch ($level) {
			case 'low':

				// suitable for shorter input range
				$string = preg_replace('/[^a-zA-Z0-9\s\?\$\%\+\-\*\~\`\;]/','',$string);
				break;
			case 'high':

				// use in sensitive area
				// update regex to remove certain character
				$string = strip_tags($string);
				// $string = str_replace('">', '', $string);
				$string = preg_replace('/[^a-zA-Z0-9\s\.\-\?\(\)\,\:\'\[\]\{\}\!\@\#\$\%\^\&\*\~\`\"\/\;]/','',$string);
				break;
		}

        
        $string = trim($string);
        $string = stripslashes($string);
		$string = htmlspecialchars($string);

		return $string;
	}
	function handwashParams($data) {

		foreach($data as $key => $value){
			$key = htmlspecialchars($key);
			$value = htmlspecialchars($value);

			$data_temp[$key] = $value;
		}
		$data = $data_temp;
		return $data;
	}


	// apa-apa tambahan boleh tambah bawah
}
 ?>
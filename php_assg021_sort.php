<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="checkerboard.css">
	<title>Checkerboard</title>
</head>
<body>

<?php

	function selection_sort($arr, $minmax) {  //function
		$arraysize = count($arr);
		strtolower($minmax);

		for($i = 0; $i < $arraysize; $i++) { // top for
			$smallest_index = $i;
			$smallest_value = $arr[$i];

			for($j = $i+1; $j < $arraysize; $j++) { // second for
				if($minmax ==="max"){  // minmax
					if($arr[$j] > $smallest_value){  // if alpha
						$smallest_index = $j;
						$smallest_value = $arr[$j];
					} // end if alpha
				} // end minmax true
				else {
					for($j = $i+1; $j < $arraysize; $j++) { // third for
						if($arr[$j] < $smallest_value){  // if beta
							$smallest_index = $j;
							$smallest_value = $arr[$j];
						} // end if beta
					} // third for end
				} // end minmax false
			} //end second for

			$arr[$smallest_index] = $arr[$i];
			$arr[$i] = $smallest_value;
			
		} //top for end

		return $arr;

	} //function end

	$build_array = array();
	for($x=1; $x<=10000; $x++) {
		$build_array[] = rand(0, 10000);
	}

	var_dump($build_array);
	
	$time_start = microtime();

	$build_array = selection_sort($build_array, "min");
	
	$time_end = microtime();
	$time = $time_end - $time_start;
	
	echo $time;

	var_dump($build_array);

?>

</body>
</html>
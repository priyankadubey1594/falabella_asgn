<?php
    
    $arr1 = array("Linio", "", "");
    $arr2 = array("IT", "", "", "", "");
    $arr3 = array_fill(0, 15, "");
    $arr3[0] = "Linianos";

	for($i=1;$i<=100;$i++){
	    if($i%3!=0 && $i%5!=0){
	        echo $i;
	        echo "\n";
	        continue;
	    }
	    //echo (($i%15)==0)+$i%3, (($i%15)==0)+$i%5, $i%15;
	    //echo "\n";
	    echo $arr1[(($i%15)==0)+$i%3], $arr2[(($i%15)==0)+$i%5], $arr3[$i%15];
	    echo "\n";
	}
?>

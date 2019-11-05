<?php
	echo "Hello 19PHP03";
?>


<?php
// BT3:
    $Hoten = "Ho ha giang";
    $quequan = " Vinh city";
    $phone = "123456789"; 
?>

<h2>BT4:</h2>
<?php
// BT4:

    $name = "Ho ha giang";
    $add = " Vinh city";
    $phone = "123456789"; 

    echo 'Họ và tên :'.$name ."</br>";
    echo 'Quê quán: '. $add ."</br>";
    echo 'Điện thoại: '. $phone ."</br>";


?>

<h3>BT5:</h3>
<?php 
	$i = '';
	for ($i = 1; $i <= 12 ; $i++) { 
		if ($i <= 12) {
			switch ($i) {
			case '1':
			case '3':
			case '5':
			case '7':
			case '8':
			case '10':
			case '12':
				echo " tháng $i có 31 ngày";
				echo "<br>";
				break;
			case '4':	
			case '6':	
			case '9':
			case '11':
				echo "tháng $i có 30 ngày";
				echo "<br>";
				break;
			case '2':
				echo "tháng $i có 28 ngày hoặc 29 ngày";
				echo "<br>";
				break;
			
			}
		}		
	}
?>

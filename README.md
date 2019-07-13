# arka-test
Arkademy Tes

Alat yg dibutuhkan :
Notepad++
Internet Browser
XAMPP

Online Editor:
http://phptester.net/

<?php
	
membuat fungsi/method buyEgg disertai parameter pada method yaitu tanggal dan uang yang dimiliki
	
	function buyEgg($tanggal, $uang){
		
		
perhitungan jumlah telur sementara ketika dibagi dengan harga normal telur yaitu 2000. 
	
		$jumlahtelur = $uang/2000;
		$jumlahtelur2 = $jumlahtelur;
		
		
Jika tanggal yang diinput kurang dari 32 yaitu 0-31, jika tanggal ganjil dan jumlah telur sementara yang dibeli adalah 1 kodi (20 telur) maka akan di beri bonus 3 butir telur. Dan jika tanggal tersebut adalah kelipatan 5 dan bonus sebelumnya merupakan bilangan genap maka bonus akan dikalikan dengan 10, jika bonus sebelumnya ganjil maka bonus akan dikalikan 5.
	
		while($tanggal<32) {
			if($tanggal%2==1 && $jumlahtelur2>19){ //ganjil
				$bonus1= 3;
			}
				if($bonus1%2==0 && $tanggal%5==0) {
					$bonus = $bonus1*10;
				}
				elseif($bonus1%2==1 && $tanggal%5==0){
					$bonus = $bonus1*5;
				}
			else{
			}
			
			
Jika tanggal saat membeli merupakan bilangan prima, dan jumlah telur sementara lebih dari 1 lusin (12 telur) maka diberi 1 telur. Dan jika tanggal tersebut adalah kelipatan 5 dan bonus sebelumnya merupakan bilangan genap maka bonus akan dikalikan dengan 10, jika bonus sebelumnya ganjil maka bonus akan dikalikan 5. 
			if($tanggal=[2,3,5,7,11,13,17,19,23,29,31] && $jumlahtelur2>11){ //prima
				$bonus1= 1;
				if($bonus1%2==0 && $tanggal%5==0) {
					$bonus = $bonus1*10;
				}
				elseif($bonus1%2==1 && $tanggal%5==0){
					$bonus = $bonus1*5;
				}
			}
			else{
			}
			
			
	Jumlah telur ditambakan dengan bonus untuk mendapat jumlah telur yang diterima
	
		$jumlahtelur= $jumlahtelur2 + $bonus;
		return round($jumlahtelur);
		}
	}
	
	$jumlahtelur=buyEgg(25,50000);
	echo "Jumlah Telur adalah $jumlahtelur";

?>

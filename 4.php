<?php

	function buyEgg($tanggal, $uang)
	{
		$jumlahtelur = $uang/2000;
		$jumlahtelur2 = $jumlahtelur;
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
		$jumlahtelur= $jumlahtelur2 + $bonus;
		return round($jumlahtelur);
		}
	}
	
	$jumlahtelur=buyEgg(25,50000);
	echo "Jumlah Telur adalah $jumlahtelur";

?>

<?php


$datadiri = array(
		'name' =>'Gita Amelia',
		'age'=>'22 tahun',
		'address'=>'Kp. Kulalet RT/RW 04/08 Kel. Andir, Kec Baleendah',
		'hobbies'=>["Bermain Piano" , "Bulutangkis"],
		'is_married'=> false,
		'list_school with key name, year_in, year_out, and major' => ['SD Andir 1, 2003, 2009, NULL', 'SMPN 1 Baleendah, 2009, 2012, NULL', 'SMAN 1 Baleendah, 2012, 2015, IPA', 'Politeknik Negeri Bandung, 2015, 2018, Teknik Elektro'],
		'skills (Array of Obj) with key skill_name and level (beginner, advanced, expert)' => ['PHP, advanced', 'HTML, advanced', 'CSS, beginner', 'MySQL, advanced'],
		'interest_in_coding' => true,
		);
echo json_encode($datadiri);
		
		
?>


http://phptester.net/
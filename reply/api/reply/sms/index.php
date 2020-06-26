




<? //https://api.nalosolutions.com/bulksms/?username=ikelvin&password=kerrison41@&type=0&dlr=1&destination=233551838987&source=TryApi&message=heytrying
?>

<?php 
require ('../inc/functions.php');

if (isset($_GET['api_key']))
{
	$api_key = $_GET['api_key'];
	$source = $_GET['source'];
	$destination = $_GET['destination'];
	$type = $_GET['type'];
	$data = $_GET['message'];
	
	 reply::rp_sendsms($source,$destination,$data,$type);

	 echo'1701|'.$destination.'|NS5c2cdb27997526.602643621';

//$obj = new Sender::Sender("Tester","يبرع لا ","233551838987","2","1");

//Sender::Submit($obj);
	
} else {
	echo 'Api failed, Contact ikelvin studios';
}


?>
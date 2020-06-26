
<?php
	include ('../inc/reply_api.php');

?>

<?php
if (isset($_GET['send']))
{
	
	$source = $_GET['source'];
	$destination = $_GET['destination'];
	$type = $_GET['type'];
	$message = $_GET['message'];
	
	 reply::rp_sendsms($source,$destination,$message,$type) /*or die('Api failed again, Contact ikelvin studios')*/;

	 echo'SMS to |'.$destination.'|was success';

//$obj = new Sender::Sender("Tester","يبرع لا ","233551838987","2","1");

//Sender::Submit($obj);
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test | Reply SMS</title>
</head>
<body>
<form id="my_form" action="index.php" method="GET" target="">
    
    <input type="text" name="source" value="<?= $source ?>" placeholder="source">
    <input type="number" name="destination" value="<?= $destination ?>" placeholder="destination">
    <input type="number" name="type" value="<?= $type ?>" placeholder="type">
    <input type="text" name="message" value="<?= $message ?>" placeholder="message">
    <input type="Submit" name="send" value="send">
    
</form>


	

</body>
</html>

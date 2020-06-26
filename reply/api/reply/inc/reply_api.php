<?php


	Class reply{

public static function rp_sendsms($source,$destination,$message,$type){
    $api_key = "api_key";
	
	


	echo '
<form id="my_sms" action="../sms/" method="GET" target="hidden-form">
    <input type="hidden" name="api_key" value="'.htmlspecialchars($api_key) .'">
    <input type="hidden" name="source" value="'.htmlspecialchars($source) .'">
    <input type="hidden" name="destination" value="'.htmlspecialchars($destination) .'">
    <input type="hidden" name="type" value="'.htmlspecialchars($type) .'">
    <input type="hidden" name="message" value="'.urlencode($message).'">
    
</form>
 
 <IFRAME style="display:none" name="hidden-form"></IFRAME>
 
<script type="text/javascript">
    //Our form submission function.
    function submitForm() {
        document.getElementById("my_sms").submit();
    }
    //Call the function submitForm() as soon as the page has loaded.
    window.onload = submitForm;
</script> 
';
}


public static function fp_sendmail($to,$subject,$message,$header){
    return mail($to,$subject,$message,$header);
}
          
       }
?>
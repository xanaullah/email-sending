<?php
$name=$_POST['name'];
$email=$_POST['emailaddress'];
$message=$_POST['subject'];
$to="shawez346@gmail.com";
$subject="Property Management System";
if($name==''||$email==''||$message='') {
   
?>
<script type="text/javascript">
	alert("every feild should be filled ");
	window.location.replace("index.php");
</script><?php


}
$txt="Name    "."$name"."\r\n". " visiter Email    ".$email." Message".$message;
$header="From: $email";
if($email!=null){
	mail($to, $subject, $txt ,$header);
	?>
	<script type="text/javascript">
		alert("Message sucessfully sent");
		window.location.replace("index.php");
	</script><?PHP
}


?>
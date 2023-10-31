<?php

include('include/config.php');


if(isset($_POST['submit']))
{	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$company=$_POST['company'];
	$proj_type=$_POST['proj_type'];
	$pages=$_POST['pages'];
	$budget=$_POST['budget'];
	$domain_hosting=$_POST['domain_hosting'];
	$message=$_POST['message'];

$sql=mysqli_query($con,"insert into quote_request(name,email,phone,company,proj_type,pages,budget,domain_hosting,message) values('$name','$email','$phone','$company','$proj_type','$pages','$budget','$domain_hosting','$message')");


if($sql)
{
$_SESSION['msg']="New student's application has been submitted.";

}
}

?>
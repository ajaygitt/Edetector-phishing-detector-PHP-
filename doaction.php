<?php
include('include/dbclass.php');
$db=new database();
//Login
if(isset($_REQUEST['login']))
{
	$name=$_POST['user'];
	$password=$_POST['pass'];
	$sql="SELECT * FROM users WHERE user='".$name."' AND password='".$password."'";
	$result=$db->query($sql);
	$count=$db->num_rows($result);
	if($count==0)
	{
		$msg="Incorrect Username and Password";	    
		header('location:login.php?message='.$msg);
	}
	else
	{
		$row=$db->fetch_array($result);	
		header('location:adminHome.php');
		
	}
	
}
//new member

if(isset($_REQUEST['register']))
{
	$user=$_POST['user'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$state=$_POST['sta'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
		
	$sql='INSERT INTO `edetector`.`customers`(`user`,`email`,`country`,`sta`,`uname`,`pass`) VALUES ("'.$user.'", "'.$email.'","'.$country.'","'.$state.'","'.$uname.'","'.$pass.'" )';
	
	
	 $result=$db->query($sql);
	 if($result)
	 {
		 $msg="Member Added Succesfuly";	
	 }
	 else
	 {
		 $msg="Error, Try again";	
	 }
	 // header('location:register.php?message='.$msg);
	
} 
// add website
if(isset($_REQUEST['addweb']))
{
	
	$webname=$_POST['webname'];
	$weburl=$_POST['weburl'];
		
	echo $sql='INSERT INTO `edetector`.`addwebsite`(`webname`,`weburl`) VALUES ("'.$webname.'","'.$weburl.'" )';
	
	
	 $result=$db->query($sql);
	 if($result)
	 {
		 $msg="Member Added Succesfuly";	
	 }
	 else
	 {
		 $msg="Error, Try again";	
	 }
	 // header('location:register.php?message='.$msg);
	
} 

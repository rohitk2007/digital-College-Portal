<?php
require 'connection.php';

$cid=$_POST['pid'];
$actionid=$_POST['actionid'];
$actiontable=$_POST['actiontable'];

//echo $pid."<br>";
//echo $actionid;
//echo $actiontable;



$con=mysqli_connect($host,$username,$password,$dbname);

if($con === false)
{
	echo '<script type="text/javascript">';
	echo ' alert("Process error try later")';  //not showing an alert box.
	echo '</script>';
    die("ERROR: Could not connect. " . mysqli_connect_error());
    include 'manage_gallery.php';
}
else
{

		if($actionid=="Active")
		{

			$sql = "UPDATE course_document SET status='Active' WHERE document_id=$cid";
			if(mysqli_query($con, $sql)){
    			echo '<script type="text/javascript">';
				echo ' alert("Status update successfully")';  //not showing an alert box.
				echo '</script>';
			} 
			else
			{
    		echo '<script type="text/javascript">';
			echo ' alert("Status update failed")';  //not showing an alert box.
			echo '</script>';
			}


		}
		else
		{
				$sql = "UPDATE course_document SET status='Deactive' WHERE document_id=$cid";
			if(mysqli_query($con, $sql)){
    			echo '<script type="text/javascript">';
				echo ' alert("Status update successfully")';  //not showing an alert box.
				echo '</script>';
			} 
			else
			{
    		echo '<script type="text/javascript">';
			echo ' alert("Status update failed")';  //not showing an alert box.
			echo '</script>';
			}
		}
	



 
mysqli_close($con);

}


include 'manage_gallery.php';

?>
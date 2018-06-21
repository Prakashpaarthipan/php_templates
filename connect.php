

<?php
header('Content-type: application/json');
// display all error except deprecated and notice  
//error_reporting();
// turn on output buffering 
ob_start();

$host = "localhost";
$username = "root";
$pwd = "Welcome12121";
$db = "tcs";

//$con = mysqli_connect($host,$username,$pwd,$db) or die ('Unable to connect');

$con = mysqli_connect($host,$username,$pwd,$db);

if(!$con)
{
	die ("Failed to connect"	.mysqli_connect_error());
}


//echo "DB Connected";

$sqlquery = "select countid , couname, isocode, isdcode from countries limit 550";
$result = mysqli_query($con,$sqlquery);
$jsonarray = array();
$response = array();
	while ($row = mysqli_fetch_assoc($result))
	{
		//echo $row["countid"]." ".$row["couname"]." ".$row["isocode"]." ".$row["isdcode"];
		//echo "<br />";
		//$jsonarray['countid'][] =$row["countid"]." ".$row["couname"]." ".$row["isocode"]." ".$row["isdcode"];
		$countid = $row['countid'];
		$couname = $row['couname'];
		$isocode= $row['isocode'];
		$isdcode = $row['isdcode'];
		//$jsonarray[1] =$row;
		//$jsonarray[2] =$row;
		//$jsonarray[3] =$row;
		//echo "<br />";
	$jsonarray[] = array('countid'=>$countid,'couname'=>$couname,'isocode'=>$isocode,'isdcode'=>$isdcode);
	//array_push($rows,$row_array); 
	// here we push every iteration to an array otherwise you will get only last iteration value
	}
	$response['countries'] = $jsonarray;
	 

	//echo json_encode($response);
	
	print_r($jsonarray);
	//mysqli_free_result($result);
?>
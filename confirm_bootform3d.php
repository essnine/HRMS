<?php
session_start();
include_once('include/Connection.php');
if(isset($_POST['submit']))
{
	
    if(!empty($_POST['fy'])) {

        $fy=mysqli_real_escape_string($conn,$_POST['fy']);

        }
		if(!empty($_POST['inchargeinst'])) {

        $inchargeinst=mysqli_real_escape_string($conn,$_POST['inchargeinst']);

        }
		if(!empty($_POST['inchargedept'])) {

        $inchargedept=mysqli_real_escape_string($conn,$_POST['inchargedept']);

        }
	if(!empty($_POST['expert'])) {

        $expert=mysqli_real_escape_string($conn,$_POST['expert']);

        }
		if(!empty($_POST['aicte'])) {

        $aicte=mysqli_real_escape_string($conn,$_POST['aicte']);

        }
		
		if(!empty($_POST['left'])) {

        $left=mysqli_real_escape_string($conn,$_POST['left']);

        }
		
		if(!empty($_POST['instworking'])) {

        $instworking=mysqli_real_escape_string($conn,$_POST['instworking']);

        }
		if(!empty($_POST['endorsedgtu'])) {

        $endorsedgtu=mysqli_real_escape_string($conn,$_POST['endorsedgtu']);

        }
		if(!empty($_POST['appgovt'])) {

        $appgovt=mysqli_real_escape_string($conn,$_POST['appgovt']);

        }
		if(!empty($_POST['appuni'])) {

        $appuni=mysqli_real_escape_string($conn,$_POST['appuni']);

        }
		if(!empty($_POST['besub'])) {

        $besub=mysqli_real_escape_string($conn,$_POST['besub']);

        }
		if(!empty($_POST['mesub'])) {

        $mesub=mysqli_real_escape_string($conn,$_POST['mesub']);

        }
$fyname=mysqli_real_escape_string($conn,$_POST['fyname']);
$relieved=mysqli_real_escape_string($conn,$_POST['relieved']);
$bereg=mysqli_real_escape_string($conn,$_POST['bereg']);
$mereg=mysqli_real_escape_string($conn,$_POST['mereg']);
$gtuletter=mysqli_real_escape_string($conn,$_POST['gtuletter']);
$achievements=mysqli_real_escape_string($conn,$_POST['achievements']);
$remarks=mysqli_real_escape_string($conn,$_POST['remarks']);


$username= mysqli_real_escape_string($conn,$_SESSION['user']);
//echo $_SESSION['user'];
$query = "INSERT INTO `bootform3d` (`fy`, `fyname`, 
`relieved`, `bereg`, `mereg`, `gtuletter`,`achievements`,
`remarks`, `inchargedept`,`inchargeinst`
,`expert`,`aicte`,`leftinst`,`instworking`,`endorsedgtu`,
`appgovt`,`appuni`,`besub`,`mesub`,
`username`) VALUES('$fy','$fyname','$relieved','$bereg','$mereg'
,'$gtuletter', '$achievements', '$remarks','$inchargedept','$inchargeinst','$expert','$aicte','$left','$instworking','$endorsedgtu',
'$appgovt','$appuni','$besub','$mesub','$username')";
		
		echo $query;
		$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error($conn));
		
		if($result){
			Print '<script>alert("Details Saved Successfully!");</script>'; //Prompts the user
			Print '<script>window.location.assign("bootform3e.php");</script>';
		}
else
		{
			Print '<script>alert("Contact Server admin");</script>'; //Prompts the user
			Print '<script>window.location.assign("bootform3d.php");</script>'; // redirects to login.php
		}
} 




?>
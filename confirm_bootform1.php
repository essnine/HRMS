<?php
session_start();
include_once('include/Connection.php');
if(isset($_POST['submit']))
{
	
    if(!empty($_POST['gender'])) {

        $gender=mysqli_real_escape_string($conn,$_POST['gender']);

        }
		if(!empty($_POST['dis'])) {

        $dis=mysqli_real_escape_string($conn,$_POST['dis']);

        }
	
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$mname=mysqli_real_escape_string($conn,$_POST['mname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$sname=mysqli_real_escape_string($conn,$_POST['sname']);
$aicte=mysqli_real_escape_string($conn,$_POST['aicte']);
$cardno=mysqli_real_escape_string($conn,$_POST['cardno']);
$cardcode=mysqli_real_escape_string($conn,$_POST['cardcode']);
$father=mysqli_real_escape_string($conn,$_POST['father']);
$mother=mysqli_real_escape_string($conn,$_POST['mother']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$district=mysqli_real_escape_string($conn,$_POST['district']);
$state=mysqli_real_escape_string($conn,$_POST['state']);
$pcode=mysqli_real_escape_string($conn,$_POST['pcode']);
$address1=mysqli_real_escape_string($conn,$_POST['address1']);
$city1=mysqli_real_escape_string($conn,$_POST['city1']);
$district1=mysqli_real_escape_string($conn,$_POST['district1']);
$state1=mysqli_real_escape_string($conn,$_POST['state1']);
$pcode1=mysqli_real_escape_string($conn,$_POST['pcode1']);

$residence=mysqli_real_escape_string($conn,$_POST['residence']);
$mob1=mysqli_real_escape_string($conn,$_POST['mob1']);
$mob2=mysqli_real_escape_string($conn,$_POST['mob2']);
$email1=mysqli_real_escape_string($conn,$_POST['email1']);
$email2=mysqli_real_escape_string($conn,$_POST['email2']);
$bloodgroup=mysqli_real_escape_string($conn,$_POST['bloodgroup']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$place=mysqli_real_escape_string($conn,$_POST['place']);
$caste=mysqli_real_escape_string($conn,$_POST['caste']);
$subcaste=mysqli_real_escape_string($conn,$_POST['subcaste']);
$castecat=mysqli_real_escape_string($conn,$_POST['castecat']);
$nationality=mysqli_real_escape_string($conn,$_POST['nationality']);
$religion=mysqli_real_escape_string($conn,$_POST['religion']);

$file_path1=($_FILES)['castecert']['tmp_name']; 
$castecert=mysqli_real_escape_string($conn,file_get_contents($file_path1));
$file_path2=($_FILES)['idproof']['tmp_name']; 
$idproof=mysqli_real_escape_string($conn,file_get_contents($file_path2));
$file_path4=($_FILES)['photograph']['tmp_name']; 
$photograph=mysqli_real_escape_string($conn,file_get_contents($file_path2));
$file_path5=($_FILES)['thumb']['tmp_name']; 
$thumb=mysqli_real_escape_string($conn,file_get_contents($file_path5));
$file_path3=($_FILES)['discert']['tmp_name']; 
$discert=mysqli_real_escape_string($conn,file_get_contents($file_path5));

$joindate=mysqli_real_escape_string($conn,$_POST['joindate']);
$appcat=mysqli_real_escape_string($conn,$_POST['appcat']);
$apptype=mysqli_real_escape_string($conn,$_POST['apptype']);
$program=mysqli_real_escape_string($conn,$_POST['program']);
$factype=mysqli_real_escape_string($conn,$_POST['factype']);
$designation=mysqli_real_escape_string($conn,$_POST['designation']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);
$deptcode=mysqli_real_escape_string($conn,$_POST['deptcode']);
$collegecode=mysqli_real_escape_string($conn,$_POST['collegecode']);
$stafftype=mysqli_real_escape_string($conn,$_POST['stafftype']);
$visit=mysqli_real_escape_string($conn,$_POST['visit']);
$teaching=mysqli_real_escape_string($conn,$_POST['teaching']);
$research=mysqli_real_escape_string($conn,$_POST['research']);
$industrial=mysqli_real_escape_string($conn,$_POST['industrial']);

$count_query=mysqli_query($conn,"SELECT count(*) as total from `personal_details`");
$count=mysqli_fetch_assoc($count_query);

$count1=$count['total']+1;
$username= mysqli_real_escape_string($conn,$_SESSION['user']);
//echo $_SESSION['user'];
$query = "INSERT INTO `personal_details` (`fname`, `mname`, `lname`, `sname`, `aicte`, `cardno`,`cardcode`,`father`, `mother`,`gender`,`address`,`city`,`district`,`state`,`pcode`,`address1`,`city1`,`district1`
,`state1`,`pcode1`,`residence`,`mob1`,`mob2`,`email1`,`email2`,`bloodgroup`,`dob`,`place`,`caste`,`subcaste`,`dis`,`nationality`, `religion`,`joindate`,`appcat`,`apptype`, `program`
,`factype`, `designation`, `dept`,`deptcode`,`collegecode`,`stafftype`,`visit`,`teaching`,`research`,`industrial`,`castecat`,`castecert`,`idproof`,`photograph`,`thumb`,`discert`,`username`) VALUES('$fname','$mname','$lname','$sname','$aicte'
,'$cardno', '$cardcode', '$father','$mother','$gender','$address','$city','$district','$state','$pcode',
'$address1','$city1','$district1','$state1','$pcode1','$residence','$mob1','$mob2','$email1','$email2','$bloodgroup'
,'$dob','$place','$caste','$subcaste','$dis', '$nationality', '$religion','$joindate','$appcat', '$apptype','$program'
,'$factype', '$designation','$dept','$deptcode','$collegecode','$stafftype','$visit','$teaching','$research','$industrial','$castecat','$castecert','$idproof','$photograph','$thumb','$discert','$username')";
		
		//echo $query;
		$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error());
		
		if($result){
			Print '<script>alert("Details Saved Successfully!");</script>'; //Prompts the user
			Print '<script>window.location.assign("bootform2.php");</script>';
		}
else
		{
			Print '<script>alert("Improper file upload");</script>'; //Prompts the user
			Print '<script>window.location.assign("bootform1.php");</script>'; // redirects to login.php
		}
} 




?>
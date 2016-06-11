<?php
define(DOC_ROOT,dirname(__FILE__)); // To properly get the config.php file
$roll_no = $_POST['roll_no']; //Set UserName
$msg ='';
if($roll_no != '') {
    ob_start();
    include(DOC_ROOT.'/config.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $roll_no = stripslashes($roll_no);
    $roll_no = mysqli_real_escape_string($dbC, $roll_no);
    $sql="SELECT * FROM login_admin WHERE roll_no='$roll_no'";
    $result=mysqli_query($dbC, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $roll_no, table row must be 1 row
    if($count==1){
        // Register $roll_no and redirect to file "admin.php"
        session_start();
        $_SESSION['roll_no']= $roll_no;
        $followingData = $result->fetch_assoc();
        $_SESSION['branch'] = $followingData["branch"];
        $abc = $followingData["branch"];
        $sql2 = "SELECT * FROM branch_detail WHERE branch='$abc'";
        $nextResult = mysqli_query($dbC, $sql2);
        $nextData = $nextResult->fetch_assoc();
        $_SESSION['IC'] = $nextData["IC"];
        $_SESSION['DC'] = $nextData["DC"];
        $_SESSION['DE'] = $nextData["DE"];
        $_SESSION['OE'] = $nextData["OE"];
        $_SESSION['SO_ESO'] = $nextData["SO_ESO"];
        $_SESSION['HSS_I'] = $nextData["HSS_I"];
        $_SESSION['HSS_II'] = $nextData["HSS_II"];
        $_SESSION['TOTAL'] = $nextData["TOTAL"];
        header("location:admin.php");
    }
    else {
        $msg = "Invalid Roll No. . Please retry";
        header("location:login.php?msg=$msg");
    }
    ob_end_flush();
}
else {
  echo "Stupid OAF";
    // header("location:login.php?msg=Please enter some roll no. .");
}
?>

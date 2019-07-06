<?php
session_start();
if(isset($_SESSION['password'])){
    $number=check();
    ?>
    <table align="center">
    <tr><td><h1>Thank You</h1></td></tr>
    <tr><td><h1><?php insert($number); ?></h1></td></tr>
    <tr><td><a href="welcome.php">Logout</a></td></tr>
    </table>
    <?php
}else{
    header('location:index.php');
}
 
function check(){
    $number=0;
    if($_SESSION['question1']=="7.2"){
      $number=$number+1;
    }
    
    if($_SESSION['question2']=="720"){
        $number=$number+1;
      }
      
    if($_SESSION['question3']=="50"){
        $number=$number+1;
      }
      
    if($_SESSION['question4']=="120"){
        $number=$number+1;
      }
      
    if($_SESSION['question5']=="10"){
        $number=$number+1;
      }
      return $number;
}

function insert($number){
    $loginid=$_SESSION['loginid'];
    $password=$_SESSION['password'];
    include('operation.php');
    $logic=new logic();
    $query="UPDATE `data` SET `Number`='$number' WHERE LoginId='$loginid' AND Password='$password'";
    $run=$logic->insert($query);
    if($run){
        echo "Anwser Submitted";
    }
}
?>
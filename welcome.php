<?php
session_start(); 
if(isset($_SESSION['password'])) {
    welcome();
}else {
header('location:index.php');
}

function welcome(){
    $loginid=$_SESSION['loginid'];
    include('operation.php');
    $logic=new logic();
    $query="SELECT * FROM `data` WHERE LoginId='$loginid'";
    $data=$logic->select($query);
    ?>
    <form method="POST">
    <table>
    <tr><td>Name: <?php echo $data['Name'];?> </td></tr>
    <tr><td>DOB: <?php echo $data['DOB'];?></td></tr>
    <tr><td>Address: <?php echo $data['Address'];?></td></tr>
    <tr><td>Education: <?php echo $data['Education'];?></td></tr>
    <tr><td><input type="submit" name="start" value="start test"></td><td><input type="submit" name="logout" value="logout"></td></tr>
    </table>
    </form>
    <?php
    if(isset($_POST['start'])){
      header('location:questions.php');
    }
    if(isset($_POST['logout'])){
     session_destroy();
     header('location:index.php');
    }
}
?>
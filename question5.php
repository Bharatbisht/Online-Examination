<?php
session_start();
   if(isset($_SESSION['password'])){
    question4();
   }
    //second question

    function question4(){
        ?>
         <form method="POST">
          <table>
              <tr><td><h3>5. 	
Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?</h3></td></tr>
            <tr><td><input type="radio" name="anwser" value="9">  A. 9</td></tr>
            <tr><td><input type="radio" name="anwser" value="10">  B. 10</td></tr>
            <tr><td><input type="radio" name="anwser" value="12">  C. 12</td></tr>
            <tr><td><input type="radio" name="anwser" value="20">  D. 20</td></tr>
            <tr><td><?php anwser();?></td></tr>
            <tr><td align="left"><input type="submit" name="back" value="back"></td>
            <td align="center"><input type="submit" name="ques5" value="next"></td>
            <td align="right"><input type="submit" name="skip" value="skip"></td></tr>
          </table>
        </form>
   <?php
      if(isset($_POST['ques5'])){
             $ques5=$_POST['anwser'];
             $_SESSION['question5']=$ques5;
             header('location:save.php');
       }

       if(isset($_POST['skip'])){
        $_SESSION['question5']=0;
           header('location:save.php');
        }

        if(isset($_POST['back'])){
            header('location:question4.php');
        }
   }

   function anwser(){
    if(isset($_SESSION['question5'])){
        if($_SESSION['question5']!=0){
           $anwser= $_SESSION['question5'];
            echo "your awnser is $anwser";
        }
    }
}
?>
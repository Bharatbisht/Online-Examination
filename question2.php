<?php
session_start();
   if(isset($_SESSION['password'])){
    question2();
   }
    //second question

    function question2(){
        ?>
         <form method="POST">
          <table>
              <tr><td><h3>2.An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of:
   
   </h3></td></tr>
            <tr><td><input type="radio" name="anwser" value="300">  A. 300 kmph</td></tr>
            <tr><td><input type="radio" name="anwser" value="360">  B. 360 kmph</td></tr>
            <tr><td><input type="radio" name="anwser" value="600">  C. 600 kmph</td></tr>
            <tr><td><input type="radio" name="anwser" value="720">  D. 720 kmph</td></tr>
            <tr><td><?php anwser();?></td></tr>
            <tr><td align="left"><input type="submit" name="back" value="back"></td>
            <td align="center"><input type="submit" name="ques2" value="next"></td>
            <td align="right"><input type="submit" name="skip" value="skip"></td></tr>
          </table>
        </form>
   <?php
      if(isset($_POST['ques2'])){
        $ques2=$_POST['anwser'];
            $_SESSION['question2']=$ques2;
            header('location:question3');
       }

       if(isset($_POST['skip'])){
        $_SESSION['question2']=0;
           header('location:question3');
        }

        if(isset($_POST['back'])){
            header('location:questions.php');
        }
   }

   function anwser(){
    if(isset($_SESSION['question2'])){
        if($_SESSION['question2']!=0){
           $anwser= $_SESSION['question2'];
            echo "your awnser is $anwser";
        }
    }
}
?>
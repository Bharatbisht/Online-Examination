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
              <tr><td><h3>4. 	
A train can travel 50% faster than a car. Both start from point A at the same time and reach point B 75 kms away from A at the same time. On the way, however, the train lost about 12.5 minutes while stopping at the stations. The speed of the car is:
</h3></td></tr>
            <tr><td><input type="radio" name="anwser" value="100">  A. 100 kmph</td></tr>
            <tr><td><input type="radio" name="anwser" value="110">  B. 110 kmph</td></tr>
            <tr><td><input type="radio" name="anwser" value="120">  C. 120 kmph</td></tr>
            <tr><td><input type="radio" name="anwser" value="130">  D. 130 kmph</td></tr>
            <tr><td><?php anwser();?></td></tr>
            <tr><td align="left"><input type="submit" name="back" value="back"></td>
            <td align="center"><input type="submit" name="ques4" value="next"></td>
            <td align="right"><input type="submit" name="skip" value="skip"></td></tr>
          </table>
        </form>
   <?php
      if(isset($_POST['ques4'])){
          $ques4=$_POST['anwser'];
          $_SESSION['question4']=$ques4;
            header('location:question5');
       }

       if(isset($_POST['skip'])){
        $_SESSION['question4']=0;
           header('location:question5');
        }

        if(isset($_POST['back'])){
            header('location:question3.php');
        }
   }

   function anwser(){
    if(isset($_SESSION['question4'])){
        if($_SESSION['question4']!=0){
           $anwser= $_SESSION['question4'];
            echo "your awnser is $anwser";
        }
    }
}
?>
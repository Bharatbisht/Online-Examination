<?php
session_start();
   if(isset($_SESSION['password'])){
    question3();
   }
    //second question

    function question3(){
        ?>
         <form method="POST">
          <table>
              <tr><td><h3>3. 	
If a person walks at 14 km/hr instead of 10 km/hr, he would have walked 20 km more. The actual distance travelled by him is:

</h3></td></tr>
            <tr><td><input type="radio" name="anwser" value="50">  A. 50 km</td></tr>
            <tr><td><input type="radio" name="anwser" value="56">  B. 56 km</td></tr>
            <tr><td><input type="radio" name="anwser" value="70">  C. 70 km</td></tr>
            <tr><td><input type="radio" name="anwser" value="80">  D. 80 km</td></tr>
            <tr><td><?php anwser();?></td></tr>
            <tr><td align="left"><input type="submit" name="back" value="back"></td>
            <td align="center"><input type="submit" name="ques3" value="next"></td>
            <td align="right"><input type="submit" name="skip" value="skip"></td></tr>
          </table>
        </form>
   <?php
      if(isset($_POST['ques3'])){
         $ques3=$_POST['anwser'];
            $_SESSION['question3']=$ques3;
            header('location:question4');
       }

       if(isset($_POST['skip'])){
        $_SESSION['question3']=0;
           header('location:question4');
        }

        if(isset($_POST['back'])){
            header('location:question3.php');
        }
   }

   function anwser(){
    if(isset($_SESSION['question3'])){
        if($_SESSION['question3']!=0){
           $anwser= $_SESSION['question3'];
            echo "your awnser is $anwser";
        }
    }
}
?>
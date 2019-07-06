<?php
    session_start();
     if(isset($_SESSION['password'])) {
       question();
    }
    //first question
function question() {
?>
     <form method="POST">
       <table>
           <tr><td><h3>1. 	
            A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?</h3></td></tr>
         <tr><td><input type="radio" name="anwser" value="3.6">  A. 3.6</td></tr>
         <tr><td><input type="radio" name="anwser" value="7.2">  B. 7.2</td></tr>
         <tr><td><input type="radio" name="anwser" value="8.4">  C. 8.4</td></tr>
         <tr><td><input type="radio" name="anwser" value="10">  D. 10</td></tr>
         <tr><td><?php anwser();?></td></tr>
         <tr><td align="center"><input type="submit" name="ques1" value="next"></td><td align="right"><input type="submit" name="skip" value="skip"></td></tr>
       </table>
     </form>
<?php
   if(isset($_POST['ques1'])){   
     $ques1=$_POST['anwser'];
          $_SESSION['question1']=$ques1;
          header('location:question2.php');
    }
       if(isset($_POST['skip'])){
        $_SESSION['question1']=0;
           header('location:question2.php');
        }
}

function anwser(){
    if(isset($_SESSION['question1'])){
        if($_SESSION['question1']!=0){
           $anwser= $_SESSION['question1'];
            echo "your awnser is $anwser";
        }
    }
}
?>
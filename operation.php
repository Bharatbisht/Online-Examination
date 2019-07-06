<?php
class logic{
   
          function select($query){
       $con=mysqli_connect("localhost","root","","examination");
        if($con){
          $run = mysqli_query($con,$query);
          $data = mysqli_fetch_assoc($run);
          return $data;
        }
    }
    function insert($query){
      $con=mysqli_connect("localhost","root","","examination");
      if($con){
        $run=mysqli_query($con,$query);
        return $run;
      }
    }

}
?>
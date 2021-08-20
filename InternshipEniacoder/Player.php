<?php

   include_once 'DatabaseUtilities.php';
   $connection = DatabaseUtilities::getConnection();
   $name = $_POST['name'];
   if(empty($name))
      echo "<script> alert('Please add player name. Field cannot be empty!!');
               window.location='AddPlayer.php';
            </script>";
   else{         
   $sql = "INSERT INTO players(`name`, `score`) VALUES ('$name',' ')";
   $query=mysqli_query($connection,$sql);
   if($query){
    echo "<script> alert('Player added successfully');
                    window.location='AddPlayer.php';
          </script>";
   }       
   
}

?>
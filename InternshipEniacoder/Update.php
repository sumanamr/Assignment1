<?php 
    include_once 'DatabaseUtilities.php';

    $connection = DatabaseUtilities::getConnection();
    
    $id = $_POST['id'];
    $newScore = $_POST['newscore'.$id];
    $query = "UPDATE players set score = $newScore where id=$id";
    mysqli_query($connection,$query);

    include_once 'UpdateScore.php';

    if($query){
        echo "<script> alert('Updated score Successfully!!');
                        window.location='UpdateScore.php';
                </script>";
        
    } 
?>    
    
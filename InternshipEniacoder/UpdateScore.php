<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
   require_once 'UpdateHelper.php';
   $updateHelper = new UpdateHelper();
?>

<body class = "update">
    <?php 
  
     include 'header.php';
    include_once 'DatabaseUtilities.php';

    $connection = DatabaseUtilities::getConnection();
    $sql = "select * from players";
    $resultSet = $connection->query($sql);
    ?>

    <br>    
    <br>    
    <br>    

    <div class="container">
    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
        <thead>
          <tr>
            <th scope="col" class="center" >Name</th>
            <th scope="col" class="center">Score</th>
          </tr>
        </thead>

        <tbody>
        <?php 
         if($resultSet->num_rows > 0)
         while($row = $resultSet->fetch_assoc())
         { ?>
        
          <form method = "post" action="Update.php">
            <tr scope = "row">
              <td><?php echo $row['name']; ?></td>
              <td><input type ="text" name="newscore<?php echo $row['id'];?>" /> </td>
              <input type="hidden" value="<?=$row['id'] ?>" name="id" />
              <td><button type="submit" class="btn btn-primary">Update</button></a></td> 
            </tr>  
          </form>
        <?php 
         }  ?>    
        </tbody>
      </table>
    </div>
</body>
</html>
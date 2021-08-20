<html>
    <head>
    <link rel ="stylesheet" href = "style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="addPlayer">
<?php 
     include 'header.php'
     ?>
    <form name ="addPlayer" method="post" action = "Player.php">
    <br>
    <h1>ADD PLAYER</h1>
    <br><br>
    Player name :
    <input type="text" size = "20" name="name"/>
    <br>
    <br>
    <button class="btn btn-primary">Submit</button>
</form>
</body>
</html>
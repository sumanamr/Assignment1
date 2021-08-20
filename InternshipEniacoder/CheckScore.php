<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <meta http-equiv="refresh" content="1"> -->
    
</head>

<body class="check">
<?php 
     include 'header.php'
     ?>

    <br>
	<div class="container">
        <h2 class="text-center pt-3">SCORE BOARD</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Score</th>
            </tr>
        </thead>
        <tbody id="scores">
       
        </tbody>
    </table>

    </div>
</div>
<script>
    const scores = document.getElementById('scores');
    
    function mounter() {
        var content = ''
        fetch('./scores.php').then(res => res.json()).then(data => {
    
            data.forEach((score, index) => {
                content += `
                    <tr>
                        <td>${score.name}</td>                
                        <td>${score.score}</td>                
                    </tr>
                `
            })
    
            scores.innerHTML = content;
        });

    }

    setInterval(mounter, 1000);
</script>
</body>
</html>
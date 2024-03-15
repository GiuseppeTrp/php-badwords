<?php 
$user_text = $_GET['user-text'];
$censure_text = $_GET['censure-text'];
$lenght_user_text = strlen($user_text);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1>Result:</h1>

    <p>
        <span class="fw-bold">User Text:</span> <?php echo $user_text ?> <br>
        <span class="fw-bold">Censure Text:</span> <?php echo $censure_text ?> <br>
        <span class="fw-bold">Lenght User Text:</span> <?php echo $lenght_user_text ?> 
    </p>
</body>
</html>

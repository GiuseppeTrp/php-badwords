<?php 
$user_text = $_GET['user-text'];
$censure_text = $_GET['censure-text'];
$lenght_user_text = strlen($user_text);

// Censura la parola nel testo dell'utente
$user_text_censored = str_ireplace($censure_text, '***', $user_text);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Result</title>
</head>
<body class="bg-black">
    <div class="d-flex justify-content-center align-items-center flex-column p-5  m-5 bg-black text-warning border rounded">
        <div class=" border rounded p-5">
            <h1>Result:</h1>

            <p>
                <span class="fw-bold ">User Text:</span> <?php echo $user_text_censored ?> <br>
                <span class="fw-bold">Censure Text:</span> <?php echo $censure_text ?> <br>
                <span class="fw-bold">Lenght User Text:</span> <?php echo $lenght_user_text ?> 
            </p>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

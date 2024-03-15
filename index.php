<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-0 m-auto fw-bold text-warning bg-black  rounded">
        <div class="container text-center p-0">
            <h1 class="fw-bold text-warning bg-black  rounded p-2">Andiamo a Censurare</h1>
        </div>
        <form action="basic-logic.php" method="get" class="fw-bold text-warning bg-dark  rounded">
            <div class="form-group">
                <div class="m-3 d-flex  justify-content-center p-3 ">
                    <div class="col-4 p-2">
                     <label for="paragraph" class="p-1">Testo:</label>

                     <textarea class="form-control" id="paragraph" name="paragraph" rows="5" required></textarea>


                    </div>


                </div>
            </div>
            <div class="form-group">
                <div class=" m-3  p-2 d-flex  justify-content-center ">
                    <div class="col-4 p-2 ">
                        <label for="word" class="p-1">Testo da censurare:</label>
                        <input type="text" class="form-control" id="word" name="word" required>
                    </div>
                </div> 
               
            </div>
            <div class="d-flex  justify-content-center p-4 fw-bold text-warning bg-black  rounded">
            <button type="submit" class="btn btn-primary ">Invia</button>

                
            </div>
        </form>
    </div>
    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

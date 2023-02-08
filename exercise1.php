
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Exercise 1</title>
</head>
<body>
    <main class="container">
        <form method="post">
            <div class="mb-3">
            Enter your name please
                <input type="text" class="form-control" name="name" required>
            </div>
            <input type="submit" value="Soumettre" name="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Retour</a>
        </form>
    </main>
</body>
</html>
 <?php
    if (isset($_POST['submit'])) {
      
        $name = $_POST['name'];

        echo "<h1><i>$name</i></h1>";
    }
?>